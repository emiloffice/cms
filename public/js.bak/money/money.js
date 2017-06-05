function showLogin() {
  FB.login(function(response) {
    if (response.authResponse) {
      // console.log('logged in');
    } else {
      //mixpanelTrack('first chance login canceled');
      try {
        embedGameSwf(null); // embed game swf anyway
      }  catch(err) {
        //mixpanelTrack('error embedding swf: ' + err.message);
      }
    }
  }, {scope: ''});
}

function displayFlashScreenshot() {
  // Move the Flash object off the screen and place the screenshot img
  $("#flashContent").css('top', '-10000px');
  $("#imageContent").css('top', '0');
}

function hideFlashScreenshot() {
  // Move the screenshot img off the screen and place the Flash object
  $("#flashContent").css('top', '0');
  $("#imageContent").css('top', '-10000px');
}

function onFlashHide(info) {
  if(info.state == 'opened') {
    displayFlashScreenshot();
  } else {
    hideFlashScreenshot();
  }
}

/**
 * Returns the user's first name, last name and country code to swf, used for posting high scores
 */
function getFbUserInfo() {
  $("#SimpleSwf")[0].returnFbUserInfo(window.dm2048FirstName, window.dm2048LastName, window.dm2048TestGroup);
}

function secondChanceLogin() {
  // mixpanelTrack("clicked FB login button");
  FB.login(function(response) {
    if (response.authResponse) {
      $("#SimpleSwf")[0].authWithFbid(response.authResponse.userID, response.authResponse.accessToken);
      // mixpanelTrack("accepted second chance login");
    } else {
      // mixpanelTrack('second chance login canceled');
    }
  }, {scope: ''});
}

/**
 * Share new high score using facebook scores API
 */
function doShareScoresApi(numPoints) {
  // share score using facebook scores api
  FB.api('/me/scores', 'post', {score: numPoints}, function(response) {
    // console.log('scores api: ' + response);
  });
}

/**
 * Share new achievement using facebook achievements API
 */
function doShareAchievementsApi(achievementUrl) {
  FB.api('/me/achievements', 'post', {achievement: achievementUrl}, function(response) {
    // console.log(response);
  });
}

/**
 * Share stories to facebook open graph
 */
function doShareOpenGraphEmptySafe() {
  var objectUrl = "http://piano-prod.elasticbeanstalk.com/money/ogsafe/";
  FB.api('/me/moneytiles:empty', 'post', {safe: objectUrl}, function(response) {
    console.log(response);
  });
}
function doShareOpenGraphMakeMillion(amount) {
  var objectUrl = "http://piano-prod.elasticbeanstalk.com/money/ogmillion/" + amount;
  FB.api('/me/moneytiles:make', 'post', {million: objectUrl}, function(response) {
    console.log(response);
  });
}
function doShareOpenGraphPlayPiano() {
  var objectUrl = "http://piano-prod.elasticbeanstalk.com/money/ogpiano/";
  FB.api('/me/moneytiles:play', 'post', {piano_tiles: objectUrl}, function(response) {
    console.log(response);
  });
}
function doShareOpenGraphImproveSkill(skill) {
  var objectUrl = "http://piano-prod.elasticbeanstalk.com/money/ogskill/" + skill;
  FB.api('/me/moneytiles:improve', 'post', {skill: objectUrl}, function(response) {
    console.log(response);
  });
}

// Permissions that are needed for the app
var permsNeeded = [''];

function checkPermissions() {
  console.log('checking permissions');
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
      console.log(response);
    }, {scope: perms.join(',')});
};

function initAnalytics(fbid, buildVersion) {
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

  window.dm2048BuildVersion = buildVersion;

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

  FB.ui({method: 'apprequests',
    message: "Think you can become a Billionaire?"
  }, function(response) {
    if (response != null && response.to != null) {
      var recipients = response.to;
      var inviteCount = 0;
      for (var i = 0; i < recipients.length; i++) {
        inviteCount++;
      }
      mixpanelTrack('invited friends', inviteCount);
    } else {
      mixpanelTrack('closed requests dialog without inviting friends');
    }
  });
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
  var obj = {
    method: 'feed',
    link: "apps.facebook.com/loveofmoney",
    picture: "http://raiderbear-6a1.kxcdn.com/piano/images/og_keys_1500.jpg",
    name: msg,
    caption: "Become a Billionaire!",
    actions: [
      {'name': 'Make Money Now!', 'link': 'https://apps.facebook.com/loveofmoney'}
    ]
  };

  function callback(response) {
    console.log(response);
  }

  FB.ui(obj, callback);
}

/**
 * Render the facebook purchase dialog
 */
function displayPurchase(productUrl) {
  console.log("opening purchase dialog");
  FB.ui({
    method: 'pay',
    action: 'purchaseitem',
    product: productUrl
    // test_currency: 'EUR'
    // request_id: 'YOUR_REQUEST_ID' // optional, must be unique for each payment
  }, function(response) {
    if (response.status == 'failed') {
        console.log("purchase failed")
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
      "build": window.dm2048BuildVersion,
      "gender": varGender,
      "os_major": varBrowser,
      "os_minor": varFPversion
    };
    gaTrack("user", message);
  } catch(err) {
    console.log("GA track user error: " + err.message);
  }
}

function gaTrackDesign(eventName, eventValue) {
  // console.log('tracking design event: ' + eventName + ' eventValue: ' + eventValue);
  try {
    eventValue = typeof eventValue !== 'undefined' ? eventValue : -1;
    if (window.dm2048Fbid == undefined) {
      return;
    }

    var message = {
      "user_id": window.dm2048Fbid,
      "session_id": window.dm2048GaSession,
      "build": window.dm2048BuildVersion,
      "event_id": eventName,
      "value": eventValue
    };
    gaTrack("design", message);
    console.log('tracking design event: ' + eventName + ' eventValue: ' + eventValue);
  } catch(err) {
    console.log("GA track error error: " + err.message);
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
      "build": window.dm2048BuildVersion,
      "event_id": eventName,
      "currency" : currency,
      "amount" : amount
    };
    gaTrack("business", message);
  } catch(err) {
    console.log("GA track error error: " + err.message);
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
      "build": window.dm2048BuildVersion,
      "message": varMessage,
      "severity": severity
    };
    gaTrack("error", message);
  } catch(err) {
    console.log("GA track error error: " + err.message);
  }
}

function gaTrack(category, message) {
  var game_key = '5e15d72ac5c968a465b331190dca28a9';
  var secret_key = '8f6b41afded1380732a5739084e83592ccf6a15c';
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
      console.log("GA success: " + textStatus);
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      console.log("GA error: " + errorThrown + ", url: " + url);
    }
  });
}

function generateGaSession() {
  try {
    window.dm2048GaSession = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
      var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
      return v.toString(16);
    });
  } catch(err) {
    console.log("error generating uuid: " + err.message);
  }
}
