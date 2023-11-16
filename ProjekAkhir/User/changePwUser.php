<?php
    include "../function/changePassword.php" 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil - Limude's Ice Cream</title>
    <link rel="stylesheet" href="../css/input.css">
    <script src="https://kit.fontawesome.com/effd3867de.js" crossorigin="anonymous"></script>
    <script src="../javascript/pw.js"></script>
</head>
<body>
    <section class="input">
        <div class="input-background">
            <img src="../gambar/1.png" alt="">
        </div>
        <div class="input-box">
            <div class="input-title">
                <h1>Change Password</h1>
                <hr>
            </div>
            <form action="" method="post" enctype="multipart/form-data" class="form-container">
                    
                <label for="oldPassword">Old Password</label>
                <div class="input-container">
                    <input type="password" name="oldPassword" id="passwordInput1" placeholder="Old Password..." required class="input-field">
                    <span class="toggle-password" onclick="togglePasswordVisibility(1)">
                        <i id="passwordToggle1" class="fa fa-eye"></i>
                    </span>
                </div><br>

                <label for="password">New Password</label>
                <div class="input-container">
                    <input type="password" name="password" id="passwordInput2" placeholder="Password..." required class="input-field">
                    <span class="toggle-password" onclick="togglePasswordVisibility(2)">
                        <i id="passwordToggle2" class="fa fa-eye"></i>
                    </span>
                </div><br>
                
                <label for="cpassword">Confirm Password</label>
                <div class="input-container">
                    <input type="password" name="cpassword" id="passwordInput3" placeholder="Confirm Password..." required class="input-field">
                    <span class="toggle-password" onclick="togglePasswordVisibility(3)">
                        <i id="passwordToggle3" class="fa fa-eye"></i>
                    </span>
                </div><br>

                <input type="submit" name="changePassword" value="Change Password" class="submit-btn">
            </form>
        </div>
    </section>
</body>
</html>