<?php

namespace GIS\EditableImageTextSliderBlock;

use GIS\EditableBlocks\Traits\ExpandBlocksTrait;
use GIS\EditableImageTextSliderBlock\Livewire\Admin\Types\ImageTextSliderWire;
use GIS\Fileable\Traits\ExpandTemplatesTrait;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class EditableImageTextSliderBlockServiceProvider extends ServiceProvider
{
    use ExpandBlocksTrait, ExpandTemplatesTrait;

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . "/config/editable-image-text-slider-block.php", "editable-image-text-slider-block");
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . "/recources/views", "eitsb");
        $this->addLivewireComponents();
        $this->expandConfiguration();
    }

    protected function expandConfiguration(): void
    {
        $eitsb = app()->config["editable-image-text-slider-block"];
        $this->expandBlocks($eitsb);
        $this->expandTemplates($eitsb);
    }

    protected function addLivewireComponents(): void
    {
        $component = config("editable-image-text-slider-block.customTextSliderComponent");
        Livewire::component(
            "eitsb-text-slider",
            $component ?? ImageTextSliderWire::class
        );
    }
}
