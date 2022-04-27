// Client ID and API key from the Developer Console
      var CLIENT_ID = '1084690924228-scrhjqghk4mkplddi7msvgghq7oe2ohi.apps.googleusercontent.com';
      var API_KEY = 'yjJJmE3eW09xQI5Okrn78s6n';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = [""];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = "https://www.googleapis.com/auth/spreadsheets";

      var authorizeButton = document.getElementById('authorize_button');
      var signoutButton = document.getElementById('signout_button');
/*
      **
       *  On load, called to load the auth2 library and API client library.
       *
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      **
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       *
      function initClient() {
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          scope: SCOPES
        }).then(function () {
          // Listen for sign-in state changes.
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
          authorizeButton.onclick = handleAuthClick;
          //signoutButton.onclick = handleSignoutClick;
        }, function(error) {
          appendPre(JSON.stringify(error, null, 2));
        });
      }

      **
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       *
      function updateSigninStatus(isSignedIn) {
        if (isSignedIn) {
          authorizeButton.style.display = 'none';
          //signoutButton.style.display = 'block';
          listMajors();
        } else {
          authorizeButton.style.display = 'block';
          //signoutButton.style.display = 'none';
        }
      }

      **
       *  Sign in the user upon button click.
       *
      function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
      }

      **
       *  Sign out the user upon button click.
       *
      function handleSignoutClick(event) {
        gapi.auth2.getAuthInstance().signOut();
      }

      **
       * Append a pre element to the body containing the given message
       * as its text node. Used to display the results of the API call.
       *
       * @param {string} message Text to be placed in pre element.
       *
      function appendPre(message) {
        var pre = document.getElementById('content');
        var textContent = document.createTextNode(message + '\n');
        pre.appendChild(textContent);
      }

      **
       * Print the names and majors of students in a sample spreadsheet:
       * https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
       *
      function listMajors() {
		
        gapi.client.sheets.spreadsheets.values.get({
          spreadsheetId: '1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms',
          range: 'Class Data!A2:E',
        }).then(function(response) {
          var range = response.result;
          if (range.values.length > 0) {
            appendPre('Name, Major:');
            for (i = 0; i < range.values.length; i++) {
              var row = range.values[i];
              // Print columns A and E, which correspond to indices 0 and 4.
              appendPre(row[0] + ', ' + row[4]);
            }
          } else {
            appendPre('No data found.');
          }
        }, function(response) {
          appendPre('Error: ' + response.result.error.message);
        });
		
      }
*/
	jQuery(document).on("click",'#authorize_button',function(){

		gapi.auth2.getAuthInstance().signIn();
		
	});
	jQuery(document).on("click",'#signout_button',function(){

		gapi.auth2.getAuthInstance().signOut();
		
	});
	function initClient() {
		gapi.client.init({
		  apiKey: API_KEY,
		  clientId: CLIENT_ID,
		  scope: SCOPES
		}).then(function () {
		  // Listen for sign-in state changes.
		  gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

		  // Handle the initial sign-in state.
		  updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
		  //authorizeButton.onclick = handleAuthClick;
		  //signoutButton.onclick = handleSignoutClick;
		}, function(error) {
		  appendPre(JSON.stringify(error, null, 2));
		});
	}
	function appendPre(message) {
		var pre = document.getElementById('content');
		var textContent = document.createTextNode(message + '\n');
		pre.appendChild(textContent);
	}
	function updateSigninStatus(isSignedIn) {
		if (isSignedIn) {
			var id_token = gapi.auth2.getAuthInstance().currentUser.get().getAuthResponse().access_token;
			//authorizeButton.style.display = 'none';
			//signoutButton.style.display = 'block';
			jQuery('#authorize_button').hide();
			jQuery('#signout_button').show();
			jQuery('.google-sheet-url').show();
			listMajors(id_token);
		} else {
			//authorizeButton.style.display = 'block';
			//signoutButton.style.display = 'none';
			jQuery('#authorize_button').show();
			jQuery('#signout_button').hide();
			jQuery('.google-sheet-url').hide();
		}
	} 
	function handleClientLoad() {
		gapi.load('client:auth2', initClient);
	}
	function listMajors(id_token){
		
		var access_token = id_token;
		var ID = jQuery('#authorize_button').data('id');
		jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_google_sheet_auth_code",access_token:access_token,ID:ID},
			success: function(response){
				if(response.type == "success"){
					//document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		
		
	}