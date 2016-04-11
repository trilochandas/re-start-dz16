<?php /* Smarty version 2.6.28, created on 2016-04-11 13:07:50
         compiled from oop.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>dz16-GetJSON jQuery</title>

    <!-- Bootstrap -->
   <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> -->

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css"> -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery.min.js" ></script>
    <script src="js/main.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <!-- Latest compiled and minified JavaScript -->
    <!-- // <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
  </head>
  <body>   
    <div class="menu">
      <a class="btn btn-default" href="<?php echo $_SERVER['SCRIPT_NAME']; ?>
">HOME</a>  
    </div>
    
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'form.tpl.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div  class="right-side">

      <div id="info" class="alert alert-warning" role="alert">
        <button type="button" class="close" onclick="$('.alert').fadeOut('slow')"><span aria-hidden="true">&times;</span></button>
        <div id="infoText"></div>
        <p id="emptyDb"></p>
      </div>  

      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'table.tpl.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    </div>

  </body>
</html>