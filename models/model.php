<?php
  require('tools/connection.php');
  require('movie.php');

  /**
   *
   */
  class Model
  {
    public function getMovies()
    {
      $dbh = Connection::getInstance();

      $movies = array();

      $st = $dbh->query('SELECT * FROM movies');

      $st->setFetchMode(PDO::FETCH_ASSOC);

      foreach($st->fetchAll() as $row) {
          $movies[] = new Movie($row['id'], $row['title'], $row['date']);
      }

      return $movies;
    }
  }
 ?>
