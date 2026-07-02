@push("scripts")
    <script type="application/javascript">
        (function () {
            document.addEventListener("DOMContentLoaded", function () {
                const sliderElement = document.getElementById("swiperBlockImageTextSlider-{{ $item->id }}")
                if (sliderElement) { initBlockHorizontalSliderSliders{{ $item->id }}(sliderElement); }
            })
        })()

        function initBlockHorizontalSliderSliders{{ $item->id }}(sliderElement) {
            let navigationElement = document.getElementById("swiperBlockImageTextSliderNavigation-{{ $item->id }}")
            let prevBtnElement = navigationElement.querySelector(".prev-btn")
            let nextBtnElement = navigationElement.querySelector(".next-btn")

            let swiper = new Swiper(sliderElement, {
                loop: true,
                simulateTouch: false,
                spaceBetween: 24,
                slidesPerView: "auto",

                navigation: {
                    nextEl: nextBtnElement,
                    prevEl: prevBtnElement,
                }
            })
        }
    </script>
@endpush
