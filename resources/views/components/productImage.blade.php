@isset($listing->images[0]->img_path)
    <img class="grid mx-auto justify-content-center justify-center rounded-t-lg p-8 max-h-[200px] max-w-[90%]" src="{{ URL::asset('/storage/'.$listing->images[0]->img_path) }}" alt="product image">
@endisset
