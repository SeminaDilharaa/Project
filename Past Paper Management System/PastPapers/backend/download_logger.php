<?php

session_start();
include './db_connection.php';
$con = db();
$result = $con->query("select * from user where id='" . $_SESSION["user_id"] . "'");
if ($result->num_rows == 1) {
    $result = $result->fetch_assoc();
    $con->query("insert into log_file (UserName, UserType, DateTime, `Function`) values ('" . $result['nic'] . "', '" . $_SESSION["user_type"] . "', '" . date('Y-m-d') . "', 'download')");
}
$con->close();
