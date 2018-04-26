<h1 id="Patient">Create Patient</h1>
<form action="<?= URL ?>/hospital/createNewPatient" method='POST'>
    <p>Patient Name</p>
    <input required="" minlength="2" type='text' name='patientName'><br>

    <p>Patient Species</p>
    <select required="" name="species">
<?php foreach ($species as $species) { ?>
    <option value="<?= $species["species_id"] ?>"><?= $species["species_description"] ?></option>
<?php } ?>
    </select><br>
    <p>Patient Gender</p>
    <input type="radio" name="gender" value="1" checked> Male<br>
    <input type="radio" name="gender" value="2"> Female<br>
    <input type="radio" name="gender" value="3"> other<br>

    <p>Client Name</p>
    <select required="" name="client">
<?php 
foreach ($clients as $client) {
?>
    <option value="<?= $client["client_id"] ?>"><?= $client["client_firstname"] ."&nbsp;". $client["client_lastname"] ?></option>
<?php } ?>
    </select><br>

    <p>Status</p>
    <textarea required="" minlength="2" name="status" rows="10" cols="75"></textarea><br>
    <input type="submit" value="Create Patient">
</form>

<hr>

<h1 id="Client">Create Client</h1>
<form action="<?= URL ?>hospital/createNewClient" method='POST'>
    <p>first name</p>
    <input required="" minlength="2" type='text' name='firstname'><br>

    <p>last name</p>
    <input required="" minlength="2" type='text' name='lastname'><br>

    <p>phone number</p>
    <input required="" minlength="8" type='text' name='phone'><br>

    <p>E-mail</p>
    <input required="" minlength="7" type='text' name='email'><br>
    <input type="submit" value="Create Client">
</form>

<hr>

<h1 id="Species">Create Species</h1>
<form action="<?= URL ?>/hospital/createNewSpecies" method='POST'>
    <p>Species name</p>
    <input required="" minlength="2" type='text' name='species'><br>
    <input type="submit" value="Create Species">
</form>