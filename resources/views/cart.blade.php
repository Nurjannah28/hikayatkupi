@extends('master')

@section('konten')
<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Produk</th>
						        <th>Harga</th>
						        <th>Kuantitas</th>
						        <th>Jumlah</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/menu-2.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Kopi Bali</h3>
						        </td>
						        
						        <td class="price">Rp49.000</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">Rp49.000</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/dish-2.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Daging Sapi Iga Bakar</h3>
						        </td>
						        
						        <td class="price">Rp157.000</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">Rp157.000</td>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Total Harga</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>Rp206.000</span>
    					</p>
    					<p class="d-flex">
    						<span>Ongkos Kirim</span>
    						<span>Rp0</span>
    					</p>
    					<p class="d-flex">
    						<span>Diskon</span>
    						<span>Rp0</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>Rp206.000</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>
@endsection