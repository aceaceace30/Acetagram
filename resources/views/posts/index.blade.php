@extends('layouts.app')

@section('content')

<div class="container">
	@foreach($posts as $post)
		<div class="row">
			<div class="col-7 offset-2">
				<p>
				<a href="/profile/{{ $post->user->id }}"><img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-20" height="25px"></a>
				<span class="font-weight-bold">
					<a href="/profile/{{ $post->user->id }}" class="text-dark">{{ $post->user->username }}</a>
				</span> {{ $post->caption }}
				</p>
			</div>

			<div class="col-7 offset-2">
				<a href="/profile/{{ $post->user->id }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
			</div>
		</div>

		<div class="row pt-2 pb-5">
			<div class="col-7 offset-2">
				<p class="font-weight-bolder" style="font-size: 12.5px">{{ date('M d', strtotime($post->created_at)) }}</p>
			</div>
		</div>
	@endforeach

		<div class="row">
			<div class="col-12 d-flex justify-content-center">
				{{ $posts->links() }}
			</div>
		</div>
</div>

@endsection