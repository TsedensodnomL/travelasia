@extends('layouts.admin')

@section('content')
<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Аялал нэмэх</div>
								</div>
								<form action='/admin/travel/store' enctype='multipart/form-data' method='post'>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="id">ID</label>
												<input type="text" class="form-control" id="id" name="id" placeholder="">
					
											</div>
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="name">Нэр</label>
												<input type="text" class="form-control" id="name" name="name" placeholder="">
					
											</div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                            <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="description">Тайлбар</label>
												<input type="text" class="form-control" id="description" name="description" placeholder="">
					
											</div>
        
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="price">Үнэ</label>
												<input type="text" class="form-control" id="price" name="price" placeholder="">
					
											</div>
										</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="start">Эхлэх</label>
												<input type="text" class="form-control" id="start" name="start" placeholder="">
					
											</div>
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="end">Төгсөх</label>
												<input type="text" class="form-control" id="end" name="end" placeholder="">
					
											</div>
										</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">
										<div class="form-group">
											<label for="category">Категори</label>
											<select class="form-control" id="category" name="category">
												<?php foreach ($cat as $c){
													echo "<option value='".$c->id."'>".$c->category."</option>";
												}
												?>
											</select>
										</div>
										</div>

                                        <div class="col-md-6 col-lg-4">
										<div class="form-group">
											<label for="location">Байршил</label>
											<select class="form-control" id="location" name="location">
												<?php foreach ($loc as $c){
													echo "<option value='".$c->id."'>".$c->location."</option>";
												}
												?>
											</select>
										</div>
										</div>
                    
									</div>	

									<div class='row'>
										<div class="form-group">
												<label for="photo">Зураг</label>
												<input type="file" accept=".png,.jpg" class="form-control-file" id="photo" name="image" placeholder="">
					
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