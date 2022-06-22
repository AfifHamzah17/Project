<?php  
    session_start();
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">

    <style>
        .main{
            padding: 100px;
        }  
        .form-group{
            padding: 0px 0px;
            left: 1080px
        }        
    </style>

    <title>Tambah Mahasiswa</title>
</head>
<body class="img js-fullheight"  style="background-image:url(ASI.png);">
<div class="main">
<div class="card text-center">
    <div class="card">
  <div class="card-header">
   <H3> TAMBAH MAHASISWA </H3>
    </div>
  <div class="card-body">
        <br>
        <form action="insert.php" method="get">
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><h5>Nama</h5></label>
                <div class="col-sm-6 tabel">
                <input type="input" class="form-control" name="Nama" placeholder="Masukkan Nama">
                </div>
                </div>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><h5>NIM</h5></label>
                <div class="col-sm-6">
                <input type="input" class="form-control" name="Nim" placeholder="Masukkan NIM">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><h5>Jenis kelamin</h5></label>
                <div class="form-check form-check-inline">                        
                    <input class="form-check-input" type="radio" name="Jk" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1"><h5>Laki-laki</h5></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Jk" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2"><h5>Perempuan</h5></label>
                </div>
            </div>   
           
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><h5>Dosen Wali</h5></label>
                <select class="custom-select custom-select-lg col-md-6" name="select">
                    <option selected>Pilih Dosen</option> 
                    <?php include "dosen.php";?>                                         
                </select>
            </div>
            
            <div class="form-group col myBtn" style='margin-left:-910px;'>                                 
                <input type="submit" name="Submit" class="btn btn-primary" value="Simpan"></input> <br>
            <div class="form-group col myBtn" style='margin-left:-1710px;'>
                <a href="admin.php"> 
                <input type="button" name="beranda" class="btn btn-primary" value="beranda"> </input>
                </a>
               
            </div>
        </form>
    </div>  
    </div> 
    </div>
    </div>
</body>
</html>