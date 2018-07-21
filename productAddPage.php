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

    <title>Product Add</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="header">
                <div class="header-left">
                    <h1>Product Add</h1>
                </div>
                <div class="header-rigth">
                    <label class="btn" for="submit" tabindex="0">Save</label>
                </div>
            </div>
        </div>
    </header>
    <content>
        <div class="container">
            <form class="form-for-adding" action="<?php $controller->register()?>" method="post">
                <label>SKU</label>
                <input type="text" name="SKU"><br>
                <label>Name</label>
                <input type="text" name="name"><br>
                <label>Price</label>
                <input type="text" name="price"><br>
                <span>Type Switcher</span>
                <select class="types-list" name="type" onchange="switcher()">
                    <option></option>
                    <?php $controller->create() ?>
                </select>
                <input type="submit" id="submit" class="hidden">
                <div class="special-attribute-form"></div>     
            </form>
        </div>
    </content>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>