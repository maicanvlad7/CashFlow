<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Money;
use DB;

class MoneyController extends Controller
{
    //
    public function store()
    {
        Money::create(request()->validate([
            'details' => 'required|string',
            'amount'  => 'required',
            'status_id' => 'required'
        ]));

        return back();
    }

    public function destroy($id)
    {
        Money::where('id',$id)->delete();
        
        return back();
    }

    public function display()
    {
        //toate intrarile din baza de date
        $data = Money::with('status')->paginate(7);
        $calculat = $this->computeStatusSum(2) - $this->computeStatusSum(3);

        return view('content.moneyTable', [
            'data'      => $data,
            'restituire' => $this->computeStatusSum(1),
            'incasat'    => $this->computeStatusSum(2),
            'platit'     => $this->computeStatusSum(3),
            'calculat'   => $calculat
        ]);
    }


    //returneaza totalul unor intrari cu un anumit status
    //statusuri: 1-astept rest, 2-incasat, 3-platit
    public function computeStatusSum($idStatus)
    {
        $entries = Money::where('status_id', $idStatus)->get();
        $total = 0; 

        foreach ($entries as $ent)
        {
            $total += $ent->amount;
        }

        return $total;
    }
}
