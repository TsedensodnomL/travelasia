@extends('layouts.master')

@section('content')
<section class="travels">
    <div class="container-fluid">
        <div class="row travel">
            <div class="col-lg-3">
                <a href='/category/water/baikal'>
                    <img class='img-fluid' src="{{ asset('img/ocean.jpg') }}" alt="">
                    <div class="description">
                        <h4>Байгаль нуур</h4>
                        <p> 3 өдөр </p>
                        <p> Үнэ: <span class='price'>250,000₮ </span> </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
            <img class='img-fluid' src="{{ asset('img/ocean.jpg') }}" alt="">
                <div class="description">
                    <h4>Байгаль нуур</h4>
                    <p> 3 өдөр </p>
                    <p> Үнэ: <span class='price'>250,000₮ </span> </p>
                </div>
            </div>
            <div class="col-lg-3">
            <img class='img-fluid' src="{{ asset('img/ocean.jpg') }}" alt="">
                <div class="description">
                    <h4>Байгаль нуур</h4>
                    <p> 3 өдөр </p>
                    <p> Үнэ: <span class='price'>250,000₮ </span> </p>
                </div>
            </div>
            <div class="col-lg-3">
            <img class='img-fluid' src="{{ asset('img/ocean.jpg') }}" alt="">
                <div class="description">
                    <h4>Байгаль нуур</h4>
                    <p> 3 өдөр </p>
                    <p> Үнэ: <span class='price'>250,000₮ </span> </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection