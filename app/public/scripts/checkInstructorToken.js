async function checkToken(val) {
    let obj = {
        'token': val
    }
    const resp = await fetch(
        "http://127.0.0.1:8000/api/checkToken",
        {
            headers: {
                "content-type": "application/json",
            },
            body: JSON.stringify(obj),
            method: "POST",
        }
    );

    const {exists} = await resp.json();

    let errorMsg = document.getElementById("token_error")
    let submitBtn = document.getElementById("submitbtn")

    console.log(exists);
    if(!exists){
        errorMsg.innerHTML = "Invalid Token"
        submitBtn.disabled = true     
    }
    else {    
        errorMsg.innerHTML = ""
        submitBtn.disabled = false   
    }
}
