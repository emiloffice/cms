var YJIJ = new Object();

// custom functions

// Permissions that are needed for the app
var permsNeeded = ['publish_actions'];

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

    // store player name and gender
    window.SimpleFirstName = response.first_name;
    window.SimpleLastName = response.last_name;
    window.SimpleGender = response.gender;
    window.SimpleFbid = response.id;
    window.SimpleTestGroup = response.test_group;
  });
}

function showLogin() {
  FB.login(function(response) {
    if (response.authResponse) {
      // console.log('logged in');
    } else {
      mixpanelTrack('first chance login canceled');
      try {
        embedGameSwf(null); // embed game swf anyway
      }  catch(err) {
        mixpanelTrack('error embedding swf: ' + err.message);
      }
    }
  }, {scope: 'publish_actions'});
}

/**
 * Returns the user's fbid to the swf
 */
function getJumpFbid(fbid) {
    $("#SimpleSwf")[0].returnFbidToAs($('#footer').attr('data-fbid'), $('#footer').attr('data-env'));
}

function kissTrack(eventName) {
  // if ($('#footer').attr('data-env') != "dev" && typeof _kmq !== 'undefined') _kmq.push(['record', eventName]);
  // else (console.log("kms tracking: " + eventName));
  mixpanelTrack(eventName);
}

function mixpanelTrack(eventName, details) {
  if ($('#footer').attr('data-env') != "dev" && typeof mixpanel !== 'undefined') {
    if (!details) {
      mixpanel.track(eventName);
    } else {
      mixpanel.track(eventName, jQuery.parseJSON(details));
    }
  }
  else (console.log("mixpanel tracking: " + eventName + " details: " + details));
}

/**
 * Open the requests dialog to let the user select a Facebook friend to play with
 */
function selectOpponent() {
  // kissTrack("selecting opponent");
  mixpanelTrack("selecting opponent");
  // console.log('selecting opponent');
  FB.ui({method: 'apprequests',
    // message: "I challenge you to a game of You Jump I Jump! Accept with courage or decline in fear - it's up to you.",
    message: "Let's play a quick game of You Jump I Jump - Doodle Jump on steroids.",
    title: "Challenge them to a match!",
    max_recipients: 1
  }, selectOpponentCallback);
}

/**
 * Return the fbid of the selected friend to the swf
 */
function selectOpponentCallback(response)
{   
  // kissTrack("select opponent callback");
  mixpanelTrack("select opponent callback");
  // console.log('select opponent callback');
  if (response != null && response.to != null) {
    // kissTrack("opponent selected");
    mixpanelTrack("opponent selected");
    // console.log("opponent selected");
    var recipients = response.to;
    $("#SimpleSwf")[0].returnOpponentToAs(recipients[0]);
  } else {
    // kissTrack("did not select opponent");
    mixpanelTrack("did not select opponent");
    // console.log("did not select opponent");
  }
}

/**
 * Open the requests dialog to let the user select friends to ask for a life
 */
function selectFriendsForLife() {
    // console.log('opening requests dialog');
    FB.ui({method: 'apprequests',
      message: "I'm out of lives, can you please send me one?",
      title: "These friends can help get you an extra life!",
      data: "lifeplease"
    }, selectFriendsForLifeCallback);
}

/**
 * Return the fbid of the selected friends to the swf
 */
function selectFriendsForLifeCallback(response)
{
    if (response != null && response.to != null) {
      var recipients = response.to;
      var inviteCount = 0;
      for (var i = 0; i < recipients.length; i++) {
        inviteCount++;
      }
      $("#SimpleSwf")[0].returnFriendsForLifeCountToAs(inviteCount);
    } else {
      $("#SimpleSwf")[0].returnFriendsForLifeCountToAs(0);
    }
}

/**
 * Send a life to specified friends
 */
function sendLife(facebookIds) {
    FB.ui({method: 'apprequests',
      to: facebookIds,
      message: "Here's a life for you!",
      title: "Send them a life!",
      data: "lifeforyou"
    }, sendLifeCallback);
}

/**
 * Do nothing
 */
function sendLifeCallback(response)
{
    if (response != null && response.to != null) {
        var recipients = response.to;
        // $("#SimpleSwf")[0].returnFriendsForLifeToAs(recipients);
        // console.log(recipients);
    }
}

/**
 * nudge the opponent player by sending a user to user request
 */
function nudgePlayer(opponentFbid) {
  YJIJ.opponentFbid = opponentFbid;
  FB.ui({method: 'apprequests',
    message: "It's your turn to play!",
    title: "Let them know it's their turn!",
    to: opponentFbid
  }, nudgePlayerCallback);
}

/**
 * If the current user declines sending a user to user request to the opponent,
 * send an app to user notification to the opponent
 */
function nudgePlayerCallback(response)
{
  if (response != null && response.to != null) {
    // console.log("sent nudge to " + response.to);
  } else {
    // console.log("user declined sending nudge");
    // ajax to backend
    $.ajax({
        url: $('#footer').attr('data-server-url') + "game/turn/notify?nudge=true&opponent=" + YJIJ.opponentFbid
    });
  }
}

/**
 * At the end of a turn, send a user to user request to notify the other
 * player that it's their turn to play
 */
function sendTurnRequest(opponentFbid, gameId) {
    // console.log('prompting user to send turn request to ' + opponentFbid);
    // console.log('game id ' + gameId);
    YJIJ.opponentFbid = opponentFbid;
    FB.ui({method: 'apprequests',
      message: "It's your turn to play!",
      title: "Let them know it's their turn!",
      to: opponentFbid,
      data: gameId
    }, turnRequestCallback);
}

