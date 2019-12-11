<?php
include 'db.php';

$error='';
$succes='';
if($_POST["btnSubmit"]){
    extract($_POST);
    //var_dump($_POST);
    //1-array(5) { ["name"]=> string(4) "Emre" ["email"]=> string(14) "last@gmail.com" 
    //2-["pass"]=> string(6) "123123" ["re_pass"]=> string(5) "12321" ["btnSubmit"]=> string(9) "Kayıt Ol" }
    if($pass==$re_pass){
        try {
            //sql queries
            $sql = "insert into loginTable (name,email,password) values(?,?,?)";
            $stmt = $db->prepare($sql);
            $stmt->execute([$name,$email,$pass]);
            $succes="Başarıyla üye oldunuz efenim";

        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }else{
        $error= "Parolalar uyuşmuyor balım!";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kayıt ol</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Kayıt Ol!</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="İsim"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Parola"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Parolanızı tekrar girin"/>
                            </div>
                            <div>
                                <! –– Error varsa gösterelim ––>
                                <?php
                                if (isset($error)){
                                    echo $error;
                                } 
                                if (isset($succes)){
                                    echo $succes;
                                } 
                                
                                ?>
                            
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="btnSubmit" id="signup" class="form-submit" value="Kayıt Ol"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="loginPage.php" class="signup-image-link">Zaten Üyeyim</a>
                    </div>
                </div>
            </div>
        </section>

       
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</html>