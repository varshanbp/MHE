function nmCheck() {
  if(document.getElementById("uname").value.search(/^[a-zA-Z][a-zA-Z0-9\s]*/)) {
    document.getElementById("nmerror").innerHTML = "Please a Enter a Valid Username";
    document.getElementById("uname").style.color = "#e20000";
    if(document.getElementById('img1').src.match("select"))
      document.getElementById('img1').src = "images/close.png";
  }
  else {
    document.getElementById("nmerror").innerHTML = "";
    document.getElementById("uname").style.color = "#87aa32";
    if(document.getElementById('img1').src.match("close"))
      document.getElementById('img1').src = "images/select.png";
  }
}

function pwCheck() {
  if(document.getElementById("pwd").value.search(/^\d{6}$/)) {
    document.getElementById("pwerror").innerHTML = "Please Enter your 6 Digit Numerical Pin";
    document.getElementById("pwd").style.color = "#e20000";
    if(document.getElementById('img2').src.match("select"))
      document.getElementById('img2').src = "images/close.png";
  }
  else {
    document.getElementById("pwerror").innerHTML = "";
    document.getElementById("pwd").style.color = "#87aa32";
    if(document.getElementById('img2').src.match("close"))
      document.getElementById('img2').src = "images/select.png";
  }
}

function emailVerify() {
  if(document.getElementById("email").value!=document.getElementById("remail").value) {
    document.getElementById("emerror").innerHTML = "Both Emails Does not Match";
    document.getElementById("email").style.color = "#e20000";
    document.getElementById("remail").style.color = "#e20000";
  }
  else {
    document.getElementById("emerror").innerHTML = "";
    if(document.getElementById('img3').src.match("close")&&document.getElementById('img4').src.match("close")) {
      document.getElementById('img3').src = "images/select.png";
      document.getElementById('img4').src = "images/select.png";
    }
    document.getElementById("email").style.color = "#87aa32";
    document.getElementById("remail").style.color = "#87aa32";
  }
}

function dobVerify() {
  if(document.getElementById("dob").value.match(/^[0-9][0-9][0-9][0-9]-[0-1][0-9]-[0-3][0-9]/)) {
    document.getElementById('img5').src = "images/select.png";
    document.getElementById("dob").style.color = "#87aa32";
  }
  else {
    document.getElementById('img5').src = "images/close.png";
    document.getElementById("dob").style.color = "#e20000";
  }
}


function fnVerify() {
  if(document.getElementById("fname").value.match(/^[A-Z]+ *[a-z]/)) {
    document.getElementById('img6').src = "images/select.png";
    document.getElementById("fname").style.color = "#87aa32";
    document.getElementById("fnerror").innerHTML = "";
  }
  else{
    document.getElementById('img6').src = "images/close.png";
    document.getElementById("fname").style.color = "#e20000";
    document.getElementById("fnerror").innerHTML = "Please Enter your First Name as per Capitalization";
  }
}

function lnVerify() {
  if(document.getElementById("lname").value.match(/^[A-Z]+ *[A-Za-z]/)) {
    document.getElementById('img7').src = "images/select.png";
    document.getElementById("lname").style.color = "#87aa32";
    document.getElementById("lnerror").innerHTML = "";
  }
  else{
    document.getElementById('img7').src = "images/close.png";
    document.getElementById("lname").style.color = "#e20000";
    document.getElementById("lnerror").innerHTML = "Please Enter your Last Name as per Capitalization";
  }
}

function sqVerify() {
  if(document.getElementById("sq").value!="") {
    document.getElementById('img8').src = "images/select.png";
    document.getElementById("sq").style.color = "#87aa32";
    document.getElementById("sqerror").innerHTML = "";
  }
  else{
    document.getElementById('img8').src = "images/close.png";
    document.getElementById("sq").style.color = "#e20000";
    document.getElementById("sqerror").innerHTML = "Please Enter a Security Question";
  }
}

function saVerify() {
  if(document.getElementById("sa").value!="") {
    document.getElementById('img9').src = "images/select.png";
    document.getElementById("sa").style.color = "#87aa32";
    document.getElementById("saerror").innerHTML = "";
  }
  else{
    document.getElementById('img9').src = "images/close.png";
    document.getElementById("sa").style.color = "#e20000";
    document.getElementById("saerror").innerHTML = "Please Enter a Security Answer";
  }
}

function dpVerify() {
  if(document.getElementById("dept").value!="") {
    document.getElementById('img10').src = "images/select.png";
    document.getElementById("dept").style.color = "#87aa32";
    document.getElementById("dperror").innerHTML = "";
  }
  else{
    document.getElementById('img10').src = "images/close.png";
    document.getElementById("dept").style.color = "#e20000";
    document.getElementById("dperror").innerHTML = "Please Select a Department";
  }
}

function fCheck() {
  if(document.getElementById("pwd").value.search(/^\d{6}$/)) {
    document.getElementById("pwerror").innerHTML = "Please Enter your 6 Digit Numerical Pin";
    return false;
  }
  else {
    document.getElementById("pwerror").innerHTML = "";
  }

}
