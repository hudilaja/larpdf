<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\TemplateProcessor;

class WordController extends Controller
{
    public function index()
    {
        $templatePath = storage_path('../public/templateskm/Template SKM.docx');
        $templateProcessor = new TemplateProcessor($templatePath);

        $templateProcessor->setValues([
            'nama_dinas' => 'Bagian Organisasi',
            'tahun' => 2024,
            'kategori_jasa' => 'Administrasi'
        ]);

        // Simpan dokumen yang sudah diisi
        $fileName = 'bagianorganisasi.docx';
        $outputPath = storage_path('app/public/' . $fileName);
        $templateProcessor->saveAs($outputPath);

        // Download file
        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
