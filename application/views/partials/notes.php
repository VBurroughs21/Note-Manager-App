<html>
<head>
</head>
	<body>
		<div>
<?php
		foreach ($notes as $note) {
?>
			<div class='note'>
				<h3>
					<?= $note['title'] ?> 
					<a class="btn btn-default btn-danger btn-xs" 
						href="/notes/remove/<?=$note['id']?>"  >X</a>
				</h3>
				<p><?= $note['content'] ?></p>
				<a class="btn btn-default btn-warning btn-xs" 
						href="/notes/update/<?=$note['id']?>"  >Edit</a>
			</div>
<?php	}
?>
		</div>
	</body>
</html>