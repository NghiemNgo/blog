<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Nghiem Ngo Van',
            'email' => 'nghiemnv@rikkeisoft.com',
            'password' => bcrypt('nghiem12'),
            
        ]);
        
        DB::table('posts')->insert([
            'title'=> '5 Senior Software Engineer(PHP,C++,.Net)UpTo $1000 ',
            'description' => 'The successful candidates will perform architecture, design, and implementation of advanced software development projects. Considered to be the last point of escalation for technical issues relating to software development process, issues, and technical software development roadblocks. To be a decision maker for software architecture and design decisions for software development projects in relation to stated business requirements.

            Responsible for planning, processing and performing all jobs in an efficient manner with no assistance from supervisor/manager;
            Working closely with upper management to ensure software projects meet stated business requirements;
            Design and develop programming systems making specific key decisions to meet business requirements;
            Build and document code structure consistently throughout the development process;
            Maintain superior knowledge and skills in all relevant software development technologies and methodologies;
            Assist and mentor team members to help improve their programming skills;
            Code and debug applications in various software languages;
            Maintain and update Code Libraries;
            Ensure all code and documentation complies to company and industry standards;
            Support, maintain and document software functionality;
            Implement performance tuning, improvement, balancing, usability, and automation of company systems.',
            'requires' => '    IT University qualifications
            At least 3 years experience in one of the following programming language:
            For C++: C++, QT framework
            For PHP: PHP, HTML, CSS, JQuery, Zend, CI, Yii Framework (experience in Linux or Amazon cloud will be a plus)
            For .Net:ASP.NET, MVC, JavaScript,HTML, CSS, XML/XSL, Ajax,.Net framework
            At least 3 year experience in at least one of the following database: PostgreSQL, SQLite,,Oracle,MS SQLserver, MySQL
            Experience working independently and as part of a team;
            Ability to react to project adjustments and alterations promptly and efficiently;
            Ability to effectively prioritize and execute tasks in a high-pressure environment;
            Having a competent level of English ability.',
            'salary' => 1000
        ]);
    }
}
