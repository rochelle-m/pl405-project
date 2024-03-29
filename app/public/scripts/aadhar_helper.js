function checkValidation(aadhar_no) {
    if (!isLength12(aadhar_no.length)) {
        displayError("Aadhar card number is a 12 digit number");
    }
    if (isLength12(aadhar_no.length) && containsAllNumericChar(aadhar_no))
        displayError("");
}

function isLength12(len) {
    return len == 14 || len == 12;
}

function containsAllNumericChar(aadhar_no) {
    return aadhar_no.split("").every((dig) => +dig < 10 && +dig > -1);
}

function displayError(msg) {
    let error = document.getElementById("aadhar_error");
    error.style.visibility = "visible";
    error.innerHTML = msg;
}

async function checkAadhar(aadharCardNumber) {
    format(aadharCardNumber)

    var _name = document.getElementById("name");
    var _first_name = document.getElementById("first");
    var _middle_name = document.getElementById("middle");
    var _last_name = document.getElementById("last");
    var _address = document.getElementById("address");
    var _pincode = document.getElementById("pin")
    var _street = document.getElementById("street")
    var _dob = document.getElementById("dob");
    var _email = document.getElementById("email");
    var _gender = document.getElementsByName("gender");
    var _phone = document.getElementById("phone");
    var submitBtn = document.getElementById("submitbtn");
    var error = document.getElementById("aadhar_error");

    if (!containsAllNumericChar(aadharCardNumber)) {
        displayError("Aadhar card can only contain digits");
    } else displayError("");

    if (aadharCardNumber.length == 14) {
        aadharCardNumber = aadharCardNumber.replace(/\s/g, "")
        console.log(aadharCardNumber);
        const person = await fetchAadharDetails(aadharCardNumber);
        if (!("error" in person)) {
            submitBtn.disabled = false;
            const { first_name, middle_name, last_name } = person;
            _name.value = first_name + " " + middle_name + " " + last_name;
            // _name.disabled = true;

            _first_name.value = first_name;
            _middle_name.value = middle_name;
            _last_name.value = last_name;

            _address.value = person.address + " - " + person.pincode;
           
            _pincode.value =person.pincode;
            _street.value =person.address;

            _phone.value = person.contact;

            let is16 = checkAge(person.dob, submitBtn);

            _dob.valueAsDate = new Date(person.dob);
            // _dob.disabled = true;
            // * alternately, document.getElementById(person.gender.toLowerCase()).checked = true;
            for (var i = 0; i < _gender.length; i++) {
                if (
                    _gender[i].getAttribute("value") ==
                    person.gender.toLowerCase()
                ) {
                    _gender[i].checked = true;
                }
                // _gender[i].disabled = true;
            }
        } else {
            error.innerHTML = "Aadhar card entered by you does not exist";
            submitBtn.disabled = true;
        }
    }
}

async function fetchAadharDetails(aadharCardNumber) {
    const URL = "http://127.0.0.1:8001"
    const res = await fetch(`${URL}/find/${aadharCardNumber}/`);
    return await res.json();
}

function checkAge(dob, submitBtn) {
    let yearOfBirth = new Date(dob).getFullYear();
    let currentYear = new Date().getFullYear();
    var dobError = document.getElementById("dob_error");
    let errorMsg =
        "You are below the age of 16. You are not eligible to apply for a learner's permit.";
    let basicAge = currentYear - yearOfBirth;

    dobError.innerHTML = basicAge < 16 ? errorMsg : "";

    if (basicAge < 16) {
        submitBtn.disabled = true;
    }
    return basicAge < 18;
}

function format(num){
    if((num.length == 4 || num.length == 9) )
        document.getElementById("aadharnumber").value = num +" "    
}      
