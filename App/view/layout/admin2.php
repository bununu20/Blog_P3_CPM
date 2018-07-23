<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo isset($title_for_layout)?$title_for_layout : 'Blog Alaska' ; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= 'http://'.BASE_URL ?>/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="<?= 'http://'.BASE_URL ?>/vendor/bootstrap2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="<?= 'http://'.BASE_URL ?>/css/round-about.css" rel="stylesheet">

  </head>

  <body>
 
    <!-- Navigation -->
    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="row">    
      <div class ="col-lg-10">  
      <div class="container">
        <a class="navbar-brand" href="#">Administration</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto ">
             <li class="nav-item">
              <a class="nav-link" href="<?php echo Router::link('billets/index') ?>">Voir le site</a>
            </li>
           <li class="nav-item">
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo Router::link('admin/billets/index')?>">Les billets</a>
            </li>
            <li class="nav-item">
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;               
            </li>
            <li class="nav-item"  >
                         </li>
            
          </ul>
        </div>
      </div>
      </div>
      <div class ="col-lg-2">
      <a class="nav-link" href="<?php echo Router::link('users/logout')?>"> <span class="glyphicon glyphicon-user"></span> Se deconnecter</a>
 
          </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
<br><br><br>
      
        <?php   
       echo  $this->session->flash();?>
    </p>
    <div class="row"> 
       <?=    $content_for_layout ?>
      
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= 'http://'.BASE_URL ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= 'http://'.BASE_URL ?>/vendor/js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript" src="<?= 'http://'.BASE_URL?>/js/tinymce/tinymce.min.js "></script>
  <script type="text/javascript">
  tinymce.init({
    //  mode: 'specific_textareas',
      selector : "textarea#wysiwyg",
      height: 200,
      theme: 'modern',
      plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
      toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
      image_advtab: true,
      templates: [
        { title: 'Test template 1', content: 'Test 1' },
        { title: 'Test template 2', content: 'Test 2' }
      ],
      setup: function (editor) {
            editor.on('change', function (e) {
                editor.save();
            });
        },
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'
      ]
     });
  
  </script>
  
  </body>

</html>
