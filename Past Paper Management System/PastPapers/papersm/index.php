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
    <body class="bg-light">
        <div class="container">
            <?php include '../includes/navbar.php'; ?>


            <div class="row mt-5">
                <div class="col-sm-12 col-md-6 col-lg-4 offset-sm-0 offset-md-3 offset-lg-4">
                         <?php
                            if (isset($_GET["upload"])) {
                                if ($_GET["upload"] === "new") {
                                    ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Successfully Uploaded.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                                } else if ($_GET["upload"] === "update") {
                                    ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Successfully Updated.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                                } 
                            }else if (isset($_GET["delete"])) {
                                if ($_GET["delete"] === "success") {
                                    ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Successfully Deleted.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                                } else if ($_GET["delete"] === "failed") {
                                    ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        Deletion failed.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                                } 
                            }
                            ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 offset-sm-0 offset-md-0 offset-lg-2 p-1">
                    <form method="post" action="../backend/upload.php" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-body" style="min-height: 19rem;">
                                <h5 class="card-title">Upload / Update Papers</h5>
                                <div class="form-group">
                                    <label for="upload_form_cc">Course Code</label>
                                    <input type="text" class="form-control" id="upload_form_cc" name="upload_form_cc" placeholder="ICT####" required>
                                </div>
                                <div class="form-group">
                                    <label for="upload_form_year">Examination Year</label>
                                    <select class="custom-select" id="upload_form_year" name="upload_form_year" required>
                                        <?php for ($this_year = idate("Y"); $this_year > 2010; $this_year--) { ?>
                                            <option value="<?php echo $this_year; ?>"><?php echo $this_year; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="upload_file" name="upload_file" accept=".pdf,.docx,.doc" required>
                                        <label class="custom-file-label" for="upload_file">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-secondary float-right">Upload / Update</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 p-1">
                    <form method="post" action="../backend/delete.php" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-body" style="min-height: 19rem;">
                                <h5 class="card-title">Delete Papers</h5>
                                <div class="form-group">
                                    <label for="delete_form_cc">Course Code</label>
                                    <input type="text" class="form-control" id="delete_form_cc" name="delete_form_cc" placeholder="ICT####" required>
                                </div>
                                <div class="form-group">
                                    <label for="delete_form_year">Examination Year</label>
                                    <select class="custom-select" id="delete_form_year" name="delete_form_year" required>
                                        <?php for ($this_year = idate("Y"); $this_year > 2010; $this_year--) { ?>
                                            <option value="<?php echo $this_year; ?>"><?php echo $this_year; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-secondary float-right">Delete</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>





        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
        <script>
            $(document).ready(function () {
                bsCustomFileInput.init();
            });
        </script>
    </body>
</html>