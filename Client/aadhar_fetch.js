async function checkAadhar(aadharCardNumber) {
  var aadharnumber = document.getElementById("aadharnumber");
  var _name = document.getElementById("name");
  var _address = document.getElementById("address");
  var _dob = document.getElementById("dob");
 // var _gender = document.getElementById("gender");
  var _gender = document.getElementsByName("gender")
  var _phone = document.getElementById("phone");
  if (aadharCardNumber.length == 12) {
    console.log(aadharCardNumber);
    const res = await fetch(`http://127.0.0.1:8001/find/${aadharCardNumber}/`);
    const details = await res.json();

    _name.value =
      details.first_name + " " + details.middle_name + " " + details.last_name;
    _name.disabled = true;

    _address.value = details.address + " - " + details.pincode;

    _phone.value = details.contact;

    
    for (var i=0; i<_gender.length; i++) {
      if (_gender[i].getAttribute('value') == details.gender.toLowerCase() ) {
        _gender[i].checked = true;
      }
      
    }





  }
}
