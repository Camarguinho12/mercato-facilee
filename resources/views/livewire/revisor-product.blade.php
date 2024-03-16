<article class="rounded-lg text-slate-400 border ">
    <a href="{{ route('show', $product->id) }}">
        <div class="overflow-hidden rounded-lg">
            <img class="rounded-lg hover:scale-110 duration-300" src="{{ asset('images/product-placeholder.jpg') }}"
                alt="">
        </div>
        <div class="flex justify-between mt-2">
            <span class="font-bold">{{ $product->price ?? 'esempio' }}</span>
            <p>{{ $product->category->title ?? 'esempio' }}</p>
        </div>
        <h3 class="mt-2">{{ $product->object ?? 'esempio' }}</h3>
    </a>
        <div class="flex">
            <div class="flex-1">
                <button type="submit" wire:click='$parent.validateProduct({{$product->id}})' class="bg-emerald-200 rounded p-2 w-full"><i wire:loading class="fa-solid fa-spinner fa-spin me-2"></i>Accetta</button>
            </div>
            <div class="flex-1">
                <button wire:click='$parent.denyProduct({{$product->id}})' class="bg-red-200 flex-1 p-2 w-full"><i wire:loading class="fa-solid fa-spinner fa-spin me-2"></i>Rifiuta</button>
            </div>
        </div>
</article>