<div class="wrap-icon-section minicart">
    <a href="/cart" class="link-direction">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        <div class="left-info">
            @if (Cart::instance('cart')->count() > 0)
            <span class="index">{{Cart::instance('cart')->count()}}</span>
            @else
            <span class="index2">&nbsp;</span>
            @endif
            <span class="title">CART</span>
        </div>
    </a>
</div>