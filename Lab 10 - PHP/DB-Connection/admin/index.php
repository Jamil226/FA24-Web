<?php
	include("includes/database-helper.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>University Home</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
    <body>
        <header>
            <nav>

            </nav>
            <!-- Slider Start -->
            <section>
                <div id="slider" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <?php
							$Query = "SELECT * FROM university_slider WHERE status = 1 ORDER BY id DESC";
							// echo $Query; die;
							$Result = mysqli_query($conn, $Query);
							if($Result->num_rows > 0){
								while($row = mysqli_fetch_array($Result)){
						?>
						<div class="carousel-item <?php echo $row['class'];?>">
                            <img src="<?php echo $row['image'];?>" class="d-block w-100" alt="Image Not Found">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="heading"><?php echo $row['title'];?> </h5>
                                <p class="paragraph"><?php echo $row['details'];?></p>
                            </div>
                        </div>
						<?php
							}
								} 
								else {
									echo "Slide Coming Soon";
								}
							
						?>
                        
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#slider"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slider"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </section>
            <!-- Slider End -->
        </header>
        <main>
            <section>

            </section>

        </main>
        <footer>

        </footer>

        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>