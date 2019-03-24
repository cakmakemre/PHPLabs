<?php
/* Simulation of Database Tables with Sequential and Associative Arrays 
 *
 * Three Tables : (all capital shows primary keys)
 * students   : "ID", "name", "lastname", "cgpa", "birthday"
 * courses    : "COURSE_CODE", "name", "credit"
 * transcript : "student_id", "course_code", "grade"
 */
$students = [
  '20149295' => [ 'name' => 'Emre', 'lastname' => 'Çakmak', 'cgpa' => 3,28, 'birthday' => '12-05-1996' ],
  '20145043' => [ 'name' => 'Armağan', 'lastname' => 'Oğuz', 'cgpa' => 3.72, 'birthday' => '22-04-1999' ],
  '20144902' => [ 'name' => 'Berk', 'lastname' => 'Önder', 'cgpa' => 3.84, 'birthday' => '30-07-2000' ],
  '20145657' => [ 'name' => 'Batuhan', 'lastname' => 'Karaman', 'cgpa' => 2.72, 'birthday' => '19-03-1999' ],
  '20149533' => [ 'name' => 'Kadir', 'lastname' => 'Alat', 'cgpa' => 2.52, 'birthday' => '14-09-2001' ],
  '20144769' => [ 'name' => 'İbrahim ', 'lastname' => 'Farajzade', 'cgpa' => 3.94, 'birthday' => '24-10-2000' ],
  '20148877' => [ 'name' => 'Enes', 'lastname' => 'Çakmak', 'cgpa' => 3.43, 'birthday' => '16-06-2001' ],
  '20147200' => [ 'name' => 'Furkan', 'lastname' => 'Hamavioğlu', 'cgpa' => 2.83, 'birthday' => '17-05-1999' ],
  '20146791' => [ 'name' => 'Atakan', 'lastname' => 'Karasan', 'cgpa' => 2.78, 'birthday' => '09-02-2000' ]
 ];


$courses = [ 
 '﻿CTIS251' => [ 'name' => 'Object Oriented Programming I' , 'credit' => 5 ], 
 'CTIS255' => [ 'name' => 'Web Technologies I' , 'credit' => 3 ], 
 'CTIS259' => [ 'name' => 'Database Management Systems and Applications' , 'credit' => 5 ], 
 'CTIS261' => [ 'name' => 'Computer Networks I' , 'credit' => 4 ], 
 'ECON103' => [ 'name' => 'Principles of Economics' , 'credit' => 3 ], 
 'GE250' => [ 'name' => 'Collegiate Activities Program I' , 'credit' => 0 ], 
 'CTIS252' => [ 'name' => 'Object Oriented Programming II' , 'credit' => 5 ], 
 'CTIS256' => [ 'name' => 'Web Technologies II' , 'credit' => 3 ], 
 'CTIS262' => [ 'name' => 'Computer Networks II' , 'credit' => 4 ], 
 'CTIS264' => [ 'name' => 'Computer Algorithms' , 'credit' => 3 ], 
 'GE251' => [ 'name' => 'Collegiate Activities Program II' , 'credit' => 1 ], 
 'HIST200' => [ 'name' => 'History of Turkey' , 'credit' => 4 ], 
];

