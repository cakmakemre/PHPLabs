<?php

require 'stuDB.php';
//var_dump($students);
require 'functions.php';
const MAX_GRADE=100;
//var_dump(allStudents());
$stud=allStudents();

if(isset($_POST["btnSearch"])){
    extract($_POST,EXTR_PREFIX_ALL, "g");
    //var_dump($g_stuuu); 
    //html de
    
    $g_maxGrade = !empty($g_maxGrade)? $g_maxGrade :MAX_GRADE;
    
    if (!empty($g_stuID)){
        $result=searchById($g_stuID);
        //var_dump($result);
    }   else{
        $result=searchBy($g_stuuu,$g_maxGrade);
        //var_dump($result);
}
}

$g_stuuu=isset($g_stuuu) ? $g_stuuu : "";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Bilkent Grade</title>
     <style>
            body { font-family: arial;  background-image: url("1.jpeg");}
            h1 { text-align: center; color:#fde0dc;text-shadow: 2px 2px 5px black;}
            table { margin:30px auto;}
            table [type="text"] { width: 200px;}
            td { padding: 5px 10px; text-align: center;}
            #resultTable { border-collapse: collapse;}
            #resultTable th {
                border-top: 1px solid black;
                border-bottom: 1px solid black;
                padding: 5px 20px;
                background:#cfd8dc;
            }
            [colspan='6'] { text-align: right; font-size: 0.8em;}
            #resultTable tr{ background:#fde0dc;}
            #resultTable tr:nth-child(2n+1) { background: #d0d9ff;}
     </style>
</head>
<body>
    <h1> Student Grade System </h1>
    <form action="stuApp.php" method="post">
        
        <table>
            <tr>
                <td>
                    <input type="text" name="stuID" placeholder="Student ID"> </input>
                </td>
                
                <td>
                    <select name="stuuu"> 
                       <?php
                       foreach ($stud as $stuu){
                           if($stuu===$g_stuuu){
                           echo "<option selected>",$stuu,"</option>";

                           }else{
                           echo "<option>",$stuu,"</option>";
                       }
                       
                           }
                       ?>
                    </select>
                </td>
                
                <td>
                    <input type="text" name="maxGrade" placeholder="Grade"> </input>
                </td>
                
                <td>
                    <button type="submit" name="btnSearch" > &#9889;</button>
                </td>
                
                <td>
                    
                </td>
            </tr>
        </table>          
    </form>
    
    <?php if (isset($result)){ ?>
    
    <table id="resultTable">
            <tr>
                <th>NO</th>
                <th>ID Number</th>
                <th>Student Name</th>
                <th>Course Name</th>
                <th>Grade</th>
                <th>Status</th>
            </tr>
            <?php
            $i=0;
            foreach ($result as $student){
           
               echo "<tr>";
               echo "<td>". ++$i."</td>"; 
               echo "<td>". $student["stuNo"] ."</td>";   
               echo "<td>". $student["stu"] ."</td>";   
               echo "<td>". $student["lesson"] ."</td>";   
               echo "<td>". $student["grade"] ."</td>";   
               echo "<td>". ($student["status"]===0 ? "&#10060" : "&#x2705") ."</td>";   
               echo "</tr>";
                }
            ?>
        </table>
    
    <?php } ?>
    
</body>
</html>
