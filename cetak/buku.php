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
  <th>No</td>
  <th>ID Buku</th>
  <th>Judul Buku</th>
  <th>Kategori</th>
  <th>Pengarang</th>
  <th>Penerbit</th>
  <th>Status</th>
	</tr>
	';
  $sql = "SELECT * FROM tbbuku ORDER BY idbuku DESC";
  $q_tampil_buku = mysqli_query($db, $sql);

  $no = 1;
  while ($r_tampil_buku = mysqli_fetch_array($q_tampil_buku)) {
    $html2 .= "
    	<tr>
    		<td>$no</td>
    		<td>".$r_tampil_buku['idbuku']."</td>
    		<td>".$r_tampil_buku['judulbuku']."</td>
    		<td>".$r_tampil_buku['kategori']."</td>
    		<td>".$r_tampil_buku['pengarang']."</td>
        <td>".$r_tampil_buku['penerbit']."</td>
        <td>".$r_tampil_buku['status']."</td>
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
