
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>oefening 5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <?php
    function checkLeeftijd($leeftijd){
      if( $leeftijd < 17 ){
        return "<p>${leeftijd} jaar is te jong voor deze film.</p>";
        }
      elseif( $leeftijd < 19 ){
        return "<p>${leeftijd} jaar, je hebt ouderlijk toezicht nodig.</p>";
        }
      else{
        return "<p>Je bent al ${leeftijd} jaar. Geniet van de film!</p>";
      } 
    }
      for($i = 0;$i<99; $i++){
        print checkLeeftijd(rand(0, 50));
      }
    
    

    ?>
  </body>
</html>
