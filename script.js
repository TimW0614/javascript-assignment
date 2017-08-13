
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


	$('input').focus(function() {
		$('#notification-bar').html('');
	});
	$(document).ready(function() {
		$("oink").click(function() {
			$.get({url: "https://baconipsum.com/api/?type=all-meat&sentences=1&start-with-lorem=1",
				success: function(result) {
					$("oink").html(result);
				}});
		});
	});


	$(function() {
		$(document).ready(function() {
			$("bacon-ipsum").hide();
		});
	});

	$(function() {
		$("bacon-ipsum").click(function() {
			$("bacon-ipsum").show();
		});
	});



}

