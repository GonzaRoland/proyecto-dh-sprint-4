@extends('layouts.app')

@section('content')

<div class="sidenav">
    <div class="logocorpoFooter">
        <a href="/"><img src="{{ asset('img/imagen_corporate/logospring.png') }}" </a>
    </div> 
    <a href="/productos/categoria/5">ALIMENTOS</a>
    <a href="/productos/categoria/1">INDUMENTARIA</a>
    <a href="/productos/categoria/6">CUIDADOS</a>
    <a href="/productos/categoria/3">JUGUETES</a>
    <a href="/productos/categoria/2">DECO-PET</a>
    <a href="/productos/categoria/4">TECH</a>
    {{-- <div class="logocorpoFooter">
        <a href="/"><img src="{{ asset('img/imagen_corporate/logospring.png') }}"</a>
    </div> --}}    
</div>

<div class="product-list">
        @foreach($products as $product)
        <div class="center">
                <div class="card-product">
                    <img class="card-img-product" src="/storage/{{ $product->photopath }}" alt="Card image cap">
                        <div class="card-body-product">
                            <h5 class="card-title-product">{{ $product->prod_name }}</h5>
                            <p class="card-price-product">${{ $product->price }}</p>
                            <form class="card-form-product" action="/productos/{{ $product->id }}/agregar" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <label for="stock" class="prod-ammount-label">Cantidad</label><input class="prod-ammount" type="number" value="1" name="stock">
                                <button type="submit" class="btn btn-outline-secondary">Agregar al carrito</button>
                            </form> 
                            <a href="/productos/{{ $product->id }}" class="btn btn-dark">Ver Más >></a>
                        </div>
                </div>
            </div>
        @endforeach    
        <div class="center">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/categorias/alimen.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Alimentos</h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-dark">Ver Mas >></a>
                        </div>
                </div>
            </div>
            <div class="center">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/categorias/alimen.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Alimentos</h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-dark">Ver Mas >></a>
                            </div>
                    </div>
                </div>
                <div class="center">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/categorias/alimen.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Alimentos</h5>
                                    <p class="card-text"></p>
                                    <a href="#" class="btn btn-dark">Ver Mas >></a>
                                </div>
                        </div>
                    </div>
                <div class="center">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/categorias/alimen.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Alimentos</h5>
                                    <p class="card-text"></p>
                                    <a href="#" class="btn btn-dark">Ver Mas >></a>
                                </div>
                        </div>
                    </div>
                    <div class="center">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/categorias/alimen.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Alimentos</h5>
                                        <p class="card-text"></p>
                                        <a href="#" class="btn btn-dark">Ver Mas >></a>
                                    </div>
                            </div>
                        </div>         
    {{-- <ul>
        @foreach($products as $product)
        <li>
            <a href="/productos/{{ $product->id }}">{{ $product->prod_name }}</a>
        <form action="/productos/{{ $product->id }}/agregar" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="number" name="stock">
                <input type="submit" name="submit" value="Agregar al Carrito">
            </form>      
        </li>
        @endforeach
    </ul>
    <!-- <a href="#">Agregar Nuevo Genero</a>--> --}}
</div>

@endsection