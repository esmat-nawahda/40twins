
<!-- The container for the list of example images -->
<div id="links"></div>
<br>


<div id="dept_updateModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" dir="rtl">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2>Edit Department Information</h2>
            </div>
            <div class="modal-body">
                <div class="form col-md-12 center-block">

                    <input type="hidden" id="dept_id_up">
                    <div class="form-group">
                        <label for="dept_sct_up">Department Shortcut</label>
                        <input type="text" class="form-control" id="dept_sct_up" name="dept_sct_up" placeholder="Department Shortcut">
                    </div>
                    <div class="form-group">
                        <label for="dept_name_up">Department Name</label>
                        <input type="text" class="form-control" id="dept_name_up" name="dept_name_up" placeholder="Department Name">
                    </div>

                    <div class="form-group">
                        <label for="dept_desc_up">Description</label>
                        <input type="text" class="form-control" id="dept_desc_up" name="dept_desc_up" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="dept_boss_up">Department Administrator</label>
                        <input type="text" class="form-control" id="dept_boss_up" name="dept_boss_up" placeholder="Department Administrator">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-default get btn-md btn-block" id="dept_up">Done</button>

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

