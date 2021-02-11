<?php

// define variables and set to empty values
$aadharnumber = $name = $address =  $dob = $gender = $mobile = $password = $confirmpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $aadharnumber = test_input($_POST["aadharnumber"]);
  $name = test_input($_POST["name"]);
  $address = test_input($_POST["address"]);
  $dob = test_input($_POST["dob"]);
  $gender = test_input($_POST["gender"]);
  $mobile = test_input($_POST["mobile"]);
  $password = test_input($_POST["password"]);
  $confirmpassword = test_input($_POST["confirmpassword"]);


}

function test_input($mobile)
{ 
    if (!empty($mobile)) 
    {

        $isMobileNmberValid = TRUE; 
        $mobileDigitsLength = strlen($mobile);

        if ($mobileDigitsLength != 10) 
        { 
            $isMobileNmberValid = FALSE; 
        } 
        else
        { 
            $isMobileNmberValid = TRUE;
        } 
        return $isMobileNmberValid; 
    } 
    else 
    { 
        return false; 
    } 
}

/*
function test_input($phone)
{
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) == 10 ) {
        return true;
     } else {
       return false;
     }
}

*/
if (test_input($mobile) == true) {
   echo "Phone number is valid";
} else {
  echo "Invalid phone number";
}

?>
