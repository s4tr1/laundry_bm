<nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
  <div class="container">
    <a style="font-size: 30px" class="page-scroll oleo-font navbar-brand" href="#home">Kabama Laundry</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav text-center">
        <a class="text-light nav-item nav-link page-scroll" href="#tentang">Tentang</a>
        <a class="text-light nav-item nav-link page-scroll" href="#testimoni">Testimoni</a>
      </div>
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link px-3 py-2 btn btn-primary rounded-pill text-white" href="<?= base_url('auth/cekStatusPesanan'); ?>"><i class="fas fa-fw fa-check"></i> Cek Status Pesanan</a>
      </div>
    </div>
  </div>
</nav>

<section class="pt-5">
  <div class="jumbotron jumbotron-fluid bg-info">
    <div class="container text-white text-center">
      <img style="box-shadow: 5px 5px 5px rgba(0,0,0,0.3)" src="<?= base_url(); ?>assets/img/img_properties/kabama.png" alt="logo" class="img-fluid rounded mb-2" width="200">
      <h1 class="text-shadow display-4 oleo-font font-weight-bold">Kabama Laundry</h1>

      <h4 class="text-shadow my-3">Mencuci dengan <span class="font-weight-bold">Cepat</span> dan menjaga pakaian tetap <span class="font-weight-bold">Berkualitas.</span></h4>
      <h5 class="text-shadow my-2">Namanya juga hidup pasti banyak <span class="font-weight-bold">Cobaan</span>, kalo banyak <span class="font-weight-bold">Cucian</span> bawa aja ke <span class="font-weight-bold oleo-font">Kabama Laundry.</span></h5>
      <a href="#tentang" class="page-scroll px-3 py-2 btn btn-primary rounded-pill my-5">Tentang Kami</a>
    </div>
  </div>
</section>

<section id="tentang" class="tentang bg-primary mt-n5 p-5">
  <div class="container">
    <div class="row">
      <div class="col-lg my-4 mb-5 text-white text-center">
        <h2>Tentang Kami</h2>
      </div>
    </div>
    <div class="row">
    	<div class="col-lg text-white text-center">
    		<p class="text-white"><span class="oleo-font">Kabama Laundry</span> adalah aplikasi laundry untuk membantu ibu rumah tangga agar <strong>meringankan</strong> pekerjaan rumahnya. Selain itu, aplikasi ini dapat melihat <strong>timeline</strong> pakaian yang anda laundry menggunakan fitur <strong>cek status pesanan</strong>. Sehingga, anda tidak perlu repot-repot datang ke tempat laundry bila pakaian anda yang sedang dilaundry belum selesai (Belum bisa diambil).</p>
			<h4>Kami memiliki beberapa cabang yaitu:</h4>
			<div class="table-responsive text-dark p-3 rounded bg-white">
				<table class="table table-hover table-bordered" style="font-size: .9rem">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Outlet</th>
							<th>Telepon Outlet</th>
							<th>Alamat Outlet</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($outlet as $do): ?>
							<tr>
								<td><?= $i++; ?></td>
								<td><?= $do['nama_outlet']; ?></td>
								<td><?= $do['telepon_outlet']; ?></td>
								<td><?= $do['alamat_outlet']; ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
    	</div>
    </div>
    <div class="row pb-3">
    	<div class="col-lg text-center">
			<a href="#testimoni" class="page-scroll px-3 py-2 btn btn-info rounded-pill my-5">Testimoni</a>
    	</div>
    </div>
  </div>
</section>

<section id="testimoni" class="testimoni bg-info mt-n5 p-5">
	<div class="container">
		<div class="row">
			<div class="col-lg my-4 mb-5 text-white text-center">
				<h2>Testimoni</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="<?= base_url(); ?>assets/img/img_properties/gambar1.png" class="card-img" alt="img testimoni">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Cepat & Bersih</h5>
				        <p class="card-text">Waktu pencucian hanya 1 hari untuk pakaian 10 kg. Meskipun cepat, tetapi tetap bersih.</p>
				        <p class="card-text"><small class="text-muted">Influencer</small></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="<?= base_url(); ?>assets/img/img_properties/gambar2.png" class="card-img" alt="img testimoni">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Tepat waktu</h5>
				        <p class="card-text">Tanggal selesai dicuci sangat cepat dan konsisten dengan aplikasi.</p>
				        <p class="card-text"><small class="text-muted">Designer</small></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="<?= base_url(); ?>assets/img/img_properties/gambar3.png" class="card-img" alt="img testimoni">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Pelayanan yang handal</h5>
				        <p class="card-text">Pakaian yang berbahan katun tidak rusak meskipun di cuci di Laundry</p>
				        <p class="card-text"><small class="text-muted">Model</small></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<footer class="bg-dark text-white p-4">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-6 my-3">
		    	<h3 class="oleo-font">Kabama Laundry</h3>
		    	<div class="row">
		    		<div class="col-lg">
						<span>Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script> <a expr:href='data:blog.homepageUrl'><data:blog.title/></a>. All rights reserved.</span>
		    		</div>
		    	</div>
			</div>
			<div class="col-lg-6 my-3">
        <h4>Kontak Kami</h4>
        <div class="row text-left my-2">
          <div class="col-lg-4"><i class="fab fa-fw fa-whatsapp"></i> Hub. WhatsApp</div>
          <div class="col-lg-5"><a class="text-white" target="_blank" href="https://api.whatsapp.com/send?phone=+6281222334545">+62 122 2333 4545</a></div>
        </div>
        <div class="row my-2 ml-0">
          <div class="col-xs-1 mr-2"><a class="text-white" target="_blank" href="https://twitter.com"><i class="fab fa-fw fa-twitter"></i></a></div>
          <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://facebook.com"><i class="fab fa-fw fa-facebook"></i></a></div>
          <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://instagram.com"><i class="fab fa-fw fa-instagram"></i></a></div>
          <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://linkedin.com"><i class="fab fa-fw fa-linkedin-in"></i></a></div>
          <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://pinterest.com"><i class="fab fa-fw fa-pinterest"></i></a></div>
        </div>    
        <div class="row text-left my-2">
          <div class="col-lg-4">
            <i class="fas fa-fw fa-map-marker-alt"></i> Alamat 
          </div>
          <div class="col-lg-8">Jl. Raya Kasin, Kasin, Ampeldento, Kec. Karang Ploso, Kabupaten Malang, Jawa Timur 65152</div>
        </div>
      </div>
		</div>
		<div class="row">
			<div class="col-lg">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.803167542148!2d112.60519957480719!3d-7.915618878792797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881454a72e231%3A0x20e381b27c5ebb1d!2sKabama%20Laundry!5e0!3m2!1sid!2sid!4v1720772854686!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</footer>

