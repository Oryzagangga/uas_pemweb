<nav class="navbar bg-primary text-white">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ route('cashier.index') }}">Vania Store</a>
        <div class="d-flex gap-3">
            @if(auth()->user()->role === 'management')
                <a class="nav-link" href="{{ route('invoice.index') }}">Invoices</a>
            @endif
            <a class="nav-link" href="{{ route('cashier.index') }}">Cashier</a>
            <a class="nav-link" href="{{ route('product.index') }}">Products</a>
            <span>{{ '@' . auth()->user()->username }}</span>
        </div>
    </div>
</nav>
