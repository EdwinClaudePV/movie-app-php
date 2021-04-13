<?php
  //require('views/view.php');
  require('controllers/controller.php');

  if($_GET['action'] == 'movies'){
    MovieController::getMovies();
  }else{
    View::getHome();
  }

?>
