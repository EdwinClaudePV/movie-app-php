<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movies</title>
  </head>
  <body>
    <table>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Date</th>
      </tr>
      <?php
        //print_r($movies);
        foreach ($movies as $m) {
          echo '<tr>';
          echo '<td>' . $m->id . '</td>';
          echo '<td>' . $m->title . '</td>';
          echo '<td>' . $m->date . '</td>';
          echo '</tr>';
        }
       ?>
    </table>
  </body>
</html>
