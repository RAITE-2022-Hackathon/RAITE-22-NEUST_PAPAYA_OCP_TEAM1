@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
@if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
<section class="section">
<<<<<<< HEAD
    <div class="section-header">
        <h3 class="page__heading">Home</h3>
    </div>
    <div class="section-body">
        <div class="col-lg-12" style="margin-bottom:20px;">
            <form id="set-Model">
                <div class="input-group">
                    <input type="hidden" name="user_id" id="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                    <textarea class="form-control" id="description" name="description" placeholder="Create Post" style="border-radius:10px; height:100px;"></textarea>
                    <a href="javascript:void(0)" class="btn btn-success my-2 my-sm-0" id="post" style="font-size:20px; margin-left:10px; "><span class="fa fa-paper-plane"></span></a>
                </div>
            </form>
=======
        <div class="section-header">
            <h3 class="page__heading">Home</h3>
        </div>
        <div class="section-body">
            <div class="col-lg-12" style="margin-bottom:20px;">
                <!-- <form id="set-Model">
                    <div class="input-group">
                        <input type="hidden" name="user_id" id="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Create Post" style="border-radius:20px; height:50px;"> -->
                        <a href="javascript:void(0)" class="btn btn-success my-2 my-sm-0" id="btn-new" style="font-size:20px; margin-left:10px; "><span class="fa fa-paper-plane"></span></a>
                    <!-- </div> -->
                </form>
            </div>
            <!-- <div class="row"> -->
                <table>
                <tbody id="post-main">
                    
                </tbody>
                </table>
                <!-- <div class="col-lg-12" id="post-main">
                    
                </div> -->
            <!-- </div> -->
>>>>>>> 2ec5fc0e7eaca71d16e1f224a779fd236c64c218
        </div>
        <!-- <div class="row"> -->
            <div class="col-lg-12" id="post-main">
                
            </div>
        <!-- </div> -->
    </div>
</section>
@else


    @endif
    @include('posts.modal')
@endsection

@section('javascript')
<script type="module" src="{{ asset('js/home/index.js') }}"></script>
@endsection

