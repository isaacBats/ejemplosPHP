<h1>Formato con fechas</h1>
<p>Varios formatos con fechas</p>

<table>
	<thead>
		<tr>
			<th>funcion</th>
			<th>resultado</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>time()</td>
			<td><?= time(); ?></td>
		</tr>
		<tr>
			<td>new DateTime()</td>
			<td><?= print_r( new \DateTime()); ?></td>
		</tr>
		<tr>
			<td>$fechaUnix = time()</td>
			<td><?= print_r($fechaUnix); ?></td>
		</tr>
		<tr>
			<td>$fechaUnix con formato d-m-y</td>
			<td><?= (string)$fechaFormato ?></td>
		</tr>
		<tr>
			<td>$fechaInicio = 1476985703 </td>
			<td><?= $fechaInicioFormato ?></td>
		</tr>
		<tr>
			<td>$fechaFin = 1476986186</td>
			<td><?= $fechaFinFormato ?></td>
		</tr>
	</tbody>
</table>