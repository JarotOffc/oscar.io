<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Portofolio Saya</title>
		<!-- <link rel="stylesheet" type="text/css" href="css/css.css"> -->
		
		<link rel="shortcut icon" href="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2023/02/10/3853279200.jpg">

		<style type="text/css">
			

			@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

			/* MODE DARK */
			:root {
				--bgcolor: #DEE0E1;
				--navcolor: #E9EAEA;
				--tcolor: black;
				--bos: #181818;
			}

			* {
				margin: 0;
				padding: 0;
			}

			body {
				font-family: 'poppins', sans-serif;
				box-sizing: border-box;
				background: var(--bgcolor);
				/*height: 1000vh;*/
				/*overflow-x: hidden;*/
			}

			.head {
				position: fixed;
				display: flex;
				width: 100%;
				padding: 2vh;
				background-color: #fff;
				box-shadow: 0vh 0vh 0.1vh black;
				justify-content: space-between;
				align-items: center;
				transition: 0.5s;
			}

			.ya {
				position: fixed;
				width: 100%;
				z-index: 1;
				padding: 20px;
				color: black;
				background-color: transparent;
				backdrop-filter: blur(10px);
				box-shadow: 0vh 0vh 0.1vh black;
				transition: 0.5s;
			}

			.head h2 {
				font-size: 4vh;
				z-index: 2;
			}

			.head nav ul {
				list-style: none;
				display: flex;
			}

			.head nav ul li {
				width: 140px;
			}

			.head nav ul li a {
				text-decoration: none;
				color: var(--tcolor);
				font-weight: bold;
				z-index: 2;
			}

			.head .mnu {
				display: none;
				z-index: 2;
				color: #fff;
			}

			.cntn {
				position: relative;
				top: 19vh;
				padding: 5vh;
				transition: 0.5s;
			}

			#home {
				background-image: linear-gradient(to right bottom, #0c97fa, #16e1f5);
				color: #181818;
				/*margin-left: 5vh;*/
				border-radius: 2vh 2vh 0vh 0vh;
				width: 50vh;
				display: block;
				margin: auto;
				text-align: center;
				transition: 0.5s;
			}

			#home:before {
				content: "";
				position: absolute;
				width: 72vh;
				top: 100%;
				left: -10%;
				height: 0.1vh;
				background-color: #181818;
			} 

			#home h1 {
				font-size: 5vh;
			}

			.cntn .btn button {
				padding: 2vh;
				border: none;
				background-color: #181818;
				color: #fff;
				border-radius: 10vh;
				font-weight: bold;
				cursor: pointer;
				margin-top: 2vh;
			}


			#about img {
				position: relative;
				bottom: 2vh;
				display: block;
				margin: auto;
				border-radius: 1vh;
			}

			#about h1 {
				text-align: center;
			}

			#about .sosmed ul {
				list-style: none;
				display: flex;
			}

			#about .sosmed ul li {
				margin: 5vh;
				background-color: #181818;
				width: 40px;
				height: 40px;
				border-radius: 50%;
				opacity: 0.5;
			}

			#about .sosmed ul li:hover {
				opacity: 1;
			}

			#about .sosmed ul li a {
				position: relative;
				right: 0.8vh;
				text-decoration: none;
				color: #fff;
				display: flex;
				width: 50px;
				height: 40px;
				justify-content: center;
				align-items: center;	
			}

			#blog {
				background-color: #fff;
				padding-bottom: 10vh;
				transition: 0.5s;
			}

			#blog h1, h3{
				text-align: center;
			}
			#blog h3 {
				opacity: 0.5;
			}

			#blog img {
				border-radius: 1vh;
				box-shadow: 1vh 0.5vh 1vh black;
			}

			#blog a {
				position: relative;
				top: 2vh;
				color: #fff;
				padding: 1vh;
				border-radius: 1vh;
				background-image: linear-gradient(to right bottom, #2b5876, #4e4376);
				text-decoration: none;
			}

			#blog h4 {
				font-size: 3vh;
			} 

			#contact {
				background-color: #181818;
				color: #fff;
				text-align: center;
				transition: 0.5s;
			}

			#contact h1 {
				text-align: center;
			}

			#contact p {

				opacity: 0.5;
			}

			#contact .input {
				text-align: center;
				font-size: 2vh;
			}

			#contact .input input{
				outline: none;
				background-color: #181818;
				color: #fff;
				border: none;
				border-bottom: 1px solid #fff;
				width: 350px;
				padding: 2vh;
				margin: 1vh;
			}

			#contact .input textarea {
				color: #fff;
				outline: none;
				background-color: #181818;
				border: none;
				border-bottom: 1px solid #fff;
			}

			#contact .input .btn {
				width: 100%;
				border: none;
				outline: none;
				background-color: #181818;
				color: #fff;
				box-shadow: 0vh 0vh 1vh black;
				padding: 2vh;
				border-radius: 1vh;
			}

			#contact .input .btn:hover {
				background-color: black;
			}

			#foot {
				background-color: black;
				color: #fff;
			}

			#foot p {
				opacity: 0.5;
			}

			#foot .mnu ul li {
				list-style: none;
				color: #fff;
			}

			#foot .mnu ul li a {
				color: #fff;
				text-decoration: none;
				opacity: 0.5;
			} 

			#foot .mnu ul li a:hover {
				text-decoration: underline;
			}

			#foot .akhir {
				width: 100%;
			}

			#foot .akhir ul {
				list-style: none;
				display: flex;
				justify-content: center;
			}

			#foot .akhir ul li {
				margin: 2vh;
			}

			#foot .akhir ul li a {
				color: #fff;
				text-decoration: none;
				opacity: 0.5;
			}

			#foot .love {
				color: hotpink;
			}

			#foot .nama {
				color: cyan;
			}

			.navbar {
				position: fixed;
				font-size: 3vh;
				font-weight: bold;
				right: -200px;
				top: 70px;
				line-height: 10vh;
				padding: 5vh;
				width: 100px;
				height: auto;
				background-color: #fff;
				z-index: 999;
				transition: 0.5s;
				display: none;
			}

			.slide {
				position: fixed;
				right: 0;
				transition: 0.5s;
			}

			.navbar ul li {
				list-style: none;
			}

			.navbar ul li a {
				text-decoration: none;
				color: black;
			}

			.navbar ul li a:hover {
				text-decoration: underline;
			}

			@media only screen and (max-width: 768px) {
				.navbar {
					display: block;
				}
				
				.head {
					padding: 15px;	
				}
				.head nav {
					display: none;
				}
				.head .mnu {
					position: relative;
					right: 50px;
					font-size: 4vh;
					cursor: pointer;
					display: block;
					color: var(--tcolor);
				}
			}
		</style>
	</head>
	<body>
		
		<!-- HEAD AWAL -->
		<header class="head">
			<h2>ROMZZZ</h2>
			<nav>
				<ul>
					<li class="list">
						<a href="#home">Home</a>
					</li>
					<li class="list">
						<a href="#about">About</a>
					</li>
					<li class="list">
						<a href="#blog">Blog</a>
					</li>
					<li class="list">
						<a href="#contact">Contact</a>
					</li>
				</ul>
			</nav>
			<span class="mnu">
				<i class="fa fa-bars" id="btn"></i>
			</span>
		</header>
		<!-- HEAD AKHIR -->

		<nav class="navbar">
			<ul>
				<li class="list">
					<a href="#home">Home</a>
				</li>
				<li class="list">
					<a href="#about">About</a>
				</li>
				<li class="list">
					<a href="#blog">Blog</a>
				</li>
				<li class="list">
					<a href="#contact">Contact</a>
				</li>
			</ul>
		</nav>

		<!-- SECTION HOME START -->
		<section class="cntn" id="home">
			<h1>ROMLI SUHANDA</h1>
			<h3>SMPN 03 CIHAMPELAS</h3>
			<div class="btn">
				<button>
					Hubungi Saya!
				</button>
			</div>
		</section>
		<!-- SECTION HOME END -->

		<section class="cntn" id="about">
			<img src="salkn.jpeg" alt="ROMLI SUHANDA" height="300">
			<h1>ABOUT ME</h1>
			<br>
			<p>Hallo Semua, saya Romli Suhanda biasa dipanggil omi, umur saya kini 17thn, Hobi saya adalah ngoding dan membuat website sederhana, cita-cita saya yg ingin menjadi proggramer, saya belajar bahasa proggram selama lebih dari 1thn, seperti HTML, CSS, JAVASCRIPT, dan PHP, sekian terima kasih masbro.</p>
			<br>
			<h2>Mari Berteman</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			</p>
			<div class="sosmed">
				<ul>
					<li class="fb">
						<a href="#">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li class="wa">
						<a href="#">
							<i class="fa fa-whatsapp"></i>
						</a>
					</li>
					<li class="ig">
						<a href="#">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li class="gh">
						<a href="#">
							<i class="fa fa-github"></i>
						</a>
					</li>
				</ul>
			</div>
		</section>

		<section class="cntn" id="blog">
			<h1>BLOG</h1>
			<br>
			<h3>Tulisan Terkini</h3>
			<br>
			<img src="https://source.unsplash.com/360x200?programming" alt="Programming" width="100%"/>
			<div class="bwh">
				<h4>
					Belajar Bahasa Proggram Mulai Dari Mana? 
				</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				<a href="#">Baca Selengkapnya..</a>
			</div>
			<br>
			<br>
			<img src="https://source.unsplash.com/360x200?mechanical+keyboard" alt="Mechanical Keyboard" width="100%" />
			<div class="bwh">
				<h4>
					Keyboard Mechanical
				</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				<a href="#">Baca Selengkapnya..</a>
			</div>
			<br>
			<br>
			<img src="https://source.unsplash.com/360x200?coffee" alt="MASBRO" width="100%">
			<div class="bwh">
				<h4>
					Menikmati Secangkir Kopi
				</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				<a href="#">Baca Selengkapnya..</a>
			</div>
		</section>

		<section class="cntn" id="contact">
			<h1>CONTACT</h1>
			<br>
			<h4>Hubungi Saya</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut</p>
			<br>
			<div class="input">
				<input type="text" placeholder="Masukan nama.."><br>
				<input type="text" placeholder="Masukan alamat..">
				<br>
				<br>
				<textarea cols="50" rows="10" placeholder="Masukan Pesan Anda.."></textarea>
				<br>
				<br>
				<button class="btn">Kirim Pesan</button>
			</div>
		</section>

		<section class="cntn" id="foot">
			<h1>ROMZZZ NGABB!</h1>
			<p>jln Cipatik - Soreang <br> Bandung Barat <br> Jawa Barat Indonesia</p>
			<br>
			<div class="mnu">
				<h2>Tautann</h2>
				<ul>
					<li>
						<a href="#home">Home</a>
					</li>
					<li>
						<a href="#about">About</a>
					</li>
					<li>
						<a href="#blog">Blog</a>
					</li>
					<li>
						<a href="#contact">Contact</a>
					</li>
				</ul>
			</div>
			<br>
			<p align="center">
				SMPN 03 CIHAMPELAS
			</p>
			<br>
			<hr>
			<br>
			<div class="akhir">
				<ul>
					<li>
						<a href="#">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-whatsapp"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-github"></i>
						</a>
					</li>
				</ul>
			</div>
			<p align="center">Dibuat dengan <span class="love">❤️</span> oleh <span class="nama">Romli Suhanda</span></p>
		</section>

		<script type="text/javascript">
			window.onscroll = function () {
				const head = document.querySelector('header');
				const fixed = head.offsetTop;
				if(window.pageYOffset > fixed) {
					head.classList.add('ya');
				} else {
					head.classList.remove('ya');
				}
			}

			const mnu = document.querySelector('#btn');
			const nav = document.querySelector('.navbar');

			mnu.addEventListener('click', ()=> {
				nav.classList.toggle('slide');
			})
		</script>

		<script src="https://kit.fontawesome.com/35d4eea580.js" crossorigin="anonymous"></script>
	</body>
	</html>	