@extends('layouts.app')

@section('content')
<div class="container">
    <div id="prod-form" class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar Producto') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/regprod">
                        @csrf

                        @if($errors->any())
                        <div class="row collapse">
                            <ul class="alert-box warning radius">
                                @foreach($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="prod_name" class="form-label col-md-4 col-form-label text-md-right">{{ __('Nombre del Producto') }}</label>

                            <div class="col-md-6">
                                <input id="prod_name" type="text" class="form-control{{ $errors->has('prod_name') ? ' is-invalid' : '' }}" name="prod_name" value="{{ old('prod_name') }}" required autofocus>

                                @if ($errors->has('prod_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prod_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="form-label col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus>

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prod_description" class="form-label col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <input id="prod_description" type="text" class="form-control{{ $errors->has('prod_description') ? ' is-invalid' : '' }}" name="prod_description" value="{{ old('prod_description') }}" required>

                                @if ($errors->has('prod_description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prod_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stock" class="form-label col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

                            <div class="col-md-6">
                                <input id="stock" type="text" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" name="stock" value="{{ old('stock') }}"  autofocus>

                                @if ($errors->has('stock'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stock') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genre_id" class="form-label col-md-4 col-form-label text-md-right">{{ __('Categoría') }}</label>

                            <div class="col-md-6">

                                    <select id="genre_id" class="form-control{{ $errors->has('genre_id') ? ' is-invalid' : '' }}" name="genre_id" value="{{ old('genre_id') }}"  autofocus>
                                            <option value="1">Indumentaria</option>
                                            <option value="2">Deco-Pet</option>
                                            <option value="3">Juguetes</option>
                                            <option value="4">Tech</option>
                                            <option value="5">Alimentos</option>
                                            <option value="6">Salud e Higiene</option>
                                    </select>

                                @if ($errors->has('genre_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genre_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        

                        

                        <div class="form-group row">
                            <label for="image" class="form-label col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" name="image" value="{{ old('file') }}" autofocus>

                                @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn form-btn">
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
@endsection
