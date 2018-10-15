@extends('ChatBot')

@section('content1')

	<style type="text/css">
		
	</style>
		<section class="row posts">
			<div class="col-md-12 ">Content</div>
				<div class="col-md-12" style="width: 50%; height: 250px; overflow: scroll;">
					@foreach($posts as $post)
						<article class="post panel panel-success" data-postid="{{$post->id}}">
							<div class="info panel-heading">
								{{ $post->user->name}} {{ $post->created_at }}
							</div>
							<div class="panel-body" style="margin-left: 20px;">{{ $post->body}}</div>
						</article>
					@endforeach
				</div>
		</section>
		<section class="row new-post">
			<div class="col-md-12">
				<header><h3>What do you have to say?</h3></header>
				<form action="{{ route('post.create')}}" method="POST" role="form">
					<legend>Form title</legend>
				
					<div class="form-group">
						<textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Enter your message"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Send</button>
					<input type="hidden" name="_token" value="{{ Session::token() }}">
				</form>
			</div>
		</section><br>

	<script type="text/javascript">
		var token = '{{ Session::token() }}'
	</script>
@endsection