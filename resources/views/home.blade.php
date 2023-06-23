@extends('master')
@section('title')
    Home
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $item)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset($item['image'])}}" alt="" height="200"/>
                        <div class="card-body">
                            <h2>{{($item['name'])}}</h2>
                            <h4>Tk.{{($item['price'])}}</h4>
                            <a href="" class="btn btn-success">Buy</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
