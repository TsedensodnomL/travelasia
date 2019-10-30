@extends('layouts.master')

@section('content')
<section class="user-links">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-center user-links-wrap no-padding   ">
                        <a href="user">Бүртгэлийн мэдээлэл</a>
                        <a href="order">Захиалга</a>
                    </div>    
                </div>

                <div class="row">
                        <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">Дугаар</th>
                                    <th scope="col">Эхлэл</th>
                                    <th scope="col">Дуусах</th>
                                    <th scope="col">Том хүн</th>
                                    <th scope="col">Хүүхэд</th>
                                    <th scope="col">Үйлдлэл</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>15</td>
                                    <td>22</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td><a href=""><span class="lnr lnr-trash"></span></a></td>
                                  </tr>
                                  
                                </tbody>
                              </table>
                </div>
                
            </div>
        </section>
@endsection