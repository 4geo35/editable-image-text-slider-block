@push("scripts")
    <script type="application/javascript">
        (function () {
            document.addEventListener("DOMContentLoaded", function () {
                const sliderElement = document.getElementById("swiperBlockImageTextSlider-{{ $item->id }}")
                if (sliderElement) { initBlockImageTextSliderSliders{{ $item->id }}(sliderElement); }
            })
        })()

        function initBlockImageTextSliderSliders{{ $item->id }}(sliderElement) {
            let navigationElement = document.getElementById("swiperBlockImageTextSliderNavigation-{{ $item->id }}")
            let prevBtnElement = navigationElement.querySelector(".prev-btn")
            let nextBtnElement = navigationElement.querySelector(".next-btn")

            let swiper = new Swiper(sliderElement, {
                loop: true,
                simulateTouch: true,
                spaceBetween: 24,
                slidesPerView: "auto",
                autoHeight: true,

                navigation: {
                    nextEl: nextBtnElement,
                    prevEl: prevBtnElement,
                }
            })

            swiper.on('resize', function () {
                let mobileQuery = window.matchMedia('(max-width: 1024px)')
                if (mobileQuery.matches) {
                    swiper.params.autoHeight = true
                    swiper.params.simulateTouch = true
                } else {
                    swiper.params.autoHeight = false
                    swiper.params.simulateTouch = false
                    swiper.wrapperEl.style.height = ''
                }
                swiper.update()
            })
        }
    </script>
@endpush
