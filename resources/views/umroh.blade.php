@extends('layouts.app')
@section('content')
    <!-- Header -->
    <header class="header text-white py-4">
        <div class="container text-center">
            <h1 class="font-main" style="font-size: 40px;">Agensi Perjalanan Umroh Al-Qontolodon</h1>
            <p>Menyediakan Berbagai Pilihan Paket Umroh Terbaik</p>
        </div>
    </header>
    <div class="container mt-5">
        <h1 class="font-main text-center mb-5">Daftar Paket Umroh</h1>
        <div class="row">
            <!-- Paket Umroh 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/7c/65/d7/7c65d7e66ba956dc21ff722a8bb04110.jpg" class="card-img-top" alt="Paket Umroh 1">
                    <div class="card-body">
                        <h5 class="card-title">Paket Umroh Ekonomi</h5>
                        <p class="card-text">Durasi: 9 Hari</p>
                        <p class="card-text">Harga: Rp 20.000.000</p>
                        <p class="card-text">Gratis Makan Kebab</p>
                        <a href="/detail" class="btn btn-primary">Detail Paket</a>
                    </div>
                </div>
            </div>
            <!-- Paket Umroh 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/7c/65/d7/7c65d7e66ba956dc21ff722a8bb04110.jpg" class="card-img-top" alt="Paket Umroh 2">
                    <div class="card-body">
                        <h5 class="card-title">Paket Umroh Standar</h5>
                        <p class="card-text">Durasi: 12 Hari</p>
                        <p class="card-text">Harga: Rp 25.000.000</p>
                        <p class="card-text">Gratis Makan Kebab</p>
                        <a href="/detail" class="btn btn-primary">Detail Paket</a>
                    </div>
                </div>
            </div>
            <!-- Paket Umroh 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/7c/65/d7/7c65d7e66ba956dc21ff722a8bb04110.jpg" class="card-img-top" alt="Paket Umroh 3">
                    <div class="card-body">
                        <h5 class="card-title">Paket Umroh VIP</h5>
                        <p class="card-text">Durasi: 15 Hari</p>
                        <p class="card-text">Harga: Rp 30.000.000</p>
                        <p class="card-text">Gratis Makan Kebab</p>
                        <a href="/detail" class="btn btn-primary">Detail Paket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
