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
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" id="password" name="password" class="form-control" value="password">
                        <div class="row">
                            <div class="col-md-4 text-center"> 
                                <img class="brand-image img-circle" src="{{ asset('img/logo.png') }}" id="edit_preview_photo" width="200" height="180" />
                                <input type="hidden" id="ItemPixStr" name="ItemPixStr" value="prod.png">
                                <label
                                        class="image__file-upload btn btn-primary text-white"
                                        tabindex="2"> Choose
                                    <input type="file" name="profilePic" id="profilePic" id="pfImage" class="d-none" >
                                </label>
                            </div>

                            <div class="col-md-8">

                                <div class="input-group mb-3">
                                    <span class="input-group-text">Role</span>
                                    <select name="role_id" id="user-id" class="form-control user-id" required></select>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">First Name</span>
                                    <input type="text" id="fname" name="fname" class="form-control">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">Last Name</span>
                                    <input type="text" id="lname" name="lname" class="form-control">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">Contact</span>
                                    <input type="text" id="contact_num" name="contact_num" class="form-control">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Email</span>
                                    <input type="email" aria-label="Description" id="email" name="email" class="form-control">
                                </div>
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