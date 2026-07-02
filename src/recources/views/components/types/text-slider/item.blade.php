@props(["item", "index"])
@php($imageRight = $index % 2 > 0)
@php($imageRight = config("editable-image-text-slider-block.firstBlockImageOnLeftSide") ? ! $imageRight : $imageRight)
<div class="row">
    <div class="col w-1/2 {{ $imageRight ? "order-last ml-auto" : "order-first" }} flex flex-col justify-between">
        <div id="swiperBlockImageTextSlider-{{ $item->id }}"
             class="swiper overflow-hidden">
            <div class="swiper-wrapper">
                @foreach($item->orderedTexts as $index => $text)
                    <div class="swiper-slide">
                        <x-ebtxts::texts.teaser :$text />
                    </div>
                @endforeach
            </div>
        </div>

        <div class="hidden sm:flex items-center justify-start space-x-indent-half mt-indent"
             id="swiperBlockImageTextSliderNavigation-{{ $item->id }}">
            <button type="button" class="prev-btn btn btn-primary px-btn-x-ico rotate-180">
                <x-tt::ico.arrow-right />
            </button>
            <button type="button" class="next-btn btn btn-primary px-btn-x-ico">
                <x-tt::ico.arrow-right />
            </button>
        </div>
    </div>
    <div class="col w-5/12 {{ $imageRight ? "" : "ml-auto" }}">
        @if ($item->recordable->image)
            @php($fileName = $item->recordable->image->file_name)
            <a href="{{ route('thumb-img', ['template' => 'original', 'filename' => $fileName]) }}"
               data-fslightbox="lightbox-{{ $item->id }}">
                <picture>
                    <source media="(min-width: 1024px)" srcset="{{ route('thumb-img', ['template' => 'image-text-slider-record', 'filename' => $fileName]) }}">
                    <img src="{{ route('thumb-img', ['template' => 'image-text-slider-record', 'filename' => $fileName]) }}"
                         alt="" class="rounded-base">
                </picture>
            </a>
        @endif
    </div>
</div>
@include("eitsb::web.types.text-slider.includes.swiper-script")
