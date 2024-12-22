              
    <?php
        require('../connection/conn.php');
        $get_id =  $_GET['id'];
        $select_data_of_user= "SELECT * FROM `simple_table` WHERE id = $get_id";
        $select_data_query = mysqli_query($conn, $select_data_of_user);
        $selected_fetch_data = mysqli_fetch_array($select_data_query);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rays Coding :- PHP Crud Operation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-dark d-flex justify-content-between">
                            <h4 class="text-center text-light">Rays Coding : PHP CRUD Operation</h4>
                            <a href="../index/index.php" class="btn bg-warning text-dark"><b>Data List</b></a>
                        </div>
                        <div class="card-body">
                            <form action="../update/update.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="user_id" id="" value="<?php echo $selected_fetch_data['id']?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="username" name="user_name" placeholder="Enter User Name" autocomplete="off" value="<?php echo $selected_fetch_data['name']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="useremail" name="user_email" placeholder="Enter Email Address" autocomplete="off" value="<?php echo $selected_fetch_data['email']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="usercontact" class="form-label">Mobile Number</label>
                                            <input type="text" class="form-control" id="usercontact" name="user_contact" placeholder="Enter Contact Number" autocomplete="off" value="<?php echo $selected_fetch_data['contact']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userprofile" class="form-label">Profile</label>
                                            <input type="file" class="form-control" id="userprofile" name="user_profile" autocomplete="off" value="">
                                            <img src='../profiles/<?php echo $selected_fetch_data['profile']?>'>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Create Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="user_password" placeholder="Create Password" autocomplete="off" value="<?php echo $selected_fetch_data['password']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="confirm_user_password" placeholder="Re-Enter Password" autocomplete="off" value="<?php echo $selected_fetch_data['confirm_password']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" name="update_btn" class="btn bg-dark float-right text-light submit_button"><b>Update</b></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
               