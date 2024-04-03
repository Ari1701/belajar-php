<html>
<head>
    
<title>Menampilkan</title>
<style>
    body {
    font-family: Arial, sans-serif;
}
table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
}
th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
th {
    background-color: #f2f2f2;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
}
tr:hover {
    background-color: #ddd;
}
a {
    text-decoration: none;
    padding: 5px 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
    background-color: #f2f2f2;
    color: #333;
    transition: all 0.3s ease;
}
a:hover {
    background-color: #ddd;
}   
</style>
</head>

<body>
    <center><label><b>PRODUK</b></label></center>
    <center><a href="form_tambah.php">+ Tambah Produk</a></center><br>
    <table border="1" align="center">
    <tr> 
    <th>ID</th>
    <th>NAMA</th>
    <th>HARGA</th>
    <th>JUMLAH</th>
    <th>Aksi</th> <!-- Kolom untuk aksi -->
    </tr>
    <?php
    include 'koneksi.php';
    $data=mysqli_query($koneksi,"SELECT * FROM tbl_daftar_produk");
    while ($d = mysqli_fetch_array($data))
    {
        ?>
        <tr>
            <td><?php echo $d['id'];?></td>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['jumlah'];?></td>
            <td><?php echo $d['harga'];?></td>
            <td>
                <!-- Tautan atau tombol untuk mengedit -->
                <a href="form_edit.php?id=<?php echo $d['id'];?>">Edit</a>
                <!-- Tautan atau tombol untuk menghapus -->
                <a href="hapus.php?id=<?php echo $d['id'];?>">Hapus</a>
            </td>
        </tr>
        <?php
    }

    ?>
    </table>
</body>
</html>
