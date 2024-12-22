                
    <?php
    require('../connection/conn.php'); 

    if(isset($_POST['update_btn'])) {
        $user_id = $_POST['user_id'];
        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $contact = $_POST['user_contact'];
        $profile = $_FILES['user_profile']['name'];
        $profile_tmp = $_FILES['user_profile']['tmp_name'];
        $profile_location = '../profiles/'.$profile;

        if(isset($user_id)) {
            if($profile != '') {
                $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
                $file_ext = pathinfo($profile, PATHINFO_EXTENSION);

                if(in_array(strtolower($file_ext), $allowed_extensions)) {
                    if(move_uploaded_file($profile_tmp, $profile_location)) {
                        $update_query = "UPDATE `simple_table` SET `name`='$name', `email`='$email', `contact`='$contact', `profile`='$profile' WHERE id = $user_id";
                        $update_query_run = mysqli_query($conn, $update_query);

                        if($update_query_run) {
                            header('location:../index/index.php');
                        } else {
                            echo "<script>alert('Data not updated successfully'); window.history.back();</script>";
                        }
                    } else {
                        echo "<script>alert('Failed to upload image'); window.history.back();</script>";
                    }
                } else {
                    echo "<script>alert('Invalid file type'); window.history.back();</script>";
                }
            } else {
                $update_query = "UPDATE `simple_table` SET `name`='$name', `email`='$email', `contact`='$contact' WHERE id = $user_id";
                $update_query_run = mysqli_query($conn, $update_query);

                if($update_query_run) {
                    header('location:../index/index.php');
                } else {
                    echo "<script>alert('Data not updated successfully'); window.history.back();</script>";
                }
            }
        }
    }
    ?>
                