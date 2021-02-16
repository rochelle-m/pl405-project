async function checkAadhar(aadharCardNumber) {
  var aadharnumber = document.getElementById("aadharnumber");
  var name = document.getElementById("name");
  var address = document.getElementById("address");
  var dob = document.getElementById("dob");
  var gender = document.getElementById("gender");
  var phone = document.getElementById("phone");
  if (aadharCardNumber.length == 12) {
    console.log(aadharCardNumber);
    const res = await fetch(`http://127.0.0.1:5000/find/${aadharCardNumber}/`);
    const details = await res.json();

    name.value =
      details.first_name + " " + details.middle_name + " " + details.last_name;
    name.disabled = true;
  }
}
