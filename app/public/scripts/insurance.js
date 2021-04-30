function validate(){
	var str = document.getElementById("vehiclenumber").value;

 	var pattern =/[A-Z]{2}\/[0-9]{2}\/[A-Z]\/[0-9]{4}$/;

 	var result = str.match(pattern);

 	if(!result){
 	alert("check vehicle number");
 	}
 	else
 		alert("done");
 }