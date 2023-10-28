
    File Name :- update.php 

    <?php
    require('../connection/conn.php'); 
    if(isset($_POST['update_btn']))
    {
        $user_id = $_POST['user_id'];
        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $contact = $_POST['user_contact'];
        $profile = $_FILES['user_profile']['name'];
        $profile_tmp = $_FILES['user_profile']['tmp_name'];
        $profile_location = '../profiles/'.$profile;
        $password = $_POST['user_password'];
        $confirm_password = $_POST['confirm_user_password'];
        if(isset($user_id))
        {
            if($password === $confirm_password)
            {
                if($profile != '')
                {
                    $update_date = "UPDATE `simple_table` SET `name`='$name',`email`='$email',`contact`='$contact',`profile`='$profile',`password`='$password',`confirm_password`='$confirm_password'  WHERE id = $user_id";
                    $update_date_query = mysqli_query($conn ,$update_date) ;
                    if($update_date_query)
                    {
                        move_uploaded_file($profile_tmp, $profile_location);
                        header('location:../index/index.php');
                    }
                    else
                    {
                        echo "<script>alert('Data Not update Successfully'); window.history.back();</script>";
                    }
                }
                else
                {
                    $update_date = "UPDATE `simple_table` SET `name`='$name',`email`='$email',`contact`='$contact',`password`='$password',`confirm_password`='$confirm_password'  WHERE id = $user_id";
                    $update_date_query = mysqli_query($conn ,$update_date) ;
                    if($update_date_query)
                    {
                        move_uploaded_file($profile_tmp, $profile_location);
                        header('location:../index/index.php');
                    }
                    else
                    {
                        echo "<script>alert('Data Not update Successfully'); window.history.back();</script>";
                    }
                }

            }
            else
            {
                echo "<script>alert('Password Are Not Match'); window.history.back();</script>";
            }
        }
    }

    ?>