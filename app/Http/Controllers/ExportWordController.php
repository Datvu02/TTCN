<?php

namespace App\Http\Controllers;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Http\Request;

class ExportWordController extends Controller
{
    public function exportWord(Request $request)
    {
        // Nhận dữ liệu HTML từ request
        $htmlContent = $request->getContent();

        // Tạo một đối tượng PhpWord
        $phpWord = new PhpWord();

        // Thêm nội dung HTML vào tài liệu Word
        $section = $phpWord->addSection();
        \PhpOffice\PhpWord\Shared\Html::addHtml($section, $htmlContent);

        // Lưu tài liệu Word vào một file
        $filename = 'example.docx';
        $path = storage_path('app/public/' . $filename);

        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($path);

        // Trả về response để người dùng có thể tải xuống file Word
        return response()->download($path)->deleteFileAfterSend(true);
    }
}
