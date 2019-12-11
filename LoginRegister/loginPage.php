<?php
include 'db.php';

if($_POST["btnSignin"]){

    extract($_POST);

    $error= "";
    $succes="";
        try {
        $sql="select * from loginTable where email=?";
        $stmt=$db->prepare($sql);
        $stmt->execute([$mail]);
    
        $userInfo=$stmt->fetch(PDO::FETCH_ASSOC);

        if($userInfo["password"]==$pass){
            $succes= "Başarıyla giriş yaptınız.";
            //header("Location: index.php");

        }else{
            $error="Parolalar uyuşmuyor.";
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Giriş yap</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head> 

 <!-- Sing in  Form -->
 <section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                <a href="registerPage.php" class="signup-image-link">Hesap oluştur</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Giriş yap</h2>
                <form method="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="mail" id="your_name" placeholder="Mail"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="your_pass" placeholder="Parola"/>
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
                        <input type="submit" name="btnSignin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

</div>
