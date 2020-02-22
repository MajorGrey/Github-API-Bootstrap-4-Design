<!DOCTYPE html>
<html>
<head>
	<title>Github API</title>
	<!-- <link rel="stylesheet" type="text/csse.css"> -->
    <meta charset="utf-8">
    <meta name="description" content="Chuks Okwuenu is a professional with a broad set of skills in software, web development, speaking among many other God-given talents. Equipped with so ...">
    <meta name="keywords" content=" Personal, Creative, chuksokwuenu, Html Template, PHP, JavaScript, Git, API">
    <meta name="author" content="Chuks Okwuenu | Web Developer">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Chuks Okwuenu | Web Developer" />
    <meta property="og:description" content="Chuks Okwuenu is a professional with a broad set of skills in software, web development, speaking among many other God-given talents. Equipped with so ..." />
    <meta property="og:url" content="https://chuksokwuenu.com/" />
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
    <div class="row  mx-auto p-4" style="width: 500px;">
        <h1><strong>Github API Widget</strong></h1>
    </div>
    <div class="row" id="loops">
        <!-- content inside here -->
    </div>
    <div>
        <center><p class="text-muted">&copy <?php echo date("Y"); ?> <a class="" href="https://chuksokwuenu.com" target="_black">chuks okwuenu</a></p></center>
    </div>
</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$.getJSON('https://api.github.com/users/majorgrey/repos', function(data) {
			console.log(data);
   			var x = [];
		    $.each(data, function(index) {
                var str = data[index].description;
                const title = data[index].name;
                let newtitle = title.substr(0, 28);
                var res = str.substr(0, 50);
		        x +=  "<div class='col-sm-4 py-2'><div class='card text-white bg-dark'><div class='card-body'><a style='text-decoration: none;color:white;' href='"+data[index].html_url+"' target='_blank'><h6 class='card-title' style='text-transform: uppercase;'><b>"+newtitle+"..</b></h6></a><p class='card-text'>"+res+"...</p><a href='"+data[index].html_url+"/archive/"+data[index].default_branch+".zip' class='btn btn-outline-light float-left'>Download</a><a href='#' class='btn btn-outline-light float-right'>"+data[index].language+"</a></div></div></div>";
		    });
		    $('#loops').append(x);
		});
	})
</script>