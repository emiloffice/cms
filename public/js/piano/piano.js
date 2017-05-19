function showLogin() {
  FB.login(function(response) {
    if (response.authResponse) {
      // console.log('logged in');
    } else {
      mixpanelTrack('first chance login canceled');
      try {
        embedGameSwf(window.dm2048SwfVersionA, null); // embed game swf anyway
      }  catch(err) {
        mixpanelTrack('error embedding swf: ' + err.message);
      }
    }
  }, {scope: 'user_friends,publish_actions'});
}

function displayFlashScreenshot() {
  // Move the Flash object off the screen and place the screenshot img
  $("#flashContent").css('top', '-10000px');
  $("#imageContent").css('top', '42px');
}

function hideFlashScreenshot() {
  // Move the screenshot img off the screen and place the Flash object
  $("#flashContent").css('top', '0');
  $("#imageContent").css('top', '-10000px');
}

function onFlashHide(info) {
  try {
    if(info.state == 'opened') {
      displayFlashScreenshot();
    } else {
      hideFlashScreenshot();
    }
  } catch(err) {
    Airbrake.push(err);
  }
}

/**
 * Returns the user's first name, last name and country code to swf, used for posting high scores
 */
function getFbUserInfo() {
  try {
    $("#SimpleSwf")[0].returnFbUserInfo(window.dm2048FirstName, window.dm2048LastName, window.dm2048TestGroup, window.dm2048ThirdPartyId);
  } catch(err) {
    Airbrake.push(err);
  }
}

function secondChanceLogin() {
  try {
    mixpanelTrack("clicked FB login button");
    FB.login(function(response) {
      if (response.authResponse) {
        $("#SimpleSwf")[0].authWithFbid(response.authResponse.userID, response.authResponse.accessToken);
        mixpanelTrack("accepted second chance login");
      } else {
        mixpanelTrack('second chance login canceled');
      }
    }, {scope: 'user_friends,publish_actions'});
  } catch(err) {
    Airbrake.push(err);
  }
}

/**
 * Share new high score using facebook scores API
 */
function doShareScoresApi(numPoints) {
  try {
    // share score using facebook scores api
    // FB.api('/me/scores', 'post', {score: numPoints}, function(response) {
    //   // console.log('scores api: ' + response);
    // });
  } catch(err) {
    Airbrake.push(err);
  }
}

/**
 * Share new achievement using facebook achievements API
 */
function doShareAchievementsApi(achievementUrl) {
  try {
    FB.api('/me/achievements', 'post', {achievement: achievementUrl}, function(response) {
      // console.log(response);
    });
  } catch(err) {
    Airbrake.push(err);
  }
}

/**
 * Share stories to facebook open graph
 */
function doShareOpenGraphScorePoint(valuePoints, valueMode) {
  try {
    var objectUrl = "http://piano-prod.elasticbeanstalk.com/piano/ogpoint/" + valuePoints + "?mode=" + valueMode;
    FB.api('/me/piano_tiles:score', 'post', {point: objectUrl}, function(response) {
      // console.log(response);
    });
  } catch(err) {
    Airbrake.push(err);
  }
}
function doShareOpenGraphFailGame(valueMode) {
  var objectUrl = "http://piano-prod.elasticbeanstalk.com/piano/oggame/" + valueMode;
  FB.api('/me/piano_tiles:fail', 'post', {game: objectUrl}, function(response) {
    // console.log(response);
  });
}
// function doShareOpengraphScore(fbid, numPoints) {
//   // share open graph story
//   $.ajax({
//     url: "//www.raiderbear.com/demo/ogpost/score/" + numPoints + "?fbid=" + fbid
//   }).done(function (response, textStatus, jqXHR) {
//     if (textStatus != "success") { // was not really a success
//       if (window.flappyOgError == undefined) { // only track this event once per play session
//         mixpanelTrack("post action failure: " + textStatus);
//         window.flappyOgError = true;
//       }
//     }
//   }).fail(function (jqXHR, textStatus, errorThrown) {
//     if (window.flappyOgError == undefined) {
//       mixpanelTrack("post action failure: " + errorThrown);
//       window.flappyOgError = true;
//     }
//   });
// }

// Permissions that are needed for the app
var permsNeeded = ['user_friends', 'publish_actions'];

function checkPermissions() {
  // console.log('checking permissions');
  FB.api('/me?fields=permissions,third_party_id,first_name,last_name,gender,test_group', function(response) {
    // check permissions
    var permsArray = response.permissions.data[0];
    var permsToPrompt = [];
    for (var i in permsNeeded) {
      if (permsArray[permsNeeded[i]] == null) {
        permsToPrompt.push(permsNeeded[i]);
      }
    }
    
    if (permsToPrompt.length > 0) {
      promptForPerms(permsToPrompt);
    }
    // init applifier with third party id
    // ffInitApplifier(response.third_party_id);

    // store player name and gender
    window.dm2048FirstName = response.first_name;
    window.dm2048LastName = response.last_name;
    window.dm2048Gender = response.gender;
    window.dm2048Fbid = response.id;
    window.dm2048TestGroup = response.test_group;
    window.dm2048ThirdPartyId = response.third_party_id;
    // gaTrackDesign("document ready");
  });
}

