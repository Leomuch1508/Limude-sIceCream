<?php include "function/edit.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data - Ice Cream Dey</title>
    <link rel="stylesheet" href="../css/input.css">
</head>
<body>
    <section class="input">
        <div class="input-background">
            <img src="../gambar/1.png" alt="">
        </div>
        <div class="input-box">
            <div class="input-title">
                <h1>Edit Menu</h1>
                <hr>
            </div>
            <form action="" method="post" enctype="multipart/form-data" class="form-container">

                <label for="name">Name</label>
                <div class="input-container">
                    <input type="text" name="name" placeholder="Menu Name..." value="<?php echo $product['name'] ?>" required class="input-field">
                </div><br>

                <label for="flavour">Flavour</label>
                <div class="input-container">
                    <input type="text" name="flavour" value="<?php echo $product['flavour'] ?>" placeholder="Flavour..." required class="input-field">
                </div><br>

                <label for="desc">Description</label>
                <div class="input-container">
                    <textarea name="desc" rows="3" placeholder="Description..." required class="input-field"><?php echo $product['descript'] ?></textarea>
                </div><br>

                <label for="price">Price</label>
                <div class="input-container">
                    <input type="number" name="price" value="<?php echo $product['price'] ?>" placeholder="Price..." required class="input-field">
                </div><br>

                <label for="stock">Stock</label>
                <div class="input-container">
                    <input type="number" name="stock" value="<?php echo $product['stock'] ?>" placeholder="Stock..." required class="input-field">
                </div><br>

                <label for="image">Image</label>
                <div class="input-container">
                    <input type="file" name="image" accept="image/png, image/jpg, image/jpeg" required class="input-field">
                </div><br>


                <input type="submit" name="edit" value="Change Menu" class="submit-btn">
            </form>
        </div>
    </section>
</body>
</html>