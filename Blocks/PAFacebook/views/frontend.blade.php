@if(is_admin())
	<img class="img-preview" src="{{ get_template_directory_uri() }}/Blocks/PAFacebook/preview.png" />
@else
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v10.0" nonce="ytfDnIE0"></script>
	<div class="pa-widget pa-w-carousel-feature">
		@notempty($title)
			<h2>{!! $title !!}</h2>
		@endnotempty

		@notempty($url)
			<div class="fb-page" data-href={{ $url }} data-tabs="timeline" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
		@endnotempty
	</div>
@endif