var ffInitApplifier = function(fbTpId) {
  window.applifierAsyncInit = function() {
    Applifier.init({applicationId: 2804, thirdPartyId: fbTpId});
    var bar = new Applifier.Bar({barType: "bar", barContainer: "#applifier_bar"});
  };

  var a = document.createElement('script'); a.type = 'text/javascript'; a.async = true;
  a.src = (('https:' == document.location.protocol) ? 'https://secure' : 'http://cdn') + '.applifier.com/applifier.min.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(a, s);
};

// Re-prompt user for missing permissions
var promptForPerms = function(perms) {
    FB.login(function(response) {
      // console.log(response);
    }, {scope: perms.join(',')});
};

function initAnalytics(fbid) {
  // find browser and flash player versions
  var fpVersionString = "";
  var browserVersion = "";
  try {
    var playerVersion = swfobject.getFlashPlayerVersion(); // returns a JavaScript object
    fpVersionString = playerVersion.major + "." + playerVersion.minor + "." + playerVersion.release;
    browserVersion = navigator.userAgent;
  }  catch(err) {
    // mixpanelTrack('error finding versions: ' + err.message);
  }

  // init gameanalytics
  generateGaSession();
  gaTrackUser(fbid, browserVersion, fpVersionString);
}

/**
 * Open the requests dialog to let the user invite friends to the game
 */
function inviteFriends() {
  // FB.api(
  //   "/me/invitable_friends",
  //   function (response) {
  //     if (response && !response.error) {
  //       /* handle the result */
  //     }
  //   }
  // );

  try {
    FB.ui({method: 'apprequests',
      message: "Don't Step the White Tile, on your computer!"
    }, function(response) {
      if (response != null && response.to != null) {
        var recipients = response.to;
        var inviteCount = 0;
        for (var i = 0; i < recipients.length; i++) {
          inviteCount++;
        }
        mixpanelTrack('invited ' + inviteCount + ' friends');
      } else {
        mixpanelTrack('closed requests dialog without inviting friends');
      }
    });
  } catch(err) {
    Airbrake.push(err);
  }
}

/**
 * Mark as played game successfully in analytics
 */
// function setPlayGameSuccess(score) {
  // if (typeof _kmq !== 'undefined') {
  //   _kmq.push(['record', 'played game successfully']);
  // }
  // if (typeof mixpanel !== 'undefined') {
  //   mixpanel.track('played game successfully');
  //   mixpanel.people.set( {"played successfully":"true"} );
  // }
  // gaTrackDesign("played game successfully", score);
  // console.log("played successfully, score: " + score);
// }

/**
 * Open the Facebook feed dialog to allow user to share a message to stream
 */
function shareScoreUsingFbui(msg) {
  try {
    var obj = {
      method: 'feed',
      link: "apps.facebook.com/piano_tiles",
      picture: "http://raiderbear-6a1.kxcdn.com/piano/images/og_keys_1500.jpg",
      name: msg,
      caption: "Play Piano Tiles on your Keyboard",
      actions: [
        {'name': 'Play Piano Tiles!', 'link': 'https://apps.facebook.com/piano_tiles'}
      ]
    };

    function callback(response) {
      // console.log(response);
    }

    FB.ui(obj, callback);
  } catch(err) {
    Airbrake.push(err);
  }
}

/**
 * Render the facebook purchase dialog to buy an IAP
 */
function displayPurchase(productUrl) {
  try {
    // console.log("opening purchase dialog");
    FB.ui({
      method: 'pay',
      action: 'purchaseitem',
      product: productUrl
      // test_currency: 'EUR'
      // request_id: 'YOUR_REQUEST_ID' // optional, must be unique for each payment
    }, function(response) {
      if (response.status == 'failed') {
          // console.log("purchase failed")
      }
      else if (response.status == 'completed') {
          var signedRequest = response.signed_request;
          var paymentId = response.payment_id;
          $("#SimpleSwf")[0].returnPurchaseStatusToAs('completed', signedRequest, paymentId);
      }
      else if (response.status == 'initiated') {
          var signedRequest = response.signed_request;
          var paymentId = response.payment_id;
          $("#SimpleSwf")[0].returnPurchaseStatusToAs('initiated', signedRequest, paymentId);
      }
    });
  } catch(err) {
    Airbrake.push(err);
  }
}

