<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>
    <?php include "style.php"?>
</head>

<body>
<?php 

    include_once '../config.php' ?>

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Registration Form Intern Report</h2>
                </div>
                <div class="card-body">
                    <form action = "../register/config.php" method="post">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                             <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="firstname" id="firstname" placeholder="First name" required>
                                            <!--<label class="label--desc">first name</label>-->
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="lastname" id="lastname" placeholder="Last name" required>
                                            <!--<label class="label--desc">last name</label>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" id="email" placeholder="e.g username123@email.com" required>
                                    <!--<label class="label--desc">e.g username123@email.com</label>-->
                                
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">User Type</div>
                                   
                                    <div class="value">
                                        <div class="input--style-5" id ="standard-select" style="height:50px " position: center>
                                        <select  name="usertype" id="standard-select" style="padding: 10px 0;">
                                        <?php
                                        
                                        
                                            $sql1 = "SELECT * FROM `usertype`";
                                            $result1 = $conn->query($sql1);
                                            $allusertype = mysqli_query($conn,$sql1);
                                            //$conn->close();
                                            ?>
                                            <option value="" disabled selected hidden required >Select your option</option>
                                            <?php
                                            
                                                // use a while loop to fetch data 
                                                // from the $all_categories variable 
                                                // and individually display as an option
                                                while ($usertype = mysqli_fetch_array(
                                                        $allusertype,MYSQLI_ASSOC)):; 
                                            ?>
                                                <option value="<?php echo $usertype["id"];?>" id="<?php echo $usertype["id"];?>"
                                                >
                                                    <?php echo $usertype["description"];
                                                        // To show the category name to the user
                                                    ?>
                                                </option>
                                            <?php 
                                                endwhile; 
                                                // While loop must be terminated
                                            
                                            ?>
                                            
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="name">Position</div>
                                   
                                    <div class="value">
                                        <div class="input--style-5" id ="standard-select" style="height:50px " position: center>
                                        <select  name="position" id="standard-select" style="padding: 10px 0;">
                                        <?php
                                        
                                        
                                            $sql4 = "SELECT * FROM `position`";
                                            $result14= $conn->query($sql4);
                                            $pos = mysqli_query($conn,$sql4);
                                            //$conn->close();
                                            ?>
                                            <option value="" disabled selected hidden required >Select your option</option>
                                            <?php
                                            
                                                // use a while loop to fetch data 
                                                // from the $all_categories variable 
                                                // and individually display as an option
                                                while ($position = mysqli_fetch_array(
                                                        $pos,MYSQLI_ASSOC)):; 
                                            ?>
                                                <option value="<?php echo $position["posnames"];?>" id="<?php echo $position["id"];?>"
                                                >
                                                    <?php echo $position["posnames"];
                                                        // To show the category name to the user
                                                    ?>
                                                </option>
                                            <?php 
                                                endwhile; 
                                                // While loop must be terminated
                                            
                                            ?>
                                            
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="form-row">
                            <div class="name">Education Level</div>
                            <div class="value">
                                        <div class="input--style-5" id ="standard-select" style="height:50px " position: center>
                                        <select  name="edulevel" id="standard-select" style="padding: 10px 0;">

                                        <?php
                                                                                        
                                                    $sql1 = "SELECT * FROM `edulevel`";
                                                    $result1 = $conn->query($sql1);
                                                    $alleducationlevel = mysqli_query($conn,$sql1);
                                                    //$conn->close();
                                                    ?>
                                                    <option value="" disabled selected hidden required >Select your option</option>
                                                    <?php
                                                    
                                                        // use a while loop to fetch data 
                                                        // from the $all_categories variable 
                                                        // and individually display as an option
                                                        while ($educationlevel = mysqli_fetch_array(
                                                                $alleducationlevel,MYSQLI_ASSOC)):; 
                                                    ?>
                                                        <option value="<?php echo $educationlevel["id"];?>" id="<?php echo $educationlevel["id"];?>"
                                                        >
                                                            <?php echo $educationlevel["name"];
                                                                // To show the category name to the user
                                                            ?>
                                                        </option>
                                                    <?php 
                                                        endwhile; 
                                                        // While loop must be terminated
                                                    
                                                    ?>
                                                    
                                                
                                                </select>
                     
                                </div>
                            </div>
                        </div>
                        <div class="form-row"id="coursediv" >
                        
                            <div class="name" id="course" >Course Name</div>
                            <div class="value">
                                <div class="input-group" >
                                    <input class="input--style-5" id="course" type="course" name="course" placeholder="e.g Information Technology" >
                                    <!--<label class="label--desc">e.g username123@email.com</label>-->
                                </div>
                            </div>
                        </div>
                        <div class="form-row" id="schooldiv" style="margin-bottom:80px;"> 
                            <div class="name" id="school">School/College Name</div>
                                <div class="value">
                                    <div class="input-group">
                                    <div class="input--style-5" id ="standard-select" style="height:50px " position: center>
                                        <select   id="standard-select" style="padding: 10px 0;" name="school" onchange='CheckSchool(this.value);' onchange='Checkusertype(this.value);'>
                                        <?php
                                        
                                        $sql = "SELECT * FROM `school`";
                                        $result = $conn->query($sql);
                                        $allschool = mysqli_query($conn,$sql);
                                        //$conn->close();
                                        ?>
                                        <option value="" disabled selected hidden required>Select your option</option>
                                        <option id ="0" value="0">Others</option>
                                       
                                                                             
                                       
                                    <?php 
                                        // use a while loop to fetch data 
                                        // from the $all_categories variable 
                                        // and individually display as an option
                                        
                                        while ($school = mysqli_fetch_array(
                                                $allschool,MYSQLI_ASSOC)):; 
                                        ?>
                                        
                                        <option value="<?php echo $school["id"];?>" id="<?php echo $school["id"];?>"
                                    
                                        >
                                            <?php echo $school["school"];
                                                // To show the category name to the user
                                            ?>
                                            </option>
                                        <?php 
                                            endwhile; 
                                            // While loop must be terminated
                                        ?>
                                       
                                        <input class="input--style-5" type="text" name="school2" id="school2" style='display:none;  border:1px; width:450px; height:50px; ' placeholder="Enter Your College Here" >
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="name">Start Date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="startdate" id="startdate"  required>
                                
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">End Date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="enddate" id="enddate"  required>
                                
                                </div>
                            </div>
                        </div>
                        <div class="form-row" >
                            <div class="name">Password</div>
                            <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="password" name="password" id="password" placeholder="e.g Must contains 8 characters with numbers and words" >
                                            <!--<label class="label--desc">e.g Must contains 8 characters with numbers and words</label>-->
                                </div>
                            </div>
                        </div>
                      
                    
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit" value="submit">Register</button>
                            <div class="container signin">
                                <br>
                                <p>Already have an account? <a href="../login">Sign in</a>.</p>
                               </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include "script.php" ?>
</body>

</html>
<!-- end document-->