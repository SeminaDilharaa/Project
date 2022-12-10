<?php
session_start();
include '../includes/user_type_verifier.php';
if (!check_user_type("ANY")) {
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
    <body class="bg-light">
        <div class="container">
            <?php include '../includes/navbar.php'; ?>

            <div class="card my-5">
                <div class="card-body">
                    <input type="text" class="form-control" placeholder="Search User" id="search_val" value="<?php echo (filter_input(INPUT_GET, "fld")!="id")?filter_input(INPUT_GET, "val"):""; ?>">
                </div>
                <div class="card-footer text-right">
                    <span class="mx-1">Search by </span>
                    <div class="btn-group">
                        <button class="btn btn-secondary" onclick="search_now('nic')">NIC</button>
                        <button class="btn btn-dark" onclick="search_now('name')">Name</button>
                        <button class="btn btn-secondary" onclick="search_now('un')">Username</button>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_GET["fld"]) && isset($_GET["val"])) {

                include '../backend/db_connection.php';

                $con = db();


                $query = "select * from user where ";

                switch (filter_input(INPUT_GET, "fld")) {
                    case "nic":
                        $query .= "nic like '" . filter_input(INPUT_GET, "val") . "%'";
                        break;
                    case "name":
                        $query .= "name like '" . filter_input(INPUT_GET, "val") . "%'";
                        break;
                    case "un":
                        $query .= "username like '" . filter_input(INPUT_GET, "val") . "%'";
                        break;
                    case "id":
                        $query .= "id = '" . filter_input(INPUT_GET, "val") . "'";
                        break;
                }
                


                $result1 = $con->query($query);
                ?>





                <div class="table-responsive px-sm-0 px-md-5 py-5">
                    <table class="text-center table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">NIC</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row1 = $result1->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row1["name"]; ?></td>
                                    <td><?php echo $row1["username"]; ?></td>
                                    <td><?php echo $row1["nic"]; ?></td>
                                    <?php if ($row1["status"] == "NEW") { ?>
                                        <td>
                                            <form method="post" action="../backend/userm.php">
                                                <input type="hidden" name="dothis" value="verify" readonly>
                                                <input type="hidden" name="tothis" value="<?php echo $row1["id"]; ?>" readonly>
                                                <button type="submit" class="btn btn-outline-primary">Verify User</button>
                                            </form>
                                        </td>
                                    <?php } else if($row1["status"] == "VERIFIED") { ?>
                                        <td>
                                            <form method="post" action="../backend/userm.php">
                                                <input type="hidden" name="dothis" value="disable" readonly>
                                                <input type="hidden" name="tothis" value="<?php echo $row1["id"]; ?>" readonly>
                                                <button type="submit" class="btn btn-outline-danger">Disable User</button>
                                            </form>
                                        </td>
                                    <?php } else { ?>
                                        <td>
                                            <form method="post" action="../backend/userm.php">
                                                <input type="hidden" name="dothis" value="enable" readonly>
                                                <input type="hidden" name="tothis" value="<?php echo $row1["id"]; ?>" readonly>
                                                <button type="submit" class="btn btn-outline-success">Enable User</button>
                                            </form>
                                        </td>
                                    <?php } ?>
                                        <td>
                                            <form method="post" action="../backend/reset_password.php">
                                                <input type="hidden" name="thisuser" value="<?php echo $row1["id"]; ?>" readonly>
                                                <button type="submit" class="btn btn-outline-info">Reset Password</button>
                                            </form>
                                        </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>


                <?php $con->close();
            } ?>


        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
                            const search_val = document.querySelector('#search_val');
                            function search_now(param) {
                                if (search_val.value.length > 0) {
                                    window.location.href = "../usersm?fld=" + param + "&val=" + search_val.value;
                                } else {
                                    $('#search_val').tooltip({placement: 'auto', title: 'Please enter user details', trigger: 'manual'});
                                    $('#search_val').tooltip('show');
                                    setTimeout(() => $('#search_val').tooltip('hide'), 2000);
                                }
                            }
        </script>
    </body>
</html>
