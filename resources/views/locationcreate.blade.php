@extends('layouts.admin')

@section('content')
<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Байршил нэмэх</div>
								</div>
								<form action='/admin/location/store'; method='post'>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="location">Байршил</label>
												<input type="text" class="form-control" id="location" name="location" placeholder="">
					
											</div>
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="description">Тайлбар</label>
												<input type="text" class="form-control" id="description" name="description" placeholder="">
					
											</div>
										</div>
									</div>	
								</div>
								<div class="card-action">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
								</form>		
							</div>				
						</div>
@endsection