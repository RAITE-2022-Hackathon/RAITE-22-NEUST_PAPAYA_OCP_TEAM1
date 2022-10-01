@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Users</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Users Management</h4>
                            <div class="card-header-form">
                                <div class="text-right" style="margin-bottom:15px;">
                                    <a href="javascript:void(0)" class="btn btn-success my-2 my-sm-0" id="btn-new"><span class="fa fa-plus"></span></a>
                                </div>
                                <form>
                                    <div class="input-group">
                                    <input type="text" class="form-control" id="search" placeholder="Seach By Name">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead style="background-color: #6777ef; border-radius: 20px;">
                                        <tr>
                                            <th class="text-white">ID</th>
                                            <th class="text-white">Fullname</th>
                                            <th class="text-white">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-main"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.users.modal')
@endsection

@section('javascript')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#edit_preview_photo').attr('src', e.target.result);
                $('#ItemPixStr').val(input.files[0].name);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#profilePic").change(function(){
        readURL(this);
    });
</script>
<script type="module" src="{{ asset('js/users/index.js') }}"></script>
@endsection
