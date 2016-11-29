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
                                <li role="presentation" class="active"><a href="/numbers">Back</a></li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <form method="POST" action="/numbers/{{ $number->id }}">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $number->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Number</label>
                                    <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{ $number->phone_number }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" rows="3" name="description" id="description"placeholder="Description">{{$number->description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Update Number</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
