<x-layouts.app>

    <x-slot:introduction_text>
        <p><img src="{{ asset('img/afbI_logo.png') }}" alt="logo"><span class="me4">{{ __('introduction_texts.homepage_line_1') }}</span></p>

        <p class="text-muted small"><span class="me4">Welkom, {{ $name }} ({{ $age }})</span></p>

        <p><span class="me4">{{ __('introduction_texts.homepage_line_2') }}</span></p>
        <p><span class="me4">{{ __('introduction_texts.homepage_line_3') }}</span></p>
    </x-slot:introduction_text>

    <div class="h210">
        <h2 class="text-center">10 most popular manuals</h2>
    </div>

    <div class="popular-manuals">
        <ul>
        @foreach($handleidingen as $manual)
            <li>
                {{ $manual->brand_name }}: {{ $manual->manual_name }}
            </li>
        @endforeach
        </ul>
    </div>


    <h1>
        <x-slot:title>
            {{ __('misc.all_brands') }}
        </x-slot:title>
    </h1>
    <div class="d-flex align-items-center mb-3 az-letters">
        <span class="az-label me-2">Browse by letter:</span>
        <nav class="az-nav mb-0">
            @foreach(range('A','Z') as $letter)
                <a href="#{{ $letter }}">{{ $letter }}</a>
            @endforeach
        </nav>
    </div>
    <?php
    $size = count($brands);
    $columns = 3;
    $chunk_size = ceil($size / $columns);
    ?>

    <div class="container">
        <div class="row">

            @foreach($brands->chunk($chunk_size) as $chunk)
                <div class="col-md-4">

                    <ul>
                        @foreach($chunk as $brand)

                            @php
                                $current_first_letter = strtoupper(substr($brand->name, 0, 1));
                            @endphp

                            @if(!isset($header_first_letter) || $current_first_letter != $header_first_letter)
                                </ul>
                                <h2 id="{{ $current_first_letter }}">{{ $current_first_letter }}</h2>
                                <ul>
                            @endif

                            @php $header_first_letter = $current_first_letter; @endphp

                            <li>
                                <button><a href="{{ route('brand.show', ['brand_id' => $brand->id, 'brand_slug' => $brand->getNameUrlEncodedAttribute()]) }}" alt="Manuals for '{{$brand->name}}'" title="Manuals for '{{$brand->name}}'">{{ $brand->name }}</a></button>
                            </li>
                        @endforeach
                    </ul>

                </div>
                <?php
                unset($header_first_letter);
                ?>
            @endforeach

        </div>

    </div>
</x-layouts.app>
