<!DOCTYPE html>
  <?php
  require './db_tables.php';
  //var_dump($students);
  
  ?> 
<html>
    <head>
    <title>Student Information System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="app.css" rel="stylesheet" type="text/css"/>
</head>

    <body>
        <h1>Student Lists</h1>
        <table>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>CGPA</th>
                <th>Birthday</th>
                <th>Transcript</th>
            </tr>
            <?php
            //Dynamic part
            $i=0;
            foreach ($students as $id => $std) {
                echo "<tr>";
                echo "<td>" . ($i+1) ."</td>";
                echo "<td>" . $id ."</td>";
                echo "<td>" . $std["name"] ."</td>";  
                echo "<td>" . $std["lastname"] ."</td>";  
                echo "<td>" . $std["cgpa"] ."</td>";  
                echo "<td>" . $std["birthday"] ."</td>";
                echo "<td><a href='transcprit.php?id=$id'><img src='report.png' height='25'></a></td>";
                echo "</tr>";
                $i++;
            }
            ?>
            
            
         
        </table>
    </body>


</html>
