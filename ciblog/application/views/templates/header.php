<html>
<head>

    <title>ciBlog</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/yeti/bootstrap.min.css"


</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
        </div>
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url(); ?>home">home</a>
            <a class="navbar-brand" href="<?php echo base_url(); ?>categories">categories</a>
        </div>
        <a class="navbar-brand"  href="<?php echo base_url(); ?>posts">blog</a>


        <?php if(!$this->session->userdata('logged_in')) : ?>
            <a class="navbar-brand"  href="<?php echo base_url(); ?>users/register">Register</a>
            <a class="navbar-brand"  href="<?php echo base_url(); ?>users/login">Login</a>
        <?php endif;?>

        <?php if($this->session->userdata('logged_in')) : ?>
        <a class="navbar-brand"  href="<?php echo base_url(); ?>posts/create">Create</a>
        <a class="navbar-brand"  href="<?php echo base_url(); ?>categories/create">CreateCategory</a>
            <a class="navbar-brand"  href="<?php echo base_url(); ?>users/profile">Profile</a>
        <a class="navbar-brand"  href="<?php echo base_url(); ?>users/logout">Logout</a>
        <?php endif;?>
    </div>

</nav>


<div class="container">

<?php if($this->session->flashdata('user_register')):?>
    <?php echo '<p class="alert alert-success">'.$this->
        session->flashdata('user_register').'</p>';?>
    <?php endif;?>

<?php if($this->session->flashdata('post_updated')):?>
    <?php echo '<p class="alert alert-success">'.$this->
        session->flashdata('post_updated').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('category_created')):?>
    <?php echo '<p class="alert alert-success">'.$this->
        session->flashdata('category_created').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('post_created')):?>
    <?php echo '<p class="alert alert-success">'.$this->
        session->flashdata('post_created').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('post_deleted')):?>
<?php echo '<p class="alert alert-success">'.$this->
    session->flashdata('post_deleted').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('login_failed')):?>
    <?php echo '<p class="alert alert-danger">'.$this->
        session->flashdata('login_failed').'</p>';?>
<?php endif;?>
<?php if($this->session->flashdata('user_loggedin')):?>
    <?php echo '<p class="alert alert-success">'.$this->
        session->flashdata('user_loggedin').'</p>';?>
<?php endif;?>
<?php if($this->session->flashdata('user_loggedout')):?>
    <?php echo '<p class="alert alert-success">'.$this->
        session->flashdata('user_loggedout').'</p>';?>
<?php endif;?>
