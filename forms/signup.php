<?php 
require '../database/db.inc.php';
session_start();
include '../non-pages/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['submit'])) { 

        require 'signup.inc.php';
        
    }
}
?>
<link rel="stylesheet" href="../repository/css/forms.css" type="text/css">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="box">
                <div class="logo logo-m">
                    PletykaMail
                </div>
                <h1>Regisztráció</h1>
                <h4>Készítsd el fiókodat!</h4>
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6"><br>
                            <div class="input-box">
                                <input type="text"  name="u_first_name" value="<?php
                                                             if(isset($_SESSION['fname']))
                                                             echo $_SESSION['fname']; 
                                                        ?>" autocomplete="off" required/>
                                <label>Keresztnév *</label>
                            </div>
                        </div>
                        <div class="col-sm-6"><br>
                            <div class="input-box">
                                <input type="text" name="u_last_name" value="<?php
                                                             if(isset($_SESSION['lname']))
                                                             echo $_SESSION['lname']; 
                                                        ?>" autocomplete="off" required/>
                                <label>Vezetéknév *</label>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="input-box">
                                <input type="text" name="u_mail" value="<?php
                                                             if(isset($_SESSION['n_mail']))
                                                             echo $_SESSION['n_mail']; 
                                                        ?>" autocomplete="off" required/>
                                <label>Új email címed! *</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-box">
                                <div class="signup_extension">
                                @pletykamail.tk
                            </div>
                            </div>
			    <label>Pl.: <strong>dr.demo</strong>@pletykamail.tk</label>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-box">
                                <input type="password" name="u_password" autocomplete="off" required/>
                                <label>Jelszó *</label>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-box">
                                <input type="password" name="u_repassword" autocomplete="off" required/>
                                <label>Írd be újra a jelszavad! *</label>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="next-button">
                            <button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary">Következő</button>
                        </div>
                    </div>
                    <label id="forgot-label"><a href="signin.php">Bejelentkezés?</a></label>
                </form>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>  
<?php include '../non-pages/footer.php';?>        