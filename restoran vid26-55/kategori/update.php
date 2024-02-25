
<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbkategori WHERE idkategori = $id";
        $row = $db->getITEM($sql);
    }
?>
<h3>Ganti Kategori</h3>
<div class="form-groub">

    <form action="" method="post"> 
        <div class="form-groub">
            <label for="">kategori</label>
            <input type="text" name="kategori" required value="<?php echo $row['Kategori'] ?>" class="form-control">
        </div>
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary" >
        </div>
    </form>

</div>

<?php

    if(isset($_POST['simpan'])){
        $kategori =$_POST['kategori'];

        $sql = "UPDATE tbkategori SET kategori='$kategori' WHERE idkategori=$id";
        
        $db->runSQL($sql);

        header("location:?f=kategori&m=select");
    }
?>