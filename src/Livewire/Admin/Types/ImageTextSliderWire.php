<?php

namespace GIS\EditableImageTextSliderBlock\Livewire\Admin\Types;

use GIS\EditableBlocks\Traits\CheckBlockAuthTrait;
use GIS\EditableBlocks\Traits\EditBlockTrait;
use GIS\EditableBlocks\Traits\PlaceholderBlockTrait;
use GIS\EditableBlocks\Traits\SimpleItemActionsTrait;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageTextSliderWire extends Component
{
    use WithFileUploads, EditBlockTrait, SimpleItemActionsTrait, CheckBlockAuthTrait, PlaceholderBlockTrait;

    public function rules(): array
    {
        $requiredImage = $this->itemId ? "nullable" : "required";
        return [
            "image" => [$requiredImage, "image"],
        ];
    }

    public function validationAttributes(): array
    {
        return [
            "image" => "Изображение",
        ];
    }

    public function render(): View
    {
        $items = $this->block->items()->with("recordable")->orderBy("priority")->get();
        return view("eitsb::livewire.admin.types.image-text-slider-wire", compact("items"));
    }
}
