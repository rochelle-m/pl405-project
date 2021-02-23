async function checkAadhar(aadharCardNumber) {
  var _name = document.getElementById("name");
  var _address = document.getElementById("address");
  var _dob = document.getElementById("dob");
  var _email = document.getElementById("email");
  var _gender = document.getElementsByName("gender");
  var _phone = document.getElementById("phone");
  var submitBtn = document.getElementById("submitbtn");
  var error = document.getElementById("aadhar_error_msg");
  if (aadharCardNumber.length == 12) {
    console.log(aadharCardNumber);
    const res = await fetch(`http://127.0.0.1:8001/find/${aadharCardNumber}/`);
    const person = await res.json();

    if (!("error" in person)) {
      submitBtn.disabled = false;
      const { first_name, middle_name, last_name } = person;
      _name.value = first_name + " " + middle_name + " " + last_name;
      _name.disabled = true;
      _address.value = person.address + " - " + person.pincode;
      _phone.value = person.contact;
      _dob.valueAsDate = new Date(person.dob);
      _dob.disabled = true;
      // * alternately, document.getElementById(person.gender.toLowerCase()).checked = true;
      for (var i = 0; i < _gender.length; i++) {
        if (_gender[i].getAttribute("value") == person.gender.toLowerCase()) {
          _gender[i].checked = true;
        }
        _gender[i].disabled = true;
      }
    } else {
      error.innerHTML = "Aadhar card entered by you does not exist";
      submitBtn.disabled = true;
    }
  }
}
