@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-8">
			<img src="/storage/{{ $post->image }}" class="w-100">
			<div class="pt-2">
				<p class="font-weight-bold">Date Posted: <span class="font-weight-light"> {{ date('M d, Y', strtotime($post->created_at)) }}</span></p>
			</div>
		</div>
		<div class="col-4">
			<div>
				<div class="d-flex align-items-center">
					<div class="pr-3">
						<img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 45px;">
					</div>
					<div>
						<div class="font-weight-bold">
							<a href="/profile/{{ $post->user->id }}" class="text-dark">{{ $post->user->username }}</a>
						</div>
					</div>

					<following-link follows="{{ $follows }}"></following-link>
				</div>
				
				<hr>

				<p>{{ $post->caption }}</p>

			</div>
		</div>
	</div>
</div>

@endsection