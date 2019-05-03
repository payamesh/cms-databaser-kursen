<?php
// kolla om användaren försöker logga in

if (isset($_POST['username']) && isset($_POST['pwd'])) {
    if ($_POST['username'] == 'payam' && $_POST['pwd'] == 'asd') {
        echo json_encode(['user' => $_POST['username']]);
    }else {
        http_response_code(403);
    }
}