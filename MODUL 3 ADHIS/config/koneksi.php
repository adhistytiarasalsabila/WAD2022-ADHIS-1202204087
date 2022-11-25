<?php
$connection = new mysqli("localhost", "root", "", "modul3adhis");

if (!$connection) {
  die("Koneksi Error: " . $connection->connect_error);
}
