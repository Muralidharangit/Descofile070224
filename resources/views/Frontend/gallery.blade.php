@extends('Frontend.layouts.index')

<title>Gallery | Desco</title>
@section('content')
<section class="page-header">
    <div class="page-header-bottom"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Desco Food Gallery</h2>
            <p>Organic food is food produced by methods that comply <br>with the standards of farming.</p>
        </div>
    </div>
</section>
<section class="gallery-section padding bd-bottom bg-grey">
    <div class="container">
    <div class=" row">
        @foreach($gallery as $image)

      

            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="gallery-item">

                    <img src="{{ asset('storage/' . $image->image) }}" alt="img">
                    <div class="gallery-content">
                        <h3 class="text-white">
                            {{$image->title}}
                            <!-- <a class="img-popup vbox-item" href="img/gallery-1.jpg">Fresh Living<span>Farming</span></a> -->
                        </h3>
                    </div>
                </div>
            </div>

        @endforeach

        </div>
    </div>
</section>
@endsection