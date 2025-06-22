@extends('layouts.app')

@section('title', 'Tentang Kami - Perpustakaan Unggul')

@section('content')
    <section class="about-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">Tentang Perpustakaan Unggul</h2>
                    <p>Perpustakaan Unggul adalah perpustakaan modern yang berkomitmen untuk menyediakan akses terhadap pengetahuan dan informasi bagi seluruh masyarakat.</p>
                    <p>Didirikan pada tahun 2023, kami telah berkembang menjadi salah satu perpustakaan terkemuka dengan koleksi lebih dari 50.000 judul buku dari berbagai disiplin ilmu.</p>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/600x400" alt="Gedung Perpustakaan" class="img-fluid rounded">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h3 class="text-center mb-4">Visi dan Misi</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Visi</h4>
                                    <p class="card-text">Menjadi perpustakaan modern yang unggul dalam pengelolaan koleksi buku fisik melalui penerapan sistem berbasis teknologi yang efisien dan berorientasi pada kebutuhan pembaca.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Misi</h4>
                                    <ul>
                                        <li>Menyediakan koleksi buku yang lengkap dan berkualitas</li>
                                        <li>Mengembangkan sistem perpustakaan berbasis teknologi</li>
                                        <li>Memberikan pelayanan yang prima kepada pengguna</li>
                                        <li>Mendorong minat baca masyarakat</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection