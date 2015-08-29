<link rel="stylesheet" href="css/pages_style/singlePost.css">

<div class="container" id="postSettings">
    <div class="row">
        <div class="[ col-xs-12 col-sm-offset-1 col-sm-10 ]">
            <div class="[ panel panel-default ] panel-google-plus">
                <div class="dropdown">
                    <span class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="fa fa-cog"></span>
                    </span>
                    <ul class="dropdown-menu" role="menu">
                        <li id="deletePostFromSinglePostBtn" role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                        <li id="editPostFromSinglePostBtn" role="presentation"><a role="menuitem" tabindex="-1" href="#update_post" id="update_post_id" role="button" data-toggle="modal">Edit</a></li>

                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Notify All Again</a></li>
                    </ul>
                </div>

                <div class="panel-heading">
                    <img height="60px" width="60px"  id="singlePostProfileImg" class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg" alt="Mouse0270" />
                    <a href="#" id="user_id_single_post"><h2  id="singlePostFullname">Robert McIntosh - <h5><span  id="singlePostTitle" style="font-size: large;">Shared publicly</span> - <span id="singlePostDate">Jun 27, 2014</span> </h5></h2></a>

                    <div class="row">
                        <span class="btn-group" role="group" aria-label="Default button group">
                            <button href="#update_post" id="update_post_id" role="button" data-toggle="modal" type="button" class="btn btn-sm"><i id="editPostFromSinglePostBtn" class="fa fa-pencil-square-o fa-5x" ></i></button>

                            <button id="deletePostFromSinglePostBtn" type="button" class="btn btn-sm"><i class="fa fa-trash-o  fa-5x" ></i></button>
                        </span>

                    </div>


                </div>
                <div class="panel-body" style="white-space: pre-line">
                    <p id="singlePostContent">Do people born in 2000 get to choose if they are Generation Y or Generation Z? How do you decide what generation you want to belong to?</p>
                    <a href="#galleryModal" data-toggle="modal" id="img_single_post_modal" data-img-url="uploads/posts/'+img+'"><img class="img_post" id="img_single_post" height="100px" width="100px" src=""></a>

                </div>



                <div class="embed-responsive embed-responsive-16by9" id="youtube_single_post">
                    <iframe class="embed-responsive-item" id="youtube_post" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>

                </div>

                <div class="panel-footer">
                    <button type="button" class="[ btn btn-default ]">+1</button>
                    <button type="button" class="[ btn btn-default ]">
                        <span class="fa fa-comment"></span>
                    </button>
                    <div class="input-placeholder">Add a comment...</div>
                </div>
                <div class="panel-google-plus-comment">
                    <img height="50px" width="50px" class="img-circle" id="singlePostProfileImg2" src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s46" alt="User Image" />
                    <div class="panel-google-plus-textarea">
                        <textarea id="commentContent" rows="3"></textarea>
                        <button type="submit" class="[ btn btn-success disabled ]" id="addCommentBtn">Post comment</button>
                        <button type="reset" class="[ btn btn-default ]" onclick="deleteCommentContent()">Cancel</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


    </div>
</div>










<!--Comments-->

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2 class="page-header">Comments</h2>
            <section class="comment-list" id="commentsCont">



                <!-- First Comment -->
<!--                <article class="row">-->
<!--                    <div class="col-md-2 col-sm-2 hidden-xs">-->
<!--                        <figure class="thumbnail">-->
<!--                            <img id="singlePostUserImg" class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />-->
<!--                            <figcaption class="text-center" id="singlePostFullname">username</figcaption>-->
<!--                        </figure>-->
<!--                    </div>-->
<!--                    <div class="col-md-10 col-sm-10">-->
<!--                        <div class="panel panel-default arrow left">-->
<!--                            <div class="panel-body">-->
<!--                                <header class="text-left">-->
<!--                                    <div class="comment-user" id="singlePostTitle"><i class="fa fa-user"></i> That Guy</div>-->
<!--                                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>-->
<!--                                </header>-->
<!--                                <div class="comment-post">-->
<!--                                    <p id="singlePostContent">-->
<!--                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                                <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </article>-->







            </section>
        </div>



    </div>



    <?php include_once("../Modals/update_modals/update_post_modal.php"); ?>


</div>



<script>
    $(function () {
        $('.panel-google-plus > .panel-footer > .input-placeholder, .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > button[type="reset"]').on('click', function(event) {
            var $panel = $(this).closest('.panel-google-plus');
            $comment = $panel.find('.panel-google-plus-comment');

            $comment.find('.btn:first-child').addClass('disabled');
            $comment.find('textarea').val('');

            $panel.toggleClass('panel-google-plus-show-comment');

            if ($panel.hasClass('panel-google-plus-show-comment')) {
                $comment.find('textarea').focus();
            }
        });
        $('.panel-google-plus-comment > .panel-google-plus-textarea > textarea').on('keyup', function(event) {
            var $comment = $(this).closest('.panel-google-plus-comment');

            $comment.find('button[type="submit"]').addClass('disabled');
            if ($(this).val().length >= 1) {
                $comment.find('button[type="submit"]').removeClass('disabled');
            }
        });
    });
</script>