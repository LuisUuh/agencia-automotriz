@extends('layouts.app')
@section('content')
@include('widgets.carousel')
<section class="container">
    <article class="row mt-5 mb-5">
        <div class="col-sm-12 col-md-9 col-lg-9"> <hr class="hr"></div>
        <div class="col-sm-12 col-md-3 col-lg-3">
        <h3 class="text-uppercase">Lorem ipsum sit.</h3>
        </div>
    </article>
    <section class="mt-5 mb-5">
        <div class="card-group mt-5 mb-5">
            <article class=" card-deck">
                <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-map-marked-alt format-icon"></i> Lorem, ipsum.</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sed repudiandae repellat dolorem nam..</p>
                </div>
                </div>
                <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-car format-icon"></i> Lorem, ipsum.</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, aliquid neque? Reprehenderit, nulla iusto?</p>
                </div>
                </div>
                <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-tag format-icon"></i> ¿Lorem, ipsum.?</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas excepturi ducimus nemo! Numquam, doloribus?</p>
                </div>
                </div>
            </article>
        </div>
    </section>
    @include('widgets.grid')
    @include('widgets.ways')
    @include('widgets.form')
    @include('widgets.alert')
</section>
@endsection
