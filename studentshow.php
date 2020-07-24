<?php include 'menu1.php';?>
<?php
    $myfile = fopen("studata.txt", "r") or die("Unable to open file!");
    
    echo "<table style='border:2px solid'>";
    echo "<tr>";
    echo "<td style='border:2px solid'>Name</td>";
    echo "<td style='border:2px solid'>E-mail</td>";
    echo "<td style='border:2px solid'>Phone</td>";
    echo "<td style='border:2px solid'>Township</td>";
    echo "<td style='border:2px solid'>Grade</td>";
    echo "<td style='border:2px solid'>Subject</td>";
    echo "</tr>";
    $stulist=array();
    while(!feof($myfile)) {
        
        echo "<tr style='border:2px solid'>";
        $st=fgets($myfile);
        if($st!=""){
            $str_arr = explode (";", $st); 

            $res=explode("=",$str_arr[0]);
            $res1=explode("=",$str_arr[1]);
            $res2=explode("=",$str_arr[2]);
            $res3=explode("=",$str_arr[3]);
            $res4=explode("=",$str_arr[4]);
            $res5=explode("=",$str_arr[5]);
            $student=array($res,$res1,$res2,$res3,$res4,$res5);
            for($i=0;$i<6;$i++){
                echo "<td style='border:2px solid'>".$student[$i][1]."</td>";
            }
        }
        echo "</tr>";
    }
    
    fclose($myfile);
    echo "</table>";
?>