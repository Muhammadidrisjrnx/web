<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM table_question WHERE id='$id'";
$result = mysqli_query($koneksi_db,$sql);
echo "Berhasil Menghapus Pertanyaan";
echo"<meta http-equiv='refresh' content='1;url=management_question.php'>";
?>