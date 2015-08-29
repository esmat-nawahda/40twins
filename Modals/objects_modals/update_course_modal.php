
<div id="links"></div>
<br>


<div id="course_updateModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" dir="rtl">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2>Edit Courses Table Information</h2>
            </div>
            <div class="modal-body">
                <div class="form col-md-12 center-block">

                    <input type="hidden" id="course_id_up">
                    <div class="form-group" dir="rtl">
                        <label for=course_title_up">Title</label>
                        <input type="text" class="form-control" placeholder="Title" id="course_title_up">
                    </div>
                    <div class="form-group">
                        <label for="course_desc_up">Content</label>
                        <textarea class="form-control" placeholder="Content" id=course_desc_up" style="height: 200px"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="course_img_up">Course Picture</label>
                        <input type="file" name="planimg" id="course_img_up" value="Upload File(s)">
                        <p class="help-block">Image for the plan.</p>
                    </div>

                    <div class="form-group">
                        <label for="course_dept_up">Department</label>
                        <select class="form-control" id="course_dept_up" name="course_dept_up">

                        </select>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-default get btn-md btn-block" id="course_up">Done</button>

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

