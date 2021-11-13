<link href="styles/css/bootstrap">
<script src="styles/js/bootstrap">
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


?>

<div class='alert alert-success' role='alert'>"Hey!"</div>

<?php

/*
 * toastr
 */

function sendError($message, $title = 'Fehler'){
    return '<script>toastr.options = { "closeButton": true,"debug": false,"newestOnTop": true,"progressBar": true,"positionClass": "toast-top-right","preventDuplicates": false, "onclick": null, "showDuration": "300", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" };
toastr.error("'.$message.'", "'.$title.'");</script>';
}

function sendInfo($message, $title = 'Info'){
    return '<script>toastr.options = { "closeButton": true,"debug": false,"newestOnTop": true,"progressBar": true,"positionClass": "toast-top-right","preventDuplicates": false, "onclick": null, "showDuration": "300", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" };
toastr.info("'.$message.'", "'.$title.'");</script>';
}

function sendSuccess($message, $title = 'Erfolgreich'){
    return '<script>toastr.options = { "closeButton": true,"debug": false,"newestOnTop": true,"progressBar": true,"positionClass": "toast-top-right","preventDuplicates": false, "onclick": null, "showDuration": "300", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" };
toastr.success("'.$message.'", "'.$title.'");</script>';
}
