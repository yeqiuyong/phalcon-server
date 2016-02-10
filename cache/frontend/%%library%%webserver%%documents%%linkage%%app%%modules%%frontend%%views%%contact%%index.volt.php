
<?php echo $this->getContent(); ?>

<div class="page-header">
    <h2>Contact Us</h2>
</div>

<p>Send us a message and let us know how we can help. Please be as descriptive as possible as it will help us serve you better.</p>

<?php echo $this->tag->form(array('contact/send', 'role' => 'form')); ?>
    <fieldset>
        <div class="form-group">
            <?php echo $form->label('name'); ?>
            <?php echo $form->render('name', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $form->label('email'); ?>
            <?php echo $form->render('email', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $form->label('comments'); ?>
            <?php echo $form->render('comments', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->tag->submitButton(array('Send', 'class' => 'btn btn-primary btn-large')); ?>
        </div>
    </fieldset>
</form>
