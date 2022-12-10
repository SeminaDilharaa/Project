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

            <form method="post" action="../backend/change_password.php">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="card-title">Change Password</h5>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-4 offset-sm-0 offset-md-3 offset-lg-4">
                                <?php
                                if (isset($_GET["error"])) {
                                    if ($_GET["error"] === "nullp0") {
                                        ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            Current password is Required.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php
                                    } else if ($_GET["error"] === "nullp1") {
                                        ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            Please enter a valid new password.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php
                                    } else if ($_GET["error"] === "nullp2") {
                                        ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            Passwords do not match.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php
                                    } else if ($_GET["error"] === "invalid") {
                                        ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Invalid password.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php
                                    }
                                } else if (isset($_GET["success"])) {
                                        ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            Password successfully changed.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="pw_old">Enter old password</label>
                                    <input type="password" class="form-control" id="pw_old" name="pw_old" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="pw_new1">Enter new password</label>
                                    <input type="password" class="form-control" id="pw_new1" name="pw_new1" required>
                                </div>
                            </div>
                            <div  class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="pw_new2">Confirm password</label>
                                    <input type="password" class="form-control" id="pw_new2" name="pw_new2" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-secondary float-right">Save</button>
                    </div>
                </div>
            </form>














        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>