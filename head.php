   <meta charset="utf-8" />
   
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
   <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

   	<!-- Always force latest IE rendering engine (even in intranet) -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
	<meta name="author" content="Mikayla Waldrom" />
	<meta name="description" content="Lore Site for Balmoral Family Adventure Novel Series" />
	
	<!-- Who owns the content of this site? -->
	<meta name="Copyright" content="Creative Commons Attribution 4.0 International License" />
   
   <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/>
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
 <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="/js/materialize.js"></script>
<script>
 $(document).ready(function(){
    $(".dropdown-trigger").dropdown();
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
});
</script>