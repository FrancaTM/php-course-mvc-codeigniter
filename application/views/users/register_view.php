<h2>Register</h2>

<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal');?>

<?php if ($this->session->flashdata('errors')): ?>
<?php echo $this->session->flashdata('errors'); ?>
<?php endif;?>

<?php echo form_open('users/register', $attributes); ?>

<div class"form_group">
<?php echo form_label('First Name'); ?>

<?php $data = array(
    'class' => 'form-control',
    'name' => 'first_name',
    'placeholder' => 'Enter first name',
);
?>

<?php echo form_input($data); ?>
</div>

<div class"form_group">
<?php echo form_label('Last Name'); ?>

<?php $data = array(
    'class' => 'form-control',
    'name' => 'last_name',
    'placeholder' => 'Enter last name',
);
?>

<?php echo form_input($data); ?>
</div>
<div class"form_group">
<?php echo form_label('Email'); ?>

<?php $data = array(
    'class' => 'form-control',
    'name' => 'email',
    'placeholder' => 'Enter email',
);
?>

<?php echo form_input($data); ?>
</div>

<div class"form_group">
<?php echo form_label('Username'); ?>

<?php $data = array(
    'class' => 'form-control',
    'name' => 'username',
    'placeholder' => 'Enter username',
);
?>

<?php echo form_input($data); ?>
</div>

<div class"form_group">
<?php echo form_label('Password'); ?>

<?php $data = array(
    'class' => 'form-control',
    'name' => 'password',
    'placeholder' => 'Enter password',
);
?>

<?php echo form_password($data); ?>
</div>

<div class"form_group">
<?php echo form_label('Confirm password'); ?>

<?php $data = array(
    'class' => 'form-control',
    'name' => 'confirm_password',
    'placeholder' => 'Confirm password',
);
?>

<?php echo form_password($data); ?>
</div>

<div class"form_group">

<?php $data = array(
    'class' => 'btn btn-primary',
    'name' => 'submit',
    'value' => 'Login',
);
?>

<?php echo form_submit($data); ?>
</div>

<?php echo form_close(); ?>