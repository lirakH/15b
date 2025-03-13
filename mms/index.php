<?php

	include_once('config.php');


	$sql = "SELECT * FROM movies";
	$selectMovies = $con->prepare($sql);
	$selectMovies->execute();
	$movies_data = $selectMovies->fetchAll();

	include_once 'header.php';
?>


<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      	<?php foreach ($movies_data as $movie) { ?>
      		
      		<div class="col">
	          <div class="card shadow-sm">
	           <img src="movie_images/<?php echo $movie['movie_image'];  ?>" height="400px">
	           <text x="50%" y="50%" fill="#eceeef" dy=".3em"><?php echo $movie['movie_name']; ?></text></svg>
	            <div class="card-body">
	              <p class="card-text"><?php echo $movie['movie_desc']; ?></p>
	              <div class="d-flex justify-content-between align-items-center">
	                <div class="btn-group">
	                  <a href="detailMovie.php?id=<?php echo $movie['id']; ?>"  class="btn btn-sm btn-outline-secondary" >View</a>
                  	<a href="editMovie.php?id=<?php echo $movie['id']; ?>"  class="btn btn-sm btn-outline-secondary">Edit</a>
	                </div>
	                <small class="text-body-secondary">Rating: <?php echo $movie['movie_rating']; ?></small>
	                <small class="text-body-secondary"><?php echo $movie['movie_quality']; ?></small>
	              </div>
	            </div>
	          </div>
	        </div>

      	<?php } ?>

      	</div>
	  </div>
	</div>

</main>


<?php
 include_once 'footer.php';
?>