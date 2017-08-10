
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

	// Needed to simulate a JSON response
	var fakeResponse = {
		status: "error",
		message: "Username already in use"
	};


	$('input').blur(function() {
		var data = {};
		data[this.name] = this.value;

		if (this.value) {
			$.get(
				"https://baconipsum.com/api/?type=meat-and-filler",
				data,
				function (oink) {
					if (fakeResponse.status === 'error') {
						$('#notification-bar')
							.html('<p>' + fakeResponse.message + '<p>')
					}
				});
		}
	});

	$('input').focus(function() {
		$('#notification-bar').html('');
	});
	$(document).ready(function() {
		$("oink").click(function() {
			$.ajax({url: "https://baconipsum.com/api/?type=meat-and-filler",
				success: function(result) {
					$("oink").html(result);
				}});
		});
	});



}

