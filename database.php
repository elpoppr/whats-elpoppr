<?php
$host = "sql5.freesqldatabase.com"; // ����� �������
$dbname = "sql5770312"; // ��� ����� ��������
$username = "sql5770312"; // ��� ��������
$password = "sqN87SpuSf"; // ���� ������ ������ ��
$port = 3306; // ������

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("��� ������� ������ ��������: " . $conn->connect_error);
}
?>