/**
 * Use the facebook payment dialog to purchase a subscription
 */
function displaySubscribe(productUrl) {
  try {
    FB.ui({
      method: 'pay',
      action: 'create_subscription',
      product: productUrl
    }, function(response) {
      if (response.status == 'active') {
          var signedRequest = response.signed_request;
          var subId = response.subscription_id;
          $("#SimpleSwf")[0].returnPurchaseStatusToAs('sub_active', signedRequest, subId);
      }
      else {
          var errCode = response.error_code;
          var errMsg = response.error_message;
          $("#SimpleSwf")[0].returnPurchaseStatusToAs('sub_fail', signedRequest, errCode + ': ' + errMsg);
      }
    });
  } catch(err) {
    Airbrake.push(err);
  }
}

/**
 * Open the requests dialog to let the user select friends to ask for a life
 */
// function selectFriendsForLife() {
//     FB.ui({method: 'apprequests',
//       message: "I'm out of energy, can you send me one?",
//       title: "These friends can help get you extra energy!",
//       data: "lifeplease",
//       filters: ["app_users"]
//     }, function(response) {
//     if (response != null && response.to != null) {
//       var recipients = response.to;
//       var inviteCount = 0;
//       for (var i = 0; i < recipients.length; i++) {
//         inviteCount++;
//       }
//       mixpanelTrack('asked ' + inviteCount + ' friends');
//     } else {
//       mixpanelTrack('closed requests dialog without asking friends');
//     }
//   });
// }

/**
 * Open the requests dialog to send life to friends
 */
// function helpFriends(fbids) {
//     FB.ui({method: 'apprequests',
//       message: "Here's some energy for you. Enjoy!",
//       title: "Help friends by sending them energy!",
//       data: "lifeforyou",
//       to: fbids
//     }, function(response) {
//     if (response != null && response.to != null) {
//       var recipients = response.to;
//       var inviteCount = 0;
//       for (var i = 0; i < recipients.length; i++) {
//         inviteCount++;
//       }
//       mixpanelTrack('helped ' + inviteCount + ' friends');
//     } else {
//       mixpanelTrack('closed requests dialog without helping friends');
//     }
//   });
// }

/**
 * Accept energy and return the favor
 */
// function acceptEnergy(fbids) {
//     FB.ui({method: 'apprequests',
//       message: "Here's some energy for you. Enjoy!",
//       title: "Help friends by sending them energy!",
//       data: "lifeforyou",
//       to: fbids
//     }, function(response) {
//     if (response != null && response.to != null) {
//       var recipients = response.to;
//       var inviteCount = 0;
//       for (var i = 0; i < recipients.length; i++) {
//         inviteCount++;
//       }
//       $("#SimpleSwf")[0].returnEnergyAcceptToAs(inviteCount);
//       mixpanelTrack('accepted help from ' + inviteCount + ' friends');
//     } else {
//       mixpanelTrack('closed requests dialog without accepting help from friends');
//     }
//   });
// }

// function processRequests() {
//   FB.api(
//     "/me/apprequests",
//     function (response) {
//       if (response && !response.error) {
//         console.log(response);
//         var energyRequests = new Array();
//         var energyReceipts = new Array();
//         var requests = response.data;
//         for (var i = 0; i < requests.length; i++) {
//           var request = requests[i];
//           var requestData = request.data;
//           if (requestData == "lifeforyou") { // received energy
//             energyReceipts.push(request.from);
//           }
//           else if (requestData == "lifeplease") { // someone asked me for energy
//             energyRequests.push(request.from);
//           }

//           // delete this request
//           var fullRequestId = request.id;
//           FB.api(
//             "/" + fullRequestId,
//             "DELETE",
//             function (response) {
//               if (response && !response.error) {
//                 console.log(response);
//               }
//             }
//           );
//         }
//         // return data to swf
//         $("#SimpleSwf")[0].returnRequestDataToAs(energyReceipts, energyRequests);
//       }
//     }
//   );
// }

function gaTrackUser(varFbid, varBrowser, varFPversion) {
  try {
    var varGender = "U";
    var message = {
      "user_id": varFbid,
      "session_id": window.dm2048GaSession,
      "build": window.dm2048SwfBuildVersion,
      "gender": varGender,
      "os_major": varBrowser,
      "os_minor": varFPversion
    };
    gaTrack("user", message);
  } catch(err) {
    Airbrake.push(err);
  }
}

function gaTrackDesign(eventName, eventValue) {
  // console.log('tracking design event: ' + eventName + ' eventValue: ' + eventValue);
  try {
    eventValue = typeof eventValue !== 'undefined' ? eventValue : 0;
    if (window.dm2048Fbid == undefined) {
      return;
    }

    var message = {
      "user_id": window.dm2048Fbid,
      "session_id": window.dm2048GaSession,
      "build": window.dm2048SwfBuildVersion,
      "event_id": eventName,
      "value": eventValue
    };
    gaTrack("design", message);
  } catch(err) {
    Airbrake.push(err);
  }
}

