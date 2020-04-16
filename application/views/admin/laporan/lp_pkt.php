<?php
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(190, 7, 'Laporan Resto Web', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'Aplikasi Restaurant Berbasis Web ', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(190, 7, 'www.restoweb.blosgspot.com', 0, 1, 'C');
date_default_timezone_set('Asia/Jakarta');
$tanggal = $hari . date(' d ') . $bulan  . date(' Y ');
$pdf->SetFont('Arial', '', 10);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->SetLineWidth(1);
$pdf->Line(10, 36, 198, 36);
$pdf->SetLineWidth(0);
$pdf->Line(10, 37, 198, 37);
$pdf->Ln(7);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(190, 8, $tanggal, 0, 1, 'R');
$pdf->Cell(20, 7, 'Table Paket', 0,  1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(8, 6, 'ID', 1, 0);
$pdf->Cell(35, 6, 'Nama Paket', 1, 0);
$pdf->Cell(33, 6, 'Nama Makanan', 1, 0);
$pdf->Cell(15, 6, 'Jumlah', 1, 0, 'C');
$pdf->Cell(33, 6, 'Nama Makanan', 1, 0,);
$pdf->Cell(15, 6, 'Jumlah', 1, 0, 'C');
$pdf->Cell(33, 6, 'Nama Makanan', 1, 0);
$pdf->Cell(15, 6, 'Jumlah', 1, 0, 'C');
$pdf->SetFont('Arial', '', 10);
$mahasiswa = $this->db->get('tb_paket')->result();
foreach ($mahasiswa as $row) {
    $pdf->Ln(6);
    $pdf->Cell(8, 6, $row->id_paket, 1, 0);
    $pdf->Cell(35, 6, $row->nama_paket, 1, 0);
    $mkn1 = $this->db->get_where('tb_makanan', ['id_makanan' => $row->makanan_1])->row_array();
    $pdf->Cell(33, 6, $mkn1['nama_makanan'], 1, 0);
    $pdf->Cell(15, 6, $row->jml_mkn_1, 1, 0, 'C');
    $mkn2 = $this->db->get_where('tb_makanan', ['id_makanan' => $row->makanan_2])->row_array();
    $pdf->Cell(33, 6, $mkn2['nama_makanan'], 1, 0);
    $pdf->Cell(15, 6, $row->jml_mkn_2, 1, 0, 'C');
    $mkn3 = $this->db->get_where('tb_makanan', ['id_makanan' => $row->makanan_3])->row_array();
    $pdf->Cell(33, 6, $mkn3['nama_makanan'], 1, 0);
    $pdf->Cell(15, 6, $row->jml_mkn_3, 1, 0, 'C');
}
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 14);
// mencetak string 

$pdf->Ln(3);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(33, 6, 'Nama Minuman', 1, 0);
$pdf->Cell(15, 6, 'Jumlah', 1, 0, 'C');
$pdf->Cell(33, 6, 'Nama Minuman', 1, 0,);
$pdf->Cell(15, 6, 'Jumlah', 1, 0, 'C');
$pdf->Cell(33, 6, 'Nama Minuman', 1, 0);
$pdf->Cell(15, 6, 'Jumlah', 1, 0, 'C');
$pdf->Cell(26, 6, 'Total', 1, 0, 'C');
$pdf->SetFont('Arial', '', 10);
$mahasiswa = $this->db->get('tb_paket')->result();
foreach ($mahasiswa as $row) {
    $pdf->Ln(6);
    $mnm1 = $this->db->get_where('tb_minuman', ['id_minuman' => $row->minuman_1])->row_array();
    $pdf->Cell(33, 6, $mnm1['nama_minuman'], 1, 0);
    $pdf->Cell(15, 6, $row->jml_mnm_1, 1, 0, 'C');
    $mnm2 = $this->db->get_where('tb_minuman', ['id_minuman' => $row->minuman_2])->row_array();
    $pdf->Cell(33, 6, $mnm2['nama_minuman'], 1, 0);
    $pdf->Cell(15, 6, $row->jml_mnm_2, 1, 0, 'C');
    $mnm3 = $this->db->get_where('tb_minuman', ['id_minuman' => $row->minuman_3])->row_array();
    $pdf->Cell(33, 6, $mnm3['nama_minuman'], 1, 0);
    $pdf->Cell(15, 6, $row->jml_mnm_3, 1, 0, 'C');
    $pdf->Cell(26, 6, $row->total_hrg_paket, 1, 0, 'C');
}
$pdf->Output();
