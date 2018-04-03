<?php 
//$hospital => true
require(ROOT . "model/hospitalModel.php");

function index()
{
	$PatientsInfo = generatePatients();
	$ClientsInfo = generateClients();
	$SpeciesInfo = generateSpecies();
	
	render("hospital/index", array(
		'hospital' => true,
		'clients' => $ClientsInfo,
		'species' => $SpeciesInfo,
		'patients' => $PatientsInfo)
	);
}