function gaTrackBusiness(eventName, currency, amount) {
  // console.log('tracking business event: ' + eventName + ' currency: ' + currency + ' amount: ' + amount);
  try {
    currency = typeof currency !== 'undefined' ? currency : "none";
    amount = typeof amount !== 'undefined' ? amount : 0;
    if (window.dm2048Fbid == undefined) {
      return;
    }

    var message = {
      "user_id": window.dm2048Fbid,
      "session_id": window.dm2048GaSession,
      "build": window.dm2048SwfBuildVersion,
      "event_id": eventName,
      "currency" : currency,
      "amount" : amount
    };
    gaTrack("business", message);
  } catch(err) {
    Airbrake.push(err);
  }
}

function gaTrackError(varMessage, severity) {
  // console.log('tracking debug event, session: ' + window.dm2048GaSession);
  try {
    severity = typeof severity !== 'undefined' ? severity : "info";
    if (window.dm2048Fbid == undefined) {
      return;
    }

    var message = {
      "user_id": window.dm2048Fbid,
      "session_id": window.dm2048GaSession,
      "build": window.dm2048SwfBuildVersion,
      "message": varMessage,
      "severity": severity
    };
    gaTrack("error", message);
  } catch(err) {
    Airbrake.push(err);
  }
}

function gaTrack(category, message) {
  try {
    var game_key = 'b6ba250033ddd08d59bb19162ffd5ca5';
    var secret_key = 'aa653b4c71b038215a6105d132d4a51f43eb0395';
    var json_message = JSON.stringify(message);
    var md5_msg = CryptoJS.MD5(json_message + secret_key);
    var header_auth_hex = CryptoJS.enc.Hex.stringify(md5_msg);
    var url = 'https://api-eu.gameanalytics.com/1/'+game_key+'/'+category;
    $.ajax({
      type: 'POST',
      url: url,
      data: json_message,
      headers: {
        "Authorization": header_auth_hex, 
      },
      beforeSend: function (xhr) {
        xhr.setRequestHeader('Content-Type', 'text/plain');
      },
      success: function(data, textStatus, XMLHttpRequest) {
        if (window.console) console.log("GA success: " + textStatus);
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        if (window.console) console.log("GA error: " + errorThrown + ", url: " + url);
      }
    });
  } catch(err) {
    Airbrake.push(err);
  }
}

function generateGaSession() {
  try {
    window.dm2048GaSession = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
      var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
      return v.toString(16);
    });
  } catch(err) {
    Airbrake.push(err);
  }
}

function trialpayDirectEarn() {
  TRIALPAY.fb.show_overlay("585528638221077",
                           "fbdirect",
                           {
                             tp_vendor_id: "NN7HJ8GGH",
                             callback_url: "http://rbtest.elasticbeanstalk.com/piano/tpcallback",
                             currency_url: "http://rbtest.elasticbeanstalk.com/piano/product/coin",
                             sid: window.dm2048ThirdPartyId,
                             order_info: window.dm2048Fbid
                           });
}

function googleTrackGameLoad() {
  try {
    ga('send', 'event', 'game', 'load');
    // console.log("tracking game load");
  } catch(err) {
    Airbrake.push(err);
  }
}

window.dm2048BrowserScrollAllow = true;
window.dm2048IsMac = false;
function registerEventListeners(inputIsMac) {
  if (window.addEventListener) {
    window.addEventListener('mousewheel', wheelHandler, true);
    window.addEventListener('DOMMouseScroll', wheelHandler, true);
    window.addEventListener('scroll', wheelHandler, true);
    window.dm2048IsMac = inputIsMac;
  }
  window.onmousewheel = wheelHandler;
  document.onmousewheel = wheelHandler;
}

function wheelHandler(event) {
  if (!window.dm2048BrowserScrollAllow) {
    var delta = deltaFilter(event);
    if (delta == undefined) {
      delta = event.detail;
    }
    if (!event) {
      event = window.event;
    }
    if (window.chrome || window.dm2048IsMac) {
      $("#SimpleSwf")[0].scrollHappened(delta);
    }
    if (event.preventDefault) {
      event.preventDefault();
    } else {
      event.returnValue = false;
    }
  }
}

function allowBrowserScroll(allow) {
  window.dm2048BrowserScrollAllow = allow;
}

function deltaFilter(event) {
  var delta = 0;
  if (event.wheelDelta) {
    delta = event.wheelDelta / 10;
    if (window.opera) delta = -delta;
  }
  else if (event.detail) {
    delta = -event.detail;
  }
  return delta;
}
