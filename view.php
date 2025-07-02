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

<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>
</body>
</html>