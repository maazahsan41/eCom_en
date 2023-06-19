@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="">
            @foreach($product as $item)
            <div class="trending-wrapper">
                <div class="trnding-item">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" alt="Los Angeles">
                        <div class="">
                            <h3>{{$item->name}}</h3>            
                        </div>
                    </a>
                
                </div>
            </div>
            @endforeach        
        </div>
    </div>    
</div>
@endsection