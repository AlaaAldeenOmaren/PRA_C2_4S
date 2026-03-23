<x-layouts.app>

    <x-slot:title>
        Merken met de letter {{ $letter }}
    </x-slot:title>

    <div class="d-flex align-items-center mb-3 az-letters">
        <span class="az-label me-2">Browse per letter:</span>
        <nav class="az-nav mb-0">
            @foreach (range('A', 'Z') as $az)
                <a href="{{ route('brands.letter', ['letter' => $az]) }}"
                    style="margin-right: 6px; {{ $letter === $az ? 'font-weight:bold; text-decoration:underline;' : '' }}">
                    {{ $az }}
                </a>
            @endforeach
        </nav>
    </div>

    @if ($brands->isEmpty())
        <p>Er zijn geen merken gevonden voor de letter {{ $letter }}.</p>
    @else
        <ul>
            @foreach ($brands as $brand)
                <li>
                    <a href="{{ route('brand.show', ['brand_id' => $brand->id, 'brand_slug' => $brand->getNameUrlEncodedAttribute()]) }}"
                        title="Manuals for '{{ $brand->name }}'">
                        {{ $brand->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

</x-layouts.app>
