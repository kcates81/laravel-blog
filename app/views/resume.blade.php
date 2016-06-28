@extends('layouts.master')

@section('content')
    <h1 class="center-align">My Resume Highlights</h1>
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header active flow-text"><i class="material-icons">assignment</i>Summary Statement</div>
            <div class="collapsible-body">
                <p class="flow-text">Entry-level LAMP+J Developer transitioning from a 10+ year career in proposal/project management and business development. Particularly interested in using back-end languages to solve problems for businesses and end-users. Currently adding functionality to personal website using Laravel and watching Laracasts to deepen understanding of PHP and the Laravel framework.</p>
            </div>
        </li>
        <li>
            <div class="collapsible-header flow-text"><i class="material-icons">thumb_up</i>Skills</div>
            <div class="collapsible-body">
                <ul>
                    <li class="flow-text"><strong>Front-End Languages</strong></li>
                        <ul>
                            <li class="flow-text">HTML 5</li>
                            <li class="flow-text">CSS 3</li>
                            <li class="flow-text">JavaScript</li>
                            <li class="flow-text">jQuery</li>
                            <li class="flow-text">Twitter Bootstrap CSS</li>
                            <li class="flow-text">Materialize CSS</li>
                            <li class="flow-text">Google Maps API</li>
                            <li class='flow-text'>Mailgun API</li>
                            <li class="flow-text">Open Weather Maps API</li>
                            <li class="flow-text">Tiny MCE Text Editor</li>
                        </ul>

                    <br>
                    <li class="flow-text"><strong>Back-End Languages</strong></li>
                        <ul>
                            <li class="flow-text">PHP</li>
                            <li class="flow-text">Laravel 4.2</li>
                            <li class="flow-text">MySQL</li>
                            <li class="flow-text">SequelPro</li>
                        </ul>
                    <br>
                    <li class="flow-text"><strong>Other Tools</strong></li>
                        <ul>
                            <li class="flow-text">GitHub</li>
                            <li class="flow-text">Trello</li>
                            <li class="flow-text">Vagrant VM</li>
                        </ul>
                </ul>
            </div>
        </li>
        <li>
            <div class="collapsible-header flow-text"><i class="material-icons">code</i>Projects</div>
            <div class="collapsible-body">
                <p class="flow-text"><a href="https://github.com/Freelancer-Invoice-Tool/flit.dev"><strong>FLIT</strong></a><br>My team and I have developed an application that allows freelancers to track their projects and outstanding invoices using the Laravel framework. This application allows users to create an account, projects, and clients and track project and invoice deadlines. Users can view their information in a high-level dashboard view or in detailed page views. The hallmarks of this project are simplistic design, intuitive information architecture, and modular, easily-maintainable code.</p>
                <p class="flow-text"><a href="https://github.com/kcates81/laravel-blog" target="_blank"><strong>Blog Project</strong></a> <br>Developed and deployed a personal website and blog from scratch using the Laravel 4.2 framework.</p> 

                <p class="flow-text"><a href="https://github.com/greasy-blanket/adlister.dev" target="_blank"><strong>Adlister Project</strong></a><br>Worked with two other classmates to develop a Craigslist clone using PHP and MySQL (SequelPro). Used Trello as a project management tool to develop all tasks and related activities, assign responsibilities and due dates, and communicate project status. Also, first experience forking, branching, pulling, and merging code as part of a team in GitHub.</p>
                
                <p class="flow-text"><a href="https://github.com/kcates81/Codeup-Web-Exercises/blob/master/public/national_parks.php" target="_blank"><strong>National Parks Project</strong></a><br>Used PHP, MySQL, Materialize CSS, custom CSS, and HTML to create a listing of National Parks complete with pagination and form that allows users to add parks to the list and display them within the application.</p>

                <p class="flow-text"><a href="https://github.com/kcates81/Codeup-Web-Exercises/blob/master/public/weather_map.js" target="_blank"><strong>Weather Map Project</strong></a><br>Used JavaScript, HTML, CSS, Materialize CSS, Google Maps API, and Open Weather Map API to develop an application that displays the 5-day weather forecast based on location. Users can enter the longitude and latitude of the forecast location or they can drag and drop the location marker within the map to change the forecast location. </p>
            </div>
        </li>
        <li>
            <div class="collapsible-header flow-text"><i class="material-icons">school</i>Education and Certifications</div>
            <div class="collapsible-body">
                <p class="flow-text"><strong>2016 | Codeup</strong><br>16-week Immersive learning program that teaches the LAMP+J stack</p>

                <p class="flow-text"><strong>2012 | Villanova University</strong><br>Government Contract Management Certificate Program</p>

                <p class="flow-text"><strong>2011 | Project Management Professional (PMP) Certification, Project Management Institute</strong><br>PMP Number: 1450942</p>

                <p class="flow-text"><strong>2003 | Salisbury University</strong><br>Bachelor of Arts - English</p>
            </div>
        </li>
        <li>
            <div class="collapsible-header flow-text"><i class="material-icons">work</i>Previous Work Experience</div>
            <div class="collapsible-body">
                <p class="flow-text"><strong>December 2012 – March 2016 | Professional Performance Development Group, Inc.</strong><br>Proposal Writer/Coordinator</p>

                <p class="flow-text"><strong>May 2010 – December 2012 | V-Tech Solutions, Inc.</strong><br>Contracts Manager | Capture Manager, Defense and Intelligence Sector | Proposal Specialist</p>
            </div>
        </li>
    </ul>
    <div>
        <button class="btn"><a href="/documents/kcates_webdev_resume.pdf" target="_blank">Download Hardcopy Resume</a></button>
    </div>   
@stop

@section('bottom-script')
    <script>
        $(document).ready(function(){
            $('.collapsible').collapsible({
                accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            });
        });
    </script>
@stop