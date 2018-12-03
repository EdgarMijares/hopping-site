var admin = require('firebase-admin');
var serviceAccount = require('./pathTo/serviceAccountKey.json');

admin.initializeApp({
  credential: admin.credential.cert(serviceAccount),
  databaseURL: 'https://hopping-dc414.firebaseio.com'
});

module.exports.sendPushNotification = (fcmToken, placeName) => {
  // Define message payload
  var response = '';
  var message = {
  	notification: {
  		title: 'Reservación confirmada',
  		body: `¡${placeName} ha aceptado tu reservación para esta noche!`
  	},
  	token: fcmToken,
  	apns: {
      payload: {
        aps: {
            sound: 'default'
        }
      }
  	},
  	android: {
      notification: {
      	sound: 'default'
      }
    }
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
}; //end sendPushNotification
