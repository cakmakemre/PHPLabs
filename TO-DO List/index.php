<!DOCTYPE html>

<?php

require 'db.php';

    //DB query
    $sql="select * from todo";
    //Put all db items into an $items.
    $items=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);


    //var_dump(count($items));

    //if Add button clicked this if check will happen.
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
        //If input is not empty sql statement will executed.
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
                    <h2 class="header__subtitle"></h2>
                </div>
            </div>
            <div class="container">
                <div>
                    <a href="suggestion.php" class="big-button">What should I do?</a>
                </div>
                
                <div class="widget">
                    <div>
                        <div class="widget-header">
                            <h3 class="widget-header__title">Daily Tasks</h3>
                            <h3 class="widget-header__title">
                                <?php
                                echo count($items);
                                ?>
                            </h3>
                            
                            
                        </div>
                        <?php
                        
                        $i=1;

                        //Shows all db items.
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
                        <form class="add-option" method="POST">                            
                            <input class="add-option__input" autocomplete="Off" type="text" name="addOne">
                            <button type="submit" name="btnSubmit" class="button">Add One</button>
                            <p class=""> 
                                <?php
                                if(isset($addOne)&& $addOne===""){
                                    //If input is empty warn the user.
                                echo "<p class='add-option-error'>Type some value</p>";
                            }
                            ?>
                        </p>

                        </form>

                        <div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


