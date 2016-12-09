 <!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<title>Restaurant Advisor</title>
		<meta charset="UTF-8">
		<meta name="author" name="Diogo Cruz, Luís Barbosa, Rui Araújo" />
		<meta name="description" content="Restaurants: Yelp like" />
		<meta name="keywords" content="FEUP, LTW, Restaurants, Food" />
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="../javascript/view_restaurant.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/restaurant.css"/>
	</head>

	<body>
		<header class="banner">
			<h1>Restaurant Advisor</h1>
			<h1>Nome_restaurante</h1>
			<h2>Avaliação: "getAvaliation(Nome_restaurante)" <div class="total_votes">vote data</div></h2>
			<h4>Categorias: "getCategory(Nome_restaurante)"</h4>
		</header>

		<nav>
			<ul>
				<li><a href="index.html">Homepage</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>

		<section name="new_comment">
			Rate:&ensp;
			<section id="rating" class="rating"> 
				<div class="star_1 ratings_stars"></div>
				<div class="star_2 ratings_stars"></div>
				<div class="star_3 ratings_stars"></div>
				<div class="star_4 ratings_stars"></div>
				<div class="star_5 ratings_stars"></div>
			</section><br />
			<form class="comment" method='post'>
					Comment:<textarea id='comment'></textarea><br />
					<input type='hidden' id='restaurantId' value='<? echo $_GET["id"]; ?>' />
					<input type='submit' value='Submit' />  
			</form>
		</section>
		
		<section name="comments">
			<article>
				<header>Comentário de getUser()</header>
				<h2>Melhor restaurante de sempre!</h2>
				<footer>getPontuacao() 10</footer>			
			</article>

			<article>
				<header>Comentário de getUser()</header>
				<h2>Nao gostei!</h2>
				<footer>getPontuacao() 2</footer>			
			</article>
			
			<article>
				<header>Comentário de getUser()</header>
				<h2>Incrivel!</h2>
				<footer>getPontuacao() 8</footer>			
			</article>
			
			<article>
				<header>Comentário de getUser()</header>
				<h2>uau</h2>
				<footer>getPontuacao() 6</footer>			
			</article>
		</section>

		<footer>
			<!--<p>Made by: document.getElementsByTagName("author")</p>-->
			<p>Made by: Diogo Cruz, Luís Barbosa, Rui Araújo</p>
		</footer>

	</body>
</html>