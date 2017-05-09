<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page title</title>
  </head>
  <body>

    <h1>Passing Info</h1>

    <a href="pageDuce.php?id=2&fname=jervo">Page 2 Link</a>

    <h2>Complete Class List</h2>

    <ol>
      <?php
          $names = array("Ben", "Axel", "Louise", "Brendan", "Kaitlyn", "Kristen", "Seamus", "Khan", "Su", "Anisa", "Deb",);

          for($ndx = 0; $ndx < count($names); $ndx ++){
            echo "<li>" . $names{$ndx} . "</li>";

          }

       ?>
    </ol>
    <h2>Even Number Only</h2>
    <ul>
      <?php
          for($ndx = 0; $ndx < count($names); $ndx ++){

            if($ndx % 2 != 0){
              echo "<li>" . $names{$ndx} . "</li>";
            }

          }

       ?>
    </ul>

    <h2>Alphabetical</h2>
    <ul>

    <?php
        $sortedNames = $names;
        sort($sortedNames);
        for($ndx = 0; $ndx < count($sortednames); $ndx ++){
            echo "<li>" . $sortedNames{$ndx} . "</li>";
          }
     ?>


   </ul>

  </body>
</html>
