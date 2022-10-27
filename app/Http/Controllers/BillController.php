<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\testbill;
use App\Models\bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bill=bill::all();
        return view("showbill",["bill"=>$bill]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $total=0;
        $good= testbill::all();
        foreach ($good as $g){
            $total+=$g->price * $g->quantity ;
        }

        return view("createbill",["good"=>$good,"total"=>$total]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,testbill $testbill)
    {

        $name = $request->string('name');
        $quantity = $request->integer('quantity');

        $y=testbill::where("name",$name)->first();
        $t=testbill::all();
        foreach ($t as $ts){
            if($ts->name==$name){
                $y->quantity= $quantity+$ts->quantity;
                $y->save();
                return response()->json(['success'=>true]);
            }
            }

            $x=Good::where("name",$name)->first();

        if($x) {
            $price = $x->price;
            $testbill->name=$name;
            $testbill->quantity=$quantity;
            $testbill->price=$price;
            $testbill->save();
            return response()->json(['success'=>true]);
        }
        $total=0;
        $good= testbill::all();
        foreach ($good as $g){
            $total+=$g->price * $g->quantity ;
        }

        return view("createbill",["good"=>$good,"total"=>$total]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $bill=new bill();
        $t=testbill::all();
        $total=0;
        foreach ($t as $g){
            $total+=$g->price * $g->quantity ;
        }

        $choice="";
        foreach ($t as $ts){
          $choice .=$ts->name."(".$ts->price."*".$ts->quantity."),";
        }
        $bill->choice=$choice;
        $bill->total=$total;
        $bill->save();
        testbill::truncate();
        $billdata=bill::all()->last();


        return view("billditals",['bill'=>$t,"total"=>$total,"billdata"=>$billdata]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        testbill::Find($id)->delete();
        return redirect("/storetestbill");
    }
}
