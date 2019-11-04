@extends('layouts.master')

@section('content')
<section class="user-links">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-center user-links-wrap no-padding   ">
                        <a href="/user/{{session('username')}}">Бүртгэлийн мэдээлэл</a>
                        <a href="/{{session('username')}}/order">Захиалга</a>
                    </div>
                     
                </div>
                <div class="row">
                <?php $user; ?>
                        <form action=<?php echo "'".url()->current()."/update'";?>;  method='post'>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Цахим шуудан</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="" value=<?php echo "'".$user->email."'"?>>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPassword4">Нууц үг</label>
                                    <input type="password" class="form-control" id="inputPassword4" name="pass" placeholder="" value=<?php echo "'".$user->password."'"?>>
                                  </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputAddress">Овог</label>
                                  <input type="text" class="form-control" id="lname" name="lname" placeholder="" value=<?php echo "'".$user->lastname."'"?>>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputAddress2">Нэр</label>
                                  <input type="text" class="form-control" id="fname" name="fname" placeholder="" value=<?php echo "'".$user->firstname."'"?>>
                                </div>
                                
                                </div>
                                <div class="form-group">
                                        <label for="inputAddress2">Иргэншил</label>
                                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Монгол" value=<?php echo "'".$user->nationality."'"?>>
                                      
                                </div>
                                <div class="form-check">
												          <label>Gender</label><br/>
												          <label class="form-radio-label">
													          <input class="form-radio-input" type="radio" name="gender" value="Male"  checked="">
													          <span class="form-radio-sign">Male</span>
												          </label>
                                  <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="gender" value="Female" <?php if($user->gender == 'Female') echo "checked=''"?> >
                                    <span class="form-radio-sign">Female</span>
                                    </label>
                                    
                                </div>
                                <div class="form-group">
                                        <label for="example-date-input">Төрсөн огноо</label>
                                        <input class="form-control" type="date" id="birthdate" name="birthdate" value=<?php echo "'".$user->birthdate."'"?>>
                                </div>
                                <div class="form-group">
                                        <label for="inputAddress2">Утасны дугаар</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value=<?php echo "'".$user->phone."'"?>>
                                      
                                </div>
                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                      Хянасан
                                    </label>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Өөрчлөх</button>
                              </form>
                </div>
            </div>
        </section>

@endsection