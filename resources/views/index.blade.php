@extends('layouts.master')

@section('content')

			<!-- End banner Area -->

			<section>
					<div class="container-fluid">
						<div class="row">
							@foreach ($table as $t)
							<div class="col-lg-6 travel">
								<a href='category/{{$t->id}}'>
									<div class="content-h">
										<img class="img-fluid" src="uploads/category/{{$t->photo}}" alt="water">
									</div>
								
									<div class="text">
										<h1> {{$t->category}} </h1>
										<p> Адал явдлаар дүүрэн явган аялал </p>
									</div>
								</a>
							</div>
							@endforeach
							
						</div>
					</div>
			</section> 

	

			<!-- Start contact-info Area -->
			<section class="contact-info-area section-gap">
				<div class="container">
					<div class="row">
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Манай оффисоор зочлоорой</h4>
							 <p>
								 Баянзүрх дүүрэг, 15-р хороо
								 ШУТИС-МХТС
							 </p>
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Бидэн рүү залгаарай</h4>
							 <p>
								Дугаар: 95900501 <br>
								Дугаар: 95900502 <br>
							 </p>
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Цахим шуудан илгээгээрэй</h4>
							 <p>
								hello@colorlib.com <br>
								mainhelpinfo@colorlib.com <br>
							 </p>
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Хэрэглэгчтэй харилцах хэсэг</h4>
							 <p>
							 	support@colorlib.com <br>
								emergencysupp@colorlib.com <br>
							 </p>
						</div>
					</div>
				</div>
			</section>
			<!-- End contact-info Area -->

			<!-- Start Contact Area -->
			<section class="contact-area" id="contact">
				<div class="container-fluid">
					<div class="row align-items-center d-flex justify-content-start">
						<div class="col-lg-6 col-md-12 contact-left no-padding">
	      					<div style=" width:100%;
	                height: 545px;" id="map"></div>
						</div>
						<div class="col-lg-4 col-md-12 pt-100 pb-100">
							<form class="form-area" id="myForm" action="mail.php" method="post" class="contact-form text-right">
								<input name="fname" placeholder="Нэр" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Нэр'" class="common-input mt-10" required="" type="text">
								<input name="email" placeholder="Цахим шуудан" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Цахим шуудан'" class="common-input mt-10" required="" type="email">
								<textarea class="common-textarea mt-10" name="message" placeholder="Захидал" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Захидал'" required=""></textarea>
								<button class="primary-btn mt-20">Илгээх<span class="lnr lnr-arrow-right"></span></button>
								<div class="alert-msg">
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
@endsection