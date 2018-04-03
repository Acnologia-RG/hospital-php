 <h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>
<?php
foreach ($patients as $patient) {
	?>
	</thead>
		</tbody>
			<tr>
				<td><?= $patient["patient_name"] ?></td>
				<td><?= $patient["species_id"] ?></td>
				<td><?= $patient["patient_status"] ?></td>
				<td><?= $patient["client_id"] ?></td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
<?php } ?>