/**
 * If the current user declines sending a user to user request to the opponent,
 * send an app to user notification to the opponent
 */
function turnRequestCallback(response)
{
    if (response != null && response.to != null) {
        // console.log("sent turn request to " + response.to);
    } else {
        // console.log("user declined sending turn request");
        // ajax to backend
        // $.ajax({
        //     url: $('#footer').attr('data-server-url') + "game/turn/notify?opponent=" + YJIJ.opponentFbid
        // });
    }
}

/**
 * At the end of a turn, send a app to user notification to notify the other
 * player that it's their turn to play
 */
function sendTurnNotification(opponentFbid) {
  // console.log('sending turn notification to ' + opponentFbid);
  $.ajax({
    url: $('#footer').attr('data-server-url') + "game/turn/notify?opponent=" + opponentFbid
  });
}

/**
 * Share game playing stories to facebook open graph
 */
function shareOpengraphPlayMatch(fbid, matchId) {
  // console.log('sharing opengraph story: ' + fbid + " played match #" + matchId);
  // $.ajax({
  //   url: $('#footer').attr('data-server-url') + "demo/ogpost/play/" + matchId + "?fbid=" + fbid
  // });
}

/**
 * Render the facebook purchase dialog
 */
function displayPurchase(productUrl) {
    // console.log('displaying purchase dialog');
    FB.ui({
        method: 'pay',
        action: 'purchaseitem',
        product: productUrl,
        // request_id: 'YOUR_REQUEST_ID' // optional, must be unique for each payment
    }, purchaseCallback);
}

/**
 * Callback from purchase dialog
 */
function purchaseCallback(response)
{
    if (response.status == 'failed') {
        alert("Something went wrong while processing your purchase. Please let us know about this.")
    }

    if (response.status == 'completed') {
        var signedRequest = response.signed_request;
        var paymentId = response.payment_id;
        $("#SimpleSwf")[0].returnPurchaseStatusToAs(signedRequest, paymentId);
    }
}

/**
 * Open the requests dialog to let the user invite friends to the game
 */
function inviteFriends() {
    FB.ui({method: 'apprequests',
        // message: "I challenge you to a game of You Jump I Jump! Accept with courage or decline in fear - it's up to you.",
        message: "Let's play a quick game of You Jump I Jump - Doodle Jump on steroids.",
        title: "Play You Jump I Jump with friends!"
    }, inviteFriendsCallback);
}

function inviteFriendsCallback(response) {
  if (response != null && response.to != null) {
    var recipients = response.to;
    var inviteCount = 0;
    for (var i = 0; i < recipients.length; i++) {
      inviteCount++;
    }
    $("#SimpleSwf")[0].returnInviteCount(inviteCount);
  } else {
    $("#SimpleSwf")[0].returnInviteCount(0);
  }
}

function invitePreSelectedFriends(facebookIds) {
  // FB.api('/me/statuses?limit=50000', function(response) {
  //   if (response != null && response.picture != null && response.picture.data != null) {
  //     $("#SimpleSwf")[0].returnProfilePictureUrlToAs(fbid, response.picture.data);
  //   }
  //   console.log(response);
  // });

  FB.ui({method: 'apprequests',
    to: facebookIds,
    message: "I challenge you to a quick game of You Jump I Jump. Let's see who has better hand-eye coordination!",
    title: "Play You Jump I Jump with friends!"
  }, inviteFriendsCallback);
}

function getProfilePictureUrl(fbid) {
  FB.api('/' + fbid + '?fields=picture.type(square).width(70).height(70)&return_ssl_resources=true', function(response) {
    if (response != null && response.picture != null && response.picture.data != null) {
      $("#SimpleSwf")[0].returnProfilePictureUrlToAs(fbid, response.picture.data);
    }
  });
}

function shareHighScore(msg) {
  FB.api('/me/feed', 'post', { name: msg, 
                                caption: "You Jump I Jump", 
                                link: "apps.facebook.com/youjumpijump", 
                                message: "this deserves a Like",
                                picture: "https://d3et7r3ga59g4e.cloudfront.net/snaps/doodle.jpg",
                                actions: [
                                  {'name': 'Get Jumping!', 'link': 'https://apps.facebook.com/youjumpijump'}
                                ]
                             },
  function(response) {
    if (!response || response.error) {
      console.log(response.error);
      shareHighScoreUsingFbui(msg);
    } else {
      console.log('Post ID: ' + response.id);
    }
  });
}

function shareHighScoreUsingFbui(msg) {
  var obj = {
    method: 'feed',
    link: "apps.facebook.com/youjumpijump",
    message: "this deserves a Like",
    picture: "https://d3et7r3ga59g4e.cloudfront.net/snaps/doodle.jpg",
    name: msg,
    caption: "You Jump I Jump",
    actions: [
      {'name': 'Get Jumping!', 'link': 'https://apps.facebook.com/youjumpijump'}
    ]
  };

  function callback(response) {
    console.log(response);
  }

  FB.ui(obj, callback);
}

function displayFlashScreenshot() {
  // Call the Flash Actionscript method to create the dynamic screenshot data
  // var screenshotData = $("#SimpleSwf")[0].exportScreenshot();

  // Set the screenshot image data as a base64 encoded data URI in the img src attribute
  // $("#screenshotObject").attr('src', 'data:image/jpeg;base64,' + screenshotData);
  
  // Set the screenshot img dimensions to match the Flash object tag
  // $("#screenshotObject").css('width', '756');
  // $("#screenshotObject").css('height', '650');
        
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