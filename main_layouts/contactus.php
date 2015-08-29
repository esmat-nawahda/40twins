<section id="contact" class="contact-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="wow zoomIn col-xs-12 text-center p-padding">
                <div class="top-title">CONTACT US</div>
            </div><!-- col-xs-12 -->
            <div class="wow zoomIn col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <form name="contactForm" id='contact_form' method="post" action='php/email.php'>
                    <div class="form-inline">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="name" >
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="email address">
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="subject" id="exampleInputSubject" placeholder="subject" >
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="company" id="exampleInputCompany" placeholder="company" >
                        </div>
                        <div class="form-group col-sm-12">
                            <textarea class="form-control" name="message" rows="3" id="exampleInputMessage" placeholder="message" ></textarea>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <div id='mail_success' class='success' style="display:none;">Your message has been sent successfully.
                        </div><!-- success message -->
                        <div id='mail_fail' class='error' style="display:none;"> Sorry, error occured this time sending your message.
                        </div><!-- error message -->
                    </div>
                    <div class="form-group col-sm-12" id='submit'>
                        <input type="submit" id='send_message' class="btn  btn-lg costom-btn" value="send">
                    </div>
                </form>
            </div> <!-- /.col-xs-12 .col-sm-offset-2 .col-sm-8 -->
            <div class="col-xs-12">
                <div class="contact-or">
                    <p>or</p>
                </div><!-- /.contact-or -->
                <div class="icon-text">
                    <span>find us on</span>
                </div><!-- /.icon-text -->
                <div class="icon-holder">
                    <ul >
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div><!-- /.icon-holder -->
            </div><!-- /.col-xs-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>