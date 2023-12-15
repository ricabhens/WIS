<button type="submit"><a href= "Course.html">Back</a></button>
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
        $sql = "SELECT CourseID, CourseName, Credits FROM Course";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<br> Course ID: " . $row["CourseID"]. " - Coursename: " . $row["CourseName"]. " - Credits: " . $row["Credits"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    // Close connection
    $conn->close();
    ?>