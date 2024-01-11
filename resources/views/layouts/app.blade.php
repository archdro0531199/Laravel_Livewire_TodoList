<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fresca&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<style>
		@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap");

		
		.top-nav .btn {
			position: relative;
			top: 0;
			left: 0;
			width: 250px;
			height: 50px;
			margin: 0;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.top-nav .btn a {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			background: rgba(255, 255, 255, 0.05);
			box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
			border-bottom: 1px solid rgba(255, 255, 255, 0.1);
			border-top: 1px solid rgba(255, 255, 255, 0.1);
			border-radius: 30px;
			padding: 10px;
			letter-spacing: 1px;
			text-decoration: none;
			overflow: hidden;
			color: #fff;
			font-weight: 400px;
			z-index: 1;
			transition: 0.5s;
			backdrop-filter: blur(15px);
		}
		.top-nav .btn:hover a {
			letter-spacing: 3px;
		}
		.top-nav .btn a::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 50%;
			height: 100%;
			background: linear-gradient(to left, rgba(255, 255, 255, 0.15), transparent);
			transform: skewX(45deg) translate(0);
			transition: 0.5s;
			filter: blur(0px);
		}
		.top-nav .btn:hover a::before {
			transform: skewX(45deg) translate(200px);
		}
		.top-nav .btn::before {
			content: "";
			position: absolute;
			left: 50%;
			transform: translatex(-50%);
			bottom: -5px;
			width: 30px;
			height: 10px;
			background: #f00;
			border-radius: 10px;
			transition: 0.5s;
			transition-delay: 0.5;
		}
		.top-nav .btn:hover::before /*lightup button*/ {
			bottom: 0;
			height: 50%;
			width: 80%;
			border-radius: 30px;
		}

		.top-nav .btn::after {
			content: "";
			position: absolute;
			left: 50%;
			transform: translatex(-50%);
			top: -5px;
			width: 30px;
			height: 10px;
			background: #f00;
			border-radius: 10px;
			transition: 0.5s;
			transition-delay: 0.5;
		}
		.top-nav .btn:hover::after /*lightup button*/ {
			top: 0;
			height: 50%;
			width: 80%;
			border-radius: 30px;
		}
		.top-nav .btn:nth-child(1)::before, /*chnage 1*/
		.top-nav .btn:nth-child(1)::after {
			background: #ff1f71;
			box-shadow: 0 0 5px #ff1f71, 0 0 15px #ff1f71, 0 0 30px #ff1f71,
				0 0 60px #ff1f71;
		}
		.top-nav .btn:nth-child(2)::before, /* 2*/
		.top-nav .btn:nth-child(2)::after {
			background: #2db2ff;
			box-shadow: 0 0 5px #2db2ff, 0 0 15px #2db2ff, 0 0 30px #2db2ff,
				0 0 60px #2db2ff;
		}
		.top-nav .btn:nth-child(3)::before, /* 3*/
		.top-nav .btn:nth-child(3)::after {
			background: #1eff45;
			box-shadow: 0 0 5px #1eff45, 0 0 15px #1eff45, 0 0 30px #1eff45,
				0 0 60px #1eff45;
		}

		
		
		
		.topic {
			text-align: center;
			font-size: 80px;
			margin: 0; /* Remove margin for the <p> element */
		}

		/* Style for login and sign-up links */
		.top-links {
			text-align: right;
			margin-top: 30px; /* Adjust the top margin as needed */
			margin-right: 50px; /* Adjust the right margin as needed */
		}

		.top-links .btn {
			margin-left: 15px;
			color: white;
			text-decoration: none;
			font-size: 20px;
		}

		/* Style for login and sign-up links */
		.top-links .btn {
			margin-left: 15px;
			color: white;
			text-decoration: none;
			font-size: 20px;
		}
	</style>
    @livewireStyles
</head>
<body>
	
    @yield('content')
    
    @livewireScripts

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
