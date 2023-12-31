<?php
require './parts/connect_db.php';

$sql = "INSERT INTO `address_book`(
  `name`, `email`, `mobile`, `birthday`, `address`, `created_at`
  ) VALUES (
    ?, ?, ?, ?, ?, NOW()
  )";

$stmt = $pdo->prepare($sql);

$stmt->execute([
  $_POST['name'],
  $_POST['email'],
  $_POST['mobile'],
  $_POST['birthday'],
  $_POST['address'],
]);

echo json_encode([
  'postData' => $_POST,
  'rowCount' => $stmt->rowCount(),
]);