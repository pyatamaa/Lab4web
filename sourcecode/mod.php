<?php
$mod = isset($_REQUEST['mod'])?
$_REQUEST['mod']: "index";
switch ($mod) {
    case "home":
        require("index.php");
        break;
    case "add":
        require("tambah.php");
        break;
    case "edit":
        require("ubah.php");
        break;
    case "delete":
        require("hapus.php");
        break;
    default:
        require("index.php");
}
?>