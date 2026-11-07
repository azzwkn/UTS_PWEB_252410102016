@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-12">

    <div class="bg-white rounded-xl shadow-md p-8">

        <div class="text-center mb-8">

            <h1 class="text-3xl font-bold text-[#5b8fa8]">
                My Profile
            </h1>

            <p class="text-[#526773] mt-2">
                Pet Parent Information
            </p>

        </div>

        <div class="mt-6">

            <p class="text-sm text-[#526773] font-semibold mb-2">
                Username
            </p>

            <div class="bg-[#dff1f8] rounded-lg p-5">
                <h2 class="text-xl font-bold text-[#3d5a71]">
                    {{ $username }}
                </h2>
            </div>

        </div>

        <div class="mt-8">
            <a href="{{ route('dashboard.back', ['username' => $username]) }}"
                class="inline-block bg-[#5b8fa8] text-white px-6 py-3 rounded-lg hover:bg-[#3d5a71]">
                Back to Dashboard
            </a>
        </div>

    </div>

</div>
@endsection
