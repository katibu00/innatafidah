<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        $data['blogs'] = Blog::orderBy('created_at', 'desc')->take(3)->get();;
        return view('frontend.pages.about',$data);
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function founder()
    {
        return view('frontend.pages.founder');
    }

    public function team()
    {
        $teamMembers = TeamMember::orderBy('serial_number')->get();

        return view('frontend.pages.team', ['teamMembers' => $teamMembers]);
    }
}
