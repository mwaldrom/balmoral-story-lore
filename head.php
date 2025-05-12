<meta charset="utf-8" />
   
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
   <link rel="apple-touch-icon" href="apple-touch-icon.png" />

   	<!-- Always force latest IE rendering engine (even in intranet) -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
	<meta name="author" content="Mikayla & Rachael Waldrom" />
	<meta name="description" content="System Site for Rainbow Tabletop Roleplay System" />
	
	<!-- Who owns the content of this site? -->
	<meta name="Copyright" content="Creative Commons Attribution 4.0 International License" />
   
   <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import app.css-->
    <link type="text/css" rel="stylesheet" href="/css/app.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        <?php
        echo $title;
        ?>
    </title>
        <!--Import jQuery before materialize.js-->
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
 $(document).ready(function(){
    $(".dropdown-trigger").dropdown();
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
});
</script>