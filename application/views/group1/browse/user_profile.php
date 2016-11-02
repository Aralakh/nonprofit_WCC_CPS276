
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $user_array['first_name'].' '.$user_array['middle_initial'].' '.$user_array['last_name'].'\'s Profile' ?></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class=" col-md-9 col-lg-9 ">
                    <table class="table table-user-information">
                        <tbody>
                        <tr>
                            <td>User ID:</td>
                            <td><?php echo $user_array['user_id'] ?></td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td>
                                <?php 
                    
                                    $permissionArray = str_split($user_array['permission']); 
                                    if($permissionArray[0] == 1){
                                        echo 'Administrator<br>';
                                    }
                                    if($permissionArray[1] == 1){
                                        echo 'Teacher<br>';
                                    }
                                    if($permissionArray[2] == 1){
                                        echo 'Parent<br>';
                                    }
                                    if($permissionArray[3]){
                                        echo 'Student';
                                    }

                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $user_array['gender']? 'Female':'Male'; ?></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><?php echo $user_array['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><?php echo date_format(date_create($user_array['birth_date']), 'M d, Y') ?></td>
                        </tr>

                        <tr>
                        <tr>
                            <td>Address</td>
                            <td><?php echo $user_array['street'].', '.$user_array['city'].', '.$user_array['state'].' '.$user_array['zip'] ?></td>
                        </tr>
                        <tr>
                        <td>Phone Number 1<br><br>Phone Number 2</td>
                        <td><?php echo $user_array['phone_number_1'] ?><br><br><?php echo $user_array['phone_number_2'] ?></td>
                        </tr>
                        <tr>
                            <td>Assigned Duty ID's:</td>
                            <td><?php echo $user_array['misc_duties'] ?></td>
                        </tr>
                        <tr>
                            <td>Notes:</td>
                            <td><?php echo $user_array['notes'] ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- if administrator show 'edit account' button -->
        <?php if($current_user_clearance[0]): ?>
            <form action="./details" method="post">
                <div class="panel-footer">
                    <button class="btn btn-warning">Edit Account</button>
                </div>
            </form>
        <?php else : ?>
        <!-- else show 'change password' button -->
        
            <form action="./details" method="post">
                <div class="panel-footer">
                    <button class="btn btn-warning">Change Password</button>
                </div>
            </form>

        <?php endif;?>
    </div>