<?php  
include "../../koneksi.php";
include "../TCPDF/tcpdf.php";
		$id = $_POST['id'];
		$id_meja = $_POST['idMeja'];
		
		$sql = "UPDATE tbl_dtl_transaksi SET status_dtl = '3' WHERE id_transaksi= '$id'";
		$sql1 = "UPDATE tbl_transaksi SET status = '3' WHERE id_transaksi= '$id'";
		
		$result = mysqli_query($c,$sql) or die(mysqli_error($c));
		$result1 = mysqli_query($c,$sql1) or die(mysqli_error($c));;


 		// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Disinicofee');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Invoice bill', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

// -----------------------------------------------------------------------------
$querybill = "SELECT tbl_dtl_transaksi.id_dtl,tbl_kopi.nama_menu, tbl_kopi.harga, jumlah , (tbl_kopi.harga * jumlah) AS SubTotal, tbl_transaksi.total, tbl_transaksi.tanggal FROM tbl_dtl_transaksi INNER JOIN tbl_kopi ON tbl_dtl_transaksi.id_menu= tbl_kopi.id_menu INNER JOIN tbl_transaksi ON tbl_dtl_transaksi.id_transaksi=tbl_transaksi.id_transaksi WHERE tbl_dtl_transaksi.id_transaksi = $id";
$result = mysqli_query($c, $querybill);
$i = 1;
while($row = mysqli_fetch_array($result))
 {
    $output .= '<tr>
          <td title="Nomor">'.$i.'</td>
          <td title="Nama Pesanan">'.$row['nama_menu'].'</td>
          <td title="Jumlah Pesanan">'.$row['jumlah'].' </td>
          <td title="Kirim Ke">'.$row['SubTotal'].' </td>
      </tr>' ; 
      $i++;  
      $total =$row['total'];
}	

	$outputtotal = '<tr>
		  <td colspan="4" align="Right"> Total : '.$total.' </td>

	</tr>';

$tbl = '
<table cellspacing="0" cellpadding="1" border="1">
	<tr>
     <td title="Nomor">Nomor</td>
     <td title="Nama Pesanan">Nama Menu</td>
          <td title="Jumlah Pesanan">Jumlah </td>
          <td title="Kirim Ke">Sub Total </td>
          </tr>
	'.$output.'
	'.$outputtotal.'
	
</table>';

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
$pdf->Output('example_50.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+

		echo "1";
		
 ?>