<?php

include './API_dischi.php';

header('Content-Type: application/json');

echo json_encode($discs_list)

?>