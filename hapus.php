<?php
require 'koneksi.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
        alert('remove data successfully');
        document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('remove data failed');
        document.location.href = 'index.php';
    </script>";
}
