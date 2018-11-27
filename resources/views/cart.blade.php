@extends('layouts.app')

@section('content')
{{-- <div class="container cart">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            
            @empty($products) 
            <h1>No hay productos en el carrito</h1>
            
            @else
            <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
    
                    @foreach ($products as $product)
                        <tr>
                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/storage/{{ $product->photopath }}" style="width: 72px; height: 72px;"> </a>
                                    <div class="media-body">
                                    <h4 class="media-heading"><a href="#">{{$product->prod_name}}</a></h4>
                                     
                                    </div>
                                </div>
                            </td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input type="number" class="form-control" id="exampleInputEmail1" value="{{$product->stock}}">
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>${{$product->price}}</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                            <td class="col-sm-1 col-md-1">
                                    
                            </td>
                        </tr>
                    @endforeach
    
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h5>Subtotal</h5></td>
                            <td class="text-right"><h5><strong>$24.59</strong></h5></td>
                        </tr>
                        {{-- <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h5>Envío estimado</h5></td>
                            <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                        </tr> --}}
                        {{-- <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h3>Total</h3></td>
                            <td class="text-right"><h3><strong>$31.53</strong></h3></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                            <button type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Seguir comprando
                            </button></td>
                            <td>
                            <button type="button" class="btn btn-success">
                                Checkout <span class="glyphicon glyphicon-play"></span>
                            </button></td>
                        </tr>
                    </tbody>
                </table>
                
                
            @endempty
        </div>
    </div>
</div> --}}

<div class="container cart">
        <table id="cart" class="table table-hover table-condensed">
                @empty ($products) 
                
                <h1>No hay productos en el carrito</h1>
                
                @else
                        <thead>
                            <tr>
                                <th style="width:50%">Producto</th>
                                <th style="width:10%">Precio</th>
                                <th style="width:8%">Cantidad</th>
                                <th style="width:22%" class="text-center">Subtotal</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($products as $product)
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-2 hidden-xs"><img src="/storage/{{ $product->photopath }}" alt="..." class="img-responsive"/></div>
                                        <div class="col-sm-10">
                                            <h4 class="nomargin">{{ $product->prod_name }}</h4>
                                            {{-- <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p> --}}
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">$ {{ $product->price }}</td>
                                <td data-th="Quantity">
                                    <input type="number" class="form-control text-center" value="1">
                                </td>
                                <td data-th="Subtotal" class="text-center">1.99</td>
                                <td class="actions" data-th="">
                                    {{-- <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i>Actualizar</button> --}}
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>Eliminar</button>								
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            {{-- <tr class="visible-xs">
                                <td class="text-center"><strong>Total 1.99</strong></td>
                            </tr> --}}
                            <tr>
                                <td><a href="/productos" class="btn btn-outline-secondary"><i class="fa fa-angle-left"></i> Seguir comprando</a></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                                <td><a href="#" class="btn form-btn">FINALIZAR<i class="fa fa-angle-right"></i></a></td>
                            </tr>
                        </tfoot>
                        @endempty
                    </table>
    </div>
@endsection
