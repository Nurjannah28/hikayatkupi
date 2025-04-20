@extends('master')

@section('konten')
<section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>+62 822-6736-5604</h3>
	    						<p>Nomor kontak Hikayat Kupi</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Jl. Prof. H. M. Yamin No. 35</h3>
	    						<p>Sidodadi, Kec. Medan Tim., Kota Medan, Sumatera Utara 20232</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Buka Setiap Hari</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="book p-4">
	    			<h3>Reservasi Tempat</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Nama Lengkap">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" class="form-control appointment_date" placeholder="Tanggal">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Waktu">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="No. Telp">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Keterangan"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Pesan" class="btn btn-white py-3 px-4">
		            </div>
	    				</div>
	    			</form>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
        <div class="row">
		<div class="col-md-6 mb-5 pb-3">
    <h3 class="mb-5 heading-pricing ftco-animate">Makanan</h3>

    <div class="pricing-entry d-flex ftco-animate">
        <div class="img" style="background-image: url(images/dish-1.jpg);"></div>
        <div class="desc pl-3">
            <div class="d-flex text align-items-center">
                <h3><span>Kornet - Makarel</span></h3>
                <span class="price">Rp20.000</span>
            </div>
        </div>
    </div>

    <div class="pricing-entry d-flex ftco-animate">
        <div class="img" style="background-image: url(images/dish-2.jpg);"></div>
        <div class="desc pl-3">
            <div class="d-flex text align-items-center">
                <h3><span>Steak Panggang</span></h3>
                <span class="price">Rp29.000</span>
            </div>
        </div>
    </div>

    <div class="pricing-entry d-flex ftco-animate">
        <div class="img" style="background-image: url(images/dish-3.jpg);"></div>
        <div class="desc pl-3">
            <div class="d-flex text align-items-center">
                <h3><span>Sup Musiman</span></h3>
                <span class="price">Rp20.000</span>
            </div>
        </div>
    </div>

    <div class="pricing-entry d-flex ftco-animate">
        <div class="img" style="background-image: url(images/dish-4.jpg);"></div>
        <div class="desc pl-3">
            <div class="d-flex text align-items-center">
                <h3><span>Kari Ayam</span></h3>
                <span class="price">Rp20.000</span>
            </div>
        </div>
    </div>
</div>


        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Makanan Utama</h3>
        		<div class="pricing-entry d-flex ftco-animate">
    <div class="img" style="background-image: url(images/dish-5.jpg);"></div>
    <div class="desc pl-3">
        <div class="d-flex text align-items-center">
            <h3><span>Ikan Trout Laut</span></h3>
            <span class="price">Rp748.650</span>
        </div>
    </div>
</div>

<div class="pricing-entry d-flex ftco-animate">
    <div class="img" style="background-image: url(images/dish-6.jpg);"></div>
    <div class="desc pl-3">
        <div class="d-flex text align-items-center">
            <h3><span>Daging Sapi Panggang</span></h3>
            <span class="price">Rp300.000</span>
        </div>
    </div>
</div>

<div class="pricing-entry d-flex ftco-animate">
    <div class="img" style="background-image: url(images/dish-7.jpg);"></div>
    <div class="desc pl-3">
        <div class="d-flex text align-items-center">
            <h3><span>Ayam Goreng Mentega</span></h3>
            <span class="price">Rp300.000</span>
        </div>
    </div>
</div>

<div class="pricing-entry d-flex ftco-animate">
    <div class="img" style="background-image: url(images/dish-8.jpg);"></div>
    <div class="desc pl-3">
        <div class="d-flex text align-items-center">
            <h3><span>Fillet Ayam</span></h3>
            <span class="price">Rp300.000</span>
        </div>
    </div>
</div>

        	</div>

        </div>
    	</div>
    </section>
@endsection