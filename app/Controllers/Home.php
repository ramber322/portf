<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
       $data = [
    'name'    => 'Ramber, Abdul Malik P.',
    'title'   => 'Web Developer',
    'tagline' => '4th Year BS-IT student looking forward to work as web developer.',
    'photo' => 'images/profile-private.png',
    'contact' => [
        'email'    => 'ramber@gmail.com',
        'phone'    => '+63 912 345 6789',
        'address'  => 'Philippines',
        'github'   => 'https://github.com/ramber322',
        'linkedin' => 'https://linkedin.com/in/ramber322',
    ],
    'personal' => [
        'Date of Birth'  => 'January 1, 2003',
        'Place of Birth' => 'Iligan, Philippines',
        'Nationality'    => 'Filipino',
    ],
    'objective' => 'To work as a web developer and continue learning through real projects.',
    'full_personal' => [
        'Surname'          => 'Ramber',
        'First Name'       => 'Abdul Malik',
        'Middle Name'      => 'Pacquiao',
        'Name Extension'   => 'N/A',
        'Date of Birth'    => '1/1/2003',
        'Place of Birth'   => 'Iligan, Philippines',
        'Sex at Birth'     => 'Male',
        'Civil Status'     => 'Single',
        'Height (m)'       => '1.75',
        'Weight (kg)'      => '55',
        'Blood Type'       => 'O+',
        'Citizenship'      => 'Filipino',
        'Residential Address' => 'Purok 5, Maria Subdivision, Baraas, Iligan City, Lanao Del Norte',
        'Permanent Address'   => 'Purok 5, Maria Subdivision, Baraas, Iligan City, Lanao Del Norte',
        'Zip Code'    => '9200',
        'Telephone No.'    => '(02) 8123-4567',
        'Mobile No.'       => '0917-123-4567',
        'Email'            => 'ramber123@gmail.com',
    ],
    'education' => [
        [
            'school' => 'St Peters College',
            'degree' => 'BS in Information Technology',
            'year'   => '2022 - Present',
        ],
        [
            'school' => 'Corpus Christi Parochial School of Iligan',
            'degree' => 'Junior/Senior High School',
            'year'   => '2016 - 2022',
        ],
         [
            'school' => 'South 1-A Central School',
            'degree' => 'Elementary School',
            'year'   => '2010 - 2016',
        ],
    ],
    'experience' => [
    [
        'from'     => '08/01/2022',
        'to'       => '30/05/2024',
        'position' => 'Information Technology Officer II',
        'company'  => ' Department of Information and Communications Technology (DICT)',
    ],
    [
        'from'     => '08/01/2020',
        'to'       => '30/05/2021',
        'position' => 'IT Support Specialist',
        'company'  => 'ABC Corporation, Makati City',
    ],
],
    'skills' => [
        'Frontend' => ['React', 'JavaScript', 'HTML', 'CSS'],
        'Backend'  => ['PHP', 'Laravel','CodeIgniter 4', 'NodeJS', 'MySQL'],
        'Tools'    => ['Git', 'VS Code', 'Figma'],
    ],
    'projects' => [
        [
            'title' => 'Movie App',
            'desc'  => 'A movie browsing app that pulls film data from a public API.',
            'link'  => 'https://github.com/ramber322',
        ],
        [
            'title' => 'Grocery App',
            'desc'  => 'A simple grocery list app for keeping track of items to buy.',
            'link'  => 'https://github.com/ramber322',
        ],
        [
            'title' => 'Posture Care',
            'desc'  => 'A fitness app built to help users improve posture through guided routines.',
            'link'  => 'https://github.com/ramber322',
        ],
    ],
];

return view('portfolio_page', $data);

    }
}