<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'name'     => 'Juan Dela Cruz',
            'title'    => 'Aspiring Web Developer',
            'about'    => 'I am a student learning CodeIgniter 4 and building my first portfolio.',
            'email'    => 'ramber@gmail.com',
            'github'   => 'https://github.com/ramber322',
            'skills'   => ['React', 'PHP', 'Javascript', 'MySQL'],
            'projects' => [
                [
                    'title' => 'Portfolio Website',
                    'desc'  => 'This very page, built with CodeIgniter 4.',
                    'link'  => '#'
                ],
                [
                    'title' => 'To-Do List App',
                    'desc'  => 'A simple CRUD app to practice MVC.',
                    'link'  => '#'
                ],
                [
                    'title' => 'Weather Dashboard',
                    'desc'  => 'Fetches weather from a public API.',
                    'link'  => 'https://github.com/pish123'
                ],
            ],
        ];

        //Pass data to the view
        return view('welcome_message', $data);
    }
}