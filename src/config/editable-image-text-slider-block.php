<?php

return [
    "availableTypes" => [
        "imageTextSlider" => [
            "title" => env("EDITABLE_IMAGE_TEXT_SLIDER_TITLE", "Слайдер текста"),
            "admin" => "eitsb-text-slider",
            "render" => "eitsb::types.text-slider",
        ],
    ],

    // Components
    "customTextSliderComponent" => null,
];
