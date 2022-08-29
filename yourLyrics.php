<?php include("includes/header.php"); ?>
					
<h1 class="pageHeadingBig">Your Lyrics One Click Away</h1>

<div class="gridViewContainer">

	<?php

		//converts the query into array
		$albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");

		//outputs each album title
		while($row = mysqli_fetch_array($albumQuery)) {

			echo 	"<div class='gridViewItem'>

						<a href='album.php?id=" . $row['id'] ."'/>

							<img src='". $row['artworkPath'] . "'>

							<div class='gridViewInfo'>"
								. $row['title'] .
							"</div>

						</a>

					</div>";
		}
	?>

</div>

<?php include("includes/footer.php"); ?>