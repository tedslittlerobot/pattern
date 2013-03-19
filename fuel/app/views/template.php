<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Architect Pattern</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo Uri::create('css/normalize.css'); ?>">
        <link rel="stylesheet" href="<?php echo Uri::create('css/main.css'); ?>">
        <script type="text/javascript" src="//use.typekit.net/mta1hta.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    </head>
    <body>
        <header class="header">
            <h1><a href="<?php echo Uri::create('/'); ?>">Architect Pattern</a></h1>
            <p>Process and best practice for making things awesome.</p>
            <!-- <h2>Verba volant, scripta manent</h2>
            <p>‘Spoken words fly away, written words stay’</p> -->
        </header>
<?php echo $body; ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo Uri::create("js/vendor/jquery-1.8.3.min.js"); ?>"><\/script>')</script>
        <script src="<?php echo Uri::create('js/plugins.js'); ?>"></script>
        <script src="<?php echo Uri::create('js/main.js'); ?>"></script>
    </body>
</html>
