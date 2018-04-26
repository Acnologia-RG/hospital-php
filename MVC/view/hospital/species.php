<h2>Species</h2>
	<table id="myTable">
		<thead>
			<tr>
				<th onclick="sortTable(0)">species id</th>
				<th onclick="sortTable(1)">Description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
<?php
foreach ($species as $species) {
?>			
			<tr>
				<td><?= $species["species_id"] ?></td>
				<td><?= $species["species_description"] ?></td>
				<td class="center"><a href="<?= URL ?>hospital/editSpeciesPage/<?= $species["species_id"] ?>">edit</a></td>
				<td class="center"><a href="<?= URL ?>hospital/deleteSpecies/<?= $species["species_id"] ?>">delete</a></td>
			</tr>
<?php
}
?>
		</tbody>
	</table>
	<p><a href="<?= URL ?>hospital/create#Species">Create</a></p>