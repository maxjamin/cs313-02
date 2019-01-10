<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet"
   	type = "text/css"
   	href = "myStyle.css" />

   	<script>
	function myMap() {
		var mapProp= {center:new google.maps.LatLng(51.508742,-0.120850),
  			zoom:5,
		};
		var map = new google.maps.Map(document.getElementById("googleMaps"),mapProp);
	}
	</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>


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


<div id="googleMaps" style="width:100%;height:400px;"></div>

</body>
</html>