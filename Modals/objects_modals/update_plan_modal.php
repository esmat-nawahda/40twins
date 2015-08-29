
<div id="links"></div>
<br>


<div id="plan_updateModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" dir="rtl">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2>Edit Plan Information</h2>
            </div>
            <div class="modal-body">
                <div class="form col-md-12 center-block">

                    <input type="hidden" id="plan_id_up">
                    <div class="form-group" dir="rtl">
                        <label for=plan_title_up">Title</label>
                        <input type="text" class="form-control" placeholder="Title" id="plan_title_up">
                    </div>
                    <div class="form-group">
                        <label for="plan_desc_up">Content</label>
                        <textarea class="form-control" placeholder="Content" id="plan_desc_up" style="height: 200px"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="plan_img_up">Plan Picture</label>
                        <input type="file" name="planimg" id="plan_img_up" value="Upload File(s)">
                        <p class="help-block">Image for the plan.</p>
                    </div>

                    <div class="form-group">
                        <label for="plan_dept_up">Department</label>
                        <select class="form-control" id="plan_dept_up" name="user_dept_up">

                        </select>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-default get btn-md btn-block" id="plan_up">Done</button>

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

