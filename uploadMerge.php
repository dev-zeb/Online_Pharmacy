<!DOCTYPE html>
<html>
	<head>
		<title>Upload Prescription</title>
		<link rel="stylesheet" href="bootstrap.fd.css">
	</head>
   
    <body>
		<?php include 'navbar.php'; ?>
        <?php include 'cartView.php'; ?>
		<!-- Breadcrumb Code Begins Here-->
			<div class='container-fluid' style='margin-top: 1rem;'>
				<nav aria-label='breadcrumb'>
					<ol class='breadcrumb'>
						<li class='breadcrumb-item' aria-current='page'><a href='index.php' style='text-decoration: none;'> Home </a></li>
						<li class='breadcrumb-item active' aria-current='page'>Uplaod Prescription</li>
					</ol>
				</nav>
			</div>
		<!-- Breadcrumb Code Ends Here-->

		<div style='text-align:center;'>
			<br>
			<h1 style='color: black;'>Uplaod your prescription</h1>
			<h3 style='color: black;'>You can choose multiple files if needed</h3>
			<br>
			<form id="form" onsubmit="return submitForm();">
				<button type="button" onclick="selectFiles();" class='btn btn-primary rounded-pill'>Select files</button>
				<br>
				<br>
				<div id="selected-images"></div>
				<input type="submit" class='btn btn-success rounded-pill' value="Confirm" >
			</form>

			<script>
				var selectedImages = [];

				function selectFiles() {
					$.FileDialog({
						"accept": "image/*"
					}).on("files.bs.filedialog", function (event) {
						var html = "";
						for (var a = 0; a < event.files.length; a++) {
							selectedImages.push(event.files[a]);
							html += "<img src='" + event.files[a].content + "' style='width: 60%; height: auto; margin: 10px;'>";
						}
						document.getElementById("selected-images").innerHTML = html;
					});
				}

				function submitForm() {
					var form = document.getElementById("form");
					var formData = new FormData(form);

					for (var a = 0; a < selectedImages.length; a++) {
						formData.append("images[]", selectedImages[a]);
					}

					var ajax = new XMLHttpRequest();
					ajax.open("POST", "Http.php", true);
					ajax.send(formData);
					ajax.onreadystatechange = function () {
						if (this.readyState == 4 && this.status == 200) {
							console.log(this.responseText);
							alert("Successful"); 
							location.assign('show_up_pres.php');
						}
					};
					return false;
				}
			</script>
			<script src="bootstrap.fd.js"></script>
		</div>
	</body>
</html> 




