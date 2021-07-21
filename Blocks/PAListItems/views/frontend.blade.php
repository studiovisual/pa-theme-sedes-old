@if(is_admin())
	<img class="img-preview" src="{{ get_template_directory_uri() }}/Blocks/PAListItems/preview.png"/>
@else
	<div class="pa-widget pa-w-list-projects">
		@notempty($title)
			<h2>{!! $title !!}</h2>
		@endnotempty

		@notempty($items)
			<div class="mt-4">
				@foreach($items as $item)
					<div class="project mb-2 mb-xl-4 border-0">
						<div class="row">
							<div class="col">
								<a 
									href="{{ isset($item['link']) ? $item['link']['url'] : get_permalink($item['id']) }}" 
									target="{{ isset($item['link']) && !empty($item['link']['target']) ? $item['link']['target'] : '_self' }}"
									class="d-block d-flex align-items-center rounded fw-bold"
								>
									<figure class="figure m-xl-0">
										<img 
											src="{{ isset($item['featured_media_url']) ? $item['featured_media_url']['pa_block_render'] : get_the_post_thumbnail_url($item['id'], 'medium') }}" 
											alt="{{ $item['title']['rendered'] }}"
											class="figure-img img-fluid rounded m-0"
										/>
									</figure>
								</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		@endnotempty

		@notempty($enable_link)
			<a 
				href="{{ $link['url'] ?? '#' }}" 
				target="{{ $link['target'] ?? '_self' }}"
				class="pa-all-content"
			>
				{!! $link['title'] !!}
			</a>
		@endnotempty
	</div>
@endif