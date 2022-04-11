<?php include"Dynamic/messages_actions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<!--meta-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!--style-->
	<link rel="stylesheet" href="Admin_Design/admin_style.css">
    <link rel="stylesheet" href="Admin_Design/message_style.css">
    <link rel="stylesheet" href="Admin_Design/Global_Design/form_style.css">
	<link rel="stylesheet" href="Responsive/message_style_res.css">
	<link rel="stylesheet" href="Responsive/admin_style_res.css">

	<!--fonts-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet"> 

	<!--font awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

	<!-- script -->
	<script src="Script/triggerClick.js"></script>
    <script src="Script/imageViewer.js"></script>


	<title>Admin</title>

</head>

<body>



	<div class="admin">


		<div class="admin_header"style="background-color:#1d878f">
			

			<p class="title">Admin [Teachers]</p>

            <a href="1_admin.php" class="go_back"><i class="fas fa-sign-out-alt"></i></a>


		</div>

		

		<div class="admin_message_container">

		<div class="message_template">	

		<?php

			if(isset($_GET['pd'])){

				$id = $_GET['pd'];

					//Data read.
					$sql = "SELECT * FROM messages_table WHERE message_id = '$id';";

					$result = mysqli_query($connection, $sql);

					while($row = mysqli_fetch_assoc($result)) {
						
						$name = $row['messenger_name'];
						$position = $row['messenger_position'];
						$message = $row['msg'];
						$pic = $row['messenger_picture'];

		?>


			<form action="Dynamic/messages_actions.php" method="post" class="form message_form" enctype="multipart/form-data">

			<div>

			<img src="Media/Message_photos/<?php echo $pic; ?>" alt="Upload Photo" class="placeholder_image" onclick="triggerClick()">
			<input class="input img_uploader" type="file" name="message_photo" onchange="displayImage(this)" id="place_holder">

			</div>

			<div>

			<label class="label" for="name">Full Name</label><br>
			<input class="input" type="text" name="name" value="<?php echo $name; ?>" required>

			</div>

			<div>

			<label class="label" for="position">Position</label><br>
			<input class="input" type="text" name="position" value="<?php echo $position; ?>" required>

			</div>

			<div>

			<label class="label" for="message">Message</label><br>
			<textarea class="input" name="message" required><?php echo $message; ?></textarea>

			</div>

			<div>
			
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="old_pic" value="<?php echo $pic; ?>">
			<button class="form_btn" type="submit" name="edit_message">Update</button>


			</div>

			</form>

		<?php

					}
			}else{

		?>

			<form action="Dynamic/messages_actions.php" method="post" class="form message_form" enctype="multipart/form-data">

				<div>

				<img src="Media/System/Profile_avatar_placeholder_large.png" alt="Upload Photo" class="placeholder_image" onclick="triggerClick()">
				<input class="input img_uploader" type="file" name="message_photo" onchange="displayImage(this)" id="place_holder">

				</div>

				<div>

				<label class="label" for="name">Full Name</label><br>
				<input class="input" type="text" name="name" required>

				</div>

				<div>

				<label class="label" for="position">Position</label><br>
				<input class="input" type="text" name="position" required>

				</div>

				<div>

				<label class="label" for="message">Message</label><br>
				<textarea class="input" name="message" required></textarea>

				</div>

				<div>
					
				<button class="form_btn" type="submit" name="publish_message">Publish</button>


				</div>

			</form>

			<?php } ?>

		</div>



			<?php showMessages(); ?> 



		</div>




	</div>

 
<!-- script 
<script src="Script/triggerClick.js"></script>
<script src="Script/imageViewer.js"></script>-->

</body>
</html>