<?	
	include_once "../inc/config.php";
	include_once "../inc/main.php";

	// $successLogin = false;

	// if (isset($_GET['token'])) {
	// 	$checkToken = sendRequest("https://api.findcreek.com/id/auth.checkToken/?token=" . urlencode($_GET['token']));

	// 	if ($checkToken['response'] == 1) {
	// 		setcookie('token', $_GET['token'], time() + 3600 * 24 * 45, '/');
	// 		$successLogin = true;
	// 	}
	// 	else {
	// 		echo "An error has occurred" . json_encode($checkToken) . "https://api.findcreek.com/id/auth.checkToken/?token=" . urlencode($_GET['token']);
	// 	}
	// } else {
	// 	echo "An error has occurred";
	// }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Авторизация</title>
</head>
<body>
	<?
		include_once "../inc/head.php";
	?>

	<script type="text/javascript">
		var token = "<?= $_GET['token'] ?>";

		$.ajax({
			url: "<?= $apiUrl ?>/id/auth.checkToken/",
			method: "GET",
			data: {
				token: token
			},
			success: (result) => {
				console.log('auth.checkToken', result);

				if (result['response'] == 1) {
					$.cookie('token', token, {expires: 45, path: '/'});
					location.href = "<?= $link ?>";

				} else {
					$('body').append("An error has occurred")
				}
			},
			error: (result) => {
				$('body').append("An error has occurred.")
			},
		})

	</script>

</body>
</html>