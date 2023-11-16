<?php
    require "connection.php";
    session_start();
    $email = $_SESSION["email"];
    if (!isset($email)) {
        echo "
        <script>
            alert('Failed!');
            document.location.href = 'deleteUser.php';
        </script>";
    } else {
        $result = mysqli_query($conn, "delete from user where email = '$email'");
        if ($result) {
            echo "
            <script>
                alert('Success!');
                document.location.href = '../logout.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Failed!');
                document.location.href = 'deleteUser.php';
            </script>";
        }
    } 

    
    // $user = [];

    // $get_image = $user['image'];
    // unlink('upload/'.$get_image);

?>