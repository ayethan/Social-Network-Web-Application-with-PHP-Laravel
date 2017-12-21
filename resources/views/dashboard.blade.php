@extends ('layouts.master')
@section('content')

<section class="row new-post">
	<div class="col-md-6 col-md-offset-3">
		<header><h3>What do you have to say?</h3></header>
		 <form action="{{ route('post.create') }}" method="post">
			<div class="form-group">
				<textarea class="form-control" name="body" id="new-post" row="5" placeholder=""></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Create Post</button>
			<input type="hidden" name="_token" value="{{ Session::token() }}">
		</form>
	</div>		
</section>
<section class="row-posts">
	<div class="col-md-6 col-md-offset-3">
		<header><h3>What other people say...</h3></header>
		<article class="post">
			<p>Edit: Someone upvoted this? This was an accidental post made while wresting for control of the phone when my two year old snatched it and ran (just noticed it now). </p>
			<div class="info">
				Posted by atk on 21 Dec 2017
			</div>
			<div class="interaction">
				<a href="">Like</a>
				<a href="">Dislike</a>
				<a href="">Edit</a>
				<a href="">Delete</a>
			</div>
		</article>
		<article class="post">
			<p>Edit: Someone upvoted this? This was an accidental post made while wresting for control of the phone when my two year old snatched it and ran (just noticed it now). </p>
			<div class="info">
				Posted by atk on 21 Dec 2017
			</div>
			<div class="interaction">
				<a href="">Like</a>
				<a href="">Dislike</a>
				<a href="">Edit</a>
				<a href="">Delete</a>
			</div>
		</article>
	</div>
</section>
@endsection