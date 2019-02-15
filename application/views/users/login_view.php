<h2>Login form</h2>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal');?>

<?php echo form_open('users/login_view', $attributes); ?>

<div class"form_group">
<?php echo form_label('Username'); ?>

<?php $data = array(
    'class' => 'form-control',
    'name' => 'username',
    'placeholder' => 'Enter username'
);
?>

<?php echo form_input($data); ?>
</div>

<?php echo form_close(); ?>