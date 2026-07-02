@props(["item", "index"])
@php($imageRight = $index % 2 > 0)
<div class="row">
    <div class="col w-1/2 {{ $imageRight ? "order-last ml-auto" : "order-first" }}">
        <div id="swiperBlockImageTextSlider-{{ $item->id }}"
             class="swiper overflow-hidden">
            <div class="swiper-wrapper">
                @foreach($item->orderedTexts as $index => $text)
                    <div class="swiper-slide">
                        <div>
                            <div>{{ $text->title }}</div>
                            <div>{{ $text->description }}</div>
                        </div>
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
        Image
    </div>
</div>
@include("eitsb::web.types.text-slider.includes.swiper-script")
