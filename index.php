<?php
require_once('core/init.php');

$result      = dataIndex();
$data        = mysqli_fetch_assoc($result);

$motivasies  = dataMmotivasi();
$edukasies   = dataEdukasi();

// Add comment
$error = '';
if (isset($_POST['submit'])) {
	$nama     = $_POST['nama'];
	$email    = $_POST['email'];
	$pesan    = $_POST['message'];

	if (!empty(trim($nama)) && !empty(trim($email)) && !empty(trim($pesan))) {
		if (addComment($nama, $email, $pesan)) {
			header('Location: index.php');
			$_SESSION['msg'] = 'Komentar  berhasil dikirim';
		} else $error = 'terjadi kesalahan';
	} else $error = 'judul dan deskripsi tidak boleh kosong';
}

?>
<?php require_once('view/_header.php') ?>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Carausel -->
<?php if (!empty($error)) { ?>
	<?= "<script>alert('$error')</script>" ?>
<?php } ?>

<section id="home-section" class="hero">
	<div class="home-slider  owl-carousel">
		<div class="slider-item ">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-sm-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
					<div class="one-third order-sm-last img" style="background-image:url(images/bg_1.jpeg);">
						<div class="overlay"></div>
					</div>
					<div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
						<a href="#" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<span class="ion-ios-play play"></span>
						</a>
						<div class="text">
							<span class="subheading">Hello</span>
							<h1 class="mb-4 mt-3">I'm <span><?= $data['username'] ?></h1>
							<h2 class="mb-4">A Freelance <span class="badge badge-light">Web Developer</span> </h2>
							<p><a href="#" class="btn-custom">Hire me</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
					<div class="one-third order-sm-last img" style="background-image:url(images/bg_2.jpg);">
						<div class="overlay"></div>
					</div>
					<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
						<a href="#" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<span class="ion-ios-play play"></span>
						</a>
						<div class="text">
							<h1 class="mb-4 mt-3">I'm a <span>web developer</span> from Mamuju</h1>
							<p><a href="#" class="btn-custom">Hire me</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- END Carausel -->

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~About -->
<section class="ftco-about ftco-counter img ftco-section" id="about-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-sm-6 col-lg-5 d-flex">
				<div class="img-about img d-flex align-items-stretch">
					<div class="overlay"></div>
					<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/<?= $data['photo'] ?>);">
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-7 pl-lg-5 py-5">
				<div class="row justify-content-start pb-3">
					<div class="col-sm-12 heading-section ftco-animate">
						<span class="subheading">Welcome</span>
						<h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">About Me</h2>
						<p><?= $data['subject'] ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="media block-6 services d-block ftco-animate">
							<div class="icon"><span class="flaticon-analysis"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Desain WEB</h3>
								<p>Web Design adalah salah satu istilah tentang desain secara visual yang diimplementasikan pada saat pembuatan WEB.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="media block-6 services d-block ftco-animate">
							<div class="icon"><span class="flaticon-analysis"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Aplikasi WEB</h3>
								<p>Web App adalah proses yang berjalan dibelakang tampilan, yang bertujuan untuk memanipulasi data dan melakukan logika.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="counter-wrap ftco-animate d-flex mt-sm-3">
					<div class="text p-4 pr-5 bg-primary">
						<p class="mb-0">
							<span>Berkarya dengan hati</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END About -->


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Skill -->
<section class="ftco-section bg-light" id="skills-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-sm-12 heading-section text-center ftco-animate">
				<span class="subheading">Skills</span>
				<h2 class="mb-4">My Skills</h2>
				<p>Belum jago, masih perlu banyak belajar, latihan dan berdoa</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>Flutter</h3>
					<div class="progress">
						<div class="progress-bar color-1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
							<span>75%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>jQuery</h3>
					<div class="progress">
						<div class="progress-bar color-2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
							<span>60%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>HTML5</h3>
					<div class="progress">
						<div class="progress-bar color-3" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
							<span>85%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>CSS3</h3>
					<div class="progress">
						<div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
							<span>90%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>WordPress</h3>
					<div class="progress">
						<div class="progress-bar color-5" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
							<span>70%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>Laravel</h3>
					<div class="progress">
						<div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
							<span>80%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>Javascript</h3>
					<div class="progress">
						<div class="progress-bar color-1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
							<span>75%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>PHP</h3>
					<div class="progress">
						<div class="progress-bar color-3" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
							<span>85%</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center py-5 mt-5">
			<div class="col-sm-12 heading-section text-center ftco-animate">
				<span class="subheading">What I Do</span>
				<h2 class="mb-4">Organizational Experience</h2>
				<p>Berusaha memberikan yang terbaik untuk hasil yang lebih baik</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-3 text-center d-flex ftco-animate">
				<div class="services-1">
					<span class="icon">
						<i class="flaticon-analysis"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5"><a href="#">Sosial</a></h3>
						<h4 class="font-weight-bold">Wakil Ketua</h4>
						<h4 class="font-weight-lighter">Remaja Masjid</h4>
						<h4>Nurul Huda Tasiu</h4>
					</div>
				</div>
			</div>
			<div class=" col-sm-3 text-center d-flex ftco-animate">
				<div class="services-1">
					<span class="icon">
						<i class="flaticon-flasks"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5"><a href="#">SMP</a></h3>
						<h4 class="font-weight-bold">Anggota</h4 class="jabatan">
						<h4 class="font-weight-lighter">Organisasi Siswa Intrasekolah</h4>
						<h4>SMP Budi Mulia Kalukku</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-3 text-center d-flex ftco-animate">
				<div class="services-1">
					<span class="icon">
						<i class="flaticon-ideas"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5"><a href="#">SMK</a></h3>
						<h4 class="font-weight-bold">Anggota</h4>
						<h4 class="font-weight-lighter">O S I S</h4>
						<h4>SMK Budi Mulia Kalukku</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-3 text-center d-flex ftco-animate">
				<div class="services-1">
					<span class="icon">
						<i class="flaticon-analysis"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5"><a href="#">Mahasiswa</a></h3>
						<h4 class="font-weight-bold">Wakil Ketua</h4>
						<h4 class="font-weight-lighter">Inreadyworkgroup</h4>
						<h4>Study Club IT UIN Alauddin Makassar</h4>
					</div>
				</div>
			</div>
			<div class=" col-sm-12 text-center d-flex ftco-animate">
				<div class="services-1">
					<span class="icon">
						<i class="flaticon-flasks"></i>
					</span>
					<h4 class="desc">
						<h3 class="mb-5"><a href="#">Mahasiswa</a></h3>
						<h4 class="font-weight-bold">Core Team</h4 class="jabatan">
						<h4 class="font-weight-lighter">DSC UINAM</h4>
						<h4>Developer Student Club</h4>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- END Skill -->

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Frame Blue -->
<section class="ftco-section ftco-hireme">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-lg-9 d-flex align-items-center ftco-animate">
				<h2>Beritahukan idemu<span> akan kutuangkan dalam kode </span>yang kusajikan dengan keindahan</h2>
			</div>
			<div class="col-sm-4 col-lg-3 d-flex align-items-center ftco-animate">
				<p class="mb-0"><a href="#" class="btn btn-white py-4 px-5">Hire me</a></p>
			</div>
		</div>
	</div>
