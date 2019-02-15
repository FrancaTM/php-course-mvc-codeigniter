<h2>Login form</h2>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal'); ?>

<?php echo form_open('users/login_view', $attributes); ?>
<?php echo form_close(); ?>