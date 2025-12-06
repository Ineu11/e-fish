@extends('layouts.app')

@section('content')
<style>
    .contact-section {
        padding: 5rem 2rem;
        background-color: #f9f9f9;
        color: #333;
    }
    .contact-header {
        text-align: center;
        margin-bottom: 2rem;
    }
    .contact-info {
        display: flex;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
    }
    .contact-item {
        background: white;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        gap: 1rem;
        min-width: 250px;
    }
    .contact-icon {
        font-size: 2rem;
        color: #007BFF;
    }
    .contact-text {
        flex: 1;
    }
    .contact-text h4 {
        margin: 0 0 0.5rem 0;
        font-weight: 600;
    }
    .contact-text p {
        margin: 0;
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

<div class="contact-section">
    <div class="contact-header">
        <h1 class="display-4 fw-bold">Kontak Kami</h1>
        <div class="divider"></div>
        <p class="lead">www.pesanikan.id</p>
    </div>
    <div class="contact-info">
        <div class="contact-item">
            <div class="contact-icon">
                <i class="fab fa-whatsapp"></i>
            </div>
            <div class="contact-text">
                <h4>Whatsapp</h4>
                <p>0813 3311 1904</p>
            </div>
        </div>
        <div class="contact-item">
            <div class="contact-icon">
                <i class="fas fa-phone"></i>
            </div>
            <div class="contact-text">
                <h4>Telephone</h4>
                <p>0813 3311 1904</p>
            </div>
        </div>
        <div class="contact-item">
            <div class="contact-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="contact-text">
                <h4>E-Mail</h4>
                <p><a href="mailto:admin@pesanikan.id">admin@pesanikan.id</a></p>
            </div>
        </div>
    </div>
</div>
@endsection