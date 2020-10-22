@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row p-5">
                        <ul id="errors">
                            <li>
                                <div class="card-header">
                                    <nav><p>
                                        <p> ID: {{ $data['product']->getId() }}</p>
                                        <p> Gender: {{ $data['product']->getGender() }}</p>
                                        <p> Color: {{ $data['product']->getColor() }}</p>
                                        <p> Brand: {{ $data['product']->getBrand() }}</p>
                                        <p> Category: {{ $data['product']->getCategory() }}</p>
                                        <p> Type: {{ $data['product']->getType() }}</p>
                                        </p>
                                    </nav>
                                    <form method="DELETE" action="{{ route('product.delete', $data['product']->getId()) }}">
                                        @csrf
                                        <p></p>
                                        <input type="submit" value="Delete" />
                                        <p></p>
                                    </form>
                                </div>
                            </li>
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
