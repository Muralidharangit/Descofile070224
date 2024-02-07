@extends('Frontend.layouts.index')

<title>Product | Desco</title>
@section('content')

<section class="page-header">
    <div class="page-header-bottom"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Desco Store</h2>
            <p>Organic food is food produced by methods that comply <br>with the standards of farming.</p>
        </div>
    </div>
</section>
<section class="product-section padding bg-grey">
    <div class="container">

        <div class="product-items row">
            <div class="col-lg-3 col-sm-6 padding-15 single-item food juice">
                <div class="product-item">
                    <div class="product-thumb">
                        <img src="img/pr_1.jpg" alt="img">

                    </div>
                    <div class="product-content text-center">
                        <h3><a href="{{route('product.one')}}">Peanut Pepper Powder</a></h3>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padding-15 single-item fruits vegitable">
                <div class="product-item">
                    <div class="product-thumb">
                        <img src="img/pr_2.jpg" alt="img">

                    </div>
                    <div class="product-content text-center">
                        <h3><a href="{{route('product.two')}}">Coconut & Dal Powder</a></h3>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padding-15 single-item vegitable juice">
                <div class="product-item">
                    <div class="product-thumb">
                        <img src="img/pr_3.jpg" alt="img">

                    </div>
                    <div class="product-content text-center">
                        <h3><a href="{{route('product.three')}}">Puffed Rice Powder</a></h3>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padding-15 single-item juice fruits">
                <div class="product-item">
                    <div class="product-thumb">
                        <img src="img/pr_4.jpg" alt="img">

                    </div>
                    <div class="product-content text-center">
                        <h3><a href="{{route('product.four')}}">Peanut Chili Powder</a></h3>

                    </div>
                </div>
            </div>


        </div>

    </div>
</section>
@endsection