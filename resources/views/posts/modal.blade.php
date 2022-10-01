<div class="modal fade" id="modal-main" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="modal-title"></h4>
                <div class="pull-left"><button type="button" class="close" data-dismiss="modal"><span class="fa fa-times"></button></div>
            </div>
            <div class="modal-body">
                <form id="set-Model" class="form-horizontal">
                    @csrf
                    <div class="modal-body">
                    <div class="alert alert-danger d-none" id="editProfileValidationErrorsBox"></div>
                        <input type="hidden" name="user_id" id="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                        <div class="row">

                                <div class="input-group mb-12">
                                    <span class="input-group-text">Description</span>
                                    <textarea class="form-control" id="description" name="description" placeholder="Create Post" style="border-radius:10px; height:100px;"></textarea>
                                </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary form-control" id="engrave" value="create-new">Save</button>
            </div>
        </div>
    </div>
</div>