<?php

namespace App\Exports;

use App\Models\Number;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Number::all();
    }
    public function export() 
    { 
        return Excel::download(new ReportsExport, 'report.xlsx'); 
    }
    public function headings(): array { return [ 'Id', 'Tên dịch vụ', 'Thời gian cấp', 
        'Hạn sử dụng', 'STT', 'Tên khách hàng', 'Nguồn cấp', 'Email', 'Trạng thái', 'Số điện thoại', 'date']; }
    
}
