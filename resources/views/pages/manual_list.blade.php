<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <x-slot:breadcrumb>
        <li><a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/"
                alt="Manuals for '{{ $brand->name }}'" title="Manuals for '{{ $brand->name }}'">{{ $brand->name }}</a>
        </li>
    </x-slot:breadcrumb>


    <h1>{{ $brand->name }}</h1>

    <p>{{ __('introduction_texts.type_list', ['brand' => $brand->name]) }}</p>


    <div class="row">
        @foreach ($manuals as $manual)
            <div class="col-6 col-md-4 col-lg-3 mb-2">
                @if ($manual->locally_available)
                    <a class="d-block p-2 border rounded text-decoration-none"
                        href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/{{ $manual->id }}/"
                        title="{{ $manual->name }}">
                        {{ $manual->name }}
                        <span class="text-muted small">({{ $manual->filesize_human_readable }})</span>
                    </a>
                @else
                    <a class="d-block p-2 border rounded text-decoration-none" href="{{ $manual->url }}"
                        target="_blank" title="{{ $manual->name }}">
                        {{ $manual->name }}
                    </a>
                @endif
            </div>
        @endforeach
    </div>

</x-layouts.app>
