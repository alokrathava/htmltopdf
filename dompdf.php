<?php
$name = "Alok Rathava";
$email = "alokrathava@gmail.com";
$mobile = "9512334819";
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Generate HTML to PDF</title>
	<style>
	*{text-align:center;}
	</style>
</head>
<body>
	<h1>Generate HTML to PDF</h1>
	<table border="1" cellpadding="10" cellspacing="0" width="100%">
		<tr>
			<th>S.No.</th>
			<th>Name</th>
			<th>Branch</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Vivek Gupta</td>
			<td>Computer Science & Engg.</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Vinay Gupta</td>
			<td>Computer Science & Engg.</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Sanjay Kumar</td>
			<td>Computer Science & Engg.</td>
		</tr>
		<tr>
			<td>' . $mobile . '</td>
			<td>' . $name . '</td>
			<td>' . $email . '</td>
		</tr>
	</table>
</body>
</html>';


require 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$dompdf->stream("playerofcode", array("Attachment" => 0));

?>