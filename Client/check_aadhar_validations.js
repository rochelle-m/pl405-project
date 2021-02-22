function checkValidation(aadhar_no) {
  if (!isLength12(aadhar_no.length)) {
    displayError("Aadhar card is a 12 digit number");
  }
  if (!containsAllNumericChar(aadhar_no)) {
    displayError("Aadhar card can only contain digits");
  }
  if (isLength12(aadhar_no.length) && containsAllNumericChar(aadhar_no))
    displayError("");
}

function isLength12(len) {
  return len == 12;
}

function containsAllNumericChar(aadhar_no) {
  return aadhar_no.split("").every((dig) => +dig < 10);
}

function displayError(msg) {
  let error = document.getElementById("aadhar_error_msg");
  error.style.visibility = "visible";
  error.style.color = "red";
  error.innerHTML = msg;
}
