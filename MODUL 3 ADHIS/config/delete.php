<?php
require './koneksi.php';

$id = $_GET['id'];

$mysql = "DELETE FROM showroomadhis WHERE id_mobil = $id";

if (mysqli_query($connection, $mysql)) {
  header("location: ../pages/List-Adhisty.php?pesan=delete");
} else {
  echo "Error";
}
