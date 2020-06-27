@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Car actions...

                    <div class="d-flex justify-content-center py-4">
                        <a class="btn btn-info" href="cars/">All Cars</a>
                    </div>
                    <div class="d-flex justify-content-center form-group">
                        <input class="form-control col-lg-3" id="car_id" type ="number" placeholder="Enter ID"/>
                        <button class="btn btn-outline-info" onclick="
                                var id = document.getElementById('car_id').value;
                                window.location.href = 'cars/'+id+'/';
                            ">Search Car</button>

                    </div>
                    <div class="d-flex justify-content-center py-4">
                        <a class="btn btn-info" href="cars/newcar">New Car</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
