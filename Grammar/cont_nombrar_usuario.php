<?php
session_start();
if (isset($_SESSION['user'])) {
    echo '<span id="n_usuario">'.$_SESSION['user'].
    '</span>';
} 
?>