</section>
<!-- END Frame -->



<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Motivation -->
<section class="ftco-section ftco-project" id="projects-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-sm-12 heading-section text-center ftco-animate">
				<span class="subheading">motivat</span>
				<h2 class="mb-4">Motivation</h2>
				<p>Penyemagat ketika jenuh dalam belajar maupun berkarya</p>
			</div>
		</div>
		<div class="row">
			<?php while ($motivasi = mysqli_fetch_assoc($motivasies)) { ?>
				<div class="col-sm-6">
					<div class="card border-info mb-3">
						<div class="card-header">Motivasi Ku</div>
						<div class="card-body text-secondary">
							<h5 class="card-title"><?= $motivasi['title'] ?></h5>
							<p class="card-text"><?= $motivasi['deskription'] ?></p>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>
	</div>
	</div>
</section>

<!-- END Motivation -->

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~EDUKASI	 -->

<section class="ftco-section bg-light" id="blog-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-5">
			<div class="col-sm-7 heading-section text-center ftco-animate">
				<span class="subheading">Education</span>
				<h2 class="mb-4">Education Details</h2>
				<p>Sekilah waktu saya masih sekolah</p>
			</div>
		</div>
		<div class="row d-flex">
			<?php while ($edukasi = mysqli_fetch_assoc($edukasies)) { ?>
				<div class="col-sm-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/<?= $edukasi['img'] ?>');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center mb-3 meta">
								<p class="mb-0">
									<span class="mr-2"><?= $edukasi['date'] ?></span>
								</p>
							</div>
							<h3 class="heading"><a href="#"><?= $edukasi['school'] ?></a></h3>
							<p><?= $edukasi['memo'] ?></p>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-sm-7 heading-section text-center ftco-animate">
				<span class="subheading">Contact</span>
				<h2 class="mb-4">Contact Me</h2>
				<p>Silahkan berkomentar, berikan masukan maupun saran</p>
			</div>
		</div>

		<div class="row no-gutters block-9">
			<div class="col-sm-6 order-sm-last d-flex">
				<form action="" method="POST" class="bg-light p-4 p-sm-5 contact-form">
					<div class="form-group">
						<input type="text" name="nama" class="form-control" placeholder="Nama">
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
					</div>
				</form>

			</div>

			<div class="col-sm-6 d-flex">
				<div class="img" style="background-image: url(images/about.jpg);"></div>
			</div>
		</div>
	</div>
</section>
<?php require_once('view/_footer.php') ?>