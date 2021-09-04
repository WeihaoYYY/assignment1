<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Assignment 1">
    <meta name="viewport" author="Weihao Yue">
    <title>job search</title>
</head>

<body>
<h1>Search page</h1>
    <form action="advance.php" method="get">

    <p><label for="title">Title</label>
    <input type="text" name="Title" maxlength="20" ><br></p>
    
    <fieldset>
    <legend>Position</legend>
    <p><input type="radio" name="position" value="full" id="full"  >Full Time</p>
    <p><input type="radio" name="position" value="part" id="part">Part Time</p>

    </fieldset>
    
    <fieldset>
    <legend>Contract</legend>
    <p><input type="radio" name="contract" value="ongo" id="ongo"  >On-going</p>
    <p><input type="radio" name="contract" value="fixed" id="fixed">Fixed term</p>
    </fieldset>

    <fieldset>
    <legend>Accept Application</legend>
    <p><label for="accept">Post</label> 
	<input type="checkbox" id="post" value="post" name="post"></p>

    <p><label for="email">Email</label> 
	<input type="checkbox" id="email" name="email" value="email"  ></p>
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
    <a href="index.php">Return to home page</a>


</body>
</html>