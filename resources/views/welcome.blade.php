<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Joep Verhofstad</title>
</head>
<body>
	<div class="loader" id="loader"></div>

	<div id="content">
		<nav class="navbar navbar-expand-lg">
			<div class="container-fluid">
				<a href="#" class="navbar-brand">
					<canvas id="navbar-canvas" width="50" height="50"></canvas>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a href="#" class="nav-link active">Home</a>
						</li>
						<li class="nav-item mt-2">
							<img src="{{ asset('img/dots.png') }}" alt="" width="20" height="20">
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">About Me</a>
						</li>
						<li class="nav-item mt-2">
							<img src="{{ asset('img/dots.png') }}" alt="" width="20" height="20">
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Services</a>
						</li>
						<li class="nav-item mt-2">
							<img src="{{ asset('img/dots.png') }}" alt="" width="20" height="20">
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Projects</a>
						</li>
					</ul>
					<a href="#" id="contact-btn" class="btn btn-light rounded-0">Contact</a>
				</div>
			</div>
		</nav>

		<section class="hero-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 hero-content mt-5">
						<h1>Hi there.</h1>
						<p id="typingEffect" class="typing-effect">
							I'm a <span></span>
						</p>
						<a href="#" class="btn btn-outline-light rounded-0" style="width: 50%">Get in touch</a>
					</div>
					<div class="col-lg-6 hero-image">
						<img src="{{ asset('img/boy2.png') }}" alt="">
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- cdn links -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r152/three.min.js"></script>

	<!-- js -->
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/preloader.js') }}"></script>
	<script src="{{ asset('js/typing.js') }}"></script>
	<script src="{{ asset('js/animations.js') }}"></script>
</body>
</html>
