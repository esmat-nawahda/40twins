<style>
    .upload-button {
        padding: 4px;
        border: 1px solid black;
        border-radius: 5px;
        display: block;
        float: left;
    }

    .profile-pic {
        max-width: 200px;
        max-height: 200px;
        display: block;
    }

    .file-upload {
        display: none;
    }

    .profile-pic{
        height: 200px;
        width: 40%;
    }

</style>


<section id="signup" class="contact-wrapper section-padding" style="background: transparent;">
    <div class="container">
        <div class="row">
            <div class="wow zoomIn col-xs-12 text-center p-padding">
                <div class="top-title">Sign Up.. It is easy</div>
            </div><!-- col-xs-12 -->
            <div class="wow zoomIn col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div name="contactForm" id='contact_form'>

                    <center>
                    <div class="profile-header-img">
                        <img class="img-circle profile-pic" src="img/defimg.jpg" />
                        <!-- badge -->
                        <div class="rank-label-container">
<!--                            <div class="upload-button" style="cursor: hand;">Upload Image</div>-->
                            <input class="file-upload" type="file" accept="image/*" id="img_reg"/>
                        </div>

                    </div>
                    </center>
                    <div style="clear: both;">&nbsp;</div>
                    <div class="form-inline">



                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="fullname" id="fullname_reg" placeholder="Full Name" >
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="username" id="username_reg" placeholder="Username" >
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="password" class="form-control" name="password" id="password_reg" placeholder="Password" >
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="password" class="form-control" name="repassword" id="repassword_reg" placeholder="Re-Type Password" >
                        </div>




                    </div>
                    <div class="form-group col-xs-12">
                        <div id='mail_success' class='success' style="display:none;">Your message has been sent successfully.
                        </div><!-- success message -->
                        <div id='mail_fail' class='error' style="display:none;"> Sorry, error occured this time sending your message.
                        </div><!-- error message -->
                    </div>
                    <div class="form-group col-sm-12" id='submit'>
                        <input type="submit" id='signupBtn_reg' class="btn  btn-lg costom-btn" value="Finish">
                    </div>
                </div>
            </div> <!-- /.col-xs-12 .col-sm-offset-2 .col-sm-8 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


<script src="js/jquery-1.11.1.js"></script>

<script>
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function(){
            readURL(this);
        });

        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
    });
</script>



