
function mouseOut() {
	document.getElementById("box").innerHTML = "javascript yay";
	document.getElementById("box").style.backgroundColor = "red";
}


function validateForm() {
	var input = document.forms["form1"]["text-area"].value;
	if(input == "") {
		window.alert("oops try again");
		return false;
	} else {
		window.alert("Hello");
	}
}

