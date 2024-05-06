<?php
    session_start();
    $postdata = file_get_contents("php://input");
    if(isset($postdata) && !empty($postdata)){
        header('Content-Type: application/json');
        $data = json_decode($postdata, true);
        $_SESSION["type"] = $data["type"];
        echo json_encode(array("message" => $data));
    } else {
        http_response_code(400);
        echo json_encode(array("error" => "Aucune donnee recue"));
    }
?>

