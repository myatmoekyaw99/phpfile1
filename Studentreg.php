<!DOCTYPE html>
<html>
    <head><title>Student Registration</title>
    <style>
        form{
            margin-top:40px;
        }
    </style>
    </head>
<body>
    <?php include 'menu1.php';?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Name: <input type="text" name="name"> <br><br>
    E-mail: <input type="email" name="mail"> <br><br>
    Phone: <input type="phone" name="phone"> <br><br>

    Township:
    <select name="township">
            <option value="">Select...</option>
            <option value="insein">Insein</option>
            <option value="kamayut">Kamayut</option>
            <option value="baham">Baham</option>
    </select> <br><br>

    Grade:
    <input type="radio" name="grade" value="fourth">Fourth year
    <input type="radio" name="grade" value="fifth">Fifth year
    <br><br>

    Subject:
    <input type="checkbox" name="sub[]" value="501">501
    <input type="checkbox" name="sub[]" value="502">502
    <input type="checkbox" name="sub[]" value="503">503
    <input type="checkbox" name="sub[]" value="501">501
    <br><br>
    <input type="submit" name="submit" value="Submit"> 

    </form>
    <hr>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $phone = $_POST['phone'];
            $township=$_POST['township'];
            $grade=$_POST['grade'];
            $subject=$_POST['sub'];

            $sdata = "Name=".$name.";E-mail=".$mail.";Phone=".$phone.";Township=".$township.";Grade=".$grade.";Subject=";
            if(!empty($subject)) 
            {
                $val="";
                foreach($subject as $subjects)
                    {
                        $val.=$subjects." ";
                    }
            }echo $val;
                $sdata.=$val;

            $myfile = fopen("studata.txt", "a") or die("Unable to open file!");
            fwrite($myfile, $sdata."\n");
            fclose($myfile);

            
          }
    ?>

</body>
</html>
