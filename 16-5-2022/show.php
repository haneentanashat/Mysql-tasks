<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>






    <?php
    include_once 'test.php';

    try {
        echo ('<br><button class="btn btn-primary" id="btn" style="display: inline-block; margin-bottom: 3%;"><a href="form.php" style="color: white; text-decoration:none;">Add Product</a></button>
    ');
        $query3 = "SELECT * FROM product";
        echo ('<div class="table-responsive-sm" id="table-div">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody id="info">');
        $statment = $conn->query($query3);

        $data = $statment->fetchAll();
        if ($data) {
            // output data of each row
            foreach ($data as $value) {
                echo "<tr><td>" . $value["id"] . "</td><td>" . $value["name"] . "</td><td>" . $value["price"] . "</td><td>" . $value["category"] . "</td></tr>";
            }
            echo "</tbody></table>";
        }
    } catch (PDOException $e) {
        echo $query3 . "<br>" . $e->getMessage();
    } finally {
        $conn = NULL;
    }
    // header('location: index.php');



    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>