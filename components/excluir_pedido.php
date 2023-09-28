<?php

include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
    header('location:login.php');
}

if (isset($_POST['delete'])) {

    $delete_id = $_POST['request_id'];
    $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

    $verify_delete = $conn->prepare("SELECT * FROM `requests` WHERE id = ?");
    $verify_delete->execute([$delete_id]);

    if ($verify_delete->rowCount() > 0) {
        $delete_request = $conn->prepare("DELETE FROM `requests` WHERE id = ?");
        $delete_request->execute([$delete_id]);
        $success_msg[] = 'pedido deletado com sucesso!';
    } else {
        $warning_msg[] = 'pedido já deletado!';
    }
}

?>



