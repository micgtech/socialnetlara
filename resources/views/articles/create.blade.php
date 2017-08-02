@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
             <div class="panel panel-default">
				 <div class="panel-heading text-center">
						Create article
				 </div>

                <div class="panel-body ">
				<form action="/articles"  method="POST">
					{{ csrf_field()}}

					<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
					
					<div class="form-group">
						<label for="content">Content</label>
						<textarea name="content" class="form-control"></textarea>
					</div>

					<div class="checkbox">
						<label><input  type="checkbox" class="btn btn-primary pull-right" name="live"></label>
					</div>


					<div class="form-group">
						<label for="post_on">Posted on: </label>
						<input  type="datetime-local" class="form-control" name="post_on">
						 
					</div>
						<input class="btn btn-primary pull-right" type="submit">

				</form>
					
                	
                </div>
             </div>
        </div>
    </div>
@endsection