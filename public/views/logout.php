<?php

session_start();
session_destroy();
if(!$_SESSION['login']) {
    header("Location: login");
} else {
    header("Location: logout");
}