<?php

session_start();
if($_SESSION['login']) {
    header("Location: /login");
}  else {
    echo "Hey bruda";
}