@extends('layouts.master')

@section('content')
<div class="container" xmlns="http://www.w3.org/1999/html">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Taller 01 - Topicos de software
                </div>
                <div class="card-body">
                    <button type="button" onclick="location='/product/create'" value="Crear formulario" >crear formulario</button>
                    <button type="button" onclick="location='/showProduct/show'" value="Listar objetos">lista de objetos</button

                </div>
            </div>
        </div
    </div>
</div>
@endsection
