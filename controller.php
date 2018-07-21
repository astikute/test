<?php
require 'operations.php';

class Controller 
{
    private $operation;

    public function __construct()
    {
        $this->operation = new Operations();
    }

    public function register() 
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (!in_array("", array_values($_POST))) {
                $type = str_replace(" ", "_", $_POST['type']);
                $product = new $type(array_values($_POST));
                $this->operation->add($product); 
                header('Location: productListPage.php');
                header('Refresh: 0');
            }
        }
    }

    public function show()
    {
        foreach($this->operation->get() as $product) {?> 
            <div class="card">    
                <input type="checkbox" name="checkbox[]" value="<?=$product['SKU']?>">
                <ul>
                    <li><?= $product['SKU']; ?></li>
                    <li><?= $product['name']; ?></li>
                    <li><?= $product['price']; ?> $</li>
                    <li><?= $product['property']; ?>: 
                    <?= $product['type_value']; ?>
                    <?= $product['unit']; ?></li>
                </ul>
            </div>
        <?php }
    }

    public function remove()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            foreach($_POST['checkbox'] as $check) {
                if (!empty($check)) {
                    $this->operation->delete($check);
                }
            }
            header('Location: productListPage.php');
            header('Refresh: 0');
        }   
    }

    public function create()
    {
        foreach($this->operation->types() as $type) { ?>
            <option><?= $type['type'] ?></option>
        <?php }
    }
}
