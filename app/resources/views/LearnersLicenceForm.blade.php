<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>

        <link
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
            rel="stylesheet"
            id="bootstrap-css"
        />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <style>
            .title {
                font-size: 3vw;
                margin: 4rem 0;
            }
            .form-group {
                width: 90%;
                margin: 0 auto;
                padding: 1rem;
            }
        </style>
       
         
    </head>
    <body style="background-color: black;">
        <div class="container">
            <h1 style="text-align: center; color: white"  class="title" >Registration Form</h1>
            <div class="col-lg-12 well">
                <div class="row">
                    <form name="registration">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="form-group">
                                    <label>Aadhar Number</label>
                                    <input
                                        type="text"
                                        id="aadharnumber"
                                        name="aadharnumber"
                                        placeholder="Enter Aadhar Number Here.."
                                        class="form-control"
                                        required=""
                                        pattern="[0-9]{12}"
                                        oninput="checkAadhar(this.value)"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        placeholder="Enter Name Here.."
                                        class="form-control"
                                        required=""
                                        pattern="^[a-zA-Z]+([\s][a-zA-Z]+)+$"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        placeholder="Enter Email Here.."
                                        class="form-control"
                                        required
                                    />
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea
                                        name="address"
                                        id="address"
                                        placeholder="Enter Address Here.."
                                        rows="3"
                                        class="form-control"
                                        required=""
                                    ></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label>Dob</label>
                                    <input
                                        type="date"
                                        name="dob"
                                        id="dob"
                                        placeholder="Enter date Here.."
                                        rows="3"
                                        class="form-control"
                                        placeholder="yyyy-mm-dd"
                                        max="2006-12-31"
                                        required=""
                                    />
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label>Gender</label><br />
                                    <input
                                        type="radio"
                                        id="female"
                                        name="gender"
                                        value="female"
                                    />&nbsp; Female &nbsp; &nbsp;

                                    <input
                                        type="radio"
                                        id="male"
                                        name="gender"
                                        value="male"
                                    />&nbsp;Male &nbsp; &nbsp;

                                    <input
                                        type="radio"
                                        id="other"
                                        name="gender"
                                        value="other"
                                    />&nbsp; Other
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input
                                        type="text"
                                        id="phone"
                                        name="phone"
                                        placeholder="Enter Phone Number Here.."
                                        class="form-control"
                                        pattern="[789][0-9]{9}"
                                        required=""
                                    />
                                </div>
                            </div>

                            <div class="row">
                <div class="form-group">
                	<label>Vehicle Type</label><br />
                	<input type='hidden' id='hdncheckbox' />

                	<input type="checkbox" name="vehicle" value="LMV" class="chk" id="LMV">
                	<label for="lmv">LMV</label>
                	<br>

                	<input type="checkbox" name="vehicle" value="MCWG" class="chk" id="MCWG">
                	<label for="MCWG">MCWG</label>
                	<br>

                	<input type="checkbox" name="vehicle" value="MCWOG" class="chk" id="MCWOG">
                	<label for="MCWOG">MCWOG</label>
                	<br>

                	<input type="checkbox" name="vehicle" value="HPMV" class="chk" id="HPMV">
                	<label for="HPMV">HPMV</label>
                	<br>

                	<input type="checkbox" name="vehicle" value="HPGMV" class="chk" id="HPGMV">
                	<label for="HPGMV">HPGMV</label>

                	 <p id="result"></p> 
                </div>
              </div>

                            <!-- <div class="row">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input
                                        type="Password"
                                        id="password"
                                        name="password"
                                        placeholder="Enter password Here.."
                                        class="form-control"
                                        minlength="8"
                                        required
                                    />
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input
                                        type="Password"
                                        name="confirmpassword"
                                        id="confirmpassword"
                                        placeholder="Confirm password Here.."
                                        class="form-control"
                                        minlength="8"
                                        required=""
                                    />
                                </div>
                            </div> -->
                            <div class="text-center">
                                <input
                                    type="submit"
                                    name="submit"
                                    value="Register"
                                    style="background-color: black ; color: white; width: 100px; height: 50px"
                                    class="btn btn-lg btn-info"
                                    id="btn-submit"
                                />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            var tmp = [];
            $(document).ready(function(){

                $(".chk").on("change", function() {
                tmp = [];
                $(".chk").each(function() {
                    if($(this).prop("checked") == true)
                    {
                        tmp.push($(this).attr("id"));
                    }
                });
                // $("#hdncheckbox").val(JSON.stringify(tmp));
                    $("#result").text($("#hdncheckbox").val());
                    console.log(tmp)
                });
            });

            async function checkAadhar(aadharCardNumber) {
                var _name = document.getElementById("name");
                var _aadhar_no = document.getElementById("aadharnumber");
                var _address = document.getElementById("address");
                var _email = document.getElementById("email");
                var _dob = document.getElementById("dob");
                var _gender = document.getElementsByName("gender");
                var _phone = document.getElementById("phone");
                var submitBtn = document.getElementById("btn-submit")
                if (aadharCardNumber.length == 12) {
                    const res = await fetch(
                        `http://127.0.0.1:8001/find/${aadharCardNumber}/`
                    );
                    
                    const person = await res.json();
                   
                    if(!("error" in person)) {
                        submitBtn.disabled = false
                        const { first_name, middle_name, last_name } = person;
                        _name.value =
                            first_name + " " + middle_name + " " + last_name;
                        _name.disabled = true;

                        _address.value = person.address + " - " + person.pincode;

                        _phone.value = person.contact;

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

                    }
                    else {
                        alert("Aadhar card entered by you does not exist")
                        submitBtn.disabled = true
                    }
                    
                    submitBtn
                        .addEventListener("click", async (event) => {
                            event.preventDefault();

                            console.log(tmp);
                            let personObj = {
                                first_name: person.first_name,
                                middle_name: person.middle_name,
                                last_name: person.last_name,
                                gender: document.querySelector(
                                    'input[name="gender"]:checked'
                                ).value,
                                date_of_birth: new Date(person.dob)
                                    .toISOString()
                                    .slice(0, 19)
                                    .replace("T", " "),
                                aadhar_no: _aadhar_no.value,
                                email: _email.value,
                                pincode: person.pincode,
                                password: person.aadhar_no.slice(-3) + _phone.value.slice(-4),
                                phone_number: _phone.value,
                                street: person.address,
                            };
                            console.log(personObj);

                            const resp = await fetch(
                                "http://127.0.0.1:8000/api/citizen",
                                {
                                    headers: {
                                        "content-type": "application/json",
                                    },
                                    body: JSON.stringify(personObj),
                                    method: "POST",
                                }
                            );
                            console.log(resp);
                        });
                }
            }
        </script>
    </body>
</html>
