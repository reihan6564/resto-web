<?php
$excel = new PHPExcel();

$excel->setActiveSheetIndex(0);


//baris keberapa
$row = 5;

$mahasiswa = $this->db->get('tb_paket')->result();
foreach ($mahasiswa as $pkt) {
    $h1 = $this->db->get_where('tb_makanan', ['id_makanan' => $pkt->makanan_1])->row_array();
    $h2 = $this->db->get_where('tb_makanan', ['id_makanan' => $pkt->makanan_2])->row_array();
    $h3 = $this->db->get_where('tb_makanan', ['id_makanan' => $pkt->makanan_3])->row_array();
    $h4 = $this->db->get_where('tb_makanan', ['id_makanan' => $pkt->makanan_4])->row_array();
    $h5 = $this->db->get_where('tb_makanan', ['id_makanan' => $pkt->makanan_5])->row_array();
    $hm1 = $this->db->get_where('tb_minuman', ['id_minuman' => $pkt->minuman_1])->row_array();
    $hm2 = $this->db->get_where('tb_minuman', ['id_minuman' => $pkt->minuman_2])->row_array();
    $hm3 = $this->db->get_where('tb_minuman', ['id_minuman' => $pkt->minuman_3])->row_array();
    $hm4 = $this->db->get_where('tb_minuman', ['id_minuman' => $pkt->minuman_4])->row_array();
    $hm5 = $this->db->get_where('tb_minuman', ['id_minuman' => $pkt->minuman_5])->row_array();
    $excel->getActiveSheet()
        ->setCellValue('A' . $row, $pkt->id_paket)
        ->setCellValue('B' . $row, $h1['nama_makanan'])
        ->setCellValue('C' . $row, $pkt->jml_mkn_1)
        ->setCellValue('D' . $row, $h2['nama_makanan'])
        ->setCellValue('E' . $row, $pkt->jml_mkn_2)
        ->setCellValue('F' . $row, $h3['nama_makanan'])
        ->setCellValue('G' . $row, $pkt->jml_mkn_3)
        ->setCellValue('H' . $row, $h4['nama_makanan'])
        ->setCellValue('I' . $row, $pkt->jml_mkn_4)
        ->setCellValue('J' . $row, $h5['nama_makanan'])
        ->setCellValue('K' . $row, $pkt->jml_mkn_5)
        ->setCellValue('L' . $row, $hm1['nama_minuman'])
        ->setCellValue('M' . $row, $pkt->jml_mnm_1)
        ->setCellValue('N' . $row, $hm2['nama_minuman'])
        ->setCellValue('O' . $row, $pkt->jml_mnm_2)
        ->setCellValue('P' . $row, $hm3['nama_minuman'])
        ->setCellValue('Q' . $row, $pkt->jml_mnm_3)
        ->setCellValue('R' . $row, $hm4['nama_minuman'])
        ->setCellValue('S' . $row, $pkt->jml_mnm_4)
        ->setCellValue('T' . $row, $hm5['nama_minuman'])
        ->setCellValue('U' . $row, $pkt->jml_mnm_5)
        ->setCellValue('V' . $row, "Rp. " . number_format($pkt->total_hrg_paket, 0, ".", "."));
    $row++;
}
date_default_timezone_set('Asia/Jakarta');
$tanggal = $hari . "," . date(' d ') . $bulan  . date(' Y ');
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('K')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('M')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('O')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('P')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('R')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('S')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('T')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('U')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('V')->setWidth(20);

$excel->getActiveSheet()
    ->setCellValue('A1', 'Tabel Paket')
    ->setCellValue('A3', $tanggal)
    ->setCellValue('A4', 'ID')
    ->setCellValue('B4', 'Makanan 1')
    ->setCellValue('C4', 'Jumlah')
    ->setCellValue('D4', 'Makanan 2')
    ->setCellValue('E4', 'Jumlah')
    ->setCellValue('F4', 'Makanan 3')
    ->setCellValue('G4', 'Jumlah')
    ->setCellValue('H4', 'Makanan 4')
    ->setCellValue('I4', 'Jumlah')
    ->setCellValue('J4', 'Makanan 5')
    ->setCellValue('K4', 'Jumlah')
    ->setCellValue('L4', 'Minuman 1')
    ->setCellValue('M4', 'Jumlah')
    ->setCellValue('N4', 'Minuman 2')
    ->setCellValue('O4', 'Jumlah')
    ->setCellValue('P4', 'Minuman 3')
    ->setCellValue('Q4', 'Jumlah')
    ->setCellValue('R4', 'Minuman 4')
    ->setCellValue('S4', 'Jumlah')
    ->setCellValue('T4', 'Minuman 5')
    ->setCellValue('U4', 'Jumlah')
    ->setCellValue('V4', 'Total Harga');

// merge and nya
$excel->getActiveSheet()->mergeCells('A1:V1');
$excel->getActiveSheet()->mergeCells('A3:V3');

//alignnya

$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal('center');
$excel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('right');
$excel->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal('center');

// style tablenya border dll
$excel->getActiveSheet()->getStyle('A1')->applyFromArray(
    array(
        'font' => array(
            'size' => 24,
        )
    )
);

$excel->getActiveSheet()->getStyle('A3')->applyFromArray(
    array(
        'font' => array(
            'bold' => true,
        )
    )
);

$excel->getActiveSheet()->getStyle('A4:V4')->applyFromArray(
    array(
        'font' => array(
            'bold' => true,
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    )
);

$excel->getActiveSheet()->getStyle('A5:V' . ($row - 1))->applyFromArray(
    array(
        'borders' => array(
            'outline' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            ),
            'vertical' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    )
);

//give border to data

$excel->getActiveSheet()->getStyle('A5:F' . ($row - 1))->applyFromArray(
    array(
        'borders' => array(
            'outline' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            ),
            'vertical' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        )
    )
);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition:attachment; filename="Laporan Table Paket ' . $tanggal . '.xlsx"');
header('Cache-Control: max-age=0');

$file = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');

$file->save('php://output');
