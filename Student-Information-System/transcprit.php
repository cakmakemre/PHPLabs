<!DOCTYPE html>
<?php
require './db_tables.php ';
$id=$_GET["id"];
//var_dump($id);

$std=$students[$id];

?>

<html>
    <head>
        <title>Transcript Page</title>
        <meta charset="UTF-8">
        <link href="app.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <table>
            <tr>
                <td> <img src="<?=$id?>.jpeg" width='150px' ></img></td>
                <td>
                    <table id="info">
                        <tr>
                            <td>Name</td>
                            <td><?= $std["name"]?></td>
                        </tr>
                        <tr>
                            <td>Surname</td>
                            <td><?= $std["lastname"]?></td>
                        </tr>
                        <tr>
                            <td>Bilkent ID</td>
                            <td><?=$id?></td>
                        </tr>
                        <tr>
                            <td>CGPA</td>
                            <td><?= $std["cgpa"]?></td>
                        </tr>
                    </table>
                </td>
               
            </tr>
        </table>
        <table id="transcript">
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Grade</th>
                <th>Credits</th>
                <th>Grade Points</th>
            </tr>
            <?php
            $sum_grade=0;
            $sum_credit=0;
            
            foreach ($transcript as $taken_course) {
            if($taken_course["student_id"]==$id){
                    $code=$taken_course["course_code"];
                    $grade=$taken_course["grade"];
                    $credit= $courses[$code]["credit"];
                    
                    echo "<tr>";
                    echo "<td>" . $code . "</td>";
                    echo "<td>" . $courses[$code]["name"] . "</td>";
                    echo "<td>" . $grade . "</td>";
                    echo "<td>" . $credit . "</td>";
                    $sum_credit+=$credit;
                    $contr=$letter_mapping[$grade]*$credit;
                    $sum_grade+=$contr;
                    echo "<td>" . $contr . "</td>";
                    echo "</tr>";
                }
            }
            ?>
            <tr>
                <td>GPA</td>
                <td colspan="4"><?= round($sum_grade/$sum_credit,2)?></td>
             
            </tr>
        </table>
    </body>
</html>
