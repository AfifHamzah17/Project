<?php
include "conn.php";
$id = (isset($_GET['id'])); 


$sql = "SELECT mahasiswa.ID, mahasiswa.nama, nim, jk, dosen_wali.nama AS nama_dosen FROM mahasiswa INNER JOIN dosen_wali ON mahasiswa.id_doswal = dosen_wali.id WHERE mahasiswa.ID = '$id'";
$result = $conn->query($sql);
while($user_data = $result->fetch_assoc())
{
    $id = $user_data['ID'];
    $nama = $user_data['nama'];
    $nim = $user_data['nim'];
    $jk = $user_data['jk'];
    $doswal = $user_data['nama_dosen'];
    $temp = explode(" - ", $doswal);   
}

    $male_status = 'unchecked';
    $female_status = 'unchecked';    
    if ($jk == 'L') {

        $male_status = 'checked';

    }
    else if ($jk == 'P') {

        $female_status = 'checked';

    }
    $conn->close();  
?>
<html lang="en">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .main{
            padding: 100px;
        }     
        
    </style>

</head>
<body>
<div class="main">
<a href="index.php">Beranda</a>
<div class="card text-center">
    <div class="card">
  <div class="card-header">
   <H3> EDIT DATA MAHASISWA </H3>
  </div>
  <div class="card-body">

        <form action="update.php" method="post">
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><h5>Nama</h5></label>
                <div class="col-sm-6">
                    <input type="input" class="form-control" name="Nama" <?php echo "value=", $name?>>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><h5>NIM</h5></label>
                <div class="col-sm-6">
                    <input type="input" class="form-control" name="Nim" <?php echo "value=", $nim?>>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><h5>Jenis kelamin</h5></label>
                <div class="form-check form-check-inline">                        
                    <input class="form-check-input" type="radio" name="Jk" id="inlineRadio1" value="1" <?php echo $male_status?>>
                    <label class="form-check-label" for="inlineRadio1"><h5>Laki-laki</h5></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Jk" id="inlineRadio2" value="2" <?php echo $female_status?>>
                    <label class="form-check-label" for="inlineRadio2"><h5>Perempuan</h5></label>
                </div>
            </div>  
             
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><h5>Dosen Wali</h5></label>
                <select class="custom-select custom-select-lg col-md-6" name="select">
                    <option>Pilih Dosen</option> 
                    <?php
                        include "conn.php";        
                        $sql = "SELECT nama, nip FROM dosen_wali";
                        $result = $conn->query($sql);       
                        if ($result->num_rows > 0){
                                while($row = $result->fetch_assoc()) { 
                                    if($row["nama"]==$temp[0]) {
                                         echo '<option selected>', $row['nama'], ' - ', '(',$row['nip'], ')','</option>';                                        
                                    }
                                    else{
                                        echo '<option>', $row['nama'], ' - ', '(',$row['nip'], ')','</option>';                                        
                                    }
                                }
                            }            
                            $conn->close();  ?>                                          
                </select>
            </div>
            <div class="form-group col">  
                <input type="hidden" class="form-control" name="myID" <?php echo "value=", $id?>>                      
                <input type="submit" name="Edit" class="btn btn-primary" value="Edit"></input>
            </div>
        </form>
    </div>   
                        </div>
                        </div>
</body>
</html>