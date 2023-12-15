<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="Users.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
  <button type="submit"><a href= "Course.html">Back</a></button>
    <p>ADD NEW COURSE</p>
    <form id="add_course" class="input-group" action="Course_Create.php" method="get">
        Course Name: <input type="text" name="course_name"  id="course_name" class="input-field" placeholder="Course name" required> <br>
        Credits: <input type="text" name="credits"  id="credits" class="input-field" placeholder="Credits" required> <br>
        <button type="submit">New Course</a></button> 
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
        $sql = "SELECT CourseID, CourseName, Credits FROM Course";
        $result = $conn->query($sql);
    //Add User
    $id = rand(100000,999999);
    $coursename = $_GET['course_name'];
    $credits = $_GET['credits'];

    $sql = "INSERT INTO Course (CourseID, CourseName, Credits) VALUES ('$id', '$coursename', $credits)";
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
    