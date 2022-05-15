 <?php
   require_once('db.php');
   $tableName = 'tovar';
   // Get JSON file and decode contents into PHP arrays/values
   $jsonFile = 'goods.json';
   $jsonData = json_decode(file_get_contents($jsonFile), true);
   $queryDel = "DELETE FROM `tovar`";
   mysqli_query($link, $queryDel);
   // Iterate through JSON and build INSERT statements
   foreach ($jsonData as $id => $row) {
      $insertPairs = array();
      foreach ($row as $key => $val) {
         $insertPairs[addslashes($key)] = addslashes($val);
      }
      $insertKeys = '`' . implode('`,`', array_keys($insertPairs)) . '`';
      $insertVals = '"' . implode('","', array_values($insertPairs)) . '"';
      $query = "INSERT INTO `{$tableName}` ({$insertKeys}) VALUES ({$insertVals});" . "\n";
      mysqli_query($link, $query);
   }
