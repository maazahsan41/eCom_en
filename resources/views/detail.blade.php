@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" alt="" width="100%">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Details : {{$product['description']}}</h4>
            <h4>Category : {{$product['category']}}</h4>
            <br><br>
            <form action="">
                <input type="text" name="product_id" value="{{}}">
                <button class="btn btn-primary">Add to Cart</button>
                <br><br>

            </form>
            
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>    
</div>
@endsection