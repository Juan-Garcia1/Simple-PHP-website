<?php
include('Inc/data.php');
include('Inc/functions.php');

$pageTitle = "Personal Media Library";
$section = null;

 include('Inc/header.php');
  ?>
		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

								<ul class="items">
									<?php
									// DISPLAYS 4 RANDOM ITEMS FROM THE ARRAY
									$random = array_rand($catalog, 4);
									shuffle($random);
									// MATCHES THE KEY WITH ITS CORRESPONDING VALUE
										foreach ($random as $id) {
							         echo get_item_html($id, $catalog[$id]);
							      }
									?>
				</ul>

			</div>

		</div>
		<?php include('Inc/footer.php'); ?>
