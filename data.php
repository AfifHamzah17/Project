<?php
    include "conn.php";        
    $sql = "SELECT   mahasiswa.ID, mahasiswa.nama, nim, jk, dosen_wali.nama AS nama_dosen FROM mahasiswa INNER JOIN dosen_wali ON mahasiswa.id_doswal = dosen_wali.id";
    $result = $conn->query($sql);   
    
    if ($result->num_rows > 0){
       ?> 
       <ul class="list-group list-group-horizontal-sm">
        <li class="list-group-item item">ID</li>
        <li class="list-group-item">Nama</li>
        <li class="list-group-item">NIM</li>
        <li class="list-group-item item">JK</li>
        <li class="list-group-item">Dosen Wali</li> 
        <li class="list-group-item buton">KET</li>    
    </ul>

    <?php
            while($data = $result->fetch_array()) { ?>   
                <ul class="list-group list-group-horizontal-sm">                 
                    <li class="list-group-item item"><?php echo $data["ID"]?></li>
                    <li class="list-group-item"><?php echo $data["nama"]?></li>
                    <li class="list-group-item"><?php echo $data["nim"]?></li>
                    <li class="list-group-item item"><?php echo $data["jk"]?></li>
                    <li class="list-group-item"><?php echo $data["nama_dosen"]?></li>     
                    <li class="list-group-item buton">
                        <a class="edit" href="edit.php?id=<?php echo $data['ID']?>">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a class="trash" href="delete.php?id=<?php echo $data['ID']?>">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </li>     
                </ul> 
            <?php   
            }
        }   
        else{
            echo "<h3 style='text-align:center;'> Database berhasil ditambahkan </h3>";
        }         
        $conn->close();  ?>