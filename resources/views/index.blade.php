<!doctype html>

<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slick.css">
	<title>William Boyd</title>
</head>
<body>

	<!-- Navigation -->
	<nav class="site-navigation">
		<div class="site-navigation-inner site-container top-banner__text-up">
			<h2 class="top-banner__h2">Examen by Oscar Eduardo Benitez Martinez</h2>
			
			<script>
				function myFunction(x) {
					x.classList.toggle("change");
				}
			</script>

		</div>
	</nav>
	<!-- Navigation end -->

	<!-- Top banner -->
	<section class="fh5co-top-banner">
		<div class="top-banner__inner site-container">
			<div class="top-banner__image">
				<img src="./images/top-banner-author.jpg" alt="author image">
			</div>
			<div class="top-banner__text">
				<div class="top-banner__text-up">
					<span class="brand-span">"Night Flyer"</span>
					<h2 class="top-banner__h2">William Boyd</h2>
				</div>
				<div class="top-banner__text-down">
					<h2 class="top-banner__h2">The </h2>
					<h2 class="top-banner__h2">Night Flyer</h2>
					<span class="brand-span">with jobyna Ralston</span>
				</div>
				<p> una película de drama mudo estadounidense de 1928 dirigida por Walter Lang. 
					Existe una impresión de la película en el archivo cinematográfico de la Biblioteca del Congreso. 
					Partes de la película fueron filmadas en Thistle, Utah</p>
				
			</div>
		</div>
	</section>
	<!-- Top banner end -->

	<!-- About me -->
	<section class="fh5co-about-me">
		<div class="about-me-inner site-container">
			<article class="portfolio-wrapper">
				
				<div class="portfolio__bottom">
					<div class="portfolio__name">
						<span>A</span>
						<h2 class="universal-h2">stro-Zombies</h2>
					</div>
					<p>Película de terror de ciencia ficción estadounidense de 1968 escrita, dirigida y
						 producida por Ted V. Mikels y protagonizada por John Carradine , Wendell Corey y Tura Satana . </p>
				</div>
				<div class="portfolio__img">
					<img src="./images/about-me.jpg" class="about-me__profile" alt="about me profile picture">
				</div>
			</article>
			<div class="about-me__text">
				<div class="about-me-slider">
					<div class="about-me-single-slide">
						<h2 class="universal-h2 universal-h2-bckg">Terror</h2>
						&nbsp;
						&nbsp;
						<p><span>E</span>l cine de terror es un género cinematográfico que se caracteriza por su voluntad de provocar 
							en el espectador sensaciones de pavor, terror, miedo, disgusto, repugnancia, horror, incomodidad o preocupación.</p>
						
					</div>
				</div>
			</div>
		</div>
		<div class="about-me-bckg"></div>
	</section>
	<!-- About me end -->
	<section>
	<table class="tabla table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>PELICULA</th>
        </thead>
        <tbody>
            @foreach($pelicula as $pelicula)
            <tr>
                <td>{{$pelicula->id}}</td>
                <td>{{$pelicula->nombre_pelicula}}</td>
				<td>{{$pelicula->id_estudio}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
	</section>

	<!-- Books and CD -->
	<section class="fh5co-books">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">Las Mejores Peliculas</h2>
			<div class="books">
				<div class="single-book">
					<a >
						<img src="./images/books-1.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Charlie Chaplin</h4>
					<span class="single-book__price">Les Lumieres de la Ville</span>
					
				</div>
				<div class="single-book">
					<a>
						<img src="./images/books-2.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Marlyn Monroe</h4>
					<span class="single-book__price">Con Faldas Ya Lo Loco</span>
				</div>
				<div class="single-book">
					<a>
						<img src="./images/books-3.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Gregory Peck</h4>
					<span class="single-book__price">The Paradine Case</span>
				</div>
				<div class="single-book">
					<a>
						<img src="./images/books-4.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Bogart Bergman</h4>
					<span class="single-book__price">Casa Blanca</span>
				</div>
			</div>
		</div>
	</section>
	<!-- Books and CD end -->

	
	<!-- Counter -->

	<!-- Blog -->
	<section class="fh5co-blog">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">Lo Vintage</h2>
			<div class="blog-slider blog-inner">
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/blog1.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>Los Autos del Pasado</h4>
						<p>El automóvil es una pieza de tecnología que ha evolucionado bastante en el último par de décadas. 
							La popularización de los motores híbridos y eléctricos han formado parte sumamente importante en el 
							cambio que han presentado los autos últimamente, sin mencionar el impulso que se le está dando a la 
							tecnologías de conducción autónoma. </p>
					</div>
				</div>
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/blog2.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>Las Fotos del Pasado</h4>
						<p>Las fotografías llevan con nosotros más de un siglo, un tiempo en el que han ido evolucionando y cambiando. 
							Hoy en día las instantáneas antiguas nos muestran cómo se veía el mundo en el pasado y reflejan que lo que 
							antes eran escenas dignas de conservar ahora resultan un tanto siniestras y fuera de lugar. Esta es una 
							colección de imágenes de antaño que seguramente no te dejarán indiferente.</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Blog end -->

	<!-- Quotes -->
	<section class="fh5co-quotes">
		<div class="site-container">
			<div class="about-me-slider">
				<div>
					<h2 class="universal-h2 universal-h2-bckg">Consulta de Api</h2>
					<p>En este apartado podra consumirse la api solicitada para el proyecto</p>
					<img src="./images/quotes.svg" alt="quotes svg">
					<h4>Oscar Martinez</h4>
				</div>
			</div>
		</div>
	</section>
	<!-- Quotes end -->

	<!-- Social -->

	

	<!-- Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>