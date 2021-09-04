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

        $select = "null";
        if(isset($_GET['title'])){
            $title = $_GET['title'];
        } 
        else
            $title ="null";

        if(isset($_GET['position'])){
            $position = $_GET['position'];
        } 
        else
            $position = "null";

        if(isset($_GET['contract'])){
            $contract = $_GET['contract'];
        } 
        else
            $contract = "null";

        if(isset($_GET['post'])){
            $post = $_GET['post'];
        } 
        else
            $post = "null";

        if(isset($_GET['email'])){
            $email = $_GET['email'];
        } 
        else
            $email = "null";

        if(isset($_GET['state'])){
            $state = $_GET['state'];
            if($state == "---")
                $state = "VICNSWQLDNTWASATASACT";
                
        } 

        $desc = "null";
        $date = "null";

        $select = $select."\t".$title."\t".$desc."\t".$date."\t".$position."\t".$contract."\t".$post."\t".$email."\t".$state;
 
        $details = explode("\t", $select);

        

        $filename = "jobs.txt";
        if(file_exists($filename)){ 
            $handle = fopen($filename,"r");
            while (!feof($handle) ) { 	//loop the whole file unit the end(mouse, pointer)
                $data = fgets($handle);
                //      a                       full    fixed   post    null    ACT
                //P0001	a	aaaa	11/22/3333	full	ongo	post	email	ACT
                //  0   1     2         3        4       5        6       7      8 
                $info = explode("\t", $data);
                $i = 0;

                while($i < 9){
                    if(strcmp($details[$i], "null") == 0){
                        $i++;
                        continue;
                        echo 'continue <br>';
                    }
                    //没找到就返回false，找到就返回数字(就不返回false)
                    if(strpos($details[$i], $info[$i]) === false)
	                    break;
                    elseif($i ==8)
                        showHand($data);
                    $i++;
                }

                
        }
        
    }
                





    function showHand($list){   //show each list's details
        $info = explode("\t", $list);
        echo "====================";
        echo "<p>Job ID: $info[0]</p>";
        echo "<p>Job Title: $info[1]</p>";
        echo "<p>Description: $info[2]</p>";
        echo "<p>Closing Date: $info[3]</p>";
        echo "<p>Position: $info[4]</p>";
        echo "<p>contract: $info[5]</p>";
        echo "<p>Application: $info[6]  $info[7]</p>";
        echo "<p>Location: $info[8]</p>";		
    }

    /*
    while( $i < 9){ //start

                    echo "<p>start $i agian</p>";
                    
                    if(!strcmp($details[$i],"null")){
                        if($i<8)
                            $i++;
                        echo "-----";
                        echo $i;
                        echo $details[$i];
                        continue;
                    }
                    
                    echo "$i  ";
                    echo $info[$i];  
                    echo "  ";    
                    echo "+ $details[$i]";
                    echo "<p></p>";
                    
                    //check if the strings are same, if not, break the loop
                    //and check the next list
                    if((strpos($info[$i], $details[$i]) === false) && $i<8) {
                        echo "<p>$i miss</p>";
                        $i = 10;
                    }elseif(strpos($details[8], $info[8]) !== false && $i == 8){
                        echo "<p>------totally same!!!-----</p>";
                        showHand($data);
                        $i = 10;
                    }else
                        echo "<p> NO </p>";


                    $i++;
                    echo "<p>into $i</p>";
                }
            echo "<p>----------------------</p>";*/



    ?>
    
</body>
</html>