<nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">INVO</a>
        </div>
        <?php echo $this->elements->getMenu(); ?>
    </div>
</nav>

<div class="container">
    <?php echo $this->flash->output(); ?>
    <?php echo $this->getContent(); ?>
    <hr>
    <footer>
        <p>&copy; Company 2015</p>
    </footer>
</div>
