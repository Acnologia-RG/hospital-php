<?php

function generatePatients()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM ((`patients` 
	INNER JOIN `species` ON `species_id` = `species_id`),
	INNER JOIN `clients` ON `client_id` = `client_id`)";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

/*function generateClients()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `clients` 
	ORDER BY `clients`.`client_id` ASC";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function generateSpecies()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `species` 
	ORDER BY `species`.`species_id` ASC";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
*/