<?php

function allStudents(){
    global $students;
    
    $stud = [];
    
    foreach ($students as $student){
        $upperCase= strtoupper($student["stu"]);
        
        if(!in_array($upperCase, $stud)){
            $stud[]=$upperCase;
        }
    }
    sort($stud);
    return $stud;
}

function searchById($stuID){
    global $students;
    
    foreach ($students as $student){
        //buradaki Stu No databaseden geliyor
        if($student["stuNo"]===$stuID){
            return [$student];
        }
    }
    return [];
}

function searchBy($stu,$grade){
global $students;

$found=[];

foreach($students as $student){
    if(strtoupper($student["stu"])=== $stu && $student["grade"]<=$grade){
        
         $found[]=$student;
    }
}
return $found;
}