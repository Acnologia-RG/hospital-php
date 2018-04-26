<?php 
require(ROOT . "model/hospitalModel.php");

function index()
{
	$PatientsInfo = generatePatients();

	render("hospital/index", array(
		'directory' => "hospital",
		'patients' => $PatientsInfo)
	);
}

function clients()
{
	$ClientsInfo = generateClients();

	render("hospital/clients", array(
		'directory' => "hospital",
		'clients' => $ClientsInfo)
	);
}

function species()
{
	$SpeciesInfo = generateSpecies();

	render("hospital/species", array(
		'directory' => "hospital",
		'species' => $SpeciesInfo)
	);
}

function create()
{
	$SpeciesInfo = generateSpecies();
	$ClientsInfo = generateClients();
	$PatientsInfo = generatePatients();
	$Genders = generateGenders();

	render("hospital/create", array(
	'directory' => "hospital",
	'species' => $SpeciesInfo,
	'clients' => $ClientsInfo,
	'patients' => $PatientsInfo,
	'genders' => $Genders
	));
}

function createNewClient()
{
	//var_dump($_POST);
	if (createClient()) {
		header("location:" . URL . "hospital/clients");
		exit();
	} else {
		header("location:" . URL . "error/error_db");
		exit();	
	}
}

function createNewSpecies()
{
	//var_dump($_POST);
	if (createSpecies()) {
		header("location:" . URL . "hospital/species");
		exit();
	} else {
		header("location:" . URL . "error/error_db");
		exit();	
	}
}

function createNewPatient()
{
	//var_dump($_POST);
	if (createPatient()) {
		header("location:" . URL . "hospital/index");
		exit();
	} else {
		header("location:" . URL . "error/error_db");
		exit();	
	}
}

function editClientsPage($idC)
{
	$clients = getClient($idC);
	render("hospital/edit" , array(
		'client' => $clients,
		'clientPage' => true
	));
}

function editClients($idC)
{
	if (editClient($idC)) {
		header("location:" . URL . "hospital/clients");
		exit();
	} else {
		var_dump($_POST);
	}
}

function editSpeciesPage($idS)
{
	$species = getSpecie($idS);
	render("hospital/edit" , array(
		'specie' => $species,
		'speciePage' => true
	));
}

function editSpecies($idC)
{
	if (editspecie($idC)) {
		header("location:" . URL . "hospital/species");
		exit();
	} else {
		var_dump($_POST);
	}
}

function editPatientsPage($idP)
{
	$patients = getPatient($idP);
	render("hospital/edit" , array(
		'patient' => $patients,
		'patientPage' => true
    ));
}

function editPatients($idP)
{	
	if (editPatient($idP)) {
		header("location:" . URL . "hospital/index");
		exit();
	} else {
		var_dump($_POST);
	}
}

function deleteClients($idC)
{
	if (deleteClient($idC)) {
		header("location:" . URL . "hospital/clients");
		exit();
	} else {
		var_dump($_POST);    
	}
}

function deleteSpecies($idS)
{
	if (deleteSpecie($idS)) {
		header("location:" . URL . "hospital/species");
		exit();
	} else {
		var_dump($_POST);
	}
}