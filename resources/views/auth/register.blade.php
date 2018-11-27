@extends('layouts.app')

@section('content')
<div class="container">
    <div id="reg-form" class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear nuevo usuario') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
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
                            <label for="first_name" class="form-label col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" autofocus>

                                {{-- @if ($errors->has('first_name')) --}}
                                    <span id="invalid-first-name" class="invalid-input">
                                        {{-- <strong>ESTO ES UN ERROR</strong> --}}
                                    </span>
                                {{-- @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="form-label col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" autofocus>

                                {{-- @if ($errors->has('last_name')) --}}
                                    <span id="invalid-last-name" class="invalid-input">
                                        {{-- <strong>{{ $errors->first('last_name') }}</strong> --}}
                                    </span>
                                {{-- @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="form-label col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus>
                                 
                                <span id="invalid-email" class="invalid-input">
                                        
                                </span>
                                
                                
                                @if ($errors->has('email'))
                                <span id="invalid-email" class="invalid-input">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="form-label col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}"  autofocus>

                                {{-- @if ($errors->has('phone')) --}}
                                <span id="invalid-phone" class="invalid-input">
                                        {{-- <strong>{{ $errors->first('phone') }}</strong> --}}
                                    </span>
                                {{-- @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="form-label col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                {{-- @if ($errors->has('password')) --}}
                                <span id="invalid-password" class="invalid-input">
                                        {{-- <strong>{{ $errors->first('password') }}</strong> --}}
                                    </span>
                                {{-- @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="form-label col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                                <span id="invalid-password-confirm" class="invalid-input">
                                    {{-- <strong>{{ $errors->first('password') }}</strong> --}}
                                </span>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="street_address" class="form-label col-md-4 col-form-label text-md-right">{{ __('Domicilio') }}</label>

                            <div class="col-md-6">
                                <input id="street_address" type="text" class="form-control{{ $errors->has('street_address') ? ' is-invalid' : '' }}" name="street_address" value="{{ old('street_address') }}" autofocus>

                               {{--  @if ($errors->has('street_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('street_address') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apt_floor" class="form-label col-md-4 col-form-label text-md-right">{{ __('Piso / Dpto') }}</label>

                            <div class="col-md-6">
                                <input id="apt_floor" type="text" class="form-control{{ $errors->has('apt_floor') ? ' is-invalid' : '' }}" name="apt_floor" value="{{ old('apt_floor') }}" autofocus>

                                {{-- @if ($errors->has('apt_floor'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apt_floor') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zip_code" class="form-label col-md-4 col-form-label text-md-right">{{ __('Código Postal') }}</label>

                            <div class="col-md-6">
                                <input id="zip_code" type="text" class="form-control{{ $errors->has('zip_code') ? ' is-invalid' : '' }}" name="zip_code" value="{{ old('zip_code') }}" autofocus>

                               {{--  @if ($errors->has('zip_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zip_code') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="city" class="form-label col-md-4 col-form-label text-md-right">{{ __('Localidad') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" autofocus>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="form-label col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>

                            <div class="col-md-6">
                                <input id="province" type="text" class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}" name="province" value="{{ old('province') }}" autofocus>

                                @if ($errors->has('province'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="province" class="form-label col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" id="province" name="province" value="{{ old('province') }}" autofocus>
                                        <option>Seleccionar...</option>
                                </select>
                                {{-- <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" autofocus>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="form-label col-md-4 col-form-label text-md-right">{{ __('Municipio') }}</label>

                            <div class="col-md-6">

                                <select class="form-control" id="city" name="city" value="{{ old('city') }}" autofocus>
                                        <option>Seleccionar...</option>
                                </select>

                                {{-- <input id="province" type="text" class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}" name="province" value="{{ old('province') }}" autofocus>

                                @if ($errors->has('province'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="image" class="form-label col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" name="image" value="{{ old('file') }}" autofocus>

                                {{-- @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>

                        

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn form-btn">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/reg-validate.js"></script>

@endsection
