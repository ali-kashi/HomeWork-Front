<?php
include 'db.php';
include 'dbname.php';
$searchQuery = $_GET['q'];
$searchResult = $db->query("SELECT * FROM product WHERE name LIKE '%{$searchQuery}%' LIMIT 10")->fetchAll();
if($searchResult[0])
{
  foreach($searchResult as $item)
  {
    echo "
			<option>
				{$item['name']}
			</option>
		";
  }
}
else{
	echo 'no result!';
}
$dbc -> close();
?>
