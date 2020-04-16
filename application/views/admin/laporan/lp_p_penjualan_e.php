<?php
$excel = new PHPExcel();

$excel->setActiveSheetIndex(0);


//baris keberapa
$row = 5;
$mahasiswa = $this->db->query("SELECT * FROM tb_detail_pesan WHERE waktu_pesanan BETWEEN '$hasil1' AND '$hasil2' ")->result();
foreach ($mahasiswa as $dp) {
    $h1 = $this->db->get_where('tb_pembayaran', ['kode_pembayaran' => $dp->kode])->row_array();

    $p = 0;

    if ($dp->makanan_1 == null) {
        $p;
    } else {
        $p++;
        if ($dp->makanan_2 == null) {
            $p;
        } else {
            $p++;
            if ($dp->makanan_3 == null) {
                $p;
            } else {
                $p++;
                if ($dp->makanan_4 == null) {
                    $p;
                } else {
                    $p++;
                    if ($dp->makanan_5 == null) {
                        $p;
                    } else {
                        $p++;
                        $p;
                    }
                }
            }
        }
    }

    $pm = 0;
    if ($dp->minuman_1 == null) {
        $pm;
    } else {
        $pm++;
        if ($dp->minuman_2 == null) {
            $pm;
        } else {
            $pm++;
            if ($dp->minuman_3 == null) {
                $pm;
            } else {
                $pm++;
                if ($dp->minuman_4 == null) {
                    $pm;
                } else {
                    $pm++;
                    if ($dp->minuman_5 == null) {
                        $pm;
                    } else {
                        $pm++;
                        $pm;
                    }
                }
            }
        }
    }
    $excel->getActiveSheet()
        ->setCellValue('A' . $row, $h1['id_pembayaran'])
        ->setCellValue('B' . $row, $h1['kode_pembayaran'])
        ->setCellValue('C' . $row, $p)
        ->setCellValue('D' . $row, $pm)
        ->setCellValue('E' . $row, $dp->waktu_pesanan)
        ->setCellValue('F' . $row, "Rp. " . number_format($h1['total_pembayaran'], 0, ".", "."));
    $row++;
}
date_default_timezone_set('Asia/Jakarta');
$tanggal = $hari . "," . date(' d ') . $bulan  . date(' Y ');
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);

$excel->getActiveSheet()
    ->setCellValue('A1', 'Laporan Penjualan')
    ->setCellValue('A2', 'Periode Tanggal ' . $hasil1 . " sampai " . $hasil2 . '')
    ->setCellValue('A3', $tanggal)
    ->setCellValue('A4', 'ID')
    ->setCellValue('B4', 'Kode Pembayaran')
    ->setCellValue('C4', 'Jumlah Makanan')
    ->setCellValue('D4', 'Jumlah Minuman')
    ->setCellValue('E4', 'Waktu Pesanan')
    ->setCellValue('F4', 'Total Pembayaran');

// merge and nya
$excel->getActiveSheet()->mergeCells('A1:F1');
$excel->getActiveSheet()->mergeCells('A3:F3');
$excel->getActiveSheet()->mergeCells('A2:F2');

//alignnya

$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal('center');
$excel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');
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

$excel->getActiveSheet()->getStyle('A2')->applyFromArray(
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
header('Content-Disposition:attachment; filename="Laporan Penjualan ' . $tanggal . '.xlsx"');
header('Cache-Control: max-age=0');

$file = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');

$file->save('php://output');
