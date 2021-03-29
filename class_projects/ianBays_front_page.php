<?php
  /*  Ian Bays 
    3/29/2021
    M02 Lab Assignment - Using Arrays
  */


  $pictures = array('earth.png', 'fruit.png',
                    'time.png');

  shuffle($pictures);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ian's Random Pictures</title>
  </head>
  <body>
    <h1>Ian's Random Pictures</h1>
      <div align="center">
      <table style="width: 100%; border: 0">
        <tr>
        <?php
        for ($i = 0; $i < 3; $i++) {
          echo "<td style=\"width: 33%; text-align: center\">
                <img src=\"";
          echo $pictures[$i];
          echo "\"/></td>";
        }
        ?>
        </tr>
     </table>
     </div>
  </body>
</html>