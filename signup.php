<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<div class="left">
		<img src="img/logo.jpg" class="logo">

		<fieldset class="fieldset1">
			<legend>Personal Information</legend>
			<form>
				
				<label>First Name:</label>
				<input style="margin-left: 12px;" type="text" name="">
				<br>
				<label>Middle Name:</label>
				<input type="text" name="">
				<br>
				<label>Last Name:</label>
				<input style="margin-left: 14px;" type="text" name="">	
			</form>
		</fieldset>
		<fieldset class="fieldset2">
			<legend>Address</legend>
			<form>
				<label>Sitio/Street:</label>
				<input type="text" name="">
				<label style="margin-left: 20px;">Barangay:</label>
				<input type="text" name="">
				<br>
				<label>City:</label>
				<input style="margin-left: 35px;" type="text" name="">	
			</form>
		</fieldset>
		<fieldset class="fieldset3">
			<legend>Contact Information</legend>
			<form>
				<label>Phone:</label>
				<input type="text" name="">
				<label style="margin-left: 20px;">Email:</label>
				<input type="text" name="">	
			</form>
		</fieldset>
		<fieldset class="fieldset4">
			<legend>Login Info</legend>
			<form>
				<label>Username:</label>
				<input type="text" name="">
				<br>
				<label>Password:</label>
				<input style="margin-left: 2px;" type="text" name="">	
				<label style="margin-left: 20px;">Retype Password:</label>
				<input type="text" name="">
				<input type="submit" name=""value="Signup" class="submitbtn">	
			</form>
		</fieldset>
		<input style="margin-left: 8%;" type="checkbox" name="">
		<i style="font-weight: 700;">Terms and Conditions</i>
		<p style="font-size: 10px;margin-left: 9%; width: 80%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="right">
		<img style="width: 98.5%;border-radius: 0 20px 20px 0;height: 98.8%;" src="img/banner1.png" class="mySlides">
		<img style="width: 98.5%;border-radius: 0 20px 20px 0;height: 98.8%;" src="img/banner4.jpg" class="mySlides">
		<img style="width: 98.5%;border-radius: 0 20px 20px 0;height: 98.8%;" src="img/banner2.jpg" class="mySlides">
		<img style="width: 98.5%;border-radius: 0 20px 20px 0;height: 98.8%;" src="img/banner3.jpg" class="mySlides">
		<img style="width: 98.5%;border-radius: 0 20px 20px 0;height: 98.8%;" src="img/banner5.jpg" class="mySlides">
	</div>
<script>
	var myIndex = 0;
	carousel();

	function carousel() {
  	var i;
  	var x = document.getElementsByClassName("mySlides");
  	for (i = 0; i < x.length; i++) {
    	x[i].style.display = "none";  
  	}
  	myIndex++;
  	if (myIndex > x.length) {myIndex = 1}    
  	x[myIndex-1].style.display = "block";  
  	setTimeout(carousel, 2500);
}
</script>
</body>
</html>