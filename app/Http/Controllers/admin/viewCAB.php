<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Carbon\Carbon;
use DB;
use Uuid;

class viewCAB extends Controller
{
    public function viewCAB()
    {

        $year = Carbon::now()->format('Y');

        $totalPendaftar = DB::table('cab')
                            ->where(DB::raw('YEAR(created_at)'),$year)
                            ->count();

        $totalWaitConf = DB::table('cab')
                            ->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                            ->whereNull('cab.deleted_at')
                            ->where('kode_pembayaran_cab.status','wait_conf')
                            ->count();

        $totalNotPaid = DB::table('cab')
                            ->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                            ->whereNull('cab.deleted_at')
                            ->where('kode_pembayaran_cab.status','not_paid')
                            ->count();
        
        $totalPaid = DB::table('cab')
                        ->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                        ->whereNull('cab.deleted_at')
                        ->where('kode_pembayaran_cab.status','paid')
                        ->count();

        return view('admin.anggota.cab-master',[
            'total' => $totalPendaftar,
            'notpaid' => $totalNotPaid,
            'waitconf' => $totalWaitConf,
            'paid' => $totalPaid
        ]);
    }
}
