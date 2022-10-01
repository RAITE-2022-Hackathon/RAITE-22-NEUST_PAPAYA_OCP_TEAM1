@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
@if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Home</h3>
        </div>
        <div class="section-body">
            <div class="col-lg-12" style="margin-bottom:20px;">
                <a href="javascript:void(0)" class="btn btn-success my-2 my-sm-0" id="btn-new" style="font-size:20px; margin-left:10px; "><span class="fa fa-paper-plane"></span></a>
                <input type="hidden" id="likes">
            </div>
                <table>
                <tbody id="post-main">
                    
                </tbody>
                </table>
        </div>
    </div>
</section>
@else


    @endif
    @include('posts.modal')
@endsection

@section('javascript')
<script type="module" src="{{ asset('js/home/index.js') }}"></script>
@endsection

