@extends('Frontend.layouts.index')

@section('content')

<div class="header-height"></div>
<div id="main-slider" class="dl-slider">
    <div class="single-slide">
        <div class="bg-img" style="background-image: url(img/Banner\ 01.jpg)"></div>
        <div class="slider-content-wrap d-flex align-items-center text-left">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="1s">
                                Extra 50% off for all Powders.
                            </div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2s">
                                We Provide Various
                            </div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2.5s">
                                Masala Powder.
                            </div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="3s">
                                Your journey to a healthier life starts here.
                            </div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="{{route('product')}}" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">View
                                Product <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide">
        <div class="bg-img" style="background-image: url(img/Banner\ 02.jpg)"></div>
        <div class="slider-content-wrap d-flex align-items-center text-left">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="1s">
                                Extra 50% off for all Powders.
                            </div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2s">
                            Coconut & Dal Powder
                            </div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2.5s">
                                is good for health.
                            </div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="3s">
                                Get fresh food from our table to your table.
                            </div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="{{route('product')}}" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">View
                                Product <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-slide">
        <div class="bg-img" style="background-image: url(img/Banner\ 03.jpg)"></div>
        <div class="slider-content-wrap d-flex align-items-center text-left">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="1s">.</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2s">
                                Puffed Rice
                            </div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2.5s">
                                Powder is good
                            </div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="3s">
                                Get fresh food from our table to your table.
                            </div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="{{route('product')}}" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">View
                                Product <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-slide">
        <div class="bg-img" style="background-image: url(img/Banner\ 04.jpg)"></div>
        <div class="slider-content-wrap d-flex align-items-center text-left">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="1s">
                                Extra 50% off for all winter foods.
                            </div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2s">
                                Peanut Chilli
                            </div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2.5s">
                                Powder is good
                            </div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="3s">
                                Get fresh food from our table to your table.
                            </div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="{{route('product')}}" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">View
                                Product <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="about-section padding">
    <div class="container">
        <div class="about-wrap row">
            <div class="col-md-6 xs-padding">
                <div class="about-content">
                    <div class="section-heading">
                        <img src="img/title-border.png" alt="img" />
                        <h2>
                            We Provide Good Quality of Peanut <br />
                            Chili Powder For Your Family!
                        </h2>
                        <p>
                            Indulge your taste buds in a fiery fusion of flavors with our
                            Peanut Chili Powder. This exquisite blend of premium peanuts
                            and carefully selected chili peppers is a culinary delight
                            that adds a perfect punch of heat and nutty richness to your
                            dishes.
                        </p>
                    </div>
                    <ul class="about-info">
                        <li><i class="ti-hand-point-right"></i>Premium Quality</li>
                        <li><i class="ti-hand-point-right"></i>Harvest Everyday</li>
                        <li><i class="ti-hand-point-right"></i>100% Organic</li>
                        <li><i class="ti-hand-point-right"></i>Fast Delivery</li>
                    </ul>
                    <a class="default-btn" href="shop.html">Browse Our Foods<span></span></a>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-img br-20">
                    <img src="img/PEANUT.jpg" alt="img" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-carousel-section bg-grey padding">
    <div class="container">
        <div class="section-heading mb-40 text-center">
            <img src="img/title-border.png" alt="img" />
            <h2>Featured Product</h2>
        </div>
        <div id="product-carousel" class="product-carousel owl-carousel">
            <div class="product-item">
                <div class="product-thumb">
                    <img src="img/pr_1.jpg" alt="img" />

                </div>
                <div class="product-content text-center">
                    <h3><a href="{{route('product.one')}}">Peanut Pepper Powder</a></h3>

                </div>
            </div>
            <div class="product-item">
                <div class="product-thumb">
                    <img src="img/pr_2.jpg" alt="img" />

                </div>
                <div class="product-content text-center">
                    <h3><a href="{{route('product.two')}}">Coconut & Dal Powder</a></h3>

                </div>
            </div>
            <div class="product-item">
                <div class="product-thumb">
                    <img src="img/pr_3.jpg" alt="img" />

                </div>
                <div class="product-content text-center">
                    <h3><a href="{{route('product.three')}}">Puffed Rice Powder</a></h3>

                </div>
            </div>
            <div class="product-item">
                <div class="product-thumb">
                    <img src="img/pr_4.jpg" alt="img" />

                </div>
                <div class="product-content text-center">
                    <h3><a href="{{route('product.four')}}">Peanut Chili Powder</a></h3>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="feature-section padding">
    <div class="container">
        <div class="feature-wrap row">
            <div class="col-lg-6 sm-padding">
                <div class="feature-info">
                    <div class="section-heading">
                        <img src="img/title-border.png" alt="img" />
                        <h2>Indian Peanut Pepper Powder</h2>
                        <p>

                            Elevate your culinary creations with the bold and flavorful Peanut Pepper Powder. This
                            unique blend combines the richness of premium peanuts with the fiery kick of ground pepper,
                            creating a delightful seasoning that will tantalize your taste buds.

                        </p>
                    </div>
                    <ul class="feature-list">
                        <li>

                            <div class="">
                                <h3>Key Features</h3>
                                <p>

                                    1) Quality Ingredients: Our Peanut Pepper Powder is crafted from the finest peanuts
                                    and hand-selected pepper varieties for an authentic, gourmet taste.<br>

                                    2) Handcrafted Excellence: We carefully hand-grind peanuts and peppers to ensure
                                    consistency and a perfect balance of nuttiness and spiciness.<br>

                                    3) Versatile Spice: Sprinkle it on your dishes, use it as a rub, or add it to sauces
                                    for an exquisite burst of flavor.
                                    <br>
                                    4) Nutrient-Rich: Peanuts offer protein, healthy fats, and essential nutrients,
                                    making this powder not just delicious but also nutritious.

                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="feature-img br-20">
                    <img src="img/pepper.png" alt="img" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature-section padding bg-grey">
    <div class="container">
        <div class="feature-wrap row">
            <div class="col-lg-6 sm-padding">
                <div class="feature-img br-20">
                    <img src="img/Coconut.jpg" alt="img" />
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="feature-info">
                    <div class="section-heading">
                        <img src="img/title-border.png" alt="img" />
                        <h2>The Coconut & Dal Powder</h2>
                        <p>
                            Coconut offers minerals, iron, magnesium, zinc, copper,
                            manganese, and selenium, making it a nutrient-rich food. Plus,
                            who knew coconut flour could be a standout health star. It's
                            rich in fiber, offering 3 grams of protein and 5 grams of
                            fiber in 2 tablespoons.
                        </p>
                    </div>
                    <ul class="feature-list">
                        <li>
                            <div class="">
                                <h3>Nutrition Facts and Health Benefits</h3>

                            </div>
                        </li>
                        <li>
                            <div class="">
                                <h3>
                                    Strengthens Connective Tissues. Connective tissues are the
                                    elements of our body that connect one part to the other.
                                </h3>
                            </div>
                        </li>
                        <li>
                            <div class="">
                                <h3>
                                    Promotes Brain Function
                                </h3>
                            </div>
                        </li>
                        <li>
                            <div class="">
                                <h3>
                                    Powerful Antioxidants.
                                </h3>
                            </div>
                        </li>
                        <li>
                            <div class="">
                                <h3>
                                    Benefits Heart
                                    Health.
                                </h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature-section padding">
    <div class="container">
        <div class="feature-wrap row">
            <div class="col-lg-6 sm-padding">
                <div class="feature-info">
                    <div class="section-heading">
                        <img src="img/title-border.png" alt="img" />
                        <h2>The Best Indian Puffed Powder</h2>
                        <p>
                            Puffed rice, also known as "murmura" or "poha," is a popular
                            snack in many parts of the world. Puffed rice powder, often
                            made by crushing or grinding puffed rice, can be used in
                            various culinary applications. Here are some potential
                            benefits of puffed rice powder: .
                        </p>
                    </div>
                    <ul class="feature-list">
                        <li>
                            <div class="">
                                <h3>Low in Calories:</h3>
                                <p>
                                    Puffed rice is low in calories, making it a suitable snack
                                    for those looking to manage their weight.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="t">
                                <h3>Low in Fat:</h3>
                                <p>
                                    Puffed rice is virtually fat-free, making it a healthy
                                    option for those seeking to reduce their fat intake.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="">
                                <h3>Easy to Digest</h3>
                                <p>
                                    Since puffed rice is light and easily digestible, it is
                                    often recommended as a food for people with digestive
                                    issues or during recovery from illness. .
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="">
                                <h3>Quick Energy Source:</h3>
                                <p>
                                    Puffed rice provides carbohydrates, which can serve as a
                                    quick source of energy when you need a boost..
                                </p>
                            </div>
                        </li>

                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="feature-img br-20">
                    <img src="img/RICE.jpg" alt="img" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-section bg-grey padding">
