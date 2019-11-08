@extends('layouts.master')

@section('content')
<section class="travels">
    <div class="container-fluid">
        <div class="row travel">
        <?php $id ?>
            @foreach ($travel as $t)
                @if ($id == $t->category_id)
            <div class="col-lg-3">
                <a href='/category/{{$t->category_id}}/{{$t->id}}'>
                    <img class='img-fluid' src="{{ asset('img/ocean.jpg') }}" alt="">
                    <div class="description">
                        <h4>{{$t->name}}</h4>
                        <p> {{$t->dat}} өдөр </p>
                        <p> Үнэ: <span class='price'>{{$t->price}}</span> </p>
                    </div>
                </a>
            </div>
                @endif
            @endforeach
        
        </div>
    </div>
</section>
@endsection