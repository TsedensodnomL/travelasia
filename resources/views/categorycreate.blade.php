@extends('layouts.admin')

@section('content')
<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Аялал нэмэх</div>
								</div>
								<form action='/admin/category/store'; method='post'>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="category">Категори</label>
												<input type="text" class="form-control" id="category" name="category" placeholder="">
					
											</div>
											<div class="form-group">
												<label for="photo">Зураг</label>
												<input type="file" class="form-control-file" id="photo" name="image" placeholder="">
					
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