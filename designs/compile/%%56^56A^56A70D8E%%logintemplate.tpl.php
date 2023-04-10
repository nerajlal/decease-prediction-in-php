<?php /* Smarty version 2.6.26, created on 2022-02-17 07:02:53
         compiled from logintemplate.tpl */ ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login form</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="login/./style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <form class="login" action="" method="POST">
    <input type="hidden" name="hide" value="h">

    <p class="title">Log in</p>
    <input type="text" placeholder="Username" name="email" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Password" name="password" />
    <i class="fa fa-key"></i>
    <a href="#">Forgot your password?</a>
    <button>
      <i class="spinner"></i>
      <span class="state">Log in</span>
    </button>
  </form>
  <footer><a target="blank" href="http://boudra.me/">boudra.me</a></footer>
  </p>
</div>
<!-- partial -->
<?php echo '
  <script src=\'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\'></script><script  src="login/./script.js"></script>
'; ?>


</body>
</html>