<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- Bootstrap -->
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script type="text/javascript">
    	$( document ).ready(function() {
    	   $.get('/notes/index_html', function(res) {
                $('#notes').html(res);
           });
           $('#note').click(function() {
                alert("clicked");
           });
           
		});
        </script>
        <title>Note Manager</title>
    </head>
    <body class="col-md-12" id="container">
    	<h1>My Notes:</h1>
    	<div id="notes">
    	</div>
    	<div>
    		<form action="/notes/create" method="post">
            	<textarea name="title" id="title" placeholder="Title"></textarea>
                <textarea name="content" id="content" placeholder="Note"></textarea>
                <input type="submit" class="btn btn-default btn-info" value="Add Note">
    		</form>
    	</div>
    </body>
</html>