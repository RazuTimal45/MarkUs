function mouseenter1(){
    document.getElementById('main-text').style.fontSize = "60px";
    document.getElementById('main-text').style.color = "	#00FFFF";
}
function mouseleave1(){
    document.getElementById('main-text').style.fontSize = "";
    document.getElementById('main-text').style.color = "";
}
function mouseenter(){
    document.getElementById('sub-text').style.fontSize = "30px";
    document.getElementById('sub-text').style.color = "	#01FFFF";
}
function mouseleave(){
    document.getElementById('sub-text').style.fontSize = "";
    document.getElementById('sub-text').style.color = "";
}
function ValidateForm(){
    var fname=document.getElementById('fname').value;
    var lname=document.getElementById('lname').value;
    var age=document.getElementById('age').value;
    var email=document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var gender=document.getElementById('gender').value;
    var phone=document.getElementById('phone').value;
    var lang=document.getElementById('lang').value;

    if(fname == ""){
        document.getElementById('errFname').innerText="*First name Required!";
        document.getElementById('errFname').style.color="red";
        return false;
    }
    if(lname == ""){
        document.getElementById('errLname').innerText="*Last name Required!";
        document.getElementById('errLname').style.color="red";
        return false;
    }
    if(age == ""){
        document.getElementById('errAge').innerText="*Age Required!";
        document.getElementById('errAge').style.color="red";
        return false;
    }
    if(email == ""){
        document.getElementById('errEmail').innerText="*Email Required!";
        document.getElementById('errEmail').style.color="red";
        return false;
    }
    if(password == ""){
        document.getElementById('errPassword').innerText="*Password Required!";
        document.getElementById('errPassword').style.color="red";
        return false;
    }
    if(phone.length!=10){
        document.getElementById('errPhone').innerText= "*Enter 10 digits number!";
        document.getElementById('errPhone').style.color= "red";
        return false;
    }
    if(gender == ""){
        document.getElementById('errGender').innerText="*Enter your Gender!";
        document.getElementById('errGender').style.color="red";
        return false;
    }
    if(lang == ""){
        document.getElementById('errLang').innerText="*You should know at least one programming language!";
        document.getElementById('errLang').style.color="red";
        return false;
    }
}