<div class="grid grid-cols-2 gap-4">
    @foreach ($images as $image)
        <div>
            <img src="{{ asset('storage/' . $image) }}" class="rounded shadow w-full" />
        </div>
    @endforeach
</div>
