<?php
    $listArray = ['larine','aduh','qifuat','toda','anevi','samid','kifuat'];
    
    echo "tugas nomor 2";
    echo "<br>"; echo "<br>";
    function fungsi($Array){
        foreach($Array as $list){
            echo $list;
            echo "<br>";
        }   
    }
    sort($listArray);//untuk mengurutkan array
    fungsi($listArray);//tampilkan hasil dari fungsi
?>
