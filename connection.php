<?php
$servername = "l3j6g.h.filess.io";
$username = "portofoliobaru_sentdiemix";
$password = "25120e4f0ca73f9ebc422a827388b6f015c98655";
$dbname = "portofoliobaru_sentdiemix";
$port = "3307";

// Buat koneksi
$Conn = new mysqli($servername, $username, $password, $dbname, $port);

// Periksa koneksi
if ($Conn->connect_error) {
    die("Connection failed: " . $Conn->connect_error);
}
