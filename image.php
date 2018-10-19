<?php

if(isset($_GET['w'])){
    $p = 'https://via.placeholder.com/'.$_GET['w'].'x40.png';
    header("Content-type: image/png");
    readfile($p);
}

?>