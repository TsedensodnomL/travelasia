@extends('layouts.master')

@section('content')
<section class="user-links">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-center user-links-wrap no-padding   ">
                        <a href="/user/{{session('username')}}">Бүртгэлийн мэдээлэл</a>
                        <a href="/{{session('username')}}/order">Захиалга</a>
                        <a href="/logout">Гарах</a>
                    </div>    
                </div>

                <div class="row">
                        <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">Дугаар</th>
                                    <th scope="col">Аялал</th>
                                    <th scope="col">Эхлэл</th>
                                    <th scope="col">Дуусах</th>
                                   
                                    <th scope="col">Тоо</th>
                                    <th scope="col">Үйлдлэл</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                  foreach($order as $o){
                                    
                                    echo "<tr>";
                                    echo "<td>".$o->id."</td>";
                                    echo "<td>".$o->name."</td>";
                                    echo "<td>".$o->start."</td>";
                                    echo "<td>".$o->end."</td>";
                                    echo "<td>".$o->traveler_number."</td>";
                                    echo "<td> <a href='/{$o->user_username}/order/{$o->id}/delete'> <span class='lnr lnr-trash'></span></a></td>";
                                    echo "</tr>";

                                  }
                                  ?>
                                                                  
                                </tbody>
                              </table>
                </div>
                
            </div>
        </section>
@endsection