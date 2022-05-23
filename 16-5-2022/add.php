<?php
require 'connect.php';



try {
        $name = $_POST['pname'];
        $price = $_POST['price'];
        $category = $_POST['category'];

        $query1 = "INSERT INTO product(name, price, category)
        VALUES (:name, :price, :category) ";
        $statment2 = $test->prepare($query1);
        $statment2->execute([
            ':name' => $product_name,
            ':price' => $product_price,
            ':category' => $product_category
        ]);
        echo "New record added successfully";
        header('location:show.php');
    }catch (PDOException $e) {
        echo $query1 . "<br>" . $e->getMessage();
    } finally {
        $test = NULL;
    }
      






?>
