<?php
require_once '../init.php';
if (!$currentUser) {
    header('Location: index.php');
    exit();
}

if (isset($_GET['touserid'])) {
    $messages = getMessagesWithUserId($currentUser['id'], $_GET['touserid']);
    echo json_encode($messages);
}