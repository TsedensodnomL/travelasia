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





                                <h1>Байгаль нуур</h1>
                                <p>3 хоногийн турш Байгаль нуураар завьтай аялах энэхүү аялал маань сайхан байх болно.</p>
                                <p>Байгаль нуур нь Орос улсын урд хэсэгт оршдог дэлхийн хамгийн тунгалаг нуур юм.</p>
                                <p>Үнэ: <span> 250,000₮ <span> </p>
                                <p>Эхлэх: 2019-10-25 </p>
                                <p>Дуусах: 2019-10-28 </p>

                            </div>
                            <div class="tab-content">
            
                                                <form class="booking-form" id="booking" action="mail.php">
                                                   <div class="row">
                                                      
                                                      <div class="col-md-6">
                                                          <input id="datepicker" name="start" class="single-in form-control"  onblur="this.placeholder = 'Start'" type="text" placeholder="Start" required>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <input id="datepicker2" name="return" class="single-in form-control"  onblur="this.placeholder = 'Return'" type="text" placeholder="Return" required>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <input type="text" name="adults" class="single-in form-control" placeholder="Adults" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults'" required="">
                                                      </div>
                                                      <div class="col-md-6">
                                                        <input type="text" name="child" class="single-in form-control" placeholder="Child" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child'">
                                                      </div>
                                                      <div class="col-lg-12 d-flex justify-content-end">
                                                          <button class="primary-btn mt-20">Захиалах<span class="lnr lnr-arrow-right"></span></button>
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