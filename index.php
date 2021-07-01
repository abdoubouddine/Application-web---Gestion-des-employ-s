<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="mise_en_forme.css">
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<script src="plugin.js"></script>
</head>
<body>
	<div class="my-progress-bar"></div>
	<script type="text/javascript">
		$(document).ready(function(){
			var progress_circle = $(".my-progress-bar").gmpc({ 
					line_width:12,
					color: '#0ff',
					starting_position: 0,
					percent: 0,
					percentage: true,
				}).gmpc('animate', 80, 3000);
		})
	</script>

</body>
</html>
