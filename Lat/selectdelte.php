<div style="margin:auto; width:900px;">

<h1><a href="http://localhost/Phpbosku/restoran/kategori/insert.php">Tambah Data</a></h1>


<?php
    require_once "../function.php";

    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        require_once "delete.php";
    }
    echo '<br>';
    

    $sql = "SELECT dbkategori FROM kategori" ;
    $result = mysqli_query($koneksi,$sql);

    $jumlahdata = mysqli_num_rows($result);
    

    
    $banyak = 3;

    $halaman = ceil($jumlahdata / $banyak);
    
    for($i=1; $i < $halaman; $i++){
        echo '<a href="?p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    } 
        echo '<br> <br>'; 

        if (isset($_GET['p'])) {
            $p=$_GET['p'];
           $mulai = ($p * $banyak) -$banyak;
           
        }
        else {
            $mulai = 0;
        }

    $sql = "SELECT * FROM kategori LIMIT $mulai,$banyak";

    $result = mysqli_query($koneksi,$sql);
    // var_dump($result);
    $jumlah = mysqli_num_rows($result);
    // echo '<br>';
    // echo $jumlah;

    echo '
    <table border="1px">
    <tr>
        <th>no</th>
        <th>kategori</th>
        <th>hapus</th>
    </tr>
    ';

    $no=$mulai+1;
    if ($jumlah > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'.$row['dbkategori'].'</td>';
            echo '<td>'.$row['Kategori'].'</td>';
            echo '<td><a href="?hapus='.$row['dbkategori'].'">'.'Hapus'.'</a></td>';
            echo '</tr>';

        }
    }
    echo '</table>';
?>
</div>