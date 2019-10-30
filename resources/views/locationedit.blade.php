@extends('layouts.admin')

@section('content')
<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Аялал нэмэх</div>
								</div>
								<form action=<?php echo '"/admin/location/'.$location->id.'/update"'?>; method='post'>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
                                        <div class="form-group">
												<label for="id">ID</label>
												<input type="text" class="form-control" id="id" name="id"  <?php echo "value='".$location->id."'" ?> >
					
											</div>

											<div class="form-group">
												<label for="location">Категори</label>
												<input type="text" class="form-control" id="location" name="location" placeholder="" value=<?php echo "'".$location->location."'" ?>>
					
											</div>
                                            <div class="form-group">
												<label for="location">Тайлбар</label>
												<input type="text" class="form-control" id="location" name="description" placeholder="" value=<?php echo "'".$location->description."'" ?>>
					
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