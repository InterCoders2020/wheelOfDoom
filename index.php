<!DOCTYPE html>
<html lang="en"></html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wheel of doom</title>
    <link rel="stylesheet" type="text/css" href="WheelOfDoom.css" />
  </head> 
  <body>
      <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">  
      <a href="http://localhost/phpfactoriaf5/wheelOfDoom/connections/reset.php">Reset Status</a> 
    <header>
      <img src="images/skull.png" alt="Skull">
      <h1>Wheel of Doom</h1>
    </header> 
    <nav>
      <img class="logo" src="Images/logo.png" alt="InterCodersIcon" />
    </nav>    
    <div>
      <hr id="line-1">
        <h3>Who is gonna be the next one?</h3>
      <hr id="line-2">
    </div>   
    <section>
      <form>
        <label for="dieNameButton">
          <input class="button kill" type="submit" name="dieNameButton" value=" KILL A CODER &nbsp;&nbsp; <?php include('connections\update.php')?>">
        </label>
        <label for="dieName">
          <input class="text-box die-name" type="text" id=dieName name="name" value="<?php echo $row['name']; ?>" />
        </label>
      </form>
    </section>    
    <section>
       <form action="connections/save_coder.php" method="post"> 
          <input class="button add" type="submit" name="addNameButton" value="ADD A CODER">
          <input class="text-box add-name" type="text" id=addName required name="name" placeholder="Name">
      </form>
    </section>
 
    <section class="deadAliveNumber">
      <label for="deadNumber">Dead</label>
        <input class="number" type="text" id=deadNumber required name="" value="<?php include('connections\counterDead.php')?>">
      
      <label for="aliveNumber">Alive</label>
        <input class="number" type="text" id=aliveNumber required name="" value="<?php include('connections\counterAlive.php')?>"> 
    </section>

    <section class="list alive">
      <table>
        <tr>
          <th><u>Still alive</u></th>
          <td>
            <?php include('connections\listAlive.php')?>
          </td>
        </tr>
     </table>
    </section>    
    <section class="list dead">
      <table>
        <tr>
          <th><u>Dead</u></th>
          <td>
            <?php include('connections\listDead.php')?>
          </td>
        </tr>
     </table>
    </section>

    <footer>
      <a class="repository" href="https://github.com/InterCoders2020"> Our repository </a>
    </footer>

  </body>
</html>