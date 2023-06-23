@extends('master')
@section('title')
    Calculator
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center text-success">Calculator Program</h1>
                        <hr/>
                        <form action="{{route('calculator')}}"method="POST">
                            @csrf
                            <div class="row mb-4">
                                <label class="col-md-3">First Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="first_number">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3">Last Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="last_number">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3">Your Choice</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="choice" value="+">Addition</label>
                                    <label><input type="radio" name="choice" value="-">Substraction</label>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{session('massage')}}" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
