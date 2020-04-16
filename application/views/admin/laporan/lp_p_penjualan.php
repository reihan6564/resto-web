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
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 8, $tanggal, 0, 1, 'R');
$pdf->Cell(95, 6, 'Data Penjualan dari tanggal ', 0,  1, 'L');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 7, $hasil1 . ' sampai ' . $hasil2, 0,  1, 'L');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(8, 6, 'ID', 1, 0);
$pdf->Cell(37, 6, 'Kode Pembayaran', 1, 0, 'C');
$pdf->Cell(32, 6, 'Jumlah Makanan', 1, 0, 'C');
$pdf->Cell(32, 6, 'Jumlah Minuman', 1, 0, 'C');
$pdf->Cell(43, 6, 'Waktu Pesanan', 1, 0);
$pdf->Cell(34, 6, 'Total Pembayaran', 1, 0, 'C');
$pdf->SetFont('Arial', '', 10);

$mahasiswa = $this->db->query("SELECT * FROM tb_detail_pesan WHERE waktu_pesanan BETWEEN '$hasil1' AND '$hasil2' ")->result();
foreach ($mahasiswa as $row) {
    $pdf->Ln(6);
    $pemb = $this->db->get_where('tb_pembayaran', ['kode_pembayaran' => $row->kode])->row_array();
    $pdf->Cell(8, 6, $pemb['id_pembayaran'], 1, 0);
    $pdf->Cell(37, 6, $row->kode, 1, 0);
    $p = 0;

    if ($row->makanan_1 == null) {
        $pdf->Cell(32, 6, $p, 1, 0, 'C');
    } else {
        $p++;
        if ($row->makanan_2 == null) {
            $pdf->Cell(32, 6, $p, 1, 0, 'C');
        } else {
            $p++;
            if ($row->makanan_3 == null) {
                $pdf->Cell(32, 6, $p, 1, 0, 'C');
            } else {
                $p++;
                if ($row->makanan_4 == null) {
                    $pdf->Cell(32, 6, $p, 1, 0, 'C');
                } else {
                    $p++;
                    if ($row->makanan_5 == null) {
                        $pdf->Cell(32, 6, $p, 1, 0, 'C');
                    } else {
                        $p++;
                        $pdf->Cell(32, 6, $p, 1, 0, 'C');
                    }
                }
            }
        }
    }
    $pm = 0;
    if ($row->minuman_1 == null) {
        $pdf->Cell(32, 6, $pm, 1, 0, 'C');
    } else {
        $pm++;
        if ($row->minuman_2 == null) {
            $pdf->Cell(32, 6, $pm, 1, 0, 'C');
        } else {
            $pm++;
            if ($row->minuman_3 == null) {
                $pdf->Cell(32, 6, $pm, 1, 0, 'C');
            } else {
                $pm++;
                if ($row->minuman_4 == null) {
                    $pdf->Cell(32, 6, $pm, 1, 0, 'C');
                } else {
                    $pm++;
                    if ($row->minuman_5 == null) {
                        $pdf->Cell(32, 6, $pm, 1, 0, 'C');
                    } else {
                        $pm++;
                        $pdf->Cell(32, 6, $pm, 1, 0, 'C');
                    }
                }
            }
        }
    }

    $pdf->Cell(43, 6, $row->waktu_pesanan, 1, 0);
    $pdf->Cell(34, 6, "Rp. " . number_format($pemb['total_pembayaran'], 0, ".", "."), 1, 0, 'L');
}
$pdf->Output();
