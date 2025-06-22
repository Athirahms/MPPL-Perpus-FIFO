@extends('layouts.app')

@section('title', 'Profil - Perpustakaan Unggul')

@section('content')
    <section class="profile-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title text-center">Profil Perpustakaan</h2>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card profile-card">
                        <div class="card-body text-center">
                            <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Profil">
                            <h4>Dr. John Doe</h4>
                            <p class="text-muted">Kepala Perpustakaan</p>
                            <p>Memimpin perpustakaan sejak 2020 dengan pengalaman lebih dari 15 tahun di bidang perpustakaan dan informasi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sejarah Singkat</h4>
                            <p>Perpustakaan Unggul didirikan pada tahun 2023 dengan tujuan untuk menyediakan akses informasi yang merata bagi seluruh masyarakat. Awalnya kami hanya memiliki 5.000 judul buku, namun sekarang telah berkembang menjadi lebih dari 50.000 judul.</p>

                            <h4 class="mt-4">Fasilitas</h4>
                            <ul>
                                <li>Ruang baca yang nyaman dengan kapasitas 200 orang</li>
                                <li>Koleksi buku lebih dari 50.000 judul</li>
                                <li>Area wifi gratis</li>
                                <li>Ruang diskusi kelompok</li>
                                <li>Layanan peminjaman online</li>
                            </ul>

                            <h4 class="mt-4">Jam Operasional</h4>
                            <p>Senin - Jumat: 08.00 - 20.00 WIB<br>
                            Sabtu - Minggu: 09.00 - 17.00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection