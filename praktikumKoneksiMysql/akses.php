<html> 
     <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "myDB";
        
        $conn = mysqli_connect($servername, $username, $password, $databasename);
        //check connection
        if(!$conn){
             die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT kode, negara, champion FROM liga";
        //query/sintaks untuk menampilkan kode,negara, chamipon dari tabel liga
        $result = mysqli_query($conn, $sql);
        //deklarasi $result 
        if(mysqli_num_rows($result) > 0){
             //output data of each row
               while($row = mysqli_fetch_assoc($result)){
                    echo "kode: ", $row["kode"]. "-Negara: ". $row["negara"]. " " .$row["champion"]. "<br>";
               }
        } else {
             echo "0 result";
        }

        mysqli_close($conn);
        ?>
     </body>
</html>
