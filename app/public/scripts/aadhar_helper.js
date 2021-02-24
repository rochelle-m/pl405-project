function checkValidation(aadhar_no) {
    if (!isLength12(aadhar_no.length)) {
        displayError("Aadhar card number is a 12 digit number");
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
    let error = document.getElementById("aadhar_error");
    error.style.visibility = "visible";
    error.innerHTML = msg;
}

async function checkAadhar(aadharCardNumber) {
    var _name = document.getElementById("name");
    var _address = document.getElementById("address");
    var _dob = document.getElementById("dob");
    var _email = document.getElementById("email");
    var _gender = document.getElementsByName("gender");
    var _phone = document.getElementById("phone");
    var submitBtn = document.getElementById("submitbtn");
    var error = document.getElementById("aadhar_error");

    if (!containsAllNumericChar(aadharCardNumber)) {
        displayError("Aadhar card can only contain digits");
    } else displayError("");

    if (aadharCardNumber.length == 12) {
        const person = await fetchAadharDetails(aadharCardNumber);
        if (!("error" in person)) {
            submitBtn.disabled = false;
            const { first_name, middle_name, last_name } = person;
            _name.value = first_name + " " + middle_name + " " + last_name;
            _name.disabled = true;
            _address.value = person.address + " - " + person.pincode;
            _phone.value = person.contact;

            let is16 = checkAge(person.dob, submitBtn);

            _dob.valueAsDate = new Date(person.dob);
            _dob.disabled = true;
            // * alternately, document.getElementById(person.gender.toLowerCase()).checked = true;
            for (var i = 0; i < _gender.length; i++) {
                if (
                    _gender[i].getAttribute("value") ==
                    person.gender.toLowerCase()
                ) {
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

async function fetchAadharDetails(aadharCardNumber) {
    const res = await fetch(`http://127.0.0.1:8001/find/${aadharCardNumber}/`);
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
