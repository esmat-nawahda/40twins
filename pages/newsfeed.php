<link rel="stylesheet" href="css/pages_style/newsfeed.css">
<style>
    body{
       background-image: url("img/bg2.png");
    }
</style>

<script>
    $('#addNewPost').hide();
</script>

<div><button onclick="showAddPost()" class="btn btn-default fa fa-share-square-o"> NEW POST</button></div>
<div style="clear: both;">&nbsp;</div>
<div class="col-md-12" id="addNewPost">
    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title  post_content">Write New Post..</h3>
        </div><!-- /.box-header -->
        <div class="box-body">

            <!-- text input -->
            <div class="form-group">
                <label>Title</label>
                <input type="text"  class="form-control" id="post_title" placeholder="Enter Title..."/>
            </div>


            <!-- textarea -->
            <div class="form-group">
                <label>Body</label>
                <textarea  class="form-control" rows="7" id="post_body" placeholder="Enter Body..."></textarea>
            </div>

            <div class="profile-header-img">
                <img class="img_post" height="100px" width="100px" src="img/defimg.jpg" />
                <!-- badge -->
                <div class="rank-label-container">
                    [Optional]
                    <!--                            <div class="upload-button" style="cursor: hand;">Upload Image</div>-->
                    <input class="file-upload" id="post_img_add" type="file" accept="image/*"/>
                </div>

            </div>

<!--            <h3>-->
<!--                Responsive 16:9 YouTube-->
<!--            </h3>-->
<!--            <div class="embed-responsive embed-responsive-16by9">-->
<!--                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>-->
<!--            </div>-->
<!--            <h3>-->

            <div class="form-group">
                <label>Youtube [Optional]</label>
                <input type="text" id="post_youtube"  class="form-control" placeholder="Enter Youtube Link..."/>
            </div>

            <div class="box-footer">
                <button type="button" id="post_add_btn" class="btn btn-primary" style="border: 1px solid rgb(205, 28, 62); transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 25px; margin: 0px; padding: 10px 35px; letter-spacing: 2px; font-size: 16px; background-color: rgb(237, 38, 76);">Add Post</button>
            </div>

        </div>
    </div>
</div>

<div style="clear: both;">&nbsp;</div>
<!--Newsfeed-->
<div class="col-sm-12">


    <!-- row -->
    <div class="row">
        <div class="col-md-12" id="newsfeed_cont">
            <!-- The time line -->


        </div><!-- /.col -->
    </div><!-- /.row -->

    <center>

        <button class="center-block btn btn-inverse" onclick="getPostsByGroup()">Load More..</button>

        <div class="container" id="loadMoreSpinner">
            <!--<div class="spinner"></div>-->
            <div class="spinner border"></div>
            <!--<div class="spinner arrow"><div class="arrow1"></div><div class="arrow2"></div></div>-->
        </div>
    </center>

</div>
<!--End Newsfeed-->


<script>
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.img_post').attr('src', e.target.result);
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

<script>
    $('.timeline-panel').click(function() {
        $('.timeline-body', this).toggle(); // p00f
    });
</script>




