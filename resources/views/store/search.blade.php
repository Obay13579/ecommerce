@extends('store.storeLayout')

@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- STORE -->
            <div id="store" class="col-md-12">
                <!-- store products -->
                <div class="row">
                    @foreach($products as $product)
                    <!-- product -->
                    <div class="col-md-4 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <!-- Use the asset() helper to generate the image path -->
                                <img src="{{ asset('uploads/products/' . $product->id . '/' . $product->image_name) }}" alt="">
                                <div class="product-label">
                                </div>
                            </div>
                            <div class="product-body">
                                <h3 class="product-name">
                                    <a href="{{ route('user.view', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                </h3>
                                <h4 class="product-price">
                                    IDR {{ $product->discount }} 
                                </h4>
                            </div>
                            <div class="add-to-cart">
                                <!-- Link to view the product details -->
                                <a class="add-to-cart-btn" href="{{ route('user.view', ['id' => $product->id]) }}">
                                    <i></i> Purchase
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /product -->
                    @endforeach
                </div>
                <!-- /store products -->
            </div>
            <!-- /STORE -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection
