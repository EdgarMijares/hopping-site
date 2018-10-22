$(document).ready(function() {

  // menu item selected
	$('#link-promo-feed').css('background','rgba(150,150,150,.5)');

  // adjust view
	$('#side-menu').css('height',890);
	$('#content').css('height',890);
	$('#promos-panel').css('height',780);
	$('footer').css('top',890);

  var config = {
	    	apiKey: "AIzaSyCamEikXKKr9dScMumyj99k0zf9j9FeX9I",
		    authDomain: "hopping-dc414.firebaseapp.com",
		    databaseURL: "https://feed-handler-place.firebaseio.com/",
		    projectId: "hopping-dc414",
		    storageBucket: "hopping-dc414.appspot.com",
		    messagingSenderId: "575574559197"
		  };
	var app = firebase.initializeApp(config);

  const storageService = firebase.app().storage("gs://monthly-images");
  const storageRef = storageService.ref();
  const database = firebase.database(app);

  var imgRef1 = database.ref('/'+idPlace+'/feed_1/');
  imgRef1.on('value', function(snapshot) {
    document.querySelector('#img-prev_1').src = "";
    snapshot.forEach(function(snapshot_2){
      document.querySelector('#img-prev_1').src = snapshot_2.val();
    });
  });

  var imgRef2 = database.ref('/'+idPlace+'/feed_2/');
  imgRef2.on('value', function(snapshot) {
    document.querySelector('#img-prev_2').src = "";
    snapshot.forEach(function(snapshot_2){
      document.querySelector('#img-prev_2').src = snapshot_2.val();
    });
  });

  var imgRef3 = database.ref('/'+idPlace+'/feed_3/');
  imgRef3.on('value', function(snapshot) {
    document.querySelector('#img-prev_3').src = "";
    snapshot.forEach(function(snapshot_2){
      document.querySelector('#img-prev_3').src = snapshot_2.val();
    });
  });

  var imgRef4 = database.ref('/'+idPlace+'/feed_4/');
  imgRef4.on('value', function(snapshot) {
    document.querySelector('#img-prev_4').src = "";
    snapshot.forEach(function(snapshot_2){
      document.querySelector('#img-prev_4').src = snapshot_2.val();
    });
  });

  document.querySelector('#file-select_1').addEventListener('change', handleFileUploadChange);
  document.querySelector('#file-select_2').addEventListener('change', handleFileUploadChange);
  document.querySelector('#file-select_3').addEventListener('change', handleFileUploadChange);
  document.querySelector('#file-select_4').addEventListener('change', handleFileUploadChange);

  document.querySelector('#file-submit_1').addEventListener('click', handleFileUploadSubmit1);
  document.querySelector('#file-submit_2').addEventListener('click', handleFileUploadSubmit2);
  document.querySelector('#file-submit_3').addEventListener('click', handleFileUploadSubmit3);
  document.querySelector('#file-submit_4').addEventListener('click', handleFileUploadSubmit4);

  /*
  * IMG 1
  */
  function handleFileUploadSubmit1(e) {
    const uploadTask = storageRef.child(`${idPlace}/1`).put(selectedFile); //create a child directory called images, and place the file inside this directory
    document.querySelector('#file-submit_1').disabled = true;
    document.querySelector('#file-submit_1').innerHTML = 'subiendo';
    uploadTask.on('state_changed', (snapshot) => {
    // Observe state change events such as progress, pause, and resume
    }, (error) => {
      // Handle unsuccessful uploads
      console.log(error);
    }, () => {
       // Do something once upload is complete
       uploadTask.then(snapshot => snapshot.ref.getDownloadURL())
        .then((url) => {
          database.ref('/'+idPlace+'/feed_1').set({
            'url': url,
						'placeName': placeName
          });
          fileObject.target.value = ''
          document.querySelector('#file-submit_1').innerHTML = 'listo';
          document.querySelector('#file-submit_1').removeAttribute('disabled');
        })
        .catch(console.error);
    });
  }//end handleFileUploadSubmit1

  /*
  * IMG 2
  */
  function handleFileUploadSubmit2(e) {
    const uploadTask = storageRef.child(`${idPlace}/2`).put(selectedFile); //create a child directory called images, and place the file inside this directory
    document.querySelector('#file-submit_2').disabled = true;
    document.querySelector('#file-submit_2').innerHTML = 'subiendo';
    uploadTask.on('state_changed', (snapshot) => {
    // Observe state change events such as progress, pause, and resume
    }, (error) => {
      // Handle unsuccessful uploads
      console.log(error);
    }, () => {
       // Do something once upload is complete
       uploadTask.then(snapshot => snapshot.ref.getDownloadURL())
        .then((url) => {
          database.ref('/'+idPlace+'/feed_2').set({
            'url': url,
						'placeName': placeName
          });
          fileObject.target.value = ''
          document.querySelector('#file-submit_2').innerHTML = 'listo';
          document.querySelector('#file-submit_2').removeAttribute('disabled');
        })
        .catch(console.error);
    });
  }//end handleFileUploadSubmit2

  /*
  * IMG 3
  */
  function handleFileUploadSubmit3(e) {
    const uploadTask = storageRef.child(`${idPlace}/3`).put(selectedFile); //create a child directory called images, and place the file inside this directory
    document.querySelector('#file-submit_3').disabled = true;
    document.querySelector('#file-submit_3').innerHTML = 'subiendo';
    uploadTask.on('state_changed', (snapshot) => {
    // Observe state change events such as progress, pause, and resume
    }, (error) => {
      // Handle unsuccessful uploads
      console.log(error);
    }, () => {
       // Do something once upload is complete
       uploadTask.then(snapshot => snapshot.ref.getDownloadURL())
        .then((url) => {
          database.ref('/'+idPlace+'/feed_3').set({
            'url': url,
						'placeName': placeName
          });
          fileObject.target.value = ''
          document.querySelector('#file-submit_3').innerHTML = 'listo';
          document.querySelector('#file-submit_3').removeAttribute('disabled');
        })
        .catch(console.error);
    });
  }//end handleFileUploadSubmit2

  /*
  * IMG 4
  */
  function handleFileUploadSubmit4(e) {
    const uploadTask = storageRef.child(`${idPlace}/4`).put(selectedFile); //create a child directory called images, and place the file inside this directory
    document.querySelector('#file-submit_4').disabled = true
    document.querySelector('#file-submit_4').innerHTML = 'subiendo'
    uploadTask.on('state_changed', (snapshot) => {
    // Observe state change events such as progress, pause, and resume
    }, (error) => {
      // Handle unsuccessful uploads
      console.log(error);
    }, () => {
       // Do something once upload is complete
       uploadTask.then(snapshot => snapshot.ref.getDownloadURL())
        .then((url) => {
          database.ref('/'+idPlace+'/feed_4').set({
            'url': url,
						'placeName': placeName
          });
          fileObject.target.value = ''
          document.querySelector('#file-submit_4').innerHTML = 'listo'
          document.querySelector('#file-submit_4').removeAttribute('disabled');
        })
        .catch(console.error);
    });
  }//end handleFileUploadSubmit2

  let selectedFile;
  let fileObject;
  function handleFileUploadChange(e){
    console.log(e);
    fileObject = e;
    selectedFile = e.target.files[0];
  }//end handleFileUploadChange

  document.querySelector('#delete_btn_1').addEventListener('click', delete_1);
  document.querySelector('#delete_btn_2').addEventListener('click', delete_2);
  document.querySelector('#delete_btn_3').addEventListener('click', delete_3);
  document.querySelector('#delete_btn_4').addEventListener('click', delete_4);

  function delete_1(){
    const picOne = storageRef.child(`${idPlace}/1`)
    picOne.delete().then(function(){
      database.ref('/'+idPlace+'/feed_1').remove();
    }).catch(function(error){
      console.log(error);
    });
  }
  function delete_2(){
    const picOne = storageRef.child(`${idPlace}/2`)
    picOne.delete().then(function(){
      database.ref('/'+idPlace+'/feed_2').remove();
    }).catch(function(error){
      console.log(error);
    });
  }
  function delete_3(){
    const picOne = storageRef.child(`${idPlace}/3`)
    picOne.delete().then(function(){
      database.ref('/'+idPlace+'/feed_3').remove();
    }).catch(function(error){
      console.log(error);
    });
  }
  function delete_4(){
    const picOne = storageRef.child(`${idPlace}/4`)
    picOne.delete().then(function(){
      database.ref('/'+idPlace+'/feed_4').remove();
    }).catch(function(error){
      console.log(error);
    });
  }
});//end ready function
