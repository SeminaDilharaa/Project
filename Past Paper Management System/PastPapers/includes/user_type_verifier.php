<?php

// returns false if user type check fails
function check_user_type($user_filter_type) {
    if ($user_filter_type === "LIBRARIAN" || $user_filter_type === "STUDENT" || $user_filter_type === "ACDSTAFF" || $user_filter_type === "ANY") {
        if (!isset($_SESSION["user_type"]) || !isset($_SESSION["user_id"])) {
            return false;
        }
    } else {
        return false;
    }
    if ($user_filter_type === "LIBRARIAN") {
        if ($_SESSION["user_type"] !== "LIBRARIAN") {
            return false;
        }
    } else if ($user_filter_type === "STUDENT") {
        if ($_SESSION["user_type"] !== "STUDENT") {
            return false;
        }
    } else if ($user_filter_type === "ACDSTAFF") {
        if ($_SESSION["user_type"] !== "ACDSTAFF") {
            return false;
        }
    }
    return true;
}
