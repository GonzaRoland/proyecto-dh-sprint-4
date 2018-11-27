@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="/regprod/{{$product->id}}">
                        {{ method_field('PATCH') }}
                        @csrf

                        {{-- @if($errors->any())
                        <div class="row collapse">
                            <ul class="alert-box warning radius">
                                @foreach($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif --}}

                        <div class="form-group row">
                            <label for="prod_name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Producto') }}</label>

                            <div class="col-md-6">
                                <input id="prod_name" type="text" class="form-control{{ $errors->has('prod_name') ? ' is-invalid' : '' }}" name="prod_name" value="{{ $product->prod_name }}"  autofocus>

                                {{-- @if ($errors->has('prod_name')) --}}
                                    <span id="invalid-prod-name" class="invalid-input">
                                        {{-- <strong>{{ $errors->first('prod_name') }}</strong> --}}
                                    </span>
                                {{-- @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ $product->price }}"  autofocus>

                                {{-- @if ($errors->has('price')) --}}
                                    <span id="invalid-price" class="invalid-input">
                                        {{-- <strong>{{ $errors->first('price') }}</strong> --}}
                                    </span>
                                {{-- @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prod_description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <input id="prod_description" type="text" class="form-control{{ $errors->has('prod_description') ? ' is-invalid' : '' }}" name="prod_description" value="{{ $product->prod_description }}" >

                                {{-- @if ($errors->has('prod_description')) --}}
                                    <span id="invalid-prod-description"class="invalid-input">
                                        {{-- <strong>{{ $errors->first('prod_description') }}</strong> --}}
                                    </span>
                                {{-- @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

                            <div class="col-md-6">
                                <input id="stock" type="text" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" name="stock" value="{{ $product->stock }}"  autofocus>

                                {{-- @if ($errors->has('stock')) --}}
                                    <span id="invalid-stock"class="invalid-input">
                                        {{-- <strong>{{ $errors->first('stock') }}</strong> --}}
                                    </span>
                                {{-- @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genre_id" class="col-md-4 col-form-label text-md-right">{{ __('Categoría') }}</label>

                            <div class="col-md-6">

                                    <select id="genre_id" class="form-control{{ $errors->has('genre_id') ? ' is-invalid' : '' }}" name="genre_id" value="{{ $product->genre_id }}"  autofocus>
                                            <option value="1">Categoria 1</option>
                                            <option value="2">Categoria 2</option>
                                            <option value="3">Categoria 3</option>
                                            <option value="4">Categoria 4</option>
                                            <option value="5">Categoria 5</option>
                                            <option value="6">Categoria 6</option>
                                    </select>

                                @if ($errors->has('genre_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genre_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        

                        

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" name="image" value="{{ old('file') }}" autofocus>

                                {{-- @if ($errors->has('file')) --}}
                                    <span id="invalid-image" class="invalid-input">
                                        {{-- <strong>{{ $errors->first('file') }}</strong> --}}
                                    </span>
                                {{-- @endif --}}
                            </div>
                        </div>

                        

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/regprod-validate.js"></script>
@endsection