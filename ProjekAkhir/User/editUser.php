<?php
    include "../function/editProfil.php";
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
                <h1>Edit Profil</h1>
                <hr>
            </div>
            <form action="" method="post" enctype="multipart/form-data" class="form-container">

                <label for="name">Name</label>
                <div class="input-container">
                    <input type="text" name="fname" placeholder="First Name..." value="<?php echo $user['fname'] ?>" required class="input-field">
                    <input type="text" name="lname" placeholder="Last Name..." value="<?php echo $user['lname'] ?>" required class="input-field">
                </div><br>

                <label for="email">Email</label>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Email Address..." value="<?php echo $user['email'] ?>" required class="input-field">
                </div><br>

                <label for="tel">Phone Number</label>
                <div class="input-container">
                    <input type="tel" name="noTelp" maxlength="12" value="<?php echo $user['noTelp'] ?>" placeholder="Phone Number..." required class="input-field">
                </div><br>
                    
                <label for="password">Password</label>
                <div class="input-container">
                    <input type="password" name="password" id="passwordInput1" placeholder="Password..." required class="input-field">
                    <span class="toggle-password" onclick="togglePasswordVisibility1()">
                        <i id="passwordToggle" class="fa fa-eye"></i>
                    </span>
                </div><br>
                
                <label for="cpassword">Confirm Password</label>
                <div class="input-container">
                    <input type="password" name="cpassword" id="passwordInput" placeholder="Confirm Password..." required class="input-field">
                    <span class="toggle-password" onclick="togglePasswordVisibility2()">
                        <i id="passwordToggle1" class="fa fa-eye"></i>
                    </span>
                </div><br>

                <input type="submit" name="editProfil" value="Change Profil" class="submit-btn">
            </form>
        </div>
    </section>
</body>
</html>