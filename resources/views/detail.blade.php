@extends('layouts.app')
@section('content')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
        }

        .package-header {
            background: url(https://images.unsplash.com/photo-1693590614566-1d3ea9ef32f7?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D) no-repeat center center;
            background-size: cover;
            height: 300px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .package-header h1 {
            font-size: 3rem;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .card-body {
            padding: 30px;
        }

        .features-icon {
            font-size: 2rem;
            color: #007bff;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 50px;
            padding: 10px 30px;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
    <div class="package-header">
        <h1>Paket Umroh Istimewa</h1>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1693590614566-1d3ea9ef32f7?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="card-img-top" alt="Paket Umroh">
                    <div class="card-body">
                        <h3 class="card-title">Detail Paket</h3>
                        <p class="card-text">
                            Paket umroh kami mencakup perjalanan spiritual yang nyaman dan aman dengan fasilitas terbaik.
                        </p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-plane features-icon"></i> Tiket Pesawat
                                Pulang-Pergi</li>
                            <li class="list-group-item"><i class="fas fa-hotel features-icon"></i> Akomodasi Hotel Bintang 5
                            </li>
                            <li class="list-group-item"><i class="fas fa-utensils features-icon"></i> Makanan Halal 3 Kali
                                Sehari</li>
                            <li class="list-group-item"><i class="fas fa-bus features-icon"></i> Transportasi Darat
                                Eksklusif</li>
                            <li class="list-group-item"><i class="fas fa-user-tie features-icon"></i> Pemandu Umroh
                                Berpengalaman</li>
                            <li class="list-group-item"><i class="fas fa-user-tie features-icon"></i> Kebab Gratis, Makan Sepuasnya</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Harga Paket</h3>
                        <h4>Rp. 25.000.000</h4>
                        <p class="card-text">
                            Harga sudah termasuk semua fasilitas yang disebutkan di atas dan pajak.
                        </p>
                        <button class="btn btn-custom btn-block">Pesan Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
