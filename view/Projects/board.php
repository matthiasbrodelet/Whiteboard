<div class="sidebar">
	<header><a href="index.php"><h1>Whiteboard</h1></a></header>
	<ul>
		<li><a href="index.php">Mijn projecten</a></li>

		<li><input type="search" name="q" class="search" placeholder="Projecten zoeken" autocomplete="off" value="<?php 
		if (!empty($_GET['q'])) {
		 	echo $_GET['q'];
		 } ?>"></li>
		<li><a class="txt" href="#">Tekst</a></li>
		<li><a class="image" href="#">Afbeelding</a></li>
		<li><a class="video" href="#">Video</a></li>

		<li><a href="index.php?page=notifications">Meldingen <span><?php echo $CountedNotification; ?></span></a></li>
		<li><a class="perstoev" href="#">Persoon toevoegen</a></li>

		


		<li><a class="logout" href="index.php?page=logout">Uitloggen</a></li>
	</ul>
</div>
<!--
<?php if (!empty($allUsers)) {
		
	
	 	foreach($allUsers as $user): ?>
			<p><?php echo $user["invited_user_name"]; ?></p>
<?php
		endforeach; 
	}
?>


<?php if (!empty($existingTekst)) {
		
	
	 	foreach($existingTekst as $existing): ?>

	 	<div class="postit dragdrop">
				<p class="board-tekst"><?php echo $existing["tekst"]; ?></p>
		</div>

<?php
		endforeach; 
	}
?>
<?php if (!empty($existingVideo)) {
		
	
	 	foreach($existingVideo as $video): ?>
		<div class="dragdrop">
				<video width="400" height="220" controls=true>
					<source src="uploads/<?php echo $video['video']; ?>" type="video/mp4">
				</video>
		</div>
<?php
		endforeach; 
	}
?>

<?php if (!empty($existingImg)) {
		
	
	 	foreach($existingImg as $img): ?>
			<div class="dragdrop">
				<img src="uploads/images/<?php echo $img['photo'] .".". $img['extension']; ?>" class="dragable" alt="">
			</div>
<?php
		endforeach; 
	}
?>
-->



<section  id="pop" class="hidden" class="uploadblock">
	<div id="uploadwrap" class="uploadwrap">
	<header>
		<h1>upload</h1>
	</header>

	<div class="close" title="close"></div>
	
		<form action="" method="post" enctype="multipart/form-data" id="tekstupload" class="hideform">
			<fieldset>
					
				<label for="name" id="name">Tekst</label><br/>
				<input type="text" required pattern="[A-Za-z].{4,}" class="name" name="nieuwtekst" placeholder="tekst" value=""/>
				<input type="submit" name="action" id="btnsubmit" value="nieuwtekst"/>

			</fieldset>
		</form>

		<form action="" method="post" enctype="multipart/form-data" id="imageupload" class="hideform">
			<fieldset>

				<label for="videofile">Image</label><br/>
				<input type="file" name="image" required class="addvideo">
				<input type="submit" name="action" id="btnsubmit" value="uploadimg"/>

			</fieldset>
		</form>

		<form action="" method="post" enctype="multipart/form-data" id="videoupload" class="hideform">
			<fieldset>

				<label for="name" id="name">Video</label><br/>
				<input type="text" required pattern="[A-Za-z].{4,}" class="name" name="name" placeholder="name" value=""/>
				<label for="videofile">Video (MP4, max 10MB)</label><br/>
				<input type="file" name="videofile" required class="addvideo">
				<input type="submit" name="action" id="btnsubmit" value="upload"/>

			</fieldset>
		</form>

		<form action="" method="post" enctype="multipart/form-data" id="persoonupload" class="hideform">
			<fieldset>

				<label for="newProjectNaam">Mensen toevoegen?</label>
				<input type="search" name="invited" class="search" placeholder="Mensen zoeken" autocomplete="off" value=""/>
				<input type="submit" name="action" id="btnsubmit" value="toevoegen"/>

			</fieldset>
		</form>

			
	</div>
</section>
