const firebaseConfig = {
    apiKey: "AIzaSyBcBbxtnr6i1QqOg9UljRW73KMemDUZL-c",
    authDomain: "zeus-83f52.firebaseapp.com",
    databaseURL: "https://zeus-83f52-default-rtdb.firebaseio.com",
    projectId: "zeus-83f52",
    storageBucket: "zeus-83f52.appspot.com",
    messagingSenderId: "97892751991",
    appId: "1:97892751991:web:ce56754eb8bec81bb60472",
    measurementId: "G-MFWKEKXBSW"
  };
firebase.initializeApp(firebaseConfig);
//reference your database
var contactFormDB=firebase.database().ref('contactform');

document.getElementById('admin').addEventListener("submit",submitForm);

function submitForm(e)
{
    e.preventDefault();
    var name = getElementVal('name');
    var emailid=getElementVal('email');
    console.log(name,email);
}
const getElementVal = (id) =>
{
    return document.getElementById(id).ariaValueMax;
}