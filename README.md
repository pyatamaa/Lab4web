# Lab4web
repository khusus untuk penempatan praktikum 4 menggunakan bahasa PHP

---

## Penjelasan
Program lanjutan dari Create, Read, Update, dan Delete(CRUD) sederhana dengan menggunakan Bahasa Program PHP dan koneksi ke Database dan ditambahkan dengan mod rewrite

## Routing
Routing berguna untuk mempermudah akses halaman web, sehingga web menjadi SEO friendly. Langkah pertama untuk melakukan routing, kamu harus menyiapkan file utama (mod.php) yang berisi routing untuk mengakses banyak halaman. Contohnya :

1. Halaman Home ( http://localhost/lab4_php_modular/mod.php?mod=index )

2.Halaman About ( http://localhost/lab4_php_modular/mod.php?mod=tambah )

Buat file dengan nama mod.php

```
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
```

## Aktivasi mod_rewrite (.htaccess)
Mod_rewrite digunakan untuk mengubah URL dari query string menjadi SEO Friendly. Langkah awal yang harus disiapkan adalah aktivasi mod_rewrite pada webserver Apache2 pada configurasi httpd.conf.

![Screenshot (100)](https://user-images.githubusercontent.com/92738041/230835956-58fc0493-77de-4ba0-8b24-78cf7aea4629.png)

Selanjutnya buat file .htaccess

```
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /lab4/
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?mod=$1 [L]
</IfModule>
```

Cara aksesnya menjadi:

1 Halaman Home ( http://localhost/lab4/index.php )

• Halaman About ( http://localhost/lab4/tambah.php )
