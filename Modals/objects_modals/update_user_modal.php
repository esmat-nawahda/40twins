<?php

?>
<!-- The container for the list of example images -->
<div id="links"></div>
<br>


<div id="user_updateModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
<!--            <div class="modal-content" dir="rtl">-->
            <div class="modal-header">
                <button style="color: #ffffff;" type="button" class="close btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <div style="clear: both;">&nbsp;</div>
                <h2>Edit User Information</h2>
            </div>
            <div class="modal-body">
                <div class="form col-md-12 center-block">

                    <input type="hidden" id="user_id_up">



                    <div class="form-group">
                        <label for="user_lastname_up">Full Name</label>
                        <input type="text" class="form-control" id="user_fullname_up" name="user_fullname_up" placeholder="Enter Full Name">
                    </div>



                    <div class="form-group">
                        <label for="user_name_up">Username</label>
                        <input type="text" class="form-control" id="user_name_up" name="user_name_up" placeholder="Enter Username" >
                    </div>


                    <div class="form-group">
                        <label for="user_pass_up">Password</label>
                        <input type="password" class="form-control" id="user_password_up" name="user_password_up" placeholder="Enter Password">
                    </div>

                    <div class="form-group">
                        <label for="user_pass_up">Email</label>
                        <input type="text" class="form-control" id="user_email_up" name="user_email_up" placeholder="Enter Email">
                    </div>


                    <div class="form-group">
                        <label for="user_pass_up">Summary</label>
                        <input type="text" class="form-control" id="user_summary_up" name="user_summary_up" placeholder="Enter Summary">
                    </div>



                    <div class="form-group">
                        <label for="user_pass_up">Youtube Video</label>
                        <input type="text" class="form-control" id="user_youtube_video_up" name="user_youtube_video_up" placeholder="Enter Youtube Video">
                    </div>




                    <div class="form-group">
                        <label for="user_bdate_up">Birth Of Date</label>
                        <input type="date" class="form-control" id="user_birthdate_up" name="user_birthdate_up">
                    </div>




                    <div class="form-group">
                        <label for="user_pass_up">Country</label>
                        <input type="text" class="form-control" id="user_country_up" name="user_country_up" placeholder="Enter Country>
                    </div>


                    <div class="form-group">
                        <label for="user_pass_up">City</label>
                        <input type="text" class="form-control" id="user_city_up" name="user_city_up" placeholder="Enter City">
                    </div>

                    <div class="form-group">
                        <label for="user_pass_up">Address</label>
                        <input type="text" class="form-control" id="user_address_up" name="user_address_up" placeholder="Enter Address">
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

