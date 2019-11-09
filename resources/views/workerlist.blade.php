@extends('layouts.superior')

@section('content')
<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Add Row</h4>
                                    <a href="/worker/create" class="ml-auto">
                                     <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#addRowModal"> 
                                        <i class="fa fa-plus"></i>
                                        Add Row
                                    </button> </a>
                                </div>
                            </div>
                            <div class="card-body">
                                

                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                
                                                <th>Хэрэглэгчийн нэр</th>
                                                <th>Нэр</th>
                                                <th>Утасны дугаар</th>
                                                <th>Цахим хаяг</th>
                                                <th>Төрөл </th>
                                                <th style="width: 10%">Үйлдэл</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Хэрэглэгчийн нэр</th>
                                                <th>Нэр</th>
                                                <th>Утасны дугаар</th>
                                                <th>Цахим хаяг</th>
                                                <th>Төрөл </th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                        <?php 
                                        
                                        foreach($users as $c){
                                            echo "<tr>";
                                            echo "<td><a href='/worker/$c->username'>".$c->username."</a></td>";
                                            echo "<td>".$c->firstname."</td>";
                                            echo "<td>".$c->phone."</td>";
                                            echo "<td>".$c->email."</td>";
                                            echo "<td>".$c->user_type_code."</td>";
                                            
                                            echo "<td>";
                                            echo "<div class='form-button-action'>";
                                            echo '<a href="'.route("worker.edit",["worker"=>$c->username]).'"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">';
                                            echo '<i class="fa fa-edit"></i>';
                                            echo "</button>";
                                            echo '<a href="'.route("worker.destroy",["worker"=>$c->username]).'"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">';
                                            echo '<i class="fa fa-times"></i>';
                                            echo "</button> </div> </td>";
                                            echo "</tr>";
                                        }
                                        ?>
                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection