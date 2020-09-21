<?php
require "classes/url.class.php";
require "classes/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Clínicas Odontológicas | Rizodonto</title>

    <!-- css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" />  
     
    <?php        
      $types = array('css');
      $dir = new DirectoryIterator(PATHCSS);
      foreach ($dir as $fileInfo) {
        $ext = strtolower($fileInfo->getExtension());
        if(in_array($ext, $types)){
          echo '<link rel="stylesheet" href="' .PATHCSS.$fileInfo->getFilename().'" />';
        } 
      }
      ?> 
      

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <header>    	
      <?php include_once "element/header.php"; ?>
    </header>
    <section>     
	    
	    <div id="principal">
	        <?php
	        $modulo = Url::getURL(0);
	 
	        if( $modulo == null )
	            $modulo = "home";
	 
	        if( file_exists( "pages/" . $modulo . ".php" ) )
	            require "pages/" . $modulo . ".php";
	        else
	            require "pages/404.php";
	        ?>
	    </div>
	   
    </section>

    <footer>
    	<?php include_once "element/footer.php"; ?>
    </footer>
    <!-- jQuery -->
    <!-- <script src="assets/js/jquery-1.11.1.min.js"></script> -->
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php   
      $types = array('js');
      $dir = new DirectoryIterator(PATHJS);
      foreach ($dir as $fileInfo) {
        $ext = strtolower($fileInfo->getExtension());
        if(in_array($ext, $types)){
          echo '<script type="text/javascript" src="' .PATHJS.$fileInfo->getFilename().'"></script>';
        } 
      }
      ?> 
    
  </body>
</html>