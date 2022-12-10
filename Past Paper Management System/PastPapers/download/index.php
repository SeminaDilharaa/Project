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
        <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container">
            <?php include '../includes/navbar.php'; ?>

            <form>
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="card-title">Download Papers</h5>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="search_form_cc">Course Code</label>
                                    <input type="text" class="form-control" id="search_form_cc" name="cc" placeholder="ICT####" value="<?php echo filter_input(INPUT_GET, "cc") ?>" onkeyup="refreshCc()">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="search_form_year">Examination Year</label>
                                    <select class="custom-select" id="search_form_year" name="yr">
                                        <option value="none" <?php
                                        if (filter_input(INPUT_GET, "yr") == "none") {
                                            echo 'selected';
                                        }
                                        ?>>No Selection</option>
                                                <?php for ($this_year = idate("Y"); $this_year > 2011; $this_year--) { ?>
                                            <option value="<?php echo $this_year; ?>" <?php
                                            if (filter_input(INPUT_GET, "yr") == $this_year) {
                                                echo 'selected';
                                            }
                                            ?>><?php echo $this_year; ?></option>
                                                <?php } ?>
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-secondary float-right" data-toggle="tooltip" data-placement="auto" title="Search"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>


            <?php
            if (isset($_GET["cc"]) || isset($_GET["yr"])) {

                include '../backend/db_connection.php';

                $con = db();


                $query = "select * from papers where course_code like '%" . filter_input(INPUT_GET, "cc") . "%'";

                if (filter_input(INPUT_GET, "yr") != "none") {

                    $query .= " and examination_year = '" . filter_input(INPUT_GET, "yr") . "'";
                }

                $result1 = $con->query($query);
                ?>





                <div class="table-responsive px-sm-0 px-md-5 py-5">
                    <table class="text-center table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Course Code</th>
                                <th scope="col">Examination Year</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="text-uppercase">
                            <?php while ($row1 = $result1->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row1["course_code"]; ?></td>
                                    <td><?php echo $row1["examination_year"]; ?></td>
                                    <td>
                                        <a href="javascript:log_and_go('<?php echo $row1["url"]; ?>')"><button type="button" class="btn btn-primary btn-sm" style="font-size: 1.875rem;line-height: 1;" data-toggle="tooltip" data-placement="auto" title="Download this paper"><i class="fas fa-download"></i></button></a>
                                    </td>
                                </tr>
                            <?php } ?>


                        </tbody>
                    </table>
                </div>


                <?php
                $con->close();
            }
            ?>








        </div>
        <script type="text/template" id="optiontemplate">
            <option value="{{yr}}" >{{yr}}</option>
        </script>
        <script type="text/template" id="optiontemplateselected">
            <option value="{{yr}}" selected>{{yr}}</option>
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
                                        const search_form_cc = document.querySelector('#search_form_cc');
                                        const optiontemplate = document.querySelector('#optiontemplate');
                                        const optiontemplateselected = document.querySelector('#optiontemplateselected');
                                        const search_form_year = document.querySelector('#search_form_year');
                                        function refreshCc() {
                                            let selected_year = search_form_year.value;
                                            $.get('../backend/get_available_years.php?cc=' + search_form_cc.value, function (r) {
                                                r = JSON.parse(r);
                                                let aa = "";
                                                if (selected_year == 'none') {
                                                    aa = "<option value='none' selected>No Selection</option>";
                                                } else {
                                                    aa = "<option value='none'>No Selection</option>";
                                                }
                                                r.forEach(s => {
                                                    if (selected_year == s) {
                                                        aa += optiontemplateselected.innerHTML.replace(/{{yr}}/g, s);
                                                    } else {
                                                        aa += optiontemplate.innerHTML.replace(/{{yr}}/g, s);
                                                    }
                                                });
                                                search_form_year.innerHTML = aa;
                                            });
                                        }
                                        
                                        function log_and_go(url){
                                            $.get('../backend/download_logger.php', function (r) {
                                                console.log(r);
                                                window.open(url, '_blank');
                                            });
                                        }

                                        $(document).ready(function () {
                                            $('[data-toggle="tooltip"]').tooltip();
                                        });
        </script>
    </body>
</html>