<?php



/**
 *
 */
class movieController
{
  public function getMovies()
  {
    $movies = Model::getMovies();

    View::getMovies($movies);
  }
}

?>
