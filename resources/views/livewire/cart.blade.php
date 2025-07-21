<div style="max-height: 400px;" class="d-flex flex-column">
    <h5 class="fw-bold">Your Cart</h5>

    <div style="max-height: 250px; overflow-y: auto;">
        @forelse ($items as $index => $item)
            <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                <div>
                    <strong>{{ $item['name'] }}</strong><br>
                    Rp{{ number_format($item['price'], 0, ',', '.') }}
                </div>
                <div class="d-flex align-items-center">
                    <button class="btn btn-sm btn-outline-secondary me-2" wire:click="decrementQty({{ $index }})">−</button>
                    <span>{{ $item['qty'] }}</span>
                    <button class="btn btn-sm btn-outline-secondary ms-2" wire:click="incrementQty({{ $index }})">+</button>
                </div>
            </div>
        @empty
            <p class="text-muted">Cart is empty.</p>
        @endforelse
    </div>

    @if (count($items) > 0)
        <div class="d-flex justify-content-between align-items-center border-top pt-3 mt-3">
            <strong>Total:</strong>
            <strong>Rp{{ number_format($this->total, 0, ',', '.') }}</strong>
        </div>
    @endif
</div>
