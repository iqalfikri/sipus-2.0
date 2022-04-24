<?php
include ('../koneksi.php');
// Include autoloader
require_once '../vendor/dompdf/autoload.inc.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;

$html = "";
$html2 = "";
$html3 = "";

// Instantiate and use the dompdf class
$dompdf = new Dompdf();
$html .= '<table border="1" width=100%>
	<tr>
		<th>NO</th>
		<th>ID ANGGOTA</th>
		<th>NAMA</th>
		<th>JENIS KELAMIN</th>
		<th>ALAMAT</th>
	</tr>
	';
  $sql = "SELECT * FROM tbanggota ORDER BY idanggota DESC";
  $q_tampil_anggota = mysqli_query($db, $sql);

  $no = 1;
  while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
    $html2 .= "
    	<tr>
    		<td>$no</td>
    		<td>".$r_tampil_anggota['idanggota']."</td>
    		<td>".$r_tampil_anggota['nama']."</td>
    		<td>".$r_tampil_anggota['jeniskelamin']."</td>
    		<td>".$r_tampil_anggota['alamat']."</td>
    	</tr>";

    $no++;
    }

    $html3 .= '</table>';
    $dompdf->loadHtml($html.$html2.$html3);

    $dompdf->setPaper('A4', 'landscape');
    // Render the HTML as PDF
    $dompdf->render();
    // Output the generated PDF to Browser
    $dompdf->stream();
