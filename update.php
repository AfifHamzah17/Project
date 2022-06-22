<?php
    include "conn.php";     
    if(isset($_POST['Edit'])) {     
        $id = $_POST['myID'];       
        $name = $_POST['Nama'];
        $NIM = $_POST['Nim'];
        $JK = $_POST['Jk'];
        $doswal = $_POST['select'];
        $temp = explode(" - ", $doswal);

        $sql = "SELECT id FROM `dosen_wali` WHERE `nama` LIKE '$temp[0]'";    
        $result = $conn->query($sql);       
        if ($result->num_rows > 0){        
            while($row = $result->fetch_assoc()) {
                $id_doswal = $row["id"];
            }
        }                   
        $sql = "UPDATE mahasiswa SET nama = '$name', nim = '$NIM', jk = '$JK', id_doswal = '$id_doswal' WHERE mahasiswa.ID='$id'";   

        if ($conn->query($sql) === TRUE) {
            echo "Updated";
            $conn->close();
            header("Location:index.php");
            
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $conn->close();  
        }        
    }
    else{
        echo "data kosong";
    }
    $conn->close();  
?>