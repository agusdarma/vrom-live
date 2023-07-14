<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PoundSwingTrades;
use App\Models\SummaryPoundSwingTrades;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
class PoundSwingForwardTestController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = PoundSwingTrades::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    // ->addColumn('action', function($row){
       
                    //         $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                    //         return $btn;
                    // })
                    ->editColumn('open_time', function($data) {
                        $openTimeFormatted = Carbon::parse($data->open_time)->toDateTimeString();                        
                        return $openTimeFormatted;                        
                    })
                    ->editColumn('close_time', function($data) {
                        $closeTimeFormatted = Carbon::parse($data->close_time)->toDateTimeString();                        
                        return $closeTimeFormatted;                        
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $summaryPoundSwingTrades = SummaryPoundSwingTrades::where('name', '=', 'pound')->first();
        

        return view('pound-swing-forward-test',
        ['summaryPoundSwingTrades' => $summaryPoundSwingTrades]);
    }
}
