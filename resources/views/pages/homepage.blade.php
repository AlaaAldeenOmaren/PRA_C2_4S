<x-layouts.app>

    <x-slot:introduction_text>
        <p>
            <img src="{{ asset('img/afbI_logo.png') }}" alt="logo">
            <span class="me4">{{ __('introduction_texts.homepage_line_1') }}</span>
        </p>

        <p class="text-muted small">
            <span class="me4">Welkom, {{ $name }} ({{ $age }})</span>
        </p>

        <p><span class="me4">{{ __('introduction_texts.homepage_line_2') }}</span></p>
        <p><span class="me4">{{ __('introduction_texts.homepage_line_3') }}</span></p>
    </x-slot:introduction_text>

    <x-slot:title>
        {{ __('misc.all_brands') }}
    </x-slot:title>

    <div class="h210">
        <h2 class="text-center">10 meest populaire manuals</h2>
    </div>

    <div class="popular-manuals">
        <ul>
            @foreach ($handleidingen as $manual)
                <li>
                    {{ $manual->brand_name }}: {{ $manual->manual_name }}
                </li>
            @endforeach
        </ul>
    </div>

    <div class="d-flex align-items-center mb-3 az-letters">
        <span class="az-label me-2">Browse per letter:</span>
        <nav class="az-nav mb-0">
            @foreach (range('A', 'Z') as $letter)
                <a href="{{ route('brands.letter', ['letter' => $letter]) }}">{{ $letter }}</a>
            @endforeach
        </nav>
    </div>

    <div class="mt-3">
        <p>Select a letter above to view all brands that start with that letter.</p>
    </div>

</x-layouts.app>
