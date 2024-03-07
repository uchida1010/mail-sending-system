<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\User;
use App\Http\Requests\InquiryRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSend;

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

    public function send(InquiryRequest $request)
    {
        $validated = $request->validated();

        Mail::to($request->user())->send(new MailSend($validated['user'], $validated['content'], $validated['company'], $validated['name'], $validated['tel'], $validated['email']));

        return redirect('/mail-sending-system/inquiry/index');
    }
}
