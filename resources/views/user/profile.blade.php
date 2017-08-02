@extends('layouts.app')


<style>
	.profile-img{ max-width: 150px; border: 5px solid #fff; border-radius: 100%; box-shadow: 0 2px 2px rgba(0,0,0,0.3); }
</style>
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
             <div class="panel panel-default">
             
                <div class="panel-body text-center">
                	<h2>{{ $user->name }}</h2>
                    <img src="https://s-media-cache-ak0.pinimg.com/564x/77/70/5c/77705c2de53d8306ebed9ffda8f9986a.jpg" class="profile-img" alt="">

                    <h5>{{ $user->email }}</h5>
                    <h5>{{ $user->dob->format('l j F Y') }} ( {{ $user->dob->age }}  years old ) </h5>
                    <button class="btn btn-primary">Follow</button>
                </div>
             </div>
        </div>
    </div>
@endsection