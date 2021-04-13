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
}

 ?>
