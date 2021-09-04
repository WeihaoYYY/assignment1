<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Assignment 1">
    <meta name="viewport" author="Weihao Yue">
    <title>job form</title>
</head>
<body>
<h1>Job Vacancy Posting System</h1>
    <form action="postjobprocess.php" method="post">

    <p><label for="PID">Position ID</label>
    <input type="text" name="PID" maxlength="5" placeholder="P0001"  ><br> </p> //pattern="^P\d{4}$"

    <p><label for="jobTitle">Title</label>
    <input type="text" name="jobTitle" maxlength="20" ><br></p>
    
    <p><label for="desc">Description</label>
    <textarea name="desc" id="" cols="30" rows="10"  placeholder="Job description"></textarea><br></p>

    <p>
    <input type="text" name="date" id="dob" maxlength="10" size="10" placeholder=<?php echo date("d/m/Y"); ?>
     title="dd/mm/yyyy" ><br></p> //pattern="\d{1,2}/\d{1,2}/\d{4}"

    
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
    //TODO what part should i use php sytax and what part should i use php sytax? echo or h3?

    <p>All fields are required</p>
    <a href="index.php">Return to home page</a>


</body>
</html>