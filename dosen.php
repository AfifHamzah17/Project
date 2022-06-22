<?php
    include "conn.php";        
    $sql = "SELECT nama, nip FROM dosen_wali";
    $result = $conn->query($sql);    

    if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) { ?>                   
                <option><?php echo $row["nama"], " - ", "(", $row["nip"], ")"?></option>                                                   
    <?php   }
        }            
    $conn->close();  ?> 