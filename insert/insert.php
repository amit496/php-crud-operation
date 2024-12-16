                        
    <?php
        require_once('../connection/conn.php');
        if(isset($_POST['submit_btn']))
        {
            $name = $_POST['user_name'];
            $email= $_POST['user_email'];
            $contact = $_POST['user_contact'];
            $profile = $_FILES['user_profile']['name'];
            $profile_temp = $_FILES['user_profile']['tmp_name'];
            $profile_location = '../profiles/'.$profile;
            $password = $_POST['user_password'];
            $confirm_password = $_POST['confirm_user_password'];
            if($password == $confirm_password)
            {
                $insert_data = "INSERT INTO `simple_table`(`name`, `email`, `contact`, `profile`, `password`, `confirm_password`) VALUES ('$name','$email','$contact','$profile','$password','$confirm_password')";
                                
    move_uploaded_file($profile_temp, $profile_location);
                  
                $insert_query = mysqli_query($conn,$insert_data);
                
                if($insert_query)
                {
                    header('location:../index/index.php');
                }
                else
                {
                    echo "<script>alert('Data Not Insert.'); window.history.back();</script>";
                }
            }
            else
            {
                echo "<script>alert('Password Are Not Match'); window.history.back();</script>";
            }
        }
    ?>
                                