<div class="container">
<div class="section-heading mb-40 text-center">
<!-- <img src="img/title-border.png" alt="img"> -->
<h2>Happy Clients</h2>
<p>Organic food is food produced by methods that comply with the standards <br> Standards vary worldwide.</p>
</div>
<div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
<div class="testi-item d-flex align-items-center">
<!-- <img src="img/testi-1.jpg" alt="img"> -->
<div class="testi-content">
<p>"As a professional chef, I demand the best when it comes to my ingredients. Testimonial Masala Company delivers exceptional quality
     in every spice blend. They are a must-have in my kitchen for creating unforgettable flavors."</p>
<h3>Rajesh P</h3>
<ul class="rattings">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul>
<span>Director</span>
</div>
<i class="fa fa-quote-right"></i>
</div>
<div class="testi-item d-flex align-items-center">
<!-- <img src="img/testi-2.jpg" alt="img"> -->
<div class="testi-content">
<p>"I've been using spices from Testimonial Masala Company for years, and I couldn't be happier with the quality and flavor they bring to my dishes.
     The variety of spices they offer is amazing, and it adds an authentic touch to my Indian cooking. Highly recommended!"</p>
<h3>Samantha L.</h3>
<ul class="rattings">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul>
<span>Director</span>
</div>
<i class="fa fa-quote-right"></i>
</div>
<div class="testi-item d-flex align-items-center">
<!-- <img src="img/testi-3.jpg" alt="img"> -->
<div class="testi-content">
<p>"I recently discovered Testimonial Masala Company, and I'm blown away by 
    how much they've elevated my home-cooked meals. The flavors are so vibrant and fresh. My family now looks forward to dinner every night, and I owe it all to these incredible spices."</p>
<h3>Lisa M. </h3>
<ul class="rattings">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul>
<span>Director</span>
</div>
<i class="fa fa-quote-right"></i>
</div>
</div>
</div>
</section>
@endsection