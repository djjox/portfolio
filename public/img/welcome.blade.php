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
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a href="#" class="navbar-brand">
				<img src="{{ asset('img/logo.png') }}" alt="Logo" width="50" height="50">
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
				<a href="#" class="btn btn-primary">Contact</a>
			</div>
		</div>
	</nav>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
