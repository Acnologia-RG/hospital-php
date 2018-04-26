<h2>Patients</h2>
	<table id="myTable">
		<thead>
			<tr>
				<th onclick="sortTable(0)">Name</th>
				<th onclick="sortTable(1)">Species</th>
				<th onclick="sortTable(2)">Status</th>
				<th onclick="sortTable(3)">gender</th>
				<th onclick="sortTable(4)">Client</th>
				<th colspan="1">Action</th>
			</tr>
		</thead>
		</tbody>
<?php 
foreach ($patients as $patient) {
?>
			<tr>
				<td><?= $patient["patient_name"] ?></td>
				<td><?= $patient["species_description"] ?></td>
				<td><?= $patient["patient_status"] ?></td>
				<td><?= $patient["gender_description"] ?></td>
				<td><?= $patient["client_firstname"] ."&nbsp;". $patient["client_lastname"] ?></td>
				<td class="center"><a href="<?= URL ?>hospital/editPatientsPage/<?= $patient["patient_id"] ?>">edit</a></td>
			</tr>
<?php 
}
?>
		</tbody>
	</table>
	<p><a href="<?= URL ?>hospital/create#Patient">Create</a></p>