@extends('layouts.admin')

@section('content')
<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Аялал нэмэх</div>
								</div>
								<form action=<?php echo '"/admin/category/'.$category->id.'/update"'?>; method='post'>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
                                        <div class="form-group">
												<label for="id">ID</label>
												<input type="text" class="form-control" id="id" name="id"  <?php echo "value='".$category->id."'" ?> >
					
											</div>

											<div class="form-group">
												<label for="category">Категори</label>
												<input type="text" class="form-control" id="category" name="category" placeholder="" value=<?php echo "'".$category->category."'" ?>>
					
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