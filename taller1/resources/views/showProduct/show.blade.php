@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row p-5">
                        <ul id="errors">
                            @foreach($data["products"] as $product)
                                <li>
                                    <div class="card-header">
                                        <nav>
                                            @if($loop->iteration==1 || $loop->iteration==2)
                                                <strong>
                                                    <p> ID: {{ $product->getId() }}</p>
                                                </strong>
                                            @else
                                            <p> ID: {{ $product->getId() }}</p>
                                            @endif
                                            <a href={{ route('product.showWithID', ['id'=>$product->getId()]) }}> ver </a>
                                        </nav>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div>
                    <input type="submit" onclick="location='/index'" value="Return" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
