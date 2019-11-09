@extends('layouts.superior')

@section('content')
<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Хэрэглэгч нэмэх</div>
								</div>
								<form action="{{route('worker.update',['worker'=>$user->username])}}" method='post'>
								{{ method_field('PUT') }}
                                {{ csrf_field() }}
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="id">Хэрэглэгчийн нэр</label>
												<input type="text" class="form-control" id="id" name="username" value="{{$user->username}}" placeholder="">
					
											</div>
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="name">Нууц үг</label>
												<input type="password" class="form-control" id="name" value="{{$user->password}}" name="pass" placeholder="">
					
											</div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                            <div class="col-md-6 col-lg-4">
											<div class="form-group">
											<label for="travel">Нэр</label>
											<input type="text" class="form-control" id="name" value="{{$user->firstname}}" name="fname" placeholder="">
											</select>
										    </div>
        
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="price">Овог</label>
												<input type="text" class="form-control" id="price" value="{{$user->lastname}}" name="lname" placeholder="">
					
											</div>
										</div>
                                    </div>

                                    <div class="row">
                                            <div class="col-md-6 col-lg-4">
											<div class="form-group">
											<label for="travel">Төрсөн огноо</label>
											<input type="date" class="form-control" id="name" value="{{$user->birthdate}}" name="bdate" placeholder="">
											</select>
										    </div>
        
										</div>
                                        <div class="col-md-3 col-lg-2">
											<div class="form-group">
												<label for="price">Хүйс</label>
												<div class="form-check">
                                                @if($user->gender == 'Male')
                                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Эр
                                                    </label>

                                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Эм
                                                    </label>
                                                @elseif($user->gender == 'Female')
                                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Эр
                                                    </label>

                                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female" checked>
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Эм
                                                    </label>
                                                @endif
                                                </div>
                                                                        
											</div>
										</div>
                                        <div class="col-md-3 col-lg-2">
											<div class="form-group">
												<label for="price">Хэрэглэгчийн төрөл</label>
											
                                                    <select id="inputState" name='utype'class="form-control">
                                                    @if($user->user_type_code == 'O')
                                                        <option value='O' selected>Оператор</option>
                                                        <option value='U' @if($user->user_type_code == 'O') selected @endif>Энгийн хэрэглэгч</option>
                                                       
                                                        <option value='A' @if($user->user_type_code == 'O') selected @endif>Админ</option>
                                                    @elseif($user->user_type_code == 'U')
                                                        <option value='O' >Оператор</option>
                                                        <option value='U'selected>Энгийн хэрэглэгч</option>
                                                       
                                                        <option value='A' @if($user->user_type_code == 'O') selected @endif>Админ</option>
                                                    @elseif($user->user_type_code == 'A')
                                                        <option value='O' >Оператор</option>
                                                        <option value='U'>Энгийн хэрэглэгч</option>
                                                       
                                                        <option value='A' selected>Админ</option>
                                                    @endif
                                                    </select>
					
											</div>
										</div>
                                    </div>

                                    <div class="row">
                                            <div class="col-md-6 col-lg-4">
											<div class="form-group">
											<label for="travel">Цахим хаяг</label>
											<input type="text" class="form-control" id="name" value="{{$user->email}}" name="email" placeholder="">
											</select>
										    </div>
        
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="price">Утас</label>
												<input type="text" class="form-control" id="price" value="{{$user->phone}}" name="phone" placeholder="">
					
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