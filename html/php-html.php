<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
        foreach ($students as $key => $value) {
          echo $value.' ';
        }
     ?>
     <ul>
       <?php //display the students here ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day"><?php for($day = 1; $day <= 31; $day++){?>
       <option value="<?php $day  ?>"><?php echo $day  ?></option>
       <?php
       }
       ?>
       </select>
       <label for="month">Month</label>
       <select  name="month"><?php for ($month = 1; $month<= 12; $month++){ ?>
        <option value="<?php echo $month ?>"><?php echo $month ?></option>
       <?php } ?>
       </select>
       <label for="year">Year</label>
       <select  name="year"><?php for($year = 1900; $year <= 2016; $year++){ ?>
       <option value="<?php echo $year ?>"><?php echo $year ?></option>
       <?php } ?>
       </select>
     </form>
     <hr>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
     <?php if (isset($_GET["genre"]) && $_GET["genre"] == "fille"){ ?>     
     <p>Je suis une fille </p>
     <?php } else if (isset($_GET["genre"]) && $_GET["genre"] == "garcon"){ ?>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
     <p>
       Je suis un garçon
     </p>
     <?php } else {?>
     <!-- Instruction : Afficher ce bloc dans les autres cas -->
     <p>
       Je suis indéfini
     </p>
     <?php } ?>
  </body>
</html>
