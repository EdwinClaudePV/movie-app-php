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

  public function getMoviesJson()
  {
    $movies = Model::getMovies();

    View::getMoviesJson($movies);
  }

  public function getMoviesAjax()
  {
    View::getMoviesAjax();
  }
}

?>
