<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Assignment 1">
    <meta name="viewport" author="Weihao Yue">
    <link href= "styles.css" rel="stylesheet" />
    <title>searching process</title>
</head>
<body>
    <header class="search"><h1>Search result</h1></header> 
    <?php
        $errMsg = "";
        $storeTime = [];
        $j = 0;
        $select = "null";

        if(isset($_GET['title'])){
            $title = $_GET['title'];
        } 
        else
            $title = "null";

        if(strcmp($title, "") == 0)
            $title = "null";

        //echo 'hi - '.$title.'';

        $pattern = "/^[a-zA-Z0-9\,\.\ \!]{1,20}$/"; // set regular expression  
        if (preg_match($pattern, $title) == 0) 
            $errMsg .= "<p>Job title does not meet the requirement \n</p>";

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
        
        umask(0007);
        $dir = "../../data/assign1/jobs.txt"; 
        if(!file_exists($dir))
        mkdir($dir, 02770);  //../../data/lab05"

        if( strcmp($errMsg, "") == 0 ){
            $desc = "null";
            $date = "null";

            $select = $select."\t".$title."\t".$desc."\t".$date."\t".$position."\t".$contract."\t".$post."\t".$email."\t".$state;
    
            $details = explode("\t", $select);
            //echo $select;

            

            $filename = "../../data/assign1/jobs.txt";
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
                        if($details[$i] == "null"){
                            $i++;
                            //echo 'continue '.$i.' <br>';
                            continue; 
                        }

                        /*echo "$i  ";
                        echo $info[$i];  
                        echo "  ";    
                        echo "+ $details[$i]";
                        echo "<p></p>";*/

                        /*if($details[$i] != $info[$i] && $i !=8){
                            echo"breaking $i";
                            break;
                        }elseif(trim($details[8]) == "all" && $i == 8) { 
                            showHand($data);
                            $storeTime[$j] = $data;
                            $j++;
                        }elseif(trim($details[8]) == trim($info[8]) && $i == 8){
                            showHand($data);
                        }*/
                        

                        if((strpos(trim($info[$i]), trim($details[$i])) === false) && $i<8) {
                            //echo "<p>$i miss</p>";
                            break;
                        }elseif(strpos(trim($details[8]), trim($info[8])) !== false && $i == 8){
                            //echo "<p>------totally same!!!-----</p>";
                           // $storeTime[$j] = $data;
                            //$j++;
                            showHand($data);
                        }
                        $i++;
                    }

                    //echo "<p>------next-------</p>";
            }
            fclose($handle);
            
            /*for($i = 0; $i < $j; $i++){
                $lists = explode("\t", $storeTime[$i]);
                $time[$i] = $lists[3];
            }
            
            for($i = 0; $i < $j; $i++){
                $bigTime = date("d/m/Y");
                for($x = 0; $x < $j; $x++){
                    echo "<p>now$x  =   $time[$x] </p>";
                    echo "<p>big time =   $bigTime</p>";
                    if(strtotime($time[$x]) > strtotime($bigTime) ){
                        echo "<p>$x  +  $time[$x]</p>";
                        $bigTime = $time[$x];
                        echo "<p>big time =   $bigTime</p>";
                    } 
                    echo "<p>----------------------------------</p>";
                }
                echo "<p>final big time =   $bigTime</p>";
                    showHand($storeTime[$i]);
            }*/
   
        }
        
        }else{
            echo '<p>'.$errMsg.'</p>';
            echo '<a href="index.php">home page - index</a>';
        }

        
                
 




    function showHand($list){   //show each list's details
        $info = explode("\t", $list);
        $toDate = date("d/m/Y");
        //echo '<p>'.$info[3].'</p>';
        if(strtotime($info[3]) > strtotime($toDate)){
            echo "====================";
            echo "<pre><p>Job ID:            $info[0]</p></pre>";
            echo "<pre><p>Job Title:         $info[1]</p></pre>";
            echo "<pre><p>Description:       $info[2]</p></pre>";
            echo "<pre><p>Closing Date:      $info[3]</p></pre>";
            echo "<pre><p>Position:          $info[4]</p></pre>";
            echo "<pre><p>contract:          $info[5]</p></pre>";
            echo "<pre><p>Application:       $info[6]  $info[7]</p></pre>";
            echo "<pre><p>Location:          $info[8]</p></pre>";
        }
        		
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
    <footer>
    <a href="postjobform.php" class ="a">Post a job vacancy </a>
    <a href="searchjobform.php" class ="b">Search for a job vacancy</a>
    <a href="about.php" class ="c">About this assignment</a>
    </footer>
</body>
</html>