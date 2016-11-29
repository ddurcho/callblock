@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Numbers list </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
                                <li role="presentation" class="active"><a href="numbers/add">Add number</a></li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Number</th>
                                        <th>Created_at</th>
                                        <th>Edit/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($numbers as $number)
                                    <tr>
                                        <th scope="row">{{$number->id}}</th>
                                        <td>{{$number->title}}</td>
                                        <td>{{$number->description}}</td>
                                        <td>{{$number->phone_number}}</td>
                                        <td>{{$number->created_at}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="numbers/{{$number->id}}/edit" role="button">O</a>
                                            <a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$number->phone_number}}">X</a>
                                            
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="exampleModalLabel">Are you sure?</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h2>Delete?</h2>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                    
                                                    <form method="POST" action="/numbers/{{$number->id}}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <input type="submit" class="btn btn-danger" role="button" value="Yes"/>
                                                    </form>
                                                           
                                                </div>
                                                <div class="modal-footer">
                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
