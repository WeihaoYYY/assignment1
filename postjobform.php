<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Assignment 1">
    <meta name="viewport" author="Weihao Yue">
    <title>job form</title>
    <link href= "styles.css" rel="stylesheet" />
</head>
<body>
<header class="form"><h1>Search result</h1></header> 
    <form action="postjobprocess.php" method="post">

    <p><label for="PID">Position ID</label>
    <input type="text" name="PID" maxlength="5" placeholder="P0001" pattern="^P\d{4}$" required ><br> </p> 

    <p><label for="jobTitle">Title</label>
    <input type="text" name="jobTitle" maxlength="20" $pattern = "/^[a-zA-Z0-9\,\.\ \!]{1,20}$/" required><br></p>
    
    <p><label for="desc">Description</label>
    <textarea name="desc" id="" cols="30" rows="10"  placeholder="Job description" $pattern = "/^.{1,260}$/" required></textarea><br></p>

    <p>
    <input type="text" name="date" id="dob" maxlength="10" size="10" required placeholder=<?php echo date("d/m/Y"); ?>
     title="dd/mm/yyyy" pattern="\d{1,2}/\d{1,2}/\d{4}" ><br></p> 

    
    <fieldset>
    <legend>Position</legend>
    <p><input type="radio" name="position" value="full" id="full" checked="">Full Time</p>
    <p><input type="radio" name="position" value="part" id="part">Part Time</p>

    </fieldset>
    
    <fieldset>
    <legend>Contract</legend>
    <p><input type="radio" name="contract" value="ongo" id="ongo" checked="">On-going</p>
    <p><input type="radio" name="contract" value="fixed" id="fixed">Fixed term</p>
    </fieldset>

    <fieldset>
    <legend>Accept Application</legend>
    <p><label for="accept">Post</label> 
	<input type="checkbox" id="post" value="post" name="post"></p>

    <p><label for="email">Email</label> 
	<input type="checkbox" id="email" name="email" value="email" checked=""></p>
    </fieldset>

    <p><label for="state">State</label>
	<select name="state" id="state" required="required">
	<option required="required">---</option>
	<option value="VIC">VIC</option>
	<option value="NSW">NSW</option>
	<option value="QLD">QLD</option>
	<option value="NT">NT</option>
	<option value="WA">WA</option>
	<option value="SA">SA</option>
	<option value="TAS">TAS</option>
	<option value="ACT">ACT</option>
	</select>
    </p>

    <input type="submit" value="Apply">
    <input type="reset" value="Reset">

    </form>

    <p>All fields are required</p>

    <footer>
    <a href="postjobform.php" class ="a">Post a job vacancy </a>
    <a href="searchjobform.php" class ="b">Search for a job vacancy</a>
    <a href="about.php" class ="c">About this assignment</a>
    </footer>


</body>
</html>