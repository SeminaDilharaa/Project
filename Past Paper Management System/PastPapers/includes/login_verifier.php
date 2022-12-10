<?php

//returns if user has logged in
function check_login() {
    return (isset($_SESSION["user_type"]) && isset($_SESSION["user_id"])) ;
}
