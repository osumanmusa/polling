<?php

namespace App\Exports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents, WithMapping {
   use Exportable;
   protected $ps_code;

 function __construct($ps_code) {
        $this->ps_code = $ps_code;
 }


    public function collection()
    {
        $sheet= Data::where('ps_code',$this->ps_code)->get(); 


        return $sheet;
    }
       



    public function map($sheet): array
    {

        return [
            $sheet->id,
            $sheet->name,
            $sheet->position,
            $sheet->ps_code,
            $sheet->gender,
            $sheet->phone,
            $sheet->email,
            $sheet->voter_id,
            $sheet='assets/images/profiles/'.$sheet->pic ,
            
            
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Name',
            'position',
            'ps_code',
            'Gender',
            'phone',
            'email',
            'voter_id',
            'image',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
            },
        ];
    }
}
