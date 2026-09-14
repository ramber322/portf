<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'name'    => 'Ramber, Abdul Malik P.',
            'title'   => 'Web Developer',
            'contact' => [
                'email'    => 'ramber@gmail.com',
                'phone'    => '+63 912 345 6789',
                'address'  => 'Philippines',
                'github'   => 'https://github.com/ramber322',
                'linkedin' => 'https://linkedin.com/in/ramber322',
            ],
            'personal' => [
                'Date of Birth' => 'January 1, 2003',
                'Place of Birth'     => 'Iligan, Philippines',
                'Sex at Birth'     => 'Male',
                'Citizenship'   => 'Filipino',
            ],
            'objective' => 'To find work as a web developer and continue learning through projects.',
            'education' => [
                [
                    'school' => 'St Peters College',
                    'degree' => 'BS in Information Technology',
                    'year'   => '2022 - Present',
                ],
                [
                    'school' => 'Corpus Christi Parochial School of Iligan',
                    'degree' => 'Senior High School',
                    'year'   => '2020 - 2022',
                ],
                  [
                    'school' => 'South 1-A Central School',
                    'degree' => 'Elementary School',
                    'year'   => '2010 - 2016',
                ],
               
            ],
            'skills' => [
                'Frontend' => ['React', 'JavaScript', 'HTML', 'CSS'],
                'Backend'  => ['PHP', 'CodeIgniter 4', 'Laravel'],
                'Tools'    => ['Git', 'Figma', 'VS Code'],
            ],
            'projects' => [
                [
                    'title' => 'Movie App',
                    'desc'  => 'Fetches movies from a public API.',
                    'link'  => '#',
                ],
                [
                    'title' => 'Grocery App',
                    'desc'  => 'Grocery list application built with React.',
                    'link'  => '#',
                ],
                [
                    'title' => 'Weather Dashboard',
                    'desc'  => 'Fetches weather from a public API.',
                    'link'  => 'https://github.com/pish123',
                ],
            ],
        ];

        return view('welcome_message', $data);
    }
}