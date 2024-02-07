@extends('Frontend.layouts.index')

<title>About | Desco</title>
@section('content')


               <div class="header-height"></div>
               <section class="page-header">
                  <div class="page-header-bottom"></div>
                  <div class="container">
                     <div class="page-content text-center">
                        <h2>About Desco</h2>
                        <p>Organic food is food produced by methods that comply <br>with the standards of farming.</p>
                     </div>
                  </div>
               </section>
               <section class="about-section padding">
                  <div class="container">
                     <div class="about-wrap row">
                        <div class="col-md-6 xs-padding">
                           <div class="about-content">
                              <div class="section-heading">
                                 <img src="img/title-border.png" alt="img">
                                 <h2>We Provide Good Quality of Masala <br>  Powder For Your Family!</h2>
                                 <p>Welcome to Desco, your go-to destination for the finest and most authentic masala products. We are passionate about spices, flavors, and the culinary traditions that have enriched our lives for generations. Our journey began with a simple goal: to bring the diverse and rich tapestry of Indian and global cuisine to your kitchen..</p>
                              </div>
                              <ul class="about-info">
                                 <li><i class="ti-hand-point-right"></i>Quality Ingredients</li>
                                 <li><i class="ti-hand-point-right"></i>Handcrafted Flavor</li>
                                 <li><i class="ti-hand-point-right"></i>Versatile Use</li>
                                 <li><i class="ti-hand-point-right"></i>Healthy Nutrients</li>
                              </ul>
                              <a class="default-btn" href="{{route('product')}}">Buy Our Powder<span></span></a>
                           </div>
                        </div>
                        <div class="col-md-6 xs-padding">
                           <div class="about-img br-20">
                              <img src="img/PEANUT.jpg" alt="img">
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="feature-section padding">
                  <div class="container">
                     <div class="feature-wrap row">
                     <div class="col-lg-6 sm-padding">
                           <div class="feature-img br-20">
                              <img src="img/Chili.jpg" alt="img">
                           </div>
                        </div>
                        <div class="col-lg-6 sm-padding">
                           <div class="feature-info">
                              <div class="section-heading">
                                 <img src="img/title-border.png" alt="img">
                                 <h2>The Best Trusted <br>Peanut Powder Company</h2>
                                 <p> Our Peanut Pepper Powder is a versatile seasoning that can be used in various ways:
                                    .
                                 </p>
                              </div>
                              <ul class="feature-list">
                                 <li>
                                    <div class="">
                                       <h3>Natural Process</h3>
                                       <p>
                                          1) Sprinkle: Enhance the taste of your dishes by adding a pinch of Peanut Pepper Powder.<br>
                                          2) Marinate: Create tantalizing marinates for grilled, roasted, or pan-fried dishes. <br>
                                          3) Sauces: Mix with olive oil or mayonnaise for a delectable dipping sauce or dressing.
                                       </p>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                       
                     </div>
                  </div>
               </section>

               
@endsection