<html>
<head>
    <title></title>
</head>
<body>
    <center>
        <table>
            <td>
                <form action="" method="POST">
                    <h1>EMPLOYEE FORM</h1>
                    Name: <input type="text" name="name"><br>        
                    Email: <input type="text" name="email"><br>
                    Department: <input type="text" name="department"><br>
                    Job Title: <input type="text" name="jtitle"><br>
                    Phone Number: <input type="text" name="phoneno"><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </td>
        </table>
    </center>
    <a href="view.php">VIEW</a>
</body>
</html>

<?php
    require_once "connect.php";
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department']; 
        $jobtitle = $_POST['jtitle'];      
        $phoneno = $_POST['phoneno'];       

        if($name != "" && $email != ""){
        
            $sql = "INSERT INTO employees (`name`, `email`, `department`, `job_title`, `phone`) 
                    VALUES ('$name', '$email', '$department', '$jobtitle', '$phoneno')";
            
        
            if(mysqli_query($conn, $sql)) {
                echo "Employee details added successfully!";
                 header("Location: view.php");
            } 

        } else {
            echo "Name and Email cannot be empty!";
        }
    }
?>
