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

function fCheck() {
  if(document.getElementById("pwd").value.search(/^\d{6}$/)) {
    document.getElementById("pwerror").innerHTML = "Please Enter your 6 Digit Numerical Pin";
    return false;
  }
  else {
    document.getElementById("pwerror").innerHTML = "";
  }

}
