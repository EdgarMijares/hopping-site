//----
var bodyParser = require('body-parser')
var express = require('express');
var app = express();

app.post('handler', function(req, res) {
	res.send("hola");
});

app.get('handler', function(req, res) {
	console.log("hello from console");
  	res.send('hello world');
});
//-------


var admin = require('firebase-admin');

var serviceAccount = require('./pathTo/serviceAccountKey.json');

admin.initializeApp({
  credential: admin.credential.cert(serviceAccount),
  databaseURL: 'https://hopping-dc414.firebaseio.com'
});


// This registration token comes from the client FCM SDKs.
var registrationToken = 'da21iRI2fzU:APA91bEVpOXkfqdi5mUWPhdMXT2K-uLguI3xPkf8jDCfLyabOV5XlPg4AY4ivI-ozHCUuEyMnqDe8ds530yIn5MP_4oD96Gigp8aw6qHwojYpIXyGO6dxGloi3nHTvVfarnKsIHAd_hU';

// See documentation on defining a message payload.
var message = {
	notification: {
  		title: 'este es el titulo',
  		body: 'este es el body'
  	},
	token: registrationToken
};

// Send a message to the device corresponding to the provided
// registration token.
admin.messaging().send(message)
  .then((response) => {
    // Response is a message ID string.
    console.log('Successfully sent message:', response);
  })
  .catch((error) => {
    console.log('Error sending message:', error);
  });

