<?php
//use this to check what POST data you submit
    //foreach ($_POST as $key => $value) {
    //  echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
    //}

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];
    $edu = $_POST['edu'];
    $course = $_POST['course'];
    $school = $_POST['school'];
    $password = $_POST['password']; 
    if($usertype == 1){
        $course = $_POST['course'];
        $school = $_POST['school'];
        if($school == 3){
            $school = $_POST['school2'];
            }
        else{
            $school = $_POST['school'];
        }
    }
    else {
        $course = "Not Applicable";
        $school = 0;
    }
    include '../config.php';
        $stmt2 = $conn->prepare("insert into school(school) values(?)");
        $stmt2->bind_param('s',$school);
        $stmt2->execute();
        $stmt2->close();
        $stmt = $conn->prepare("insert into user(firstname, lastname, email, school, edu, usertype, course, password) values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssssss',$firstname, $lastname, $email, $school, $edu, $usertype, $course, $password);     
        // if(!$stmt->execute()) echo $stmt->error;
        // exit();
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("Location: ../login");

