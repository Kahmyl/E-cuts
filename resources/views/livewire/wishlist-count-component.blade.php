<div class="wrap-icon-section wishlist">
    <a href="{{route('product.wishlist')}}" class="link-direction">
            @if (Cart::instance('wishlist')->count() > 0)
                <div class="red">
                    <i class="fa fa-heart red" aria-hidden="true"></i>
                </div>
                <div class="left-info">
                    <span class="index1">{{Cart::instance('wishlist')->count()}}</span>
                
            @else
                <i class="fa fa-heart " aria-hidden="true"></i>
                <div class="left-info">
                    <span class="index2">&nbsp;</span>
            @endif
            
            <span class="title">Likes</span>
        </div>
    </a>
</div>