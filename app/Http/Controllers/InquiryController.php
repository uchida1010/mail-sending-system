<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\User;
use App\Http\Requests\InquiryRequest;

class InquiryController extends Controller
{
    public function create() {
        
        $users = User::all();

        return view('Inquiry.create', compact('users'));
    
    }

    public function index(Request $request) {

        $query = Inquiry::query();
        
        $inquiries = $query->get();

        return view('inquiry.index', compact('inquiries'));
    }

    public function store(InquiryRequest $request) {
        
        $validated = $request->validated();

        $inquiries = new Inquiry;

        $inquiry = $inquiries->store($validated);

        if ($inquiry === false) {
            return redirect('inquiry/create')->withInput();
        }

        return redirect('mail-sending-system/inquiry/index');
    }
}
