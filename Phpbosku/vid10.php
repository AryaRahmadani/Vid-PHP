<?php
    // $nama = array('Koko','Koko','Koko',100);

    // var_dump($nama);

    // echo '<br>';

    // foreach ($nama as $key) {
    //     echo $key . '<br>';
    // }

    $nama = array(
        "Koko" => "Surabaya",
        "Koko" => "Malang",
        "Koko" => "Sidoarjo"
    );

    var_dump($nama);
    echo '<br>';

    foreach ($nama as $a => $b) {
        echo $a . ' - ' . $b;
        echo '<br>';
    }

?>