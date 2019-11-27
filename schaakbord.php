<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>schaakbord</title>
    <style media="screen">
      td {
        width: 80px;
        height: 80px;
        border-style: solid;
        border-color: blue;
        border-width: 2px;
        border-radius: 9px;
      }
      .black{
        background-color: black;
      }

    </style>
  </head>
  <body>
      <tbody>
        <?php
        $rows = 8;
        $cols= 8;
          echo "<table>";

          for ($tr=1; $tr <=$rows ; $tr++) {
            echo "<tr>";
              for ($td=1; $td <=$cols ; $td++) {
                if (($tr % 2==0 && $td % 2== 1)||($tr % 2==1 && $td % 2== 0)) {
                  echo "<td class='black'> </td>";
                } else {
                  echo "<td class='white'> </td>";
                }
              }
            echo "</tr>";
          }
          echo "<table>";

        ?>
      </tbody>
  </body>
</html>
