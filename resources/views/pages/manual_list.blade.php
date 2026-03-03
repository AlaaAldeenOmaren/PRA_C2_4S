<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <x-slot:breadcrumb>
        <li><a href="{{ route('brand.show', ['brand_id' => $brand->id, 'brand_slug' => $brand->getNameUrlEncodedAttribute()]) }}" alt="Manuals for '{{$brand->name}}'" title="Manuals for '{{$brand->name}}'">{{ $brand->name }}</a></li>
    </x-slot:breadcrumb>

    <h1>{{ $brand->name }}</h1>

    <p>{{ __('introduction_texts.type_list', ['brand'=>$brand->name]) }}</p>

        @foreach ($manuals as $manual)
            <a href="{{ route('manual.show', ['brand_id' => $brand->id, 'brand_slug' => $brand->getNameUrlEncodedAttribute(), 'manual_id' => $manual->id]) }}" target="new" alt="{{ $manual->name }}" title="{{ $manual->name }}">{{ $manual->name }}</a>

            <br />
        @endforeach

</x-layouts.app>
