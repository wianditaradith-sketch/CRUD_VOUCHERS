<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index()
    {
        $vouchers = Voucher::orderByDesc('id')->get();
        return view('vouchers.index', compact('vouchers'));
    }

    public function create()
    {
        return view('vouchers.form');
    }

    public function store(Request $request)
    {
        Voucher::create($this->validated($request));
        return redirect()->route('vouchers.index');
    }

    public function edit(Voucher $voucher)
    {
        return view('vouchers.form', compact('voucher'));
    }

    public function update(Request $request, Voucher $voucher)
    {
        $voucher->update($this->validated($request));
        return redirect()->route('vouchers.index');
    }

    public function destroy(Voucher $voucher)
    {
        $voucher->delete();
        return redirect()->route('vouchers.index');
    }

    private function validated(Request $request)
    {
        return $request->validate([
            'kode'   => 'required|string|max:50',
            'jenis'  => 'required|in:Persen (%),Nominal (Rp)',
            'nilai'  => 'required|integer|min:0',
            'syarat' => 'required|integer|min:0',
        ]);
    }
}