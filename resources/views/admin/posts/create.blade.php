@extends('layouts.app')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			Create a new post
		</div>

		<div class="panel-body">
			<form action="/post/store" method="post" >
				{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Title</label>
						<input class="form-control" type="text" name="title" value="">
					
				</div>
				<div class="form-group">
					<label for="featured">Feature image</label>
						<input class="form-control" type="file" name="featured" value="">
					
				</div>
				<div class="form-group">
					<label for="content">Content</label>
						<textarea class="form-control" name="content" id="content" cols="5" rows="5"></textarea>
					
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
							Store Post
						</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>
@endsection