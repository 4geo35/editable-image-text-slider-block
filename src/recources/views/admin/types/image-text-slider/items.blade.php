<div class="mx-auto w-11/12 mt-indent-half space-y-indent-half" x-collapse x-show="expanded">
    @foreach($items as $item)
        <div class="space-y-indent-half">
            <div class="card">
                <div class="card-header">
                    <div class="flex items-center justify-between">
                        @include("eb::admin.types.includes.priority-buttons")
                        @include("eb::admin.types.includes.edit-delete-buttons")
                    </div>
                </div>
                <div class="card-body">
                    @include("eitsb::admin.types.image-text-slider.item")
                    @include("eb::admin.types.includes.help-info")
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="font-semibold">Text component</div>
                </div>
                <div class="card-body">Hello</div>
            </div>
        </div>
    @endforeach
</div>
