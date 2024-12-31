                 
    <?php
        require('../connection/conn.php');
        $get_id = $_GET['id'];   
        $delete_data= "DELETE FROM `simple_table` WHERE `id` = $get_id ";
        $delete_data_query = mysqli_query($conn ,$delete_data);
        if($delete_data_query){
            header('location:../index/index.php');
        }
    ?>
                    