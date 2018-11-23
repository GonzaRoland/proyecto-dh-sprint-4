@extends('layouts.app')

@section('content')
<div class="container cart">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            
            @empty($products) 
            <h1>No hay productos en el carrito</h1>
            
            @else
            <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>s
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
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
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
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h5>Envío estimado</h5></td>
                            <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                        </tr>
                        <tr>
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
</div>
@endsection
