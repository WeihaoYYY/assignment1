<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Assignment 1">
    <meta name="viewport" author="Weihao Yue">
    <title>searching process</title>
</head>
<body>
    <h1>Title searching process</h1>
    <?php
        $errMsg = "";
        if(isset($_GET["title"])){
			$title = $_GET["title"];
			$filename = "jobs.txt";
			$pattern = "/^[a-zA-Z0-9\,\.\ \!]{1,20}$/";
			if(file_exists($filename)){ 
                $handle = fopen($filename,"r"); 
                while (!feof($handle)) { 	//loop the whole file unit the end(mouse, pointer)
                    $data = fgets($handle);
                    $info = explode("\t", $data);
                    if(strpos($info[1], $title) !== false) 	{
                        echo "<pre>$data<br/></pre>";
                        show($data);            
                    }
                }
                fclose($handle);
            }else{
                $errMsg = "<p>required file does not exist</p>";
            }
        }

        if( strcmp($errMsg, "") == 0 ){
            
            
        }else{
            echo $errMsg;
        }

        function show($list){   //show each list's details
            $info = explode("\t", $list);
            echo "<p>Job ID: $info[0]</p>";
            echo "<p>Job Title: $info[1]</p>";
            echo "<p>Description: $info[2]</p>";
            echo "<p>Closing Date: $info[3]</p>";
            echo "<p>Position: $info[4]</p>";
            echo "<p>Application: $info[5]</p>";
            echo "<p>Location: $info[6]  $info[7]</p>";		
		}



                


    ?>
    
</body>
</html>