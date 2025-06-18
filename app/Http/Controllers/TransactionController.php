<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{

    // Show detail Transaction (hanya customer)
    public function show($id)
    {
        $transaction = Transaction::with(['user', 'book'])->findOrFail($id);
        return response()->json($transaction);
    }

    // Create Transaction (hanya customer)
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'qty'     => 'required|integer|min:1',
        ]);

        $transaction = Transaction::create([
            'user_id' => $request->user()->id,
            'book_id' => $request->book_id,
            'qty'     => $request->qty,
        ]);

        return response()->json($transaction, 201);
    }

    // Update Transaction (hanya customer)
    public function update(Request $request, $id)
    {
        $transaction = Transaction::where('id', $id)
            ->where('user_id', $request->user()->id)
            ->firstOrFail();

        $request->validate([
            'qty' => 'required|integer|min:1',
        ]);

        $transaction->update([
            'qty' => $request->qty,
        ]);

        return response()->json($transaction);
    }

    // Read All Transaction (hanya admin)
    public function index()
    {
        $transactions = Transaction::with(['user', 'book'])->get();
        return response()->json($transactions);
    }

    // Destroy Transaction (hanya admin)
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return response()->json(['message' => 'Transaction deleted']);
    }
}
