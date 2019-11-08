@extends('layouts.master')

@section('content')

<section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="half-img col-lg-4 no-padding">
                            <img class="img-fluid d-block" src="{{ asset('img/ocean.jpg') }}">
                        </div>
                        <div class="booking-info-form col-lg-8 no-padding d-flex">
                            <div class="booking-info">





                                <h1>{{$travel[0]->name}}</h1>
                                <p>{{$travel[0]->description}}</p>
                                <p>{{$travel[0]->des}}</p>
                                <p>Үнэ: <span> {{$travel[0]->price}}<span> </p>
                                <p>Эхлэх: {{$travel[0]->start}} </p>
                                <p>Дуусах: {{$travel[0]->end}}</p>

                            </div>
                            <div class="tab-content">
            
                                                <form class="booking-form" id="booking" method="post" action="/order/{{$id}}">
                                                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                   
                                                   <div class="row">
                                                      
                                                      
                                                      <div class="col-md-6">
                                                        <input style="margin-bottom: 0" type="text" name="count" class="single-in form-control" placeholder="Хүний тоо" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Хүний тоо" required="">
                                                      </div>
                                                      
                                                      <div class="col-md-6 d-flex justify-content-end">
                                                          <button class="primary-btn">Захиалах<span class="lnr lnr-arrow-right"></span></button>
                                                      </div>
                                                      <div class="alert-msg"></div>
                                                    </div>
                                                </form>
                                        <!-- </div>     -->
                            </div>

                        </div>
                    </div>
                </div>
            </section>

@endsection