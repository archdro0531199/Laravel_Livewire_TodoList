@extends('layouts.app')

@section('content')
<style>
	
	@import url("https://fonts.googleapis.com/css?family=Fira+Sans");
	body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #222; /* Change this to your desired background color */
        font-family: 'Fira Sans', sans-serif; /* Import this font or choose another one */
    }
	
	.center-container {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
	}

	.form-structor {
		background-color: rgba(0, 0, 0, 0.5);
        border-radius: 15px;
        height: 550px;
        width: 350px;
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column; /* Center child elements vertically */
        justify-content: center; /* Center child elements horizontally */
        align-items: center;
        margin-top: auto;
        margin-bottom: auto;
		
		&::after {
			content: '';
			opacity: 0.5;
			position: absolute;
			top: 0;right:0;bottom:0;left:0;
			background-repeat: no-repeat;
			background-position: left bottom;
			background-size: 500px;
			background-color: rgba(0, 0, 0, 0);
		}
		
		.signup {
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			width: 65%;
			z-index: 5;
			-webkit-transition: all .3s ease;
			
			
			&.slide-up {
				top: 5%;
				-webkit-transform: translate(-50%, 0%);
				-webkit-transition: all .3s ease;
			}
			
			&.slide-up .form-holder,
			&.slide-up .submit-btn {
				opacity: 0;
				visibility: hidden;
			}
			
			&.slide-up .form-title {
				font-size: 1em;
				cursor: pointer;
			}
			
			&.slide-up .form-title span {
				margin-right: 5px;
				opacity: 1;
				visibility: visible;
				-webkit-transition: all .3s ease;
			}
			
			.form-title {
				color: #fff;
				font-size: 1.7em;
				text-align: center;
				
				span {
					color: rgba(0,0,0,0.4);
					opacity: 0;
					visibility: hidden;
					-webkit-transition: all .3s ease;
				}
			}
			
			.form-holder {
				border-radius: 15px;
				background-color: #fff;
				overflow: hidden;
				margin-top: 50px;
				opacity: 1;
				visibility: visible;
				-webkit-transition: all .3s ease;
				
				.input {
					border: 0;
					outline: none;
					box-shadow: none;
					display: block;
					height: 30px;
					line-height: 30px;
					padding: 8px 15px;
					border-bottom: 1px solid #eee;
					width: 100%;
					font-size: 12px;
					
					&:last-child {
						border-bottom: 0;
					}
					&::-webkit-input-placeholder {
						color: rgba(0,0,0,0.4);
					}
				}
			}
			
			.submit-btn {
				background-color: rgba(0,0,0,0.4);
				color: rgba(256,256,256,0.7);
				border:0;
				border-radius: 15px;
				display: block;
				margin: 15px auto; 
				padding: 15px 45px;
				width: 100%;
				font-size: 13px;
				font-weight: bold;
				cursor: pointer;
				opacity: 1;
				visibility: visible;
				-webkit-transition: all .3s ease;
				
				&:hover {
					transition: all .3s ease;
					background-color: rgba(0,0,0,0.8);
				}
			}
		}
		
		.login {
			position: absolute;
			top: 20%;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #fff;
			z-index: 5;
			-webkit-transition: all .3s ease;
			
			&::before {
				content: '';
				position: absolute;
				left: 50%;
				top: -20px;
				-webkit-transform: translate(-50%, 0);
				background-color: #fff;
				width: 200%;
				height: 250px;
				border-radius: 50%;
				z-index: 4;
				-webkit-transition: all .3s ease;
			}
			
			.center {
				position: absolute;
				top: calc(50% - 10%);
				left: 50%;
				-webkit-transform: translate(-50%, -50%);
				width: 65%;
				z-index: 5;
				-webkit-transition: all .3s ease;
				
				.form-title {
					color: #000;
					font-size: 1.7em;
					text-align: center;

					span {
						color: rgba(0,0,0,0.4);
						opacity: 0;
					visibility: hidden;
					  -webkit-transition: all .3s ease;
					}
				}

				.form-holder {
					border-radius: 15px;
					background-color: #fff;
					border: 1px solid #eee;
					overflow: hidden;
					margin-top: 50px;
					opacity: 1;
					visibility: visible;
					-webkit-transition: all .3s ease;

					.input {
						border: 0;
						outline: none;
						box-shadow: none;
						display: block;
						height: 30px;
						line-height: 30px;
						padding: 8px 15px;
						border-bottom: 1px solid #eee;
						width: 100%;
						font-size: 12px;

						&:last-child {
							border-bottom: 0;
						}
						&::-webkit-input-placeholder {
							color: rgba(0,0,0,0.4);
						}
					}
				}

				.submit-btn {
					background-color: #6B92A4;
					color: rgba(256,256,256,0.7);
					border:0;
					border-radius: 15px;
					display: block;
					margin: 15px auto; 
					padding: 15px 45px;
					width: 100%;
					font-size: 13px;
					font-weight: bold;
					cursor: pointer;
					opacity: 1;
					visibility: visible;
					-webkit-transition: all .3s ease;

					&:hover {
						transition: all .3s ease;
						background-color: rgba(0,0,0,0.8);
					}
				}
			}
			
			&.slide-up {
				top: 90%;
				-webkit-transition: all .3s ease;
			}
			
			&.slide-up .center {
				top: 10%;
				-webkit-transform: translate(-50%, 0%);
				-webkit-transition: all .3s ease;
			}
			
			&.slide-up .form-holder,
			&.slide-up .submit-btn {
				opacity: 0;
				visibility: hidden;
				-webkit-transition: all .3s ease;
			}
			
			&.slide-up .form-title {
				font-size: 1em;
				margin: 0;
				padding: 0;
				cursor: pointer;
				-webkit-transition: all .3s ease;
			}
			
			&.slide-up .form-title span {
				margin-right: 5px;
				opacity: 1;
				visibility: visible;
				-webkit-transition: all .3s ease;
			}
		}
	}
