<?php  
    class PostTableSeeder extends Seeder {
          public function run()
        {
            $post = new Post();
            $post->user_id = User::first()->id;
            $post->title = 'Laracasts';
            $post->description = "A very convenient tool";
            $post->body =  "I'm currently listening to Laravel 4 from Scratch on Laracasts to supplement the lessons from Codeup as we are learning Laravel 4.2. It has been helpful.";
            $post->save();

            $post = new Post();
            $post->user_id = User::first()->id;
            $post->title = 'Why I Started Codeup';
            $post->description = "Adventures in Coding";
            $post->body =  "I was in a career that I didn't enjoy for the 12 years I was in it. I learned a lot, but I wasn't interested in continuing down that path. Unfortunately, I had become comfortable in that career path despite not enjoying it and it wasn't until some unexpected changes on my job occurred that I finally decided to make a change. I had been hearing about how important coding skills were going to be in the job market as well as the lack of diveristy, but I had written it off as something I couldn't do because I didn't have a CS, engineering, or math degree. On a whim, I started poking around on some other coding sites and found that I enjoyed it. I signed up for Codeup and started in March. It hasn't been easy, but it's the best career decision I've ever made.";
            $post->save();

            $post = new Post();
            $post->user_id = User::first()->id;
            $post->title = 'Trello' ;
            $post->description = "An easy-to-use project management tool";
            $post->body =  "I was recently working on a group project for Codeup where we decided to use the Trello project management tool to organize and assign tasks. My teammates and I were able to plan out all of the major tasks and related activities for the project before we wrote a line of code. This helped us to determine our progress and conceptualize our end goal. Specifically, Trello allowed each member to see what tasks were assigned to which teammember, when it was due, and how much progress had been made. It also kept us from stepping on each other's toes and working on the same tasks at the same time. ";
            $post->save();

            $post = new Post();
            $post->user_id = User::first()->id;
            $post->title = 'Backend Bonanza' ;
            $post->description = "Why I gravitate to backend development";
            $post->body =  "Since starting Codeup, I've noticed that I gravitate more toward the backend languages that we've learned, which was surprising to me. I thought that I'd enjoy the front end, but found it frustrating. There is something about writing code and getting a core piece of functionality working that excites me more so than making a site or application that looks nice. This may have to do with my background in organizing and manipulating content.";
            $post->save();
        }
    }
?>