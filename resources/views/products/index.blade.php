@extends('layouts.app')

@section('content')
<style>
    .products-section {
        padding: 5rem 2rem;
        background-color: #fff;
        color: #333;
    }
    .products-header {
        text-align: center;
        margin-bottom: 2rem;
    }
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }
    .product-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }
    .product-card:hover {
        transform: translateY(-5px);
    }
    .product-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .product-info {
        padding: 1.5rem;
        text-align: center;
    }
    .product-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    .order-btn {
        background: #007BFF;
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        cursor: pointer;
        transition: background 0.3s;
    }
    .order-btn:hover {
        background: #0056b3;
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

<div class="products-section">
    <div class="products-header">
        <h1 class="display-4 fw-bold">DAFTAR PRODUK</h1>
        <div class="divider"></div>
        <p class="lead">www.pesanikan.id</p>
    </div>
    <div class="products-grid">
        <!-- Produk 1 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/300x200?text=Cumi+Ring" alt="Cumi Ring" class="product-image">
            <div class="product-info">
                <h3 class="product-title">Cumi Ring</h3>
                <a href="https://wa.me/6281333111904?text=Saya%20ingin%20pesan%20Cumi%20Ring" target="_blank" class="order-btn">
                    <i class="fab fa-whatsapp me-1"></i> ORDER NOW
                </a>
            </div>
        </div>

        <!-- Produk 2 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/300x200?text=Ikan+Salem" alt="Ikan Salem" class="product-image">
            <div class="product-info">
                <h3 class="product-title">Ikan Salem</h3>
                <a href="https://wa.me/6281333111904?text=Saya%20ingin%20pesan%20Ikan%20Salem" target="_blank" class="order-btn">
                    <i class="fab fa-whatsapp me-1"></i> ORDER NOW
                </a>
            </div>
        </div>

        <!-- Produk 3 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/300x200?text=Cakalang" alt="Cakalang" class="product-image">
            <div class="product-info">
                <h3 class="product-title">Cakalang</h3>
                <a href="https://wa.me/6281333111904?text=Saya%20ingin%20pesan%20Cakalang" target="_blank" class="order-btn">
                    <i class="fab fa-whatsapp me-1"></i> ORDER NOW
                </a>
            </div>
        </div>

        <!-- Produk 4 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/300x200?text=Ikan+Tongkol" alt="Ikan Tongkol" class="product-image">
            <div class="product-info">
                <h3 class="product-title">Ikan Tongkol</h3>
                <a href="https://wa.me/6281333111904?text=Saya%20ingin%20pesan%20Ikan%20Tongkol" target="_blank" class="order-btn">
                    <i class="fab fa-whatsapp me-1"></i> ORDER NOW
                </a>
            </div>
        </div>
    </div>
</div>
@endsection