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
        $totalPendaftar = DB::table('cab')
                            ->whereRaw(DB::raw('YEAR(created_at)=YEAR(CURRENT_DATE)'))
                            ->count();

        $totalWaitConf = DB::table('cab')
                            ->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                            ->whereNull('cab.deleted_at')
                            ->where('kode_pembayaran_cab.status','wait_conf')
                            ->whereRaw(DB::raw('YEAR(cab.created_at)=YEAR(CURRENT_DATE)'))
                            ->count();

        $totalNotPaid = DB::table('cab')
                            ->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                            ->whereNull('cab.deleted_at')
                            ->where('kode_pembayaran_cab.status','not_paid')
                            ->whereRaw(DB::raw('YEAR(cab.created_at)=YEAR(CURRENT_DATE)'))
                            ->count();
        
        $totalPaid = DB::table('cab')
                        ->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                        ->whereNull('cab.deleted_at')
                        ->where('kode_pembayaran_cab.status','paid')
                        ->whereRaw(DB::raw('YEAR(cab.created_at)=YEAR(CURRENT_DATE)'))
                        ->count();

        return view('admin.anggota.cab-master',[
            'total' => $totalPendaftar,
            'notpaid' => $totalNotPaid,
            'waitconf' => $totalWaitConf,
            'paid' => $totalPaid
        ]);
    }
}
