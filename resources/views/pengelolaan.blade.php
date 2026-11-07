@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<div class="max-w-5xl mx-auto px-6 py-12">

    <div class="bg-white rounded-xl shadow-md p-8">

        <h1 class="text-3xl font-bold text-[#5b8fa8]">
            Pet Directory
        </h1>

        <p class="text-[#526773] mt-2 mb-8">
            Meet our adorable patients! Pawly is ready to welcome and care for your beloved pets.
        </p>

        <div class="space-y-4">
            @foreach ($hewan as $item)
                <div class="bg-[#dff1f8] p-5 rounded-lg flex items-center gap-4">

                    <span class="text-2xl">
                        @if ($item == 'Kucing')
                            🐱
                        @elseif ($item == 'Anjing')
                            🐶
                        @elseif ($item == 'Kelinci')
                            🐰
                        @elseif ($item == 'Hamster')
                            🐹
                        @endif
                    </span>

                    <p class="font-semibold">{{ $item }}</p>

                </div>
            @endforeach
        </div>

    </div>

</div>
@endsection
