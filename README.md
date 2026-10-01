### Установка

Добавить в `tailwind.admin.config.js`, созданный в пакете `tailwindcss-theme`.

    "./vendor/4geo35/editable-image-text-slider-block/src/resources/views/livewire/admin/**/*.blade.php",
    "./vendor/4geo35/editable-image-text-slider-block/src/resources/views/admin/**/*.blade.php",

Добавить в `tailwind.config.js`, созданный в пакете `tailwindcss-theme`.

    "./vendor/4geo35/editable-image-text-slider-block/src/resources/views/components/**/*.blade.php",
    "./vendor/4geo35/editable-image-text-slider-block/src/resources/views/web/**/*.blade.php",

Установить слайдер `npm install swiper`

Добавить в `app.js`:

    import Swiper from "swiper/bundle"
    import "swiper/css/bundle"
    window.Swiper = Swiper

Установить lightbox `npm install fslightbox`, добавить в `app.js`:

    import "fslightbox"

#### Views

Сокращение для представлений: `eitsb`

#### Config

Название файла: `editable-image-text-slider-block`  
Название типа блока: `imageTextSlider`

- `firstBlockImageOnLeftSide` => `false`: вывод в шахматном порядке начнется слева
- `textConstraint` => `env("EDITABLE_IMAGE_TEXT_CONSTRAINT", 400)`: ограничение на длину текста, если поставить 0, то ограничений не будет
