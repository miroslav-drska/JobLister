<?php 

function redirect($page = false, $message = null, $message_type = null) {
    if(is_string($page)) {
        $location = $page;
    } else {
        $location = $_SERVER['script_name'];
    }

    if($message != null) {
        $_SESSION['message'] = $message;
    } 

    if($message_type != null) {
        $_session['message_type'] = $message_type;
    }

    header('Location: ' . $location);
    exit;
}

function displayMessage() {
    if(!empty($_SESSION['message'])) {
        // assign message var
        $message = $_SESSION['message'];

        if(!empty($_SESSION['message_type'])) {
            $message_type = $_SESSION['message_type'];
            if($message_type == 'error') {
                echo '<div clas="alert alert-danger">' . $message . '</div>';
            } else {
                echo '<div clas="alert alert-success">' . $message . '</div>';
            }
        }

        //unset message 
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);


    } else {
        echo '';
    }
}