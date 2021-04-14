<?php
/**
 *
 */
class View
{
  public function getHome()
  {
    require('home.php');
  }

  public function getMovies($movies)
  {
    require('movies.php');
  }

  public function getMoviesJson($movies)
  {
    echo json_encode($movies);
  }

  public function getMoviesAjax()
  {
    require('movies.html');
  }
}

 ?>