$transcript = [ 
 ['student_id' => 20149295 , 'course_code' => 'CTIS264', 'grade' => 'B'], 
 ['student_id' => 20149295 , 'course_code' => 'GE251', 'grade' => 'A'], 
 ['student_id' => 20149295 , 'course_code' => '﻿CTIS251', 'grade' => 'B-'], 
 ['student_id' => 20149295 , 'course_code' => 'CTIS252', 'grade' => 'B+'], 
 ['student_id' => 20149295 , 'course_code' => 'CTIS261', 'grade' => 'B+'], 
 ['student_id' => 20149295 , 'course_code' => 'CTIS256', 'grade' => 'B+'], 
 ['student_id' => 20145043 , 'course_code' => 'CTIS264', 'grade' => 'D'], 
 ['student_id' => 20145043 , 'course_code' => 'HIST200', 'grade' => 'B+'], 
 ['student_id' => 20145043 , 'course_code' => 'CTIS255', 'grade' => 'F'], 
 ['student_id' => 20145043 , 'course_code' => 'GE250', 'grade' => 'B+'], 
 ['student_id' => 20145043 , 'course_code' => '﻿CTIS251', 'grade' => 'B'], 
 ['student_id' => 20144902 , 'course_code' => 'HIST200', 'grade' => 'C+'], 
 ['student_id' => 20144902 , 'course_code' => 'CTIS255', 'grade' => 'C-'], 
 ['student_id' => 20144902 , 'course_code' => 'CTIS262', 'grade' => 'C'], 
 ['student_id' => 20144902 , 'course_code' => 'CTIS252', 'grade' => 'B'], 
 ['student_id' => 20144902 , 'course_code' => 'GE251', 'grade' => 'D'], 
 ['student_id' => 20144902 , 'course_code' => 'GE250', 'grade' => 'B-'], 
 ['student_id' => 20144902 , 'course_code' => '﻿CTIS251', 'grade' => 'C-'], 
 ['student_id' => 20145657 , 'course_code' => 'GE251', 'grade' => 'C'], 
 ['student_id' => 20145657 , 'course_code' => 'CTIS264', 'grade' => 'B'], 
 ['student_id' => 20145657 , 'course_code' => 'CTIS261', 'grade' => 'B+'], 
 ['student_id' => 20145657 , 'course_code' => 'GE250', 'grade' => 'B+'], 
 ['student_id' => 20145657 , 'course_code' => 'CTIS262', 'grade' => 'C-'], 
 ['student_id' => 20145657 , 'course_code' => 'CTIS252', 'grade' => 'B+'], 
 ['student_id' => 20149533 , 'course_code' => 'CTIS261', 'grade' => 'C'], 
 ['student_id' => 20149533 , 'course_code' => 'HIST200', 'grade' => 'C'], 
 ['student_id' => 20149533 , 'course_code' => 'ECON103', 'grade' => 'A-'], 
 ['student_id' => 20149533 , 'course_code' => 'CTIS262', 'grade' => 'C+'], 
 ['student_id' => 20149533 , 'course_code' => 'CTIS255', 'grade' => 'B-'], 
 ['student_id' => 20149533 , 'course_code' => '﻿CTIS251', 'grade' => 'D'], 
 ['student_id' => 20144769 , 'course_code' => 'CTIS261', 'grade' => 'B'], 
 ['student_id' => 20144769 , 'course_code' => 'CTIS259', 'grade' => 'A'], 
 ['student_id' => 20144769 , 'course_code' => 'GE251', 'grade' => 'C+'], 
 ['student_id' => 20144769 , 'course_code' => 'CTIS264', 'grade' => 'B-'], 
 ['student_id' => 20144769 , 'course_code' => 'CTIS262', 'grade' => 'B+'], 
 ['student_id' => 20148877 , 'course_code' => 'GE251', 'grade' => 'C-'], 
 ['student_id' => 20148877 , 'course_code' => '﻿CTIS251', 'grade' => 'C'], 
 ['student_id' => 20148877 , 'course_code' => 'CTIS256', 'grade' => 'B-'], 
 ['student_id' => 20148877 , 'course_code' => 'HIST200', 'grade' => 'B+'], 
 ['student_id' => 20148877 , 'course_code' => 'CTIS262', 'grade' => 'B+'], 
 ['student_id' => 20148877 , 'course_code' => 'CTIS252', 'grade' => 'A'], 
 ['student_id' => 20147200 , 'course_code' => 'CTIS262', 'grade' => 'D'], 
 ['student_id' => 20147200 , 'course_code' => 'CTIS252', 'grade' => 'C+'], 
 ['student_id' => 20147200 , 'course_code' => 'CTIS261', 'grade' => 'B-'], 
 ['student_id' => 20147200 , 'course_code' => 'CTIS256', 'grade' => 'C'], 
 ['student_id' => 20147200 , 'course_code' => 'GE251', 'grade' => 'A'], 
 ['student_id' => 20146791 , 'course_code' => 'CTIS255', 'grade' => 'A'], 
 ['student_id' => 20146791 , 'course_code' => 'ECON103', 'grade' => 'B+'], 
 ['student_id' => 20146791 , 'course_code' => 'GE251', 'grade' => 'C'], 
 ['student_id' => 20146791 , 'course_code' => 'CTIS252', 'grade' => 'B+'], 
 ['student_id' => 20146791 , 'course_code' => 'CTIS259', 'grade' => 'C-'], 
 ['student_id' => 20146791 , 'course_code' => 'CTIS264', 'grade' => 'B+'], 
 
];

$letter_mapping = ["F" => 0 , "D" => "1" , "D+" => 1.3, "C-" => 1.7, 
                           "C" => 2, "C+" => 2.3, "B-" => 2.7, "B" => 3, "B+" => 3.3, 
                           "A-" => 3.7, "A" => 4] ;