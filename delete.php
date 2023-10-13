<?php
require './parts/connect_db.php';

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
if(! empty($sid)){
  $sql = "DELETE FROM address_book WHERE sid={$sid}";
  $pdo->query($sql);
}

$come_from = 'list.php';
if(! empty($_SERVER['HTTP_REFERER'])){
    //如果不是空的 資料
  $come_from = $_SERVER['HTTP_REFERER'];
}

header("Location: $come_from");