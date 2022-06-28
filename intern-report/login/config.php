<?php
    $email = $_POST['email'];
    
    // include '../vip/function.php';
    include_once '../config.php';
        $stmt = $conn->prepare("select * from user where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $password = iampwd($_POST['password']);
            $data = $stmt_result->fetch_assoc();
            if(iampwd($data['password']) === $password){
                header("Location: ../index.php?id=".$data['id']);
                exit();
            }else{
                echo '<script>alert("Wrong email or password!"); window.history.back();</script>';
                
            }

        }else {
            echo '<script>alert("Wrong email or password!"); window.history.back();</script>';
            
        }
    
?>