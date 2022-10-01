@extends('layouts.app')

@section('content')
@if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@else

<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Home</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" id="search" placeholder="Create Post" style="border-radius:20px; height:50px;">
                            <button class="btn btn-white"><i class="fas fa-paper-plane" id="createPost" style="font-size:20px; margin-left:10px; "></i></button>
                        </div>
                    </form>
                    <div class="card" style="width: 50%; position: relative; left:300px">
                        <div class="card-body">
                            <h1 class="text-center">Manage Your Crypto and DeFi Portfolio From One Place</h1>
                            <p class="text-center">Securely connect the portfolio you’re using to start.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endif
@endsection

