<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $person = [
            'name' => 'Samiullah Popalzai',
            'title' => 'Web Developer',
            'intro' => 'I build websites with Laravel.',
        ];
        return view('pages.home', ['person' => $person]);
    }
    public function about()
    {
        $skills = [
            'bio' => 'I am a web developer who loves clean code.',
            'skills' => ['PHP', 'Laravel', 'MySQL', 'JavaScript'],
        ];
        return view('pages.about', ['skills' => $skills]);
    }
    public function projects()
    {
        $projects = [
            ['title' => 'Todo App', 'description' => 'A simple task manager.', 'link' => 'https://example.com'],
            ['title' => 'Blog', 'description' => 'A Laravel blog.', 'link' => null],
        ];
        return view('pages.projects', ['projects' => $projects]);
    }
    public function contact()
    {
        $contact = [
            'email' => 'you@example.com',
            'github' => 'https://github.com/yourname',
            'linkedin' => 'https://linkedin.com/in/yourname',
        ];
        return view('pages.contact', ['contact' => $contact]);
    }
}
