<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function create() {
        
        $categories = ['A', 'B', 'C'];

        return view('Inquiry.create', compact('categories'));
    
    }
}
