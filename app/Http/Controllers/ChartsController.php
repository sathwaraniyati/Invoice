<?php

namespace App\Http\Controllers;

use DB;

use Carbon\Carbon;
use App\Models\Invoice;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ChartsController extends Controller
{
    public function index()
    {
        //month charts Query


        $months = Invoice::get()->groupby(function($invoice){
            return Carbon::parse($invoice->date)->format('M');
            });
            $data = array();
           //foreach Loop months
            foreach($months as $key=>$value)
            {
                $data[$key] = count($value);

            }
            return view('charts')->with('data', $data);


    }
    public function bar()
    {
         // query pass
        $data = DB:: select(" SELECT monthname(invoices.date) as month, sum(items.cost) as total
        FROM invoices
        left JOIN items ON invoices.id = items.invoice_id
        GROUP BY month");
        //months array multi dimesh array
        $months= [
            ["label" => "January" ,"y" => 0],
            ["label" => "February" ,"y" => 0],
            ["label" => "March" ,"y" => 0],
            ["label" => "April" ,"y" => 0],
            ["label" => "May" ,"y" => 0],
            ["label" => "June" ,"y" => 0],
            ["label" => "July" ,"y" => 0],
            ["label" => "August" ,"y" => 0],
            ["label" => "September" ,"y" => 0],
            ["label" => "October" ,"y" => 0],
            ["label" => "November" ,"y" => 0],
            ["label" => "December" ,"y" => 0],
        ];
       //nested foreach loop
        foreach($data as $datas){
            foreach($months as $key => $value){
                if($datas->month === $value["label"]) // compare $datas and $value  Identical logic
                {
                    $value["y"] = $datas->total;
                    $months[$key] =  $value;
                }
            }
        }
        // data pass to view
       return view('barcharts')->with('months', $months);
    }
}
