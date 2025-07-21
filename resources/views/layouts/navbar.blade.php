<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('images/logo2.jpg') }}" alt="Logo" style="height: 40px">
            <span class="fw-bold fs-4 text-dark">E - Interior</span>
        </a>
        <ul class="navbar-nav">
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#cartModal">
                🛒 Cart
            </button>

        </ul>
    </div>
</nav>

<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Shopping Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <livewire:cart />
            </div>
        </div>
    </div>
</div>

