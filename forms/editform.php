<?php
//including the database connection file
include_once("../dbConnection/mysqlconfig_connection.php");
//getting id of the data from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($dbc, "SELECT * FROM tblsubjects WHERE subject_id=$id");
while ($res = mysqli_fetch_array($result)) {
    $code = $res['subject_code'];
    $name = $res['subject_name'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <h1>Edit Subject</h1>
    <a href="../index.php">Home</a>
    <br /><br />
    <form name="form1" action="../functions/edit.php" method="post">
        <table border="0">
            <tr>
                <td>Subject Code</td>
                <td><input type="text" name="code" value="<?php echo $code; ?>"></td>
            </tr>
            <tr>
                <td>Subject Name</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?></td>
                    <input type="submit" name="update" value="Update">
            </tr>
        </table>
    </form>
</body>
</html>