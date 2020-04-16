<?php
$excel = new PHPExcel();

$excel->setActiveSheetIndex(0);


//baris keberapa
$row = 5;

$mahasiswa = $this->db->get('tb_makanan')->result();
foreach ($mahasiswa as $mkn) {
    $excel->getActiveSheet()
        ->setCellValue('A' . $row, $mkn->id_makanan)
        ->setCellValue('B' . $row, $mkn->nama_makanan)
        ->setCellValue('C' . $row, $mkn->jenis_makanan)
        ->setCellValue('D' . $row, "Rp. " . number_format($mkn->harga_makanan, 0, ".", "."))
        ->setCellValue('E' . $row, $mkn->gambar_makanan)
        ->setCellValue('F' . $row, $mkn->stok);
    $row++;
}
date_default_timezone_set('Asia/Jakarta');
$tanggal = $hari_ini . "," . date(' d ') . $bulan_ini  . date(' Y ');
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(10);

$excel->getActiveSheet()
    ->setCellValue('A1', 'Tabel Makanan')
    ->setCellValue('A3', $tanggal)
    ->setCellValue('A4', 'ID')
    ->setCellValue('B4', 'Nama Makanan')
    ->setCellValue('C4', 'Jenis Makanan')
    ->setCellValue('D4', 'Harga Makanan')
    ->setCellValue('E4', 'Gambar Makanan')
    ->setCellValue('F4', 'Stok');

// merge and nya
$excel->getActiveSheet()->mergeCells('A1:F1');
$excel->getActiveSheet()->mergeCells('A3:F3');

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

$excel->getActiveSheet()->getStyle('A4:F4')->applyFromArray(
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
header('Content-Disposition:attachment; filename="Laporan Table Makanan ' . $tanggal . '.xlsx"');
header('Cache-Control: max-age=0');

$file = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');

$file->save('php://output');
