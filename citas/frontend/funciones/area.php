 <?php 
 require '../../backend/db/config.php';
 echo '<option value="0">Seleccione</option>';
 $stmt = $connect->prepare('SELECT * FROM `specialty`');

  $stmt->execute();


  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $codespe ; ?>"><?php echo $nombrees; ?></option>

            <?php
        }

  ?>


