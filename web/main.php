<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet"
   	type = "text/css"
   	href = "myStyle.css" />

</head>


<body>

<h1>BikeRiding</h1>

<div class="navbar">
  <a href="main.php">Home</a>
  <a href="pageTwo.php">Fixing</a>
  <div class="dropdown">
    <button class="dropbtn">Assignments 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Assignment 1</a>
      <a href="#">Assignment 2</a>
      <a href="#">Assignment 3</a>
    </div>
  </div> 
</div>
<br>
<img src="bike01.jpeg" alt="Icon" class="picture01">

<p>Hello, and welcome to bikeriders. We have been in business for over 10 years and your one stop place for finding places to get out and ride. Whether your in a city or in the middle of nowhere, we hope that you will use our map to plan your next adventure. If your in the dirt or on the rode you might find some new and exciting places to ride. We also strive to help you fix any bike related problem that you might have. Please check out our Fix it page at the top of our web site. If you have any questions please send us an email and we'll get right back to you.</p> 

<img src="bike02.jpeg" alt="Icon" class="picture01" style="width:700px;height:500px;">

<?php
//Define var
$emailErr = $commentErr = "";
$email = $comment = "";

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }



?>

<h3>Please enter you email and submit any questions that you might have</h3>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p><span class="error">* required field</span></p>

	E-mail: <input type="text" name="email">
  	<span class="error">* <?php echo $emailErr;?></span>
  	<br><br>
  	Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  	<span class="error">* <?php echo $commentErr;?></span>
  	<br><br>
  	<input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>