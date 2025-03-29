<?php
$host = "sql5.freesqldatabase.com"; // ÚäæÇä ÇáÓíÑÝÑ
$dbname = "sql5770312"; // ÇÓã ÞÇÚÏÉ ÇáÈíÇäÇÊ
$username = "sql5770312"; // ÇÓã ÇáãÓÊÎÏã
$password = "sqN87SpuSf"; // ßáãÉ ÇáãÑæÑ ÇáÎÇÕÉ Èß
$port = 3306; // ÇáãäÝÐ

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("ÝÔá ÇáÇÊÕÇá ÈÞÇÚÏÉ ÇáÈíÇäÇÊ: " . $conn->connect_error);
}
?>
