<?php

    require_once "../function.php";

    $id = 2;
    $sql = "DELETE FROM kategori WHERE dbkategori = $id";
    $result = mysqli_query($koneksi,$sql);
    echo $sql;
?>