<?php
include "connect.php";

if (isset($_GET['id'])) 
    {
    $id = $_GET['id'];
    $sql = "DELETE FROM employees WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);
     if ($result) {
        echo "Record deleted.";
        header('Location: view.php');
    }
    else{
        echo "Error:";
    }
}
?>