<button type="submit"><a href= "Student.html">Back</a></button>
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
        $sql = "SELECT StudentID, Firstname, Lastname, DateOfBirth, Email, Phone FROM student";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<br> ID: " . $row["StudentID"]. " - Username: " . $row["Firstname"]. "- Lastname". $row["Lastname"]. "- Date of Birth". $row["DateOfBirth"]." - Email: " . $row["Email"]. "- Phone". $row["Phone"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    // Close connection
    $conn->close();
    ?>

</body>
</html> 