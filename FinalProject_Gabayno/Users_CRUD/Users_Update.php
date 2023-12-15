<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="Users.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
    <p>UPDATE USER</p>
    <form id="update_user" class="input-group" action="Users.php" method="get">
        New Username: <input type="text" name="new_name"  id="new_name" class="input-field" placeholder="Username" required> <br>
        User ID: <input type="number" name="enter_id" id="enter_id" class="input-field" placeholder="User ID" required> <br>
        <button type="submit">Update</button>
    </form>
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
        
    // Update data
    $retval = mysqli_select_db( $conn, 'Gabayno' );
    $newUsername = $_GET['new_name'];
    $idToUpdate = $_GET['enter_id'];

    $sql = "UPDATE users SET Username='$newUsername' WHERE UsersID=$idToUpdate";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    // Close connection
    $conn->close();
    ?>

</body>
</html> 
</body>
</html>