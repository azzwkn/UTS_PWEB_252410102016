@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="min-h-[75vh] flex items-center justify-center px-4">
    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">

        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-[#5b8fa8]">
                Welcome to
            </h1>

            <h2 class="text-4xl font-bold text-[#5b8fa8] mt-1">
                Pawly Pet Clinic
            </h2>

            <p class="text-[#526773] mt-2">
                Healthy Pets, Happy Owners.
            </p>
        </div>

        <form action="{{ route('dashboard') }}" method="POST">
            @csrf

            <div class="mb-5">
                <label class="block mb-2 font-semibold">
                    Username
                </label>

                <input
                    type="text"
                    name="username"
                    placeholder="Masukkan username kamu"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-[#5b8fa8]"
                >
            </div>

            <button
                type="submit"
                class="w-full bg-[#5b8fa8] text-white py-3 rounded-lg hover:bg-[#3d5a71]"
            >
                Login
            </button>
        </form>

    </div>
</div>
@endsection
