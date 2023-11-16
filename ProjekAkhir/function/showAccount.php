<?php
    require "connection.php";

    $result = mysqli_query($conn, "SELECT * FROM user");
    $user = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $user[] = $row;
    }
?>