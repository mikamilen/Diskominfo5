<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>


    <link rel="stylesheet" href="/Diskominfo5/asset/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/Diskominfo5/asset/css/kontak.css" type="text/css">
    <link rel="stylesheet" href="/Diskominfo5/asset/font-awesome/css/font-awesome.min.css" type="text/css">
</head>
<body>
	<div id="googleMap"></div>
	<div class="col-md-12 kontak-wrap">
		<div class="col-md-6">
			<h2>Form Kontak</h2>
			<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ab dolorem odit, quisquam totam, in. Maxime qui, quia, repellat repellendus eveniet iusto ipsam, et ipsum labore non voluptatum pariatur illo?</p>
		<form>
		  <div class="form-group">
		    <input type="text" class="form-control" id="nama" placeholder="Nama">
		  </div>
		  <div class="form-group">
		    <input type="email" class="form-control" id="email" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="nama" placeholder="Subject">
		  </div>
		  <div class="form-group">
		    <textarea name="" id="" cols="65" rows="10" placeholder="  Alamat">&nbsp;&nbsp;&nbsp;</textarea>
		  </div>
		  <button type="submit" class="btn btn-default">KIRIM</button>
		</form>
		</div>
		<div class="col-md-6 kontak-information">
			<h2>Informasi Kontak</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius in dolor odio quisquam culpa voluptatem eum sequi sapiente, minima totam dolorum ratione? Voluptate nihil eaque porro inventore. Accusamus, hic!</p>
			<div class="kontak-media">
				<p>Email  : <span>kotabandung@gmail.com</span></p>
				<p>Phone  : <span>+6222 xxxxxxx</span></p>
				<p>Alamat : <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eveniet accusantium exercitationem. Maiores, minus nulla soluta ducimus quasi atque voluptates! Sint blanditiis iure architecto obcaecati, reiciendis aspernatur illum. Minima, atque!</span></p>
			</div>
			<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quae deserunt reprehenderit. Eligendi ducimus neque tenetur molestias incidunt, voluptatem necessitatibus voluptas! Dolorum provident illo, ullam voluptatem nemo veniam architecto quaerat.</h6>
		</div>
	</div>


	<script>
		function myMap() {
		var mapProp= {
		    center:new google.maps.LatLng(51.508742,-0.120850),
		    zoom:5,
		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjIZpu_3bAW9rSmI1CWoiQCDbc6Hs8axc&callback=myMap"></script>
	
</body>
</html>