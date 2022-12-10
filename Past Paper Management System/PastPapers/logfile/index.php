<?php
session_start();
include '../includes/user_type_verifier.php';
if (!check_user_type("LIBRARIAN")) {
    header("Location:../");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Past Paper System</title>
        <link rel="shortcut icon" type="image/png" href="../images/icon.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>


        <style>
            table, td, th {
                 border: 1px solid black;
             }

            table {
                  border-collapse: collapse;
                    width: 100%;
            }

            th {
                  height: 50px;
            }
        </style>
        <table>
        <tr>
            <th>Username</th>
            <th>User Type</th>
            <th>Date</th>
            <th>Function</td>
</tr>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "pastpapers");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM log_file";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["UserName"]. "</td><td>" .$row["UserType"]. "</td><td>" . $row["DateTime"] . "</td><td>"
. $row["Function"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>