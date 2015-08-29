
<!-- The container for the list of example images -->
<div id="links"></div>
<br>


<div id="update_post" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button style="color: #ffffff;" type="button" class="close btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <div style="clear: both;">&nbsp;</div>
                <h2>Update This Post</h2>
            </div>
            <div class="modal-body">
                <div class="form col-md-12 center-block">

                    <input type="hidden" id="book_id_up">
                    <div class="form-group">
                        <label for=post_title_up">Title</label>
                        <input type="text" class="form-control" placeholder="Title" id="post_title_update">
                    </div>

                    <div class="form-group">
                        <label for="post_desc_up">Post Description</label>
                        <textarea class="form-control" placeholder="Post Description" id="post_desc_up" style="height: 200px"></textarea>
                    </div>


                    <div class="form-group">

                        <label for="post_img_up">Post Image</label>
                        <input type="file" name="post_img_up" id="post_img_up" value="Upload File(s)">
                        <p class="help-block">Image for the Post.</p>
                    </div>

                    <div class="form-group">
                        <label for="youtube_url_up">Youtube</label>
                        <input type="text" class="form-control" placeholder="Youtube URL" id="youtube_url_up">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-default get btn-md btn-block" id="post_up">Done</button>

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

