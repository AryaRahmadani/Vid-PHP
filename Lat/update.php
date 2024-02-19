
<?php

    require_once "../function.php";


    $sql = "SELECT * FROM kategori WHERE dbkategori = $id";
    $result = mysqli_query($koneksi,$sql);

    $row = mysqli_fetch_assoc($result);
    

    // $kategori = 'Ferari 912 v12';
    // $id = 19;
    
    // $sql = "UPDATE kategori SET Kategori = '$kategori' WHERE dbkategori = $id ";
    
    // $result = mysqli_query($koneksi,$sql);
    
?>
<form action="" method="post">
    kategori:
    <input type="text" name="kategori" value="<?php echo $row['Kategori']?>" >
    <br>
    <input type="submit" name="simpan" value="simpan">
    
</form>
<?php

    if (isset($_POST['simpan']))
    $kategori = $_POST['kategori'];
    
    $sql = "UPDATE kategori SET Kategori = '$kategori' WHERE dbkategori = $id ";
    
    $result = mysqli_query($koneksi,$sql);
?>