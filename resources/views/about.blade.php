@extends('layouts.app')

@section('content')
<style>
    .about-section {
        padding: 5rem 2rem;
        background-color: #f9f9f9;
        color: #333;
    }
    .about-header {
        text-align: center;
        margin-bottom: 2rem;
    }
    .about-content {
        display: flex;
        gap: 2rem;
        align-items: flex-start;
    }
    .about-text {
        flex: 1;
        line-height: 1.6;
    }
    .about-images {
        flex: 1;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }
    .about-images img {
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .divider {
        width: 100px;
        height: 2px;
        background: #007BFF;
        margin: 1rem auto;
        position: relative;
    }
    .divider::after {
        content: '🐟';
        position: absolute;
        top: -12px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 1.5rem;
        color: #007BFF;
    }
</style>

<div class="about-section">
    <div class="about-header">
        <h1 class="display-4 fw-bold">PESAN IKAN</h1>
        <div class="divider"></div>
        <p class="lead">Tentang kami</p>
    </div>
    <div class="about-content">
        <div class="about-text">
            <p>Selamat datang di platform online kami, tempat terpercaya untuk pesan ikan dan bahan baku makanan laut berkualitas tinggi. Kami dengan bangga mempersembahkan kepada Anda beragam pilihan dari laut yang segar dan lezat, mulai dari cumi ring, ikan salem, cakalang, ikan tongkol, cumi tube, cumi flower, ikan kembung, boiled octopus, gurita whole round, hingga ikan semar.</p>
            <p>Komitmen kami adalah menyediakan produk-produk terbaik dengan kualitas terjamin untuk memenuhi kebutuhan bisnis Anda di bidang kuliner, restoran, atau usaha makanan laut lainnya. Dengan berbagai jenis ikan dan bahan baku makanan laut yang kami sediakan, Anda dapat menjadikan menu Anda lebih bervariasi dan menarik bagi para pelanggan.</p>
            <p>Jangan ragu menghubungi kami untuk informasi lebih lanjut, pemesanan, atau pertanyaan seputar produk-produk kami.</p>
        </div>
        <div class="about-images">
            <img src="https://via.placeholder.com/300x200?text=Cumi+Ring" alt="Cumi Ring">
            <img src="https://via.placeholder.com/300x200?text=Ikan+Salem" alt="Ikan Salem">
            <img src="https://via.placeholder.com/300x200?text=Boiled+Octopus" alt="Boiled Octopus">
            <img src="https://via.placeholder.com/300x200?text=Gurita+Whole+Round" alt="Gurita Whole Round">
        </div>
    </div>
</div>
@endsection