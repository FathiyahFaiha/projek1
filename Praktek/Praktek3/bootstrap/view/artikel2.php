<?php
include '../layout/header.php';
?>

<br>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				Welcome To Website 2
			</h3>
            <br>
			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-light bg-light">
				 
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Beranda <span class="sr-only"></span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="#">Profil</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Akademik <span class="sr-only"></span></a>
						</li>
					</ul>
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Penelitian <span class="sr-only"></span></a>
						</li>
					</ul>
				</div>
			</nav>
            <br>
			<div class="jumbotron">
				<h2>
					Hello, Sports Lovers!
				</h2>
				<p>
                For those of you who are sports lovers, whatever sport you are interested in, you can really do it, here's a list of schools here. Sports school is opening registration for students who have talent in sports. Hurry up and register yourself right now!
				</p>
                <br>
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Username atau Email
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Password
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
                <br>
				<div class="form-group">
					<button type="button" class="btn btn-success">Login</button>
				</div>
                <br>
				<div class="checkbox">
					 
                    <p class="help-block">
						Belum Punya Akun?
					</p>    
				</div> 
				<button type="submit" class="btn btn-primary">
					Daftar Reguler
				</button>
			</form>
            <br>
            <br>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://www.layoutit.com/img/people-q-c-600-200-1.jpg" />
						<div class="card-block">
							<h5 class="card-title">
								Sports for yourself
							</h5>
							<p class="card-text">
							Martial arts are very important for yourself. Martial arts are not only for bad things, but done for useful things
							</p>
							<br>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg" />
						<div class="card-block">
							<h5 class="card-title">
								Find your talent
							</h5>
							<p class="card-text">
							Find your talent in sports. There are many sports that you can try, and good luck in that field
							</p>
							<br>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="https://www.layoutit.com/img/sports-q-c-600-200-1.jpg" />
						<div class="card-block">
							<h5 class="card-title">
								Test yourself
							</h5>
							<p class="card-text">
							try to train yourself by trying a lot of new things. You can turn sports into a fun new hobby
							</p>
                            <br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include '../layout/footer.php';
?>