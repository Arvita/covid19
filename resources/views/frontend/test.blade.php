@extends('frontend\layouts.template')

@section('content')
<style>
div.card {
  /*width: 250px;*/
  margin-top: 10px;
  margin-bottom: 150px;
  padding-top: 50px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  font-size: 20px;
}
div.warning {
  color: red;
  text-align: center;
  font-size: 25px;
}
</style>

			<div class="main-container">
			<section class="page-top">
				<div class="container">
					<div class="col-md-4 col-sm-4">
						<h1>Test Covid-19</h1>
					</div>
					<div class="col-md-8 col-sm-8">
						<ul class="pull-right breadcrumb">
							<li>
								<a href="{{ url('/')}}">
									Home
								</a>
							</li>
							<li class="active">
								Test Covid19
							</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="wrapper">
				<div class="container">
					<div class="row">
						<!-- <form action="POST"> -->
						<!-- S1 -->
						<div class="col-sm-12 card" id="question1">
							<strong>Perna kontak dengan pasien positif COVID-19 (berada dalam satu ruangan yang sama/kontak dalam jarak 1 meter) Atau perna berkunjung ke negara/daerah endemis COVID-19 dalam 14 hari terakhir?</strong>
							<br><br>
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('question1', 'none','question11', 'inline');";>Ya</button>
							<button id="ragu" name="ragu" class="btn btn-warning" onclick="setVisibility('question1', 'none','ex0', 'inline');";>Ragu</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('question1', 'none','question12', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
						</div>
						<div class="col-sm-12 card" id="question11" style="display:none;">
							<strong>Apakah anda batuk kering ?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('question11', 'none','question111', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('question11', 'none','ex1', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="question111" style="display:none;">
							<strong>Apakah anda pilek ?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('question111', 'none','question1111', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('question111', 'none','ex2', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="question1111" style="display:none;">
							<strong>Apakah anda demam > 38°C?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('question1111', 'none','question11111', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('question1111', 'none','ex3', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="question11111" style="display:none;">
							<strong>Apakah anda sesak nafas?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('question11111', 'none','question111111', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('question11111', 'none','ex4', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="question111111" style="display:none;">
							<strong>Apakah anda mengalami sakit tenggorokan?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('question111111', 'none','question1111111', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('question111111', 'none','ex5', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card warning" id="question1111111" style="display:none;">
							<strong>
								<ul>
									<li>Anda kemungkinan terkena virus Covid-19</li>
									<li>Hubungi hotline RS Soebandi No telepon (0331) 487441</li>
									<li>Lakukan social distance, gunakan masker, cuci tangan dengan teratur,<br
										>lakukan isolasi diri di rumah</li>								
								</ul>
								<br>
								<a href="{{ url('test')}}"><button class="btn btn-primary">Check up lagi</button></a><br>
								<br>
							</strong>
						</div>
						<!-- End S1 -->
						<!-- S3 -->
						<div class="col-sm-12 card" id="question12" style="display:none;">
							<strong>Apakah anda batuk kering ?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('question12', 'none','ex1', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('question12', 'none','question122', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="question122" style="display:none;">
							<strong>Apakah anda pilek ?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('question122', 'none','ex2', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('question122', 'none','question1222', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="question1222" style="display:none;">
							<strong>Apakah anda demam > 38°C?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('question1222', 'none','ex3', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('question1222', 'none','question12222', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="question12222" style="display:none;">
							<strong>Apakah anda sesak nafas?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('question12222', 'none','ex4', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('question12222', 'none','question122222', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="question122222" style="display:none;">
							<strong>Apakah anda mengalami sakit tenggorokan?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('question122222', 'none','ex5', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('question122222', 'none','question1222222', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="question1222222" style="display:none;">
							<strong>
								<ul>
									<li>Anda kemungkinan tidak terkena virus Covid-19</li>
									<li>Jaga kesehatan dan tetap waspada dengan melakukan social distance atau tetap berada di rumah, cuci tangan secara teratur, minum vitamin, istirahat yang cukup, dan makan makanan bergizi</li>	
									<li>Jika anda merasa tidak sehat dan muncul gejala deman 38°C,batuk, pilek dan sesak <br> tidak mereda maka pemeriksakan diri ke puskesmas atau dokter terdekat</li>					
								</ul>
								<br>
								<a href="{{ url('test')}}"><button class="btn btn-primary">Check up lagi</button></a><br>
								<br>
							</strong>
						</div>
						<!-- End S3 -->
						<!-- S2 -->
						<div class="col-sm-12 card" id="ex0" style="display:none;">
							<strong>Apakah anda batuk kering ?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('ex0', 'none','ex1', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('ex0', 'none','ex1', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="ex1" style="display:none;">
							<strong>Apakah anda pilek ?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('ex1', 'none','ex2', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('ex1', 'none','ex2', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="ex2" style="display:none;">
							<strong>Apakah anda demam > 38°C?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('ex2', 'none','ex3', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('ex2', 'none','ex3', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="ex3" style="display:none;">
							<strong>Apakah anda sesak nafas?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('ex3', 'none','ex4', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('ex3', 'none','ex4', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card" id="ex4" style="display:none;">
							<strong>Apakah anda mengalami sakit tenggorokan?
							<br><br>
							<button id="ya" name="ya" class="btn btn-primary" onclick="setVisibility('ex4', 'none','ex5', 'inline');";>Ya</button>
							<button id="tidak" name="tidak" class="btn btn-danger" onclick="setVisibility('ex4', 'none','ex5', 'inline');";>Tidak</button>
							<br><br>
							<br><br>
							</strong>
						</div>
						<div class="col-sm-12 card warning" id="ex5" style="display:none;">
							<strong>
								<ul>
									<li>Anda kemungkinan terkena virus Covid-19</li>
									<li>Lakukan social distance, gunakan masker, cuci tangan dengan teratur,<br
										>lakukan isolasi diri di rumah</li>			
									<li>Jika terjadi perubahan dalam kurun waktu 14 hari, <br>muncul gejala deman 38°C,batuk, pilek dan sesak <br> tidak mereda maka pemeriksakan diri ke puskesmas atau dokter terdekat</li>					
								</ul>
								<br>
								<a href="{{ url('test')}}"><button class="btn btn-primary">Check up lagi</button></a><br>
								<br>
							</strong>
						</div>
						<!-- End S2 -->
						<!-- </form> -->
					</div>
				</div>
			</section>
		</div>
@endsection
@push('content-js')
<script language="JavaScript">
function setVisibility(id, visibility, id1, visibility1) {
document.getElementById(id).style.display = visibility;
document.getElementById(id1).style.display = visibility1;
}
</script>
@endpush
