<link href="styles/css/bootstrap">

<?php

function notify($type, $msg) {
    switch($type) {

        case 'success' :
            echo "<div class='notify'><div class='alert alert-success' role='alert'>".$msg."</div></div>";
            break;
        case 'danger' :
            echo "<div class='notify'><div class='alert alert-danger' role='alert'>".$msg."</div></div>";
            break;
        case 'primary' :
            echo "<div class='notify'><div class='alert alert-primary' role='alert'>".$msg."</div></div>";
            break;
        case 'warning' :
            echo "<div class='notify'><div class='alert alert-warning' role='alert'>".$msg."</div></div>";
            break;
        case 'info' :
            echo "<div class='notify'><div class='alert alert-info' role='alert'>".$msg."</div></div>";
            break;
        default :
            echo "Please specify a certain type!";
            break;
    }

}

notify("success", "hey");
?>