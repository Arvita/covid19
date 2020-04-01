@extends('frontend\layouts.template')

@section('content')
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<!-- start: REVOLUTION SLIDERS -->
			<section class="fullwidthbanner-container">
				<div class="fullwidthabnner">
					<ul>
						<!-- start: FIRST SLIDE -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
							<img src="{{ asset('public/frontend/images/sliders/slidebg1.png')}}"  style="background-color:rgb(246, 246, 246)" alt="slidebg1"  data-bgfit="cover" data-bgposition="left bottom" data-bgrepeat="no-repeat">
							<div class="caption lft slide_title slide_item_left"
							data-x="0"
							data-y="55"
							data-speed="400"
							data-start="1500"
							data-easing="easeOutExpo">
								Salam, Warga JTI POLIJE
							</div>
							<div class="caption lft slide_subtitle slide_item_left"
							data-x="0"
							data-y="130"
							data-speed="400"
							data-start="2000"
							data-easing="easeOutExpo">
								COVID-19 Jember
							</div>
							<div class="caption lft slide_desc slide_item_left"
							data-x="0"
							data-y="170"
							data-speed="400"
							data-start="2500"
							data-easing="easeOutExpo">
								Saat ini dengan mulai munculnya ODP, PDP dan kasus Positif COVID-19 di JEMBER,
								<br>
								 tentunya self-assesment COVID-19 akan dibutuhkan oleh masyarakat.
							</div>
							<a class="caption lft btn btn-primary slide_btn slide_item_left" href="{{ url('test')}}"
							data-x="0"
							data-y="230"
							data-speed="400"
							data-start="3000"
							data-easing="easeOutExpo">
								check Up Now !
							</a>
							<div class="caption sfr"
							data-x="720"
							data-y="55"
							data-speed="700"
							data-start="1000"
							data-easing="easeOutExpo"  >
								<img src="{{ asset('public/frontend/images/covid19.png')}}" width="450px" alt="Image 1">
							</div>
							<div class="caption lft slide_desc slide_item_left"
							data-x="0"
							data-y="220"
							data-speed="400"
							data-start="3500"
							data-easing="easeOutExpo">
								<div class="icon-box animate">
									<h3 class="icon-box-title">Positif</h3>
									<div class="icon-box-content">
										<h1>{{$dt[4]}}</h1>
									</div>
								</div>
							</div>
							<div class="caption lft slide_desc slide_item_left"
							data-x="120"
							data-y="220"
							data-speed="400"
							data-start="3500"
							data-easing="easeOutExpo">
								<div class="icon-box animate ">
									<h3 class="icon-box-title">PDP</h3>
									<div class="icon-box-content">
										<h1>{{$dt[5]}}</h1>
									</div>
								</div>
							</div>
							<div class="caption lft slide_desc slide_item_left"
							data-x="220"
							data-y="220"
							data-speed="400"
							data-start="3500"
							data-easing="easeOutExpo">
								<div class="icon-box animate ">
									<h3 class="icon-box-title">ODP</h3>
									<div class="icon-box-content">
										<h1>{{$dt[6]}}</h1>
									</div>
								</div>
							</div>
						</li>
						<!-- end: FIRST SLIDE -->
					</ul>
				</div>
			</section>
			<section class="wrapper wrapper-grey padding50">
				<!-- start: CORE BOXES CONTAINER -->
				<div class="container">
					<div class="row">
						<div class="col-sm-12"><h2 style="text-align: center;margin-top: 50px;">Kasus Covid-19 Indonesia</h2></div>
						<div class="col-sm-12"><h5 style="text-align: center;">sumber (<a href="https://www.worldometers.info/coronavirus/country/indonesia/">https://www.worldometers.info/coronavirus/country/indonesia/</a>)</h5></div>
						<div class="col-sm-4">
							<div class="core-box">
								<div class="heading">
									<i class="clip-users circle-icon circle-blue"></i>
									<h2>Kasus Positif ({{$dt[0]}})</h2>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="core-box">
								<div class="heading">
									<i class="clip-users  circle-icon circle-red"></i>
									<h2>Meninggal ({{$dt[1]}})</h2>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="core-box">
								<div class="heading">
									<i class="clip-users  circle-icon circle-green"></i>
									<h2>Sembuh ({{$dt[2]}})</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end: CORE BOXES CONTAINER -->
			</section>
			<!-- end: REVOLUTION SLIDERS -->
						<section class="wrapper padding50">
				<!-- start: ABOUT US CONTAINER -->
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h2 style="text-align: right;">About Covid-19</h2>
							<hr class="fade-left">
							<p style="text-align: justify;">
								Coronavirus-19 (COVID) telah dinyatakan sebagai pandemi dunia oleh WHO (WHO,2020). Coronavirus adalah zoonosis atau virus yang ditularkan antara hewan dan manusia. Virus dan penyakit ini diketahui berawal di kota Wuhan, Cina sejak Desember 2019. Per tanggal 21 Maret 2020, jumlah kasus penyakit ini mencapai angka 275,469 jiwa yang tersebar di 166 negara, termasuk Indonesia.
							</p>
							<p style="text-align: justify;">
								Presiden Republik Indonesia telah menyatakan status penyakit ini menjadi tahap Tanggap Darurat pada tanggal 17 Maret 2020. Presiden juga telah mengeluarkan Keputusan Presiden No. 7 Tahun 2020 tentang Gugus Tugas Percepatan Penanganan Corona yang diketuai oleh Kepala Badan Nasional Penanggulangan Bencana (BNPB). Gugus Tugas ini bertujuan untuk meningkatkan ketahanan nasional di bidang kesehatan; mempercepat penanganan <strong>COVID-19</strong> melalui sinergi antar kementerian/ lembaga dan pemerintah daerah; meningkatkan antisipasi perkembangan eskalasi penyebaran <strong>COVID-19</strong>; meningkatkan sinergi pengambilan kebijakan operasional; dan meningkatkan kesiapan dan kemampuan dalam mencegah, mendeteksi, dan merespons terhadap <strong>COVID-19</strong>. 
							</p>
							<h4 style="text-align: justify;">Pedoman Alur Penanganan Cepat COVID-19 di Indonesia untuk Masyarakat</h4>
							<img src="{{ asset('public/frontend/images/otg.png')}}" width="50%" height="50%">
							<img src="{{ asset('public/frontend/images/odp.png')}}" width="50%" height="50%" align="right">
							<img src="{{ asset('public/frontend/images/pdp.png')}}" width="100%" height="70%">
							<hr class="fade-left">
							<!-- <a href="#" class="btn btn-default pull-right"><i class="fa fa-info"></i> Learn more...</a> -->
						</div>
						<div class="col-sm-6">
							<ul class="icon-list animate-group">
								<li>
									<div class="timeline animate" data-animation-options='{"animation":"scaleToBottom", "duration":"300"}'></div>
									<i class="clip-seven-segment-1 circle-icon circle-teal animate" data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
									<div class="icon-list-content">
										<h4>OTG (Orang Tanpa Gejala)</h4>
										<ul>
											<li><p style="text-align: justify;">Orang yang tidak bergejala dan memiliki risiko tertular dari orang positif COVID-19</p></li>
											<li><p style="text-align: justify;">Orang tanpa gejala merupakan kontak erat dengan kasus positif <strong>COVID-19</strong></p></li>
										</ul>
									</div>
								</li>
								<li>
									<div class="timeline animate" data-animation-options='{"animation":"scaleToBottom", "duration":"300", "delay": "300"}'></div>
									<i class="clip-seven-segment-2 circle-icon circle-green animate" data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
									<div class="icon-list-content">
										<h4>ODP (Orang Dalam Pantauan)</h4>
										<ul>
											<li><p style="text-align: justify;">Orang yang mengalami demam (≥38°C) atau riwayat demam; atau gejala gangguan sistem pernapasan seperti pilek/sakit tenggorokan/batuk DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat perjalanan atau tinggal di negara/wilayah yang melaporkan transmisi lokal</p></li>
											<li><p style="text-align: justify;">Orang yang mengalami gejala gangguan sistem pernapasan seperti pilek/sakit tenggorokan/batuk DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat kontak dengan kasus konfirmasi atau probabel <strong>COVID-19</strong>.</p></li>
										</ul>
									</div>
								</li>
								<li>
									<div class="timeline animate" data-animation-options='{"animation":"scaleToBottom", "duration":"300", "delay": "300"}'></div>
									<i class="clip-seven-segment-3 circle-icon circle-bricky animate" data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
									<div class="icon-list-content">
										<h4>PDP (Pasien Dalam Pengawasan)</h4>
										<ul>
											<li><p style="text-align: justify;">Orang dengan Infeksi Saluran Pernapasan Akut (ISPA) yaitu demam (≥38°C) atau riwayat demam; disertai salah satu gejala/tanda penyakit pernapasan seperti: batuk/sesak nafas/sakit tenggorokan/pilek/pneumonia ringan hingga berat DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat perjalanan atau tinggal di negara/wilayah yang melaporkan transmisi lokal.</p></li>
											<li><p style="text-align: justify;">Orang dengan demam (≥38°C) atau riwayat demam atau ISPA DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat kontak dengan kasus konfirmasi atau probabel <strong>COVID-19</strong></p></li>
											<li><p style="text-align: justify;">Orang dengan ISPA berat/pneumonia berat*** yang membutuhkan perawatan di rumah sakit DAN tidak ada penyebab lain berdasarkan gambaran klinis yang meyakinkan.</p></li>
										</ul>
									</div>
									Sumber : <br>
									Pedoman Penangan Cepat Medis dan Kesehatan Masyarakat COVID-19 di Indonesia.
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: ABOUT US CONTAINER -->
			</section>
@endsection
