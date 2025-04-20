@extends('master')

@section('konten')
<section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">Informasi Kontak</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Alamat: </span>Jl. Prof. H. M. Yamin No.35, Sidodadi, Kec. Medan Tim., Kota Medan, Sumatera Utara 20232</p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>No. Telp: </span> <a href="tel://1234567920">+62 822-6736-5604</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Email: </span> <a href="mailto:info@yoursite.com">hikayatkupi@gmail.com</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Website: </span> <a href="#">hikayatkupi.com</a></p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="#" class="contact-form">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Nama">
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Email">
	                </div>
	                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subjek">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection