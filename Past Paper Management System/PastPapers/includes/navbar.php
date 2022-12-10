<?php
if (isset($_SESSION["user_type"])) {
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3 rounded">
        <a class="navbar-brand" href=".">
            <img src="../images/icon.png" width="30" height="30" class="d-inline-block align-top" style="filter: invert(100%);" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <?php if ($_SESSION["user_type"] === "LIBRARIAN") { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../usersm">Users Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../papersm">Papers Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logfile">Log File</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="../download">Download</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../settings">Settings</a>
                </li>
            </ul>
            <a href="../backend/logout.php"><button class="btn btn-outline-danger">Sign Out</button></a>
        </div>
    </nav>

    <?php
}

