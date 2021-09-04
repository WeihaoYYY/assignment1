<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test page</h1>
    <form action="" method="post"> 
        <label for="jobID">name</label>
        <input type="text" name="ID"   required="required">
        
        <input type="submit" value="Submit">
    </form>

    <?php 
        $id = $_POST['ID'];
        //$pattern = "/^\d{1,2}/\d{1,2}/\d{4}$/"; // set regular expression pattern  /^([0-9]{4})-([0-9]{2})-([0-9]{2})$/
        //$pattern = "/^[a-zA-Z0-9\,\.\!\ \]+{20}$/";
        //echo $id;   
        //echo preg_match($pattern, $id);

        $str= 'bcca cdfasf afasaa';
        $needle= 'aca';
        echo strpos($str, $needle);
        ?>



    
</body>
</html>