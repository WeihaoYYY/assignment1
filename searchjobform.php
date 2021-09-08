<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Assignment 1">
    <meta name="viewport" author="Weihao Yue">
    <link href= "styles/styles.css" rel="stylesheet" />
    <title>job search</title>
</head>

<body>

<header class="search"><h1>Job searching</h1></header> 
    <form action="advance.php" method="get">
    <div class="center">
    <p><label for="title">Title</label>
    <input type="text" name="Title" maxlength="20" ></p>
    
    <fieldset>
    <legend>Position</legend>
    <p><label for="full">Full time</label>
    <input type="radio" name="position" value="full" id="full"></p>

    <p><label for="part">part time</label>
    <input type="radio" name="position" value="part" id="part"></p>
    </fieldset>
    </div>
    
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

    <footer>
    <a href="postjobform.php" class ="a">Post a job vacancy </a>
    <a href="searchjobform.php" class ="b">Search for a job vacancy</a>
    <a href="about.php" class ="c">About this assignment</a>
    </footer>


</body>
</html>