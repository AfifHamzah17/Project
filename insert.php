<?php
    include "conn.php"; 
    if(isset($_GET['Submit'])) {            
        $name = $_GET['Nama'];
        $NIM = $_GET['Nim'];
        $JK = $_GET['Jk'];
        $doswal = $_GET['select'];
        $temp = explode(" - ", $doswal);

        $sql = "SELECT id FROM `dosen_wali` WHERE `nama` LIKE '$temp[1]'";    
        $result = $conn->query($sql);       
        if ($result->num_rows > 0){        
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
            }
        }    

        $sql = "INSERT INTO mahasiswa(ID, nama , nim, jk, id_doswal) VALUES(NULL,'$name','$NIM','$JK', '$id')";   

        if ($conn->query($sql) === TRUE) {
            echo "insert";
            $conn->close();  
            header("Location:index.php");
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();  
    }
    else{
        echo "kosong data";
    }
    $conn->close();  
?>