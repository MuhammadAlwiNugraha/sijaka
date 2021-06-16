<div class="jumbotron jumbotron-fluid" style="
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
	url(<?= base_url('assets/img/bg2.jpg') ?>); 
	height: 350px;
	background-size: cover;
	background-attachment: fixed;
	background-position: -100px;">

	<div class="container">
		<h1 class="display-4 mt-5" style="color:white;">Selamat Datang di <strong>SiJaka</strong></h1>
	</div>

</div>


<div class="container" style="margin-bottom: 100px;">

	<h2 class="mt-5">Kenapa SiJaka</h2>
	<div class="row mt-5 text-center justify-content-center">
		<div class="card mr-5" style="border-radius: 15px;box-shadow: 13px 13px 30px 5px #eaeaea;">
			<div class="card-body p-5">
				<img src="<?= base_url("assets/img/kendaraan.png") ?>" width="100" class="pb-2">
				<h4>SiJaka Kendaraan</h4>
				<p>
					Lorem ipsum dolor sit amet
				</p>
				<button type="submit" name="submit" class="btn btn-primary btn-user btn-block" style=" background-color: #ffc05f;">Submit</button>
			</div>
		</div>
		<div class="card mr-5" style="border-radius: 15px;box-shadow: 13px 13px 30px 5px #eaeaea;">
			<div class="card-body p-5">
				<img src="<?= base_url("assets/img/property.png") ?>" width="100" class="pb-2">
				<h4>SiJaka Property</h4>
				<p>
					Lorem ipsum dolor sit amet
				</p>
				<button type="submit" name="submit" class="btn btn-primary btn-user btn-block" style=" background-color: #ffc05f;">Submit</button>
			</div>
		</div>
		<div class="card mr-5" style="border-radius: 15px;box-shadow: 13px 13px 30px 5px #eaeaea;">
			<div class="card-body p-5">
				<img src="<?= base_url("assets/img/dua.png") ?>" width="100" class="pb-2">
				<h4>SiJaka Duanana</h4>
				<p>
					Lorem ipsum dolor sit amet
				</p>
				<button type="submit" name="submit" class="btn btn-primary btn-user btn-block" style=" background-color: #ffc05f;">Submit</button>
			</div>
		</div>
	</div>

	<!-- <div class="row mt-5">

		<?php foreach ($kebersihan as $ldr) : ?>
			
			<?php if ($ldr["ulasan"] == "") : ?>
				
			<?php elseif ($ldr["ulasan"]) : ?>

				<h2 class="mt-5">Apa kata mereka?</h2>
				<div class="card mr-5" style="border-radius: 15px; box-shadow: 13px 13px 30px 5px #eee;">
					<div class="card-body p-5">
						<h4><?php echo $ldr["nama"] ?></h4>
						<p style="font-style: italic;">"<?php echo $ldr["ulasan"] ?>"</p>
					</div>
				</div>

			<?php endif; ?>

		<?php endforeach; ?>

	</div> -->

</div>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href=" <?= base_url("assets/") ?>css/chatbot.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
	<button class="open-button" onclick="openForm()">Chat</button>
	<div class="chat-popup" id="myForm">
		<form action="" class="form-container">
			<div class="wrapper">
				<div class="title">SiJaka Online Chatbot</div>
				<div class="form">
					<div class="bot-inbox inbox">
						<div class="msg-header">
							<p>Kumaha damang?</p>
						</div>
					</div>
				</div>
				<div class="typing-field">
					<div class="input-data">
						<input id="data" type="text" placeholder="Type something here.." required>
						<button id="send-btn">Send</button>
					</div>
				</div>
			</div>
			<button type="button" class="btn cancel" onclick="closeForm()">Close</button>

		</form>
	</div>

	<script>
		function openForm() {
			document.getElementById("myForm").style.display = "block";
		}

		function closeForm() {
			document.getElementById("myForm").style.display = "none";
		}

		$(document).ready(function() {
			$("#send-btn").on("click", function() {
				$value = $("#data").val();
				$msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
				$(".form").append($msg);
				$("#data").val('');

				// start ajax code
				$.ajax({
					url: '<?= base_url() ?>Home/message',
					type: 'POST',
					data: 'text=' + $value,
					success: function(result) {
						$replay = '<div class="bot-inbox inbox"><div class="msg-header"><p>' + result + '</p></div></div>';
						$(".form").append($replay);
						// when chat goes down the scroll bar automatically comes to the bottom
						$(".form").scrollTop($(".form")[0].scrollHeight);
					}
				});
			});
		});
	</script>

</body>

</html>