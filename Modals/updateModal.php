<?php
/**
 * Created by PhpStorm.
 * User: GeniuCode Pointer
 * Date: 9/25/2014
 * Time: 6:47 PM
 */
?>
<!-- The container for the list of example images -->
<div id="links"></div>
<br>


<div id="updateModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" dir="rtl">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2><?php echo $vars['up_account'] ?></h2>
            </div>
            <div class="modal-body">
                <div class="form col-md-12 center-block">


                    <div class="form-group" dir="rtl">
                        <label for="username_up">Username</label>
                        <input type="text" class="form-control" placeholder="Username" id="username_up">
                    </div>
                    <div class="form-group">
                        <label for="fullname_up">Full Name</label>
                        <input type="text" class="form-control" placeholder="Full Name" id="fullname_up">
                    </div>
                    
                  
                    <div class="form-group">
                        <label for="password_up">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="password_up">
                    </div>


					<div class="form-group">
                      <label for="admin_img_reg">Profile Pricture</label>
                      <input type="file" name="myfile" id="admin_img_up" value="Upload File(s)">
                      <p class="help-block" >Image for the admin.</p>
                    </div>

                    <div class="form-group">
                        <label for="admin_phone_up">Phone</label>
                        <input type="text" class="form-control" id="admin_phone_up" name="admin_phone_up" placeholder="Phone No.">
                    </div>

                    <div class="form-group">
                        <label for="admin_email_up">E-mail</label>
                        <input type="email" class="form-control" id="admin_email_up" name="admin_email_up" placeholder="E-mail">
                    </div>

                    <?php if($_SESSION['user_type']=="2"){?>
                    <div class="form-group">
                        <label for="admin_type_up">Type</label>
                        <select class="form-control" id="admin_type_up" name="admin_type_up">
                            <option value="1">Lecturer</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="admin_dept_up">Department</label>
                        <select class="form-control" id="admin_dept_up" name="admin_dept_up">

                        </select>
                    </div>
                    <? } ?>



                    <div class="form-group">
                        <button class="btn btn-default get btn-md btn-block" id="account_up">Done</button>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

