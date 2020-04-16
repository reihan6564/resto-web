<?php
$pdf = new FPDF('p', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 14);
$query = $this->db->get('tb_makanan');
// mencetak string 
$pdf->Cell(135, 7, 'Laporan Resto Web', 0, 1, 'C');
$pdf->Cell(135, 7, 'Table Makanan', 0, 1, 'C');
date_default_timezone_set('Asia/Jakarta');

$tanggal = $hari_ini . date(' d ') . $bulan_ini  . date(' Y ');
$pdf->SetFont('Arial', '', 10);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->SetLineWidth(1);
$pdf->Line(10, 36, 138, 36);
$pdf->SetLineWidth(0);
$pdf->Line(10, 37, 138, 37);
$pdf->Ln(4);

$pdf->Cell(130, 8, $tanggal, 0, 1, 'R');
$pdf->Ln(3);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 6, 'ID', 1, 0);
$pdf->Cell(35, 6, 'Nama Makanan', 1, 0);
$pdf->Cell(33, 6, 'Jenis Makanan', 1, 0);
$pdf->Cell(30, 6, 'Harga Makanan', 1, 0);
$pdf->Cell(20, 6, 'Stok', 1, 0, 'C');
$pdf->SetFont('Arial', '', 10);
$mahasiswa = $this->db->get('tb_makanan')->result();
foreach ($mahasiswa as $row) {
    $pdf->Ln(6);
    $pdf->Cell(10, 6, $row->id_makanan, 1, 0);
    $pdf->Cell(35, 6, $row->nama_makanan, 1, 0);
    $pdf->Cell(33, 6, $row->jenis_makanan, 1, 0);
    $pdf->Cell(30, 6, $row->harga_makanan, 1, 0, 'C');
    $pdf->Cell(20, 6, $row->stok, 1, 0, 'C');
}
$pdf->Output();
