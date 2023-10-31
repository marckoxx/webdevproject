<?php
//including the database connection file
include_once('dbConnection/mysqlconfig_connection.php');
//including the fetch file
include_once('functions/fetch.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample CRUD</title>
</head>

<body>
    <h1>My Subjects</h1>
    <a href="./forms/addform.php">Add Subject</a>
    <table width='100%' border=1>
        <tr bgcolor='#CCCCCC'>
            <td>ID</td>
            <td>Subject Code</td>
            <td>Subject Name</td>
            <td>Action</td>
        </tr>
        <?php
        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['Subject_ID'] . "</td>";
            echo "<td>" . $res['Subject_Code'] . "</td>";
            echo "<td>" . $res['Subject_Name'] . "</td>";
            echo "<td><a href=\"forms/editform.php?id=$res[Subject_ID]\">Edit</a> |
                    <a href=\"Functions/delete.php?id=$res[Subject_ID]\"
                    onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
        ?>
    </table>
</body>

</html>