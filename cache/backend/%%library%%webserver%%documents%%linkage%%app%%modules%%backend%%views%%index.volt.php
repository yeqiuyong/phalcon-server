<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> - My Webpage</title>
        <?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">


        <?php echo $this->tag->stylesheetLink('css/bootstrap-cerulean.min.css'); ?>

        <?php echo $this->tag->stylesheetLink('css/charisma-app.css'); ?>
        <?php echo $this->tag->stylesheetLink('bower_components/fullcalendar/dist/fullcalendar.css'); ?>
        <?php echo $this->tag->stylesheetLink('bower_components/fullcalendar/dist/fullcalendar.print.css'); ?>
        <?php echo $this->tag->stylesheetLink('bower_components/chosen/chosen.min.css'); ?>
        <?php echo $this->tag->stylesheetLink('bower_components/colorbox/example3/colorbox.css'); ?>
        <?php echo $this->tag->stylesheetLink('bower_components/responsive-tables/responsive-tables.css'); ?>
        <?php echo $this->tag->stylesheetLink('bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/jquery.noty.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/noty_theme_default.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/elfinder.min.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/elfinder.theme.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/jquery.iphone.toggle.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/uploadify.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/animate.min.css'); ?>

        <?php echo $this->tag->javascriptInclude('js/jquery.min.js'); ?>

    </head>
    <body>
        <?php echo $this->getContent(); ?>

        <?php echo $this->tag->javascriptInclude('js/utils.js'); ?>

        <?php echo $this->tag->javascriptInclude('bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>
        <?php echo $this->tag->javascriptInclude('bower_components/moment/min/moment.min.js'); ?>
        <?php echo $this->tag->javascriptInclude('bower_components/fullcalendar/dist/fullcalendar.min.js'); ?>
        <?php echo $this->tag->javascriptInclude('bower_components/chosen/chosen.jquery.min.js'); ?>
        <?php echo $this->tag->javascriptInclude('bower_components/colorbox/jquery.colorbox-min.js'); ?>
        <?php echo $this->tag->javascriptInclude('bower_components/responsive-tables/responsive-tables.js'); ?>
        <?php echo $this->tag->javascriptInclude('bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js'); ?>

        <?php echo $this->tag->javascriptInclude('js/jquery.raty.min.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jquery.iphone.toggle.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jquery.autogrow-textarea.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jquery.uploadify-3.1.min.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jquery.history.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jquery.noty.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jquery.dataTables.min.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jquery.cookie.js'); ?>

        <?php echo $this->tag->javascriptInclude('js/charisma.js'); ?>


    </body>
</html>