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
        $sql = "SELECT UsersID, Username, Email FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<br> ID: " . $row["UsersID"]. " - Username: " . $row["Username"]. " - Email: " . $row["Email"]. "<br>";
            }
        } else {
            echo "0 results";
        }

    //Add User
    $id = rand(100000,999999);
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $birthdate = $_GET['birthdate'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];

    $sql = "INSERT INTO student (StudentID, Firstname, Lastname, DateOfBirth, Email, Phone) VALUES ('$id', '$firstname', $lastname, $birthdate, '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Update data
    $newUsername = $_GET['new_name'];
    $idToUpdate = $_GET['enter_id'];

    $sql = "UPDATE users SET username='$newUsername' WHERE id=$idToUpdate";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Delete data
    $idToDelete = $_GET['delete_id'];

    $sql = "DELETE FROM users WHERE id=$idToDelete";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close connection
    $conn->close();
    ?>

</body>
</html> 