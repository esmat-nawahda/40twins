
<div id="links"></div>
<br>


<div id="senior_updateModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" dir="rtl">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2>Edit Plan Information</h2>
            </div>
            <div class="modal-body">
                <div class="form col-md-12 center-block">

                    <input type="hidden" id="senior_id_up">
                    <div class="form-group">
                        <label for="senior_title_up">Senior Title</label>
                        <input type="text" class="form-control" id="senior_title_up" name="senior_title_up" placeholder="Enter Senior Title">
                    </div>
                    <div class="form-group">
                        <label for="senior_desc_up">Senior Content</label>
                        <textarea class="form-control" id="senior_desc_up" name="senior_desc_up" placeholder="Enter Senior Description" style="height: 200px"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="senior_file_up">Senior File</label>
                        <input type="file" name="seniorfile" id="senior_file_up" value="Upload File(s)">
                        <p class="help-block">Image for the Senior.</p>
                    </div>

                    <div class="form-group">
                        <label for="senior_date_up">Senior Date</label>
                        <input type="date" class="form-control" id="senior_date_up" name="senior_date_up">
                    </div>

                    <div class="form-group">
                        <label for="senior_dept_up">Department</label>
                        <select class="form-control" id="senior_dept_up" name="senior_dept_up">

                        </select>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-default get btn-md btn-block" id="senior_up">Done</button>

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

