<h3>insert Kategori</h3>
<div class="form-groub">

    <form action="" method="post"> 
        <div class="form-groub">
            <label for="">kategori</label>
            <input type="text" name="kategori" required placeholder = "isi kategori" class="form-control">
        </div>
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary" >
        </div>
    </form>

</div>

<?php

    if(isset($_POST['simpan'])){
        $kategori =$_POST['kategori'];

        $sql = "INSERT INTO tbkategori VALUES ('','$kategori')";
        
        $db->runSQL($sql);

        header("location:?f=kategori&m=select");
    }
?>