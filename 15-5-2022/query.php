<?php
include 'connect_test.php';
$emp_name=$_POST['name'];
$salary=$_POST['salary'];
$dept=$_POST['dept'];
$phone_num=$_POST['phone'];
$sdate=$_POST['sdate'];

$insert_query="INSERT INTO employees(emp_ame, salary, department_name, phone_number, startDate)
VALUES ('$emp_name', '$salary', '$dept', '$phone_num', '$sdate') ";
if(mysqli_query($test,$insert_query)){
    echo ('<br>record Added!<br>');
}
else{
    echo('Erorr: '.$query.mysqli_error($test).'<br>');
}
$update_query = "UPDATE employess SET emp_name = 'Tala', WHERE employees . id=4";
$delete_query="DELETE FROM employees WHERE id=5";
if (mysqli_query($test,$delete_query)) {
    echo "<br>Record deleted!";
  } else {
    echo ("<br><br> Failed delete record" .$delete_query.mysqli_error($test));
  }
?>
