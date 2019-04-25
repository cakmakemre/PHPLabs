<!DOCTYPE html>

<?php

require 'db.php';
$sql="select * from todo";
$items=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//var_dump(count($items));

if(isset($_POST["addOne"])){
    extract($_POST);
    //var_dump($addOne);
   
    $error=false;
    
    try {
        
        $sql="insert into todo (action) values (?)";
        $stmt=$db->prepare($sql);
        if($addOne===""){
             
        }
        else{
        $stmt->execute([$addOne]);
        header("Location: index.php"); 
        }
       
    } catch (Exception $ex) {
        $error=true;
        header("Location: error.php");
    }
}


?>

<html>
    <head>
        <title>TO-DO List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    
    
    
    <body>
        <div>
            <div class="header">
                <div class="container">
                    <h1 class="header__title">TO-DO List</h1>
                </div>
            </div>
            <div class="container">
                <div>
                    <a href="index2.php" class="big-button">What should I do?</a>
                </div>
                
                <div class="widget">
                    <div>
                        <div class="widget-header">
                            <h3 class="widget-header__title">Your Options</h3>
                            <h3 class="widget-header__title">
                                <?php
                                echo count($items);
                                ?>
                            </h3>
                            
                            
                        </div>
                        <?php
                        
                        $i=1;
                        foreach ($items as $list) {
                            echo "<div class='option'>";
                                echo "<p class='option__text'>".$i.".".$list["action"]."</p>";    
                                 $i++;
                                echo "<a href='delete.php?id={$list["id"]}' class='button button--link option__trash'>&#x1f5d1;</a>";
                            echo "</div>";
                          
                        }
                        if(count($items)==0){
                            echo "<p class='widget__message'>List is Empty</p>";
                        }  
                        ?>
    
                    </div>
                    <div>
                        <?php
                   
                        ?>
                        <form class="add-option" method="POST">
                             <?php
                                if(isset($addOne)&& $addOne===""){
                                echo "<p class='add-option-error'>Type some value</p>";
                            }
                            
                            ?>
                            <input class="add-option__input" autocomplete="Off" type="text" name="addOne">
                            <button type="submit" name="btnSubmit" class="button">Add One</button>
                           
                        </form>
 
                    </div>
                </div>
            </div>
        </div>

  <!-- OVERLAY ON TOP OF THE PAGE -->
        <div class="overlay">
         <div class="modal">
 <?php
             
             
             $random= rand(0,count($items));
             //var_dump($random);
             
             ?>
             <h1 class="modal__title">My Suggestion &#x1f609;</h1>
             
             <?php
             
             $id=0;
             foreach($items as $std){
                 $id++;
                 //var_dump($id);
                 if($id==$x){
                    echo "<p class='modal__body'>" .$std["action"]. "</p>";
                }
             }
           
             ?>

             <a class="button" href="index.php">OK</a>
         </div>
        </div>
    </body>
</html>


