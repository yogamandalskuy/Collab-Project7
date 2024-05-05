@extends('layouts.app')
@section('content')
    @include('default')
    <div class="container mt-5">
        <h1 class="text-center"><b>Biodata Ketua Kelompok</b></h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 justify-content-center">
            <div class="col">
                <div class="card h-100">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/unnamed.png') }}" alt="image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Yoga Mandala Widigda</h5>
                        <p class="card-text">Nama Panggilan : Yoga
                            <br>TTL         : Wonokromo, 5 April 2024>
                            <br>Prodi       : Sistem Informasi
                            <br>Fakultas    : Fakultas Rekayasa Industri
                            <br>Angkatan    : 2022
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endsection
