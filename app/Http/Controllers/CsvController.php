<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;



class CsvController extends Controller
{
    public function uploadCsv(Request $request)  // Make sure this method name matches
    {
        // Validate the file
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);

        // Get the uploaded file
        $file = $request->file('csv_file');

        // Read the CSV content using League CSV package
        $csv = Reader::createFromPath($file->getRealPath(), 'r');
        $csv->setHeaderOffset(0); // Use the first row as headers
        $records = $csv->getRecords(); // Get records as an iterable


        // Extract only two specific fields (e.g., 'field1' and 'field2')
        // $filteredRecords = [];
        // foreach ($records as $record) {
        //     $filteredRecords[] = [
        //         'field1' => $record['field1'] ?? null, // Replace 'field1' with the actual column name
        //         'field2' => $record['field2'] ?? null, // Replace 'field2' with the actual column name
        //     ];
        // }


        // Pass the records to the view
        return view('csv-view', compact('records', 'csv'));
    }
public function uploddata(){

    return view('uploddata');
}


}
