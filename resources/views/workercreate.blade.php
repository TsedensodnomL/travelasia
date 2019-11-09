@extends('layouts.superior')

@section('content')
<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Захиалга нэмэх</div>
								</div>
								<form action='/worker'; method='post'>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="id">Хэрэглэгчийн нэр</label>
												<input type="text" class="form-control" id="id" name="username" placeholder="">
					
											</div>
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="name">Нууц үг</label>
												<input type="password" class="form-control" id="name" name="pass" placeholder="">
					
											</div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                            <div class="col-md-6 col-lg-4">
											<div class="form-group">
											<label for="travel">Нэр</label>
											<input type="text" class="form-control" id="name" name="fname" placeholder="">
											</select>
										    </div>
        
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="price">Овог</label>
												<input type="text" class="form-control" id="price" name="lname" placeholder="">
					
											</div>
										</div>
                                    </div>

                                    <div class="row">
                                            <div class="col-md-6 col-lg-4">
											<div class="form-group">
											<label for="travel">Төрсөн огноо</label>
											<input type="date" class="form-control" id="name" name="bdate" placeholder="">
											</select>
										    </div>
        
										</div>
                                        <div class="col-md-3 col-lg-2">
											<div class="form-group">
												<label for="price">Хүйс</label>
												<div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Эр
                                                    </label>
                                                    
                                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Эм
                                                    </label>
                                                </div>
                                                                        
											</div>
										</div>
                                        <div class="col-md-3 col-lg-2">
											<div class="form-group">
												<label for="price">Хэрэглэгчийн төрөл</label>
											
                                                    <select id="inputState" name='utype'class="form-control">
                                                        <option value='O' selected>Оператор</option>
                                                        <option value='U'>Энгийн хэрэглэгч</option>
                                                       
                                                        <option value='A'>Админ</option>
                                                    </select>
					
											</div>
										</div>
                                    </div>

                                    <div class="row">
                                            <div class="col-md-6 col-lg-4">
											<div class="form-group">
											<label for="travel">Цахим хаяг</label>
											<input type="text" class="form-control" id="name" name="email" placeholder="">
											</select>
										    </div>
        
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="price">Утас</label>
												<input type="text" class="form-control" id="price" name="phone" placeholder="">
					
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