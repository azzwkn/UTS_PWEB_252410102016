@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-5xl mx-auto px-6 py-12">

    <div class="bg-white rounded-xl shadow-md p-8">

        <h1 class="text-3xl font-bold text-[#5b8fa8]">
            Hi, {{ $username }}!
        </h1>

        <p class="mt-3 text-[#526773]">
            Terima kasih telah mempercayakan perawatan hewan kesayangan Anda kepada Pawly.
            Kami berkomitmen memberikan pelayanan terbaik untuk kesehatan hewan kesayangan Anda.
        </p>

        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-[#dff1f8] rounded-xl overflow-hidden shadow-sm">
                <img
                    src="{{ asset('images/services.jpg') }}"
                    alt="Pawly Services"
                    class="w-full aspect-square object-cover"
                >

                <div class="p-6">
                    <h2 class="font-bold text-xl text-[#3d5a71]">
                        Our Services
                    </h2>

                    <p class="mt-2 text-[#526773]">
                        Check Up, Vaccination, Grooming, Home Visit, Pharmacy, dan Pet Care.
                    </p>
                </div>
            </div>

            <div class="bg-[#dff1f8] rounded-xl overflow-hidden shadow-sm">
                <img
                    src="{{ asset('images/dokter.jpg') }}"
                    alt="Pawly Doctors"
                    class="w-full aspect-square object-cover"
                >

                <div class="p-6">
                    <h2 class="font-bold text-xl text-[#3d5a71]">
                        Our Doctors
                    </h2>

                    <p class="mt-2 text-[#526773]">
                        Dokter hewan profesional yang siap memberikan perawatan terbaik untuk hewan kesayangan Anda.
                    </p>
                </div>
            </div>

        </div>

        <div class="mt-8">
            <a href="{{ route('profile', ['username' => $username]) }}"
                class="inline-block bg-[#5b8fa8] text-white px-6 py-3 rounded-lg hover:bg-[#3d5a71]">
                View Profile
            </a>
        </div>

    </div>

</div>
@endsection
