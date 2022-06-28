<?php
    include '../vip/function.php';
    include_once '../config.php';
//use this to check what POST data you submit
    //foreach ($_POST as $key => $value) {
    //  echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
//use this to check what POST data you submit
    //foreach ($_POST as $key => $value) {
    //  echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
    //}
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];
    $position = $_POST['position'];
    $edu = $_POST['edulevel'];
    $course = $_POST['course'];
    $school = $_POST['school'];
    
    $school2 = $_POST['school2'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
   $password = $_POST['password']; 
    
    if($usertype == 1){
        if($school == 0){
            $stmt2 = $conn->prepare("insert into school(school) values(?)");
            $stmt2->bind_param('s',$school2);
            $stmt2->execute();
            $school = $conn->insert_id;
            $stmt2->close();
            }
        else{
            $school = $_POST['school'];
        }
    }
    else {
        $course = "Not Applicable";
        $school = 0;
    }
    

    
        
        $stmt = $conn->prepare("insert into user(firstname, lastname, email, school, edu, usertype, position, course,startdate,enddate, password) values(?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)");
        $stmt->bind_param('sssiiisssss',$firstname, $lastname, $email, $school, $edu, $usertype, $position, $course,$startdate,$enddate, $password);     
        if(!$stmt->execute()) {
        echo $stmt->error;
         exit();
        }
       // $stmt->execute();
        $stmt->close();
        $conn->close();
        header("Location: ../login");


