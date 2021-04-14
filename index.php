<?php
  //require('views/view.php');
  require('controllers/controller.php');

  if($_GET['action'] == 'movies' && !isset($_GET['format'])){
    MovieController::getMovies();
  } else if ($_GET['action'] == 'movies' && $_GET['format'] == 'json'){
    MovieController::getMoviesJson();
  } else if ($_GET['action'] == 'movies' && $_GET['format'] == 'ajax'){
    MovieController::getMoviesAjax();
  }else{
    View::getHome();
  }

?>
