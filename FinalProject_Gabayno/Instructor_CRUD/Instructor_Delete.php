<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="Users.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
  <button type="submit"><a href= "Instructor.html">Back</a></button>
    <p><br>DELETE INSTRUCTOR INFO</p>
    <form id="delete_instructor" class="input-group" action="Instructor_Delete.php" method="get">
        User ID: <input type="number" name="delete_id" id="delete_id" class="input-field" placeholder="Instructor ID" required> <br>
        <button type="submit">Delete</a></button>
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
        $sql = "SELECT InstructorID, Firstname, Lastname, Email, Phone FROM Instructor";
        $result = $conn->query($sql);

    // Delete data
    $idToDelete = $_GET['delete_id'];

    $sql = "DELETE FROM Instructor WHERE InstructorID=$idToDelete";

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

    