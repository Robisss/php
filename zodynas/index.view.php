<!DOCTYPE html>
<html lang="en">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
    <div class="container">
    <?php if($word == null): ?>
    <form action="index.php" method="get">
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" name="word" placeholder="zodis">
        </div>
                <select name="kryptis">
                  <option  value="LT">I Anglu</option>
                  <option value="EN">I Lietuviu</option>

                </select>
         </div>
         <input type="submit" name="submit" />
      </div>
    </form>

<?php else: ?>

    <h2><?php echo isversk($word, $kryptis); ?></h2>
    <a href="index.php">Atgal</a>

<?php endif;?>
</div>
</body>
</html>
