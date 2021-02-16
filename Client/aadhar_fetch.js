async function checkAadhar(aadharCardNumber) {
  var aadharnumber = document.getElementById("aadharnumber");
  var name = document.getElementById("name");
  var _address = document.getElementById("address");
  var _dob = document.getElementById("dob");
  var male = document.getElementById("male");
  var female = document.getElementById("female");
  var other = document.getElementById("other");
  var phone = document.getElementById("phone");
  if (aadharCardNumber.length == 12) {
    console.log(aadharCardNumber);
    const res = await fetch(`http://127.0.0.1:5000/find/${aadharCardNumber}/`);
    const person = await res.json();

    const { first_name, last_name, middle_name } = person;
    const { address, pincode, dob, gender, contact } = person;

    name.value = first_name + " " + middle_name + " " + last_name;
    name.disabled = true;

    _address.value = address + "\n" + pincode;
    phone.value = contact;

    let __date = new Date(dob);

    var currentDate = __date.toISOString().slice(0, 10);
    var currentTime = __date.getHours() + ":" + __date.getMinutes();
    console.log(currentDate);
    _dob.value = __date;

    document.getElementById(gender.toLowerCase()).checked = true;
  }
}
