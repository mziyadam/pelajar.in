<?php
include('../model/Materi.php');
class MateriController{
    public function mengaksesMateri($idMateri){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pelajarin";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM Materi where idMateri=\'".$idMateri."\' top 1";
        $result = $conn->query($sql);
        $materi=new Materi();
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $materi->setAll($row["idMateri"],$row["mataKuliah"],$row["judulMateri"],$row["fileMateri"]);
          }
        } else {
          echo "0 results";
        }
        return $materi;
        $conn->close();
    }
}