<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
        <div class="col-lg-9 order-2 order-lg-1">
            <h1>Shopping cart</h1><p class="lead text-muted">You currently have {{ (session()->has('cart') && session('cart')->totalQty > 0) ? count(session('cart')->items) : 'no'}} item{{ (session()->has('cart') && session('cart')->totalQty > 1) ? 's' : ''}} in your shopping cart</p>
        </div>
        <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Shopping cart</li>
            </ul>
        </div>
        </div>
    </div>
</section>