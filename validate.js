/*function validateForm() {
    var fname = document.signup.first.value;
    var lname = ;
    if (fname == "") {
      alert("This field must be filled out");
      console.log("Work");
      return false;
    }
  }*/
/*
  function validateForm() {
    var fname = document.forms["signup"]["first"].value;
    var lname = document.forms["signup"]["last"].value;
    var usrname = document.forms["signup"]["username"].value;
    var pass = document.forms["signup"]["password"].value;
    var cpass = document.forms["signup"]["confirmpassword"].value;

    if (fname == "" || lname == "" || usrname == "" || pass == "" || cpass == "") {
      alert("No fields should be left empty");
      console.log("Work");
      return false;
      
      
      
    }
    else if (fname !== "" && lname !== "" && usrname !== "" && pass == cpass){
        alert("Thank you for signing up");
        console.log("Signed up");
    }
    else{
        return false;
    }
  }*/

  function validateForm() {
    /*if (document.signup.first.value == "") {
        alert("Please provide your first name.");
        document.signup.first.focus();
        return false;
    }
    if (document.signup.last.value == "") {
        alert("Please provide your last name.");
        document.signup.last.focus();
        return false;
    }
    if (document.signup.username.value == "") {
        alert("Please provide your username.");
        document.signup.username.focus();
        return false;
    }

    if (document.signup.password.value == "") {
        alert("Please provide your password.");
        document.signup.password.focus();
        return false;
    }
    if (document.signup.confirmpassword.value == "") {
        alert("Please confirm your password.");
        document.signup.confirmpassword.focus();
        return false;
    }
    */
    if (document.signup.password.value != document.signup.confirmpassword.value) {
        alert("Please ensure that both password matches.");
        document.signup.password.focus();
        document.signup.confirmpassword.focus();
        return false;
    }
    else {
        alert("Thank you for signing up.");
        return true;
    }
 }