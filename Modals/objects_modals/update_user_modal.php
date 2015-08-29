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


<div id="user_updateModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" dir="rtl">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2>Edit User Information</h2>
            </div>
            <div class="modal-body">
                <div class="form col-md-12 center-block">

                    <input type="hidden" id="user_id_up">
                    <div class="form-group">
                        <label for="user_name_up">Username</label>
                        <input type="text" class="form-control" id="user_name_up" name="user_name_up" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="user_firstname_up">First Name</label>
                        <input type="text" class="form-control" id="user_firstname_up" name="user_firstname_up" placeholder="Enter First Name">
                    </div>

                    <div class="form-group">
                        <label for="user_lastname_up">Last Name</label>
                        <input type="text" class="form-control" id="user_lastname_up" name="user_lastname_up" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label for="user_pass_up">Password</label>
                        <input type="password" class="form-control" id="user_pass_up" name="user_pass_up" placeholder="Enter Password">
                    </div>

                    <div class="form-group">
                        <label for="user_bdate_up">Birth Of Date</label>
                        <input type="date" class="form-control" id="user_bdate_up" name="user_bdate_up">
                    </div>

                    <div class="form-group">
                        <label for="user_phone_up">Phone</label>
                        <input type="text" class="form-control" id="user_phone_up" name="user_phone_up" placeholder="Phone No.">
                    </div>

                    <div class="form-group">
                        <label for="user_email_up">E-mail</label>
                        <input type="email" class="form-control" id="user_email_up" name="user_email_up" placeholder="E-mail">
                    </div>

                    <div class="form-group">
                        <label for="user_type_up">Type</label>
                        <select class="form-control" id="user_type_up" name="user_type_up">
                            <option value="1">Student</option>
                            <option value="2">Teacher</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="user_dept_up">Department</label>
                        <select class="form-control" id="user_dept_up" name="user_dept_up">

                        </select>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-default get btn-md btn-block" id="user_up">Done</button>

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

