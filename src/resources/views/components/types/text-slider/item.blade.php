@props(["item", "index"])
@php($imageRight = $index % 2 > 0)
@php($imageRight = config("editable-image-text-slider-block.firstBlockImageOnLeftSide") ? $imageRight : ! $imageRight)
@php($hasSlider = $item->orderedTexts->count() > 1)
<div class="row">
    <div class="col w-full lg:w-5/12 mb-indent-half sm:mb-indent lg:mb-0 {{ $imageRight ? "lg:ml-auto" : "" }}">
        @if ($item->recordable->image)
            @php($fileName = $item->recordable->image->file_name)
            <a href="{{ route('thumb-img', ['template' => 'original', 'filename' => $fileName]) }}"
               class="block h-full sm:min-h-[327px] sm:min-h-[388px] md:min-h-[499px] lg:min-h-[270px] xl:min-h-[342px] 2xl:min-h-[420px]"
               data-fslightbox="lightbox-{{ $item->id }}">
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
        <div id="swiperBlockImageTextSlider-{{ $item->id }}"
             class="swiper overflow-hidden w-full">
            <div class="swiper-wrapper">
                @foreach($item->orderedTexts as $index => $text)
                    <div class="swiper-slide">
                        <x-ebtxts::texts.teaser :$text />
                    </div>
                @endforeach
            </div>
        </div>

        @if ($hasSlider)
            <div class="flex items-center justify-start space-x-indent-half mt-indent-half sm:mt-indent"
                 id="swiperBlockImageTextSliderNavigation-{{ $item->id }}">
                <button type="button" class="prev-btn btn btn-primary px-btn-x-ico rotate-180">
                    <x-tt::ico.arrow-right />
                </button>
                <button type="button" class="next-btn btn btn-primary px-btn-x-ico">
                    <x-tt::ico.arrow-right />
                </button>
            </div>
        @endif
    </div>
</div>
@if ($hasSlider)
    @include("eitsb::web.types.text-slider.includes.swiper-script")
@endif
