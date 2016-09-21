<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="data.php" method="POST" class="forma">
	<div class="text1"><span class="firstname">Имя: </span><input type="text" class="field1"></div>
	<div class="text2"><span class="email">Email: </span><input type="text" class="field2"></div>
	<input type="submit" class="button" value="Отправить">
</form>
<div class="result"></div>
<script src="js/jquery-2.1.4.js"></script>
<script>
	$(document).ready(function() {
		$('.button').click(function() {

		var dataform = {
				firstname : $('.field1').val(),
				email : $('.field2').val()
			};

		var data = JSON.stringify(dataform);
		
		$.ajax({
			url: 'data.php',
			type: 'post',
			data: {
				data: data
			},
			success: function(result) {
				$('.result').html(result);
			}
		});
		return false
		});
	})
</script>
</body>
</html>