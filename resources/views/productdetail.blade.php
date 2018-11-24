@extends('layouts.app')

@section('content')

<div class="product">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="current_page">
						<ul>
							<li><a href="/productos">Productos</a></li>
							<li><a href="/productos/categoria/{{$product->genre_id}}">{{$product->genre->name}}</a></li>
							<li>{{$product->prod_name}}</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row product_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="product_image">
						<div class="product_image_large"><img src="/storage/{{ $product->photopath }}" alt=""></div>
						<!-- <div class="product_image_thumbnails d-flex flex-row align-items-start justify-content-start">
							<div class="product_image_thumbnail" style="background-image:url(img/product_image_1.jpg)" data-image="img/product_image_1.jpg"></div>
							<div class="product_image_thumbnail" style="background-image:url(img/product_image_2.jpg)" data-image="img/product_image_2.jpg"></div>
							<div class="product_image_thumbnail" style="background-image:url(img/product_image_4.jpg)" data-image="img/product_image_4.jpg"></div>
						</div> -->
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="product_content">
						<div class="product_name">{{ $product->prod_name }}</div>
						<div class="product_price">$ {{ $product->price }}</div>
						<!-- <div class="rating rating_4" data-rating="4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div> -->
						<!-- In Stock -->
						{{-- <div class="in_stock_container">
							<div class="in_stock in_stock_true"></div>
							<span>in stock</span>
						</div> --}}
						<div class="product_text">
							<p>{{ $product->prod_description }}</p>
						</div>
                        <!-- Product Quantity -->
                        <form class="card-form-product" action="/productos/{{ $product->id }}/agregar" method="post">
                            @csrf
                            <div class="product_quantity_container">
							<span>Cantidad</span>
							<div class="product_quantity clearfix">
                                <input id="quantity_input" type="number" value="1" name="stock">
                                
								<!-- <div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
								</div> -->
							</div>
						</div>
						<!-- Product Size -->
						{{-- <div class="product_size_container">
							<span>Size</span>
							<div class="product_size">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>
										<input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
										<label for="radio_1">XS</label>
									</li>
									<li>
										<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2" checked>
										<label for="radio_2">S</label>
									</li>
									<li>
										<input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
										<label for="radio_3">M</label>
									</li>
									<li>
										<input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
										<label for="radio_4">L</label>
									</li>
									<li>
										<input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5">
										<label for="radio_5">XL</label>
									</li>
								</ul>
							</div>
							<div class="button cart_button"><a href="#">add to cart</a></div>
                        </div> --}}
                        {{-- <form class="card-form-product" action="/productos/{{ $product->id }}/agregar" method="post"> --}}
                            
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            {{-- <label for="stock" class="prod-ammount-label">Cantidad</label><input class="prod-ammount" type="number" value="1" name="stock"> --}}
                            <button type="submit" class="btn btn-outline-secondary">Agregar al carrito</button>
                        </form> 
					</div>
				</div>
			</div>
		</div>		
    </div>

    @endsection