</style>
<main>
    <div class="container">
        @auth
		{{auth()->user()->name}}
		<div class="top-nav">
			<div class="top-links">
				<div class="btn"><a href="{{ route('logout.perform') }}">Logout</a></div>
			</div>
			<div class="top-title">
				<p class="topic">Todo List</p>
				<!-- New top-nav for login and sign-up links -->
				
			</div>
		</div>
		<div class="row">
            <div class="col-xl-3 order-xl-1 order-sm-1 col-md-12 order-md-2">
                @livewire('index-tasks')
            </div>
            <div class="order-xl-2 order-sm-2 col-xl-6 col-md-12 order-md-1">
                {{ $slot }}         

                @livewire('edit-task')
            </div>
            <div class="col-xl-3 order-xl-3 order-sm-3 col-md-12 order-md-3">
                @livewire('completed-tasks')
            </div>
        </div>
		@endauth
		@guest
        <div class="form-structor">
			<form method="post" action="{{ route('register.perform') }}">
				<div class="signup">
					<h2 class="form-title" id="signup">Sign up</h2>
					<div class="form-holder">
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />
						<input type="text" class="input" placeholder="Username" name="username" value="{{ old('username') }}" required="required"/>
						<input type="email" class="input" placeholder="Email" name="email" value="{{ old('email') }}" required="required"/>
						<input type="password" class="input" placeholder="Password" name="password" value="{{ old('password') }}" required="required"/>
						<input type="password" class="input" placeholder="Confirm Password" name="password_confirmation" value="{{ old('password_confirmation') }}" required="required"/>
					</div>
					<button class="submit-btn" type="submit">Sign up</button>
				</div>
			</form>
			<form method="post" action="{{ route('login.perform') }}">
				@csrf
				<div class="login slide-up">
					<div class="center">
						<h2 class="form-title" id="login">Log in</h2>
						<div class="form-holder">
							<input type="text" class="input" placeholder="Username" name="username" value="{{ old('username') }}" required="required"/>
							<input type="password" class="input" placeholder="Password" name="password" value="{{ old('password') }}" required="required"/>
						</div>
						<button class="submit-btn" type="submit">Log in</button>
					</div>
				</div>
			</form>
		</div>
		@endguest
    </div>
	<script>
		console.clear();

		const loginBtn = document.getElementById('login');
		const signupBtn = document.getElementById('signup');

		loginBtn.addEventListener('click', (e) => {
			let parent = e.target.parentNode.parentNode;
			Array.from(e.target.parentNode.parentNode.classList).find((element) => {
				if(element !== "slide-up") {
					parent.classList.add('slide-up')
				}else{
					signupBtn.parentNode.classList.add('slide-up')
					parent.classList.remove('slide-up')
				}
			});
		});

		signupBtn.addEventListener('click', (e) => {
			let parent = e.target.parentNode;
			Array.from(e.target.parentNode.classList).find((element) => {
				if(element !== "slide-up") {
					parent.classList.add('slide-up')
				}else{
					loginBtn.parentNode.parentNode.classList.add('slide-up')
					parent.classList.remove('slide-up')
				}
			});
		});
	</script>
</main>

@endsection
