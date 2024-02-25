<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql = "SELECT * FROM dbmenu WHERE idmenu = $id";

        $item = $db->getITEM($sql);

        $idkategori = $item['idkategori'];
        

        
    }

    $row = $db->getALL("SELECT * FROM tbkategori ORDER BY kategori ASC");    

?>

<h1>Insert Menu</h1>
<div class="form-groub">

    <form action="" method="post"  enctype="multipart/form-data"> 
        <div class="form-groub w-50">

            <label for="">Id Kategori</label>
            <br>
            <select name="idkategori" id="">
                <?php foreach($row as $r): ?>
                    <option <?php if($idkategori == $r['idkategori']) echo "selected"?> value="<?php echo $r['idkategori'] ?>"
                    > <?php echo $r['Kategori'] ?> </option>
                <?php endforeach ?>
            </select>

        </div>

    <form action="" method="post"> 
        <div class="form-groub w-50">

            <label for="">Menu</label>
            <input type="text" name="menu" required value="<?php echo $item['menu']?>" class="form-control">
        </div>

        <div class="form-groub w-50">

            <label for="">Harga</label>
            <input type="text" name="harga" number required value="<?php echo $item['harga']?>" class="form-control">
        </div>

        <div class="form-groub w-50">

            <label for="">Gambar</label>
            <br>
            <input type="file" name="gambar">
            <br>
        </div>

        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary" >
        </div>
    </form>

</div>

<?php

    if(isset($_POST['simpan'])){
        $idkategori=$_POST['idkategori'];
        $menu =$_POST['menu'];
        $harga = $_POST['harga'];
        $gambar = $item['gambar'];
        $temp = $_FILES['gambar']['tmp_name'];


        if(!empty($temp)){
            $gambar = $_FILES['gambar']['name'];
            move_uploaded_file($temp,'../upload/'.$gambar);
        }

        $sql = "UPDATE dbmenu SET idkategori='$idkategori', menu = '$menu', gambar='$gambar', 
        harga = '$harga' WHERE idmenu = $id";
            $db->runSQL($sql);
            header("location:?f=menu&m=select");
        
        
        
    }
?>
