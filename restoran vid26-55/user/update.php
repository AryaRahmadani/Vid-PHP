<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $row = $db -> getITEM("SELECT * FROM dbuser WHERE iduser = $id");

        if($row ['aktif']==0){
            $aktif=1;
        }else {
            $aktif = 0;
        }

       
        $sql = "UPDATE dbuser SET aktif = $aktif WHERE iduser = $id";
        $db -> runSQL($sql);

        header("location:?f=user&m=select");
    }
?>