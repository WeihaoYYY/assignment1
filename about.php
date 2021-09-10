<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Assignment 1">
    <meta name="viewport" author="Weihao Yue">
    <link href= "styles.css" rel="stylesheet" />
    <title>About</title>
</head>
<body>
<header class="about"><h1>About</h1></header> 
    <ol>
        <li> What is the PHP version installed in mercury?</li>
        <ul>
        <?php
        echo '<li><p>PHP version is '.phpversion().'</p></li>';
        echo "</br>";
        ?></ul>

        <li> What tasks you have not attempted or not completed?</li> 
        <ul>

        <li><p>the last task, sort the time</p></li>
        </br>
        </ul>

        <li> What special features have you done, or attempted, in creating the site that we should 
        know about?</li> 
        <ul>

        <li><p>Nothing, finishing necessary tasks have token a long time from me </p></li>
        </br>
        </ul>


        <li> What discussion points did you participated on in the unit’s discussion board for 
Assignment 1? If you did not participate, state your reason</li> 
        <ul>

        <li><p>I didn't make any contribution because I do not know the answer to most of the questions, so i just post a question in "assignment 1"</p></li>
        <img src="styles/1.png" alt="one">
        </br>
        </ul>
        
        <li><a href="index.php">Home page - index.php</a></li>
    </ol>

    <footer>
    <a href="postjobform.php" class ="a">Post a job vacancy </a>
    <a href="searchjobform.php" class ="b">Search for a job vacancy</a>
    <a href="about.php" class ="c">About this assignment</a>
    </footer>

</body>
</html>