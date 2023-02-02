function clearErrors() {
  errors = document.getElementsByClassName("formerror");
  for (let item of errors) {
    item.innerHTML = "";
  }
}

function seterror(id, error) {
  //sets error inside tag of id
  element = document.getElementById(id);
  element.getElementsByClassName("formerror")[0].innerHTML = error;
}

function validateForm() {
  var returnval = true;
  clearErrors();

  //Name
  var name = document.forms["oform"]["fname"].value;

  if (!/^\S{1,}$/.test(name)) {
    seterror("name", "*Name must not contain whitespaces");
    returnval = false;
  } else if (!/^[a-zA-Z]+$/.test(name)) {
    seterror("name", "*Only alphabets are allowed");
    returnval = false;
  }

  //contact Number
  var phone = document.forms["oform"]["fphone"].value;

  if (!/^[0-9]+$/.test(phone)) {
    seterror("phone", "*must input numbers");
    returnval = false;
  } else if (phone.length != 10) {
    seterror("phone", "*Number must contain 10 digis");
    returnval = false;
  }

  //pwd & confirm pwd
  var password = document.forms["oform"]["fpass"].value;
  if (!(password.length > 5 && password.length < 16)) {
    seterror(
      "pass",
      "*Password must be min 6 characters long and max  characters!"
    );
    returnval = false;
  }
  var cpassword = document.forms["oform"]["fcpass"].value;
  if (cpassword != password) {
    seterror("cpass", "*Password do not match!");
    returnval = false;
  }
  return returnval;
}
