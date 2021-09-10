<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Assignment 1">
    <meta name="viewport" author="Weihao Yue">
    <link href= "styles.css" rel="stylesheet" />
</head>
<body>
<header class="form"><h1>Job posting</h1></header>
<div class="center" >
    <?php
        $errMsg = "";
        
        umask(0007);
		$dir = "../../data/assign1/jobs.txt";
		if(!file_exists($dir))
		   mkdir($dir, 02770);
        
        //Input checked
        if(isset($_POST['post']) || isset($_POST['email'])){
            $PID = $_POST['PID'];
            $title = $_POST['jobTitle'];
            $desc = $_POST['desc'];
            $date = $_POST['date'];
            $position = $_POST['position'];
            //echo "<p> position = ".$position."</p>";
            $contract = $_POST['contract'];
            $state = $_POST['state'];
            //get post
            if(!isset($_POST['post']))
                $post = "null";
            else
                $post = $_POST['post'];
            //get email
            if(!isset($_POST['email']))
                $email = "null";
            else
                $email = $_POST['email'];

            //echo "<p> post = ".$post."</p>";
            //echo "<p> email = ".$email."</p>";

            //PID
            $pattern = "/^P\d{4}$/"; // set regular expression pattern 
            if (preg_match($pattern, $PID) == 0) 
                $errMsg .= "<p>Position ID does not meet the requirement \n</p>";
            else{
                $filename = "../../data/assign1/jobs.txt";
                echo "<h1>Data validation</h1>"; 	
                $handle = fopen($filename,"a+"); 
                while (! feof($handle)) { 	
                    $data = fgets($handle);
                    if(strpos($data, $PID) !== false) 	{
                        echo "<pre>$data<br/></pre>";
                        $errMsg .= "<p>Position ID is not unique \n</p>";
                    }
                }
                fclose($handle);
            }

            //title
            $pattern = "/^[a-zA-Z0-9\,\.\ \!]{0,20}$/"; // set regular expression  
            if (preg_match($pattern, $title) == 0) 
                $errMsg .= "<p>Job title does not meet the requirement \n</p>";

            //text area 
            $pattern = "/^.{1,260}$/"; // set regular expression  
            if (preg_match($pattern, $desc) == 0) 
                $errMsg .= "<p>Job description does not meet the requirement \n</p>";

            //date
            $pattern = "/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/"; // set regular expression  
            if (preg_match($pattern, $date) == 0) 
                $errMsg .= "<p>date does not meet the requirement \n</p>";

            //state
            if (strcmp("---", $state) == 0) 
                $errMsg .= "<p>A state is required for this job \n</p>";

        }else {     //input error message
            $errMsg .= "<p>Necessary information required \n</p>";
        }
        
        //Error message validation and file processing
        if( strcmp($errMsg, "") == 0 ){
            //file written
            $filename = "../../data/assign1/jobs.txt";//../../data/jobposts/
            if (filesize($filename) == 0){ //check if file is empty and add \n at the end of data
                $data = $PID."\t". $title."\t".$desc."\t".$date."\t".$position."\t".$contract."\t".$post."\t".$email."\t".$state;
            }
            else
			    $data = "\n".$PID."\t". $title."\t".$desc."\t".$date."\t".$position."\t".$contract."\t".$post."\t".$email."\t".$state;
			$handle = fopen($filename, "a+");
						fwrite($handle, $data);
						fclose($handle);
            echo '<p style="color: green">All data are written to '.$filename.'</p>';
            echo '</br>';
        
            
        }else{
            echo '<p style="color: red">'.$errMsg.'</p>';
            echo '</br>';
            
        }
    ?>
</div>
    <a href="index.php">Home page</a>

    
</body>
</html>
