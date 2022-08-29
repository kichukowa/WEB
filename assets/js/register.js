$(document).ready(function() {
	//when the page is ready the code is loaded

	$("#hideLogin").click(function() { //when the following id element is clicked
		$("#loginForm").hide();
		$("#registerForm").show();
	});

	$("#hideRegister").click(function() {
		$("#loginForm").show();
		$("#registerForm").hide();
	});
});