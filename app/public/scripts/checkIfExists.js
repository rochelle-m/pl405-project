

async function checkAadhar(val) {
    console.log(val);
    const res = await fetch("/api/citizen_exists", {
        method: 'POST', 
        headers: {
          'Content-Type': 'application/json',
        },
        body: {'aadhar_no': val},
      });
    const data = await res.json();
    console.log(data); 
}
