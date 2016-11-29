@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Numbers list </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">

                            <h1>Number: {{  $number->phone_number }}</h1>
                            
                            <h4>Title: {{ $number->title }}</h4>
                            
                            <p>Description: {{ $number->description }}</p>
                            
                           
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
