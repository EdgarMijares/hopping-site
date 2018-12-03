const express = require('express');
const cors = require('cors');
const bodyParser = require('body-parser');
const https = require('https');
const http = require('http');
const fs = require('fs');
const notification = require('./onlyAdmin');
const app = express();

var options = {
    key: fs.readFileSync('privatekey.pem'),
    cert: fs.readFileSync('certificate.pem'),
};

app.use(cors());
app.use(bodyParser.urlencoded({extended:false}));

var server = https.createServer(options, app).listen(3000, function(){
  console.log("Express server listening on port 3000");
});

app.post('/', (req, res) => {
  var body = req.body;
  var pushResponse = notification.sendPushNotification(body.token, body.placeName);
});

app.get('/', (req, res) => {
  res.send('v0.1');
});

//app.listen(3000);
