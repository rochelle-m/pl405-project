

async function checkAadhar(val) {
    let obj = {
        'aadhar_no': val
    }
    const resp = await fetch(
        "http://127.0.0.1:8000/api/citizen_exists",
        {
            headers: {
                "content-type": "application/json",
            },
            body: JSON.stringify(obj),
            method: "POST",
        }
    );

    const {exists} = await resp.json();

    let errorMsg = document.getElementById("aadhar_error")
    let submitBtn = document.getElementById("submitbtn")

    if(!exists){
        errorMsg.innerHTML = "User has not registered"
        submitBtn.disabled = true     
    }
    else {    
        errorMsg.innerHTML = ""
        submitBtn.disabled = false   
    }
}
