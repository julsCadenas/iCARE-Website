function auth(){
    var username = document.getElementById("studentnumber").value;
    var password = document.getElementById("password").value;

    // Check if the username is a 9-digit number and password is not empty
    var usernameRegex = /^\d{9}$/;

    if(studentnumber.match(usernameRegex) && password.trim() !== ""){
      alert("Login Success");
      window.open("https://www.feutech.edu.ph/campus_life/icare","_self");
    } else {
      alert("Invalid Info");
      return false;
    }
  }

  function validateForm() {
    var studentNumber = document.getElementById("studentnumber").value;
    var password = document.getElementById("password").value;

    // Check if student number and password are not empty
    if (studentNumber.trim() === "" || password.trim() === "") {
        alert("Student number and password are required.");
        return false; // Prevent form submission
    }
}

function submitForm() {
  // Validate form here if needed
  document.querySelector('form').submit();
}

function back(){
  window.open("/index.php","_self");
}

// function preventBack(){
//   window.history.forward()
// }; 
// setTimeout("preventBack()", 0);
// window.onunload=function(){
//   null;
// }

window.history.forward();