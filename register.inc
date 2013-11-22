<script language='javascript' type='text/javascript'>
function check(input) {
	if (input.value != document.getElementById('password').value) {
		input.setCustomValidity('The two passwords must match.');
	} else {
		// input is valid -- reset the error message
		input.setCustomValidity('');
	}
}
<a href="?register=0">

</script>
	<form method="post" action="?register=1">
	