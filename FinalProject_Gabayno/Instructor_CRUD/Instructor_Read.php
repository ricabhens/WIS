<button type="submit"><a href= "Instructor.html">Back</a></button>
<?php
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "Gabayno"; 
    
        // Create connection
        $conn = new mysqli($servername, $username, $password);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $retval = mysqli_select_db( $conn, 'Gabayno' );
        // Select data
        $sql = "SELECT InstructorID, Firstname, Lastname, Email, Phone FROM Instructor";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<br> Instuctor ID: " . $row["InstructorID"]. " - Firstname: " . $row["Firstname"]. " - Lastname: " . $row["Lastname"]. " - Email: " . $row["Email"]. " - Phone: " . $row["Phone"]. "<br>";
            }
        } else {
            echo "0 results";
        }

    // Close connection
    $conn->close();
    ?>

</body>
</html> 