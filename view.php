<?php
include "connect.php";
?>
<html>
<head>
    <title>Student Database</title>
</head>
<body>

        <center><h1>VIEW EMPLOYEE RECORDS </h1></center>
 <center>       
<table>
  
        <tr>
        <th>ID</th>
        <th>name</th>
        <th>email</th>
        <th>department</th>
        <th>job_title</th>
        <th>phone no</th>
        <th>Action</th>

    </tr>
    
        <?php
                $sql = "SELECT * FROM employees";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_row($result)) {
        ?>               
                    <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><a href="edit.php?id=<?php echo $row[0]; ?>">Edit</a>
                     <a href="delete.php?id=<?php echo $row[0]; ?>">Delete</a>
                    </td>
                    </tr>

        <?php       }
            
        ?>
</table>
</center>
<a href="add.php">ADD</a>
</body>
</html>
