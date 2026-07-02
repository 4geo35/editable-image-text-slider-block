@php($imageRight = !config("editable-image-text-slider-block.firstBlockImageOnLeftSide"))
<div class="row">
    <div class="col w-full lg:w-5/12 mb-indent-half sm:mb-indent lg:mb-0 {{ $imageRight ? "lg:ml-auto" : "" }}">
        @if ($item->recordable->image)
            @php($fileName = $item->recordable->image->file_name)
            <a target="_blank" href="{{ route('thumb-img', ['template' => 'original', 'filename' => $fileName]) }}"
               class="block h-full sm:min-h-[327px] sm:min-h-[388px] md:min-h-[499px] lg:min-h-[270px] xl:min-h-[342px] 2xl:min-h-[420px]">
                <picture>
                    <source media="(min-width: 1024px)" srcset="{{ route('thumb-img', ['template' => 'image-text-slider-record', 'filename' => $fileName]) }}">
                    <source media="(min-width: 640px)" srcset="{{ route('thumb-img', ['template' => 'image-text-slider-record-tablet', 'filename' => $fileName]) }}">
                    <img src="{{ route('thumb-img', ['template' => 'image-text-slider-record-mobile', 'filename' => $fileName]) }}"
                         alt="" class="rounded-base h-full object-cover object-center">
                </picture>
            </a>
        @endif
    </div>
    <div class="col w-full lg:w-7/12 2xl:w-1/2 {{ $imageRight ? "lg:order-first" : "lg:order-last lg:ml-auto" }} flex flex-col justify-between">
        <div class="w-full h-full p-indent flex items-center justify-center bg-light rounded-base">
            Место для слайдера текста
        </div>
    </div>
</div>
