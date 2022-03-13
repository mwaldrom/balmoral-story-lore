   <meta charset="utf-8" />
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
});
</script>