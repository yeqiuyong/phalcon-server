
<?php echo $this->getContent(); ?>

<div class="jumbotron">
    <h1>Page not found</h1>
    <p>Sorry, you have accessed a page that does not exist or was moved</p>
    <p><?php echo $this->tag->linkTo(array('index', 'Home', 'class' => 'btn btn-primary')); ?></p>
</div>
