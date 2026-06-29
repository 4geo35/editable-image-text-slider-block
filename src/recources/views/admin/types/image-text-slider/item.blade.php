<div>
    @if ($item->recordable->image)
        @php($image = $item->recordable->image)
        <a target="_blank" href="{{ route('thumb-img', ['template' => 'original', 'filename' => $image->file_name]) }}"
           class="inline-block rounded-base overflow-hidden">
            <picture>
                <source media="(min-width: 640px)"
                        srcset="{{ route('thumb-img', ['template' => "medium", 'filename' => $image->file_name]) }}">
                <img
                    class="h-full object-cover object-center"
                    src="{{ route('thumb-img', ['template' => 'small', 'filename' => $image->file_name]) }}"
                    alt="">
            </picture>
        </a>
    @endif
</div>
