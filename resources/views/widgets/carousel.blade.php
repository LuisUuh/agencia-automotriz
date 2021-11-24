<div class="bd-example w-100" style="background: #F4DD61;">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade format-carousel" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('img/order-ride-pana.png') }}" class="d-block w-100" alt="Image Slide 1">
          <div class="carousel-caption d-none d-md-block">
            <h2>Lorem ipsum dolor sit.</h2>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing.</h4>
            <a href="{{ url('/contact') }}" class="mt-4 btn btn-primary btn-lg">Arrendamiento</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/price-pana.png') }}" class="d-block" alt="Image Slide 2">
          <div class="carousel-caption d-none d-md-block">
            <h2>Lorem ipsum dolor sit.</h2>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing.</h4>
            <a href="{{ url('/contact') }}" class="mt-4 btn btn-primary btn-lg">Estrena tu auto</a>
          </div>
        </div>
      </div>
    </div>
</div>