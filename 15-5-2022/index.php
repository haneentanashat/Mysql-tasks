<?php
include 'connect_test.php';
?>
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
    <div  class="container" >
        <form method="get" action="query.php" class="emp_form" >
          <div class="form-group">
            <label for="formGroupExampleInput"> Name:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Salary:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="salary" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Department:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="dept" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="phone" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Start Date:</label>
            <input type="date" class="form-control" id="formGroupExampleInput2" name="sdate" required>
          </div>
          <button type="submit" class="btn btn-primary mb-2" name="add" style="background: #265e8d;">Submit</button>
        </form> 
        <?php 
        echo "<table>";
        echo "<tr>";
            echo "<th>employee_id</th>";
            echo "<th>employee_name</th>";
            echo "<th>department</th>";
            echo "<th>salary</th>";
            echo "<th>phone_number</th>";
            echo "<th>start_date</th>";
        echo "</tr>";
        $select ="SELECT * FROM employees";
        $querys = mysqli_query($test,$select);
        
    while($row = mysqli_fetch_array($querys)){
        echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['emp_name'] . "</td>";
            echo "<td>" . $row['salary'] . "</td>";
            echo "<td>" . $row['department_name'] . "</td>";
            echo "<td>" . $row['phone_number'] . "</td>";
            echo "<td>" . $row['startDate'] . "</td>";

        echo "</tr>";
    }
    echo "</table>";
     
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>