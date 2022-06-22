<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data PHP </title>
</head>
<body>
    <h2>Menampilkan Data Tertentu Dari Database PHP</h2>
    <?php
    include 'conn.php';
    $query = "SELECT * FROM mahasiswa"; while
    $sql = mysqli_fetch_array($conn,"SELECT * FROM mahasiswa WHERE id = '$id' AND nama = ('$name') AND nim = '$NIM' AND jenis_kelamin = '$JK' ");
    //menampilkan data dengan id tertentu
    echo "<b>Id</b> : " . $sql['id'] . "<br>";
    echo "<b>Nama</b> : " . $sql['nama'] . "<br>";
    echo "<b>NIM </b> : " . $sql['nim'] . "<br>";
    echo "<b>Jenis Kelamin</b> : " . $sql['jenis_kelamin'];
    ?>
</body>
</html>