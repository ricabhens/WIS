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

    //Add User
    $id = rand(100000,999999);
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    $sql = "INSERT INTO users (UsersID, Username, Email, Password) VALUES ('$id', '$name', '$email', '$password')";
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