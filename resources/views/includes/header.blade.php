<nav class="navbar bg-body-tertiary">
    <div class="container-fluid mx-5 gap-2">
        <a class="navbar-brand" href="{{ route('home.index') }}">E-Commerce</a>
        <form class="d-flex w-full" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="buttons">
            <button class="btn btn-primary">Help</button>
            <button class="btn btn-secondary">Account</button>
            <a class="btn btn-danger" href="{{ route('product.index') }}">Shopping</a>
        </div>
    </div>
</nav>
