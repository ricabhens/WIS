<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="Users.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
    <p>ADD NEW USER</p>
    <form id="add_user" class="input-group" action="Users.php" method="get">
        Username: <input type="text" name="name"  id="name" class="input-field" placeholder="Username" required> <br>
        Email: <input type="email" name="email" id="email" class="input-field" placeholder="Email" required> <br>
        Password: <input type="password" name="password" id="password" class="input-field" placeholder="Password" required> <br>
        <button type="submit">New Account</button>
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
    
    // Close connection
    $conn->close();
    ?>

</body>
</html> 
</body>
</html>