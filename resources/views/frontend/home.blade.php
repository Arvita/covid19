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
							data-y="105"
							data-speed="400"
							data-start="1500"
							data-easing="easeOutExpo">
								Salam, Warga JTI POLIJE
							</div>
							<div class="caption lft slide_subtitle slide_item_left"
							data-x="0"
							data-y="180"
							data-speed="400"
							data-start="2000"
							data-easing="easeOutExpo">
								COVID-19
							</div>
							<div class="caption lft slide_desc slide_item_left"
							data-x="0"
							data-y="220"
							data-speed="400"
							data-start="2500"
							data-easing="easeOutExpo">
								Saat ini dengan mulai munculnya ODP, PDP dan kasus Positif COVID-19 di Jawa Timur,
								<br>
								 tentunya self-assesment COVID-19 akan dibutuhkan oleh masyarakat.
							</div>
							<a class="caption lft btn btn-primary slide_btn slide_item_left" href="{{ url('test')}}"
							data-x="0"
							data-y="320"
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
							<p style="text-align: right;">
								Penyakit coronavirus <strong>(COVID-19)</strong> adalah penyakit menular yang disebabkan oleh virus baru yang belum teridentifikasi sebelumnya pada manusia.
								Virus ini menyebabkan penyakit saluran pernapasan (seperti flu) dengan gejala seperti batuk, demam, dan
								pada kasus yang lebih parah, pneumonia. Anda dapat melindungi diri Anda dengan mencuci tangan secara
								rutin dan menghindari menyentuh wajah Anda.
							</p>
							<h5 style="text-align: right;">CARA PENYEBARAN</h5>
							<p style="text-align: right;">
								Penyebaran utama coronavirus baru ini adalah melalui kontak dengan orang yang terinfeksi saat mereka batuk atau bersin, atau melalui tetesan air liur atau cairan hidung.
								Penyakit coronavirus <strong>(COVID-19)</strong> memiliki ciri-ciri berupa gejala ringan seperti
								pilek, sakit tenggorokan, batuk, dan demam. Penyakit ini dapat memiliki gejala
								yang lebih parah bagi sebagian orang dan dapat menyebabkan pneumonia atau
								sesak napas.
								Dalam kasus yang lebih langka, penyakit ini dapat menyebabkan kematian.
								Orang-orang berusia lanjut, dan orang-orang yang memiliki gangguan medis
								lainnya (seperti asma, diabetes, atau penyakit jantung), lebih rentan untuk
								mengalami gejala yang parah.
							</p>
							<hr class="fade-left">
							<!-- <a href="#" class="btn btn-default pull-right"><i class="fa fa-info"></i> Learn more...</a> -->
						</div>
						<div class="col-sm-6">
							<ul class="icon-list animate-group">
								<li>
									<div class="timeline animate" data-animation-options='{"animation":"scaleToBottom", "duration":"300"}'></div>
									<i class="clip-seven-segment-1 circle-icon circle-teal animate" data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
									<div class="icon-list-content">
										<h4>ODR (Orang Dalam Resiko)</h4>
										<p>
											Orang Dalam Resiko
										</p>
									</div>
								</li>
								<li>
									<div class="timeline animate" data-animation-options='{"animation":"scaleToBottom", "duration":"300", "delay": "300"}'></div>
									<i class="clip-seven-segment-2 circle-icon circle-green animate" data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
									<div class="icon-list-content">
										<h4>ODP (Orang Dalam Pantauan)</h4>
										<p>
											Status ODP biasanya diberikan kepada orang dengan kondisi masih sehat, namun dalam riwayat perjalanannya pernah ke daerah penularan virus atau yang ada penderita corona. Bahkan, pernah berhubungan dengan pasien positif corona.
										</p>
									</div>
								</li>
								<li>
									<div class="timeline animate" data-animation-options='{"animation":"scaleToBottom", "duration":"300", "delay": "300"}'></div>
									<i class="clip-seven-segment-3 circle-icon circle-bricky animate" data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
									<div class="icon-list-content">
										<h4>PDP (Pasien Dalam Pengawasan)</h4>
										<p>
											PDP adalah orang yang pernah berkunjung ke wilayah/ daerah atau tinggal di suatu wilayah yang diketahui merupakan daerah penularan virus corona. Lalu, sepulangnya, mereka merasakan ada gejala panas badan dan gangguan saluran pernapasan ringan atau berat. PDP juga memiliki indikasi atau diketahui pernah kontak langsung dengan orang yang terindikasi positif corona.
										</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: ABOUT US CONTAINER -->
			</section>
@endsection
