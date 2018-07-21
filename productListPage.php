<?php 
require 'controller.php'; 
$controller = new Controller();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style.css">

    <title>Product List</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="header">
                <div class="header-left">
                    <h1>Product List</h1>
                </div>
                <div class="header-rigth">
                    <select>
                        <option>Mass Delete Action</option>
                    </select>
                    <label class="btn" for="submit" tabindex="0">Apply</label>
                </div>
            </div>
        </div>
    </header>
    <content>
        <div class="container">
            <div class="card-collection">
                <form action="<?php $controller->remove()?>" method="post">
                    <?php $controller->show()?>
                    <input type="submit" id="submit" class="hidden">
                </form>
            </div>
        </div>
    </content>
</body>
</html>