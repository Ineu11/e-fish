<!-- Navigation Links -->
<div class="hidden space-x-6 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
        {{ __('HOME') }}
    </x-nav-link>
    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
        {{ __('TENTANG') }}
    </x-nav-link>
    <x-nav-link :href="route('products')" :active="request()->routeIs('products')">
        {{ __('PRODUK') }}
    </x-nav-link>
    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
        {{ __('KONTAK') }}
    </x-nav-link>
    <x-nav-link href="https://wa.me/6281333111904?text=Halo%2C%20saya%20ingin%20pesan%20ikan%20sekarang!" target="_blank">
        <i class="fas fa-shopping-cart me-1"></i> PESAN SEKARANG
    </x-nav-link>
</div>