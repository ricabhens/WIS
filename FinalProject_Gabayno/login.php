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
    ?>
  