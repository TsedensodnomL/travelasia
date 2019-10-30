@extends('layouts.admin')

@section('content')
<?php $category; ?>
<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Add Row</h4>
                                    <a href="/admin/category/create" class="ml-auto">
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
                                                <th>Номер</th>
                                                <th>Категори</th>
                                                <th style="width: 10%">Үйлдэл</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Номер</th>
                                                <th>Категори</th>
                                                <th>Үйлдэл</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                        <?php 
                                        
                                        foreach($category as $c){
                                            echo "<tr>";
                                            echo "<td>".$c->id."</td>";
                                            echo "<td>".$c->category."</td>";
                                            echo "<td>";
                                            echo "<div class='form-button-action'>";
                                            echo '<a href="/admin/category/'.$c->id.'/edit'.'"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">';
                                            echo '<i class="fa fa-edit"></i>';
                                            echo "</button>";
                                            echo '<a href="/admin/category/'.$c->id.'/delete'.'"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">';
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