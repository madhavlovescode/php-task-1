<?php
require_once "connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM employees WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    }

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $jtitle = $_POST['jtitle'];
    $phoneno = $_POST['phoneno'];

    $sql = "UPDATE employees SET name='$name', email='$email', department='$department', job_title='$jtitle', phone='$phoneno' WHERE id=$id";
    mysqli_query($conn,$sql);
    header("Location: view.php");

}
?>

<html>
<head><title>Edit Employee</title></head>
<body>
    <center>
        <h1>Edit Employee</h1>
        <form method="POST">
            Name: <input type="text" name="name" value="<?php echo $row[1]; ?>"><br>
            Email: <input type="text" name="email" value="<?php echo $row[2]; ?>"><br>
            Department: <input type="text" name="department" value="<?php echo $row[3]; ?>"><br>
            Job Title: <input type="text" name="jtitle" value="<?php echo $row[4]; ?>"><br>
            Phone Number: <input type="text" name="phoneno" value="<?php echo $row[5]; ?>"><br>
            <input type="submit" name="update" value="Update">
        </form>
    </center>
</body>
</html>
