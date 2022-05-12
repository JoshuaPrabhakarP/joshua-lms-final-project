<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - EducationalRealm</title>
    <link rel="stylesheet" href="../css/courses.css">
</head>

<body>
    <header>
        <a href="../pages/home.php" style="text-decoration: none;">
            <h1 class='logo'>EducationalRealm</h1>
        </a>
        <nav>
            <a href="../pages/home.php">Home</a>
            <a href="../pages/courses.php" style="font-weight: bolder; background-color:lightgrey ;">All Courses</a>
            <a href="../pages/tasks.php">To-Do</a>
            <a href="../pages/account.php">My Account</a>
            <a href="../pages/logout.php">Log out</a>
        </nav>
        <div class="separator"></div>
    </header>
    <main>
        <div class="head">
            <p class="p1">Courses</p>
            <p class="p2"> Ambition accepted. Learn the latest skills to reach your professional goals.</p>
        </div>
        <div class="container-outer">
            <div class="course">
                <p class="course-name">Web Development (Basic)</p>
                <iframe width="60%" height="83%" src="https://www.youtube.com/embed/videoseries?list=PLWKjhJtqVAbnSe1qUNMG7AbPmjIG54u88" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <div class="course-desc">
                    <h3>About this course</h3>
                    <p>Do you realize that the only functionality of a web application that the user directly interacts with is through the web page? Implement it poorly and, to the user, the server-side becomes irrelevant! Today’s user expects a lot out
                        of the web page: it has to load fast, expose the desired service, and be comfortable to view on all devices: from a desktop computers to tablets and mobile phones. <br><br> In this course, we will learn the basic tools that every
                        web page coder needs to know. We will start from the ground up by learning how to implement modern web pages with HTML and CSS. We will then advance to learning how to code our pages such that its components rearrange and resize
                        themselves automatically based on the size of the user’s screen. You’ll be able to code up a web page that will be just as useful on a mobile phone as on a desktop computer. No “pinch and zoom” required!</p>
                </div>
                <p class="course-complete-butt"><input type="checkbox" name="Course-status" value="Completed" class="mycheckbox"> Completed</p>
            </div>

            <div class="course">
                <p class="course-name">UI Design Specialization</p>
                <iframe width="60%" height="83%" src="https://www.youtube.com/embed/videoseries?list=PLjwm_8O3suyPkIphVrJaebR2qE8jylWBQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <div class="course-desc">
                    <h3>About this course</h3>
                    <p>In this Specialization, you will learn industry-standard theory and methods for developing successful user interfaces (UIs). Upon completing this Specialization, you will have fluency with the user research, prototyping and evaluation
                        techniques necessary for creating intuitive interfaces that facilitate good user experiences. You will also have demonstrated this fluency through an in-depth Capstone Project that can be shown to prospective employers in the fast-growing
                        field of UI design.<br><br> Concepts and techniques covered include structured approaches for helping you understand your user base and their needs (e.g. contextual inquiry and design psychology), widely-employed prototyping and
                        design methods (e.g. low-fidelity and paper prototyping), and robust techniques for helping you evaluate your design choices (e.g. heuristic evaluation and user studies). By the end of the Specialization, you will be comfortable
                        applying these concepts and techniques to design an interface for a wide variety of users from around the world.</p>
                </div>
                <p class="course-complete-butt"><input type="checkbox" name="Course-status" value="Completed" class="mycheckbox"> Completed</p>
            </div>

            <div class="course">
                <p class="course-name">Node JS</p>
                <iframe width="60%" height="83%" src="https://www.youtube.com/embed/videoseries?list=PL4cUxeGkcC9gcy9lrvMJ75z9maRw4byYp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <div class="course-desc">
                    <h3>About this course</h3>
                    <p>This course deals with all things server-side. We base the entire course around the NodeJS platform. We start with a brief overview of the Web protocols: HTTP and HTTPS. We examine NodeJS and NodeJS modules: Express for building web
                        servers.
                        <br><br> Node.js is an open-source, cross-platform, back-end JavaScript runtime environment that runs on the V8 engine and executes JavaScript code outside a web browser. Node.js is an open source server environment. Node.js is
                        free. Node.js runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.). Node.js uses JavaScript on the server. Node.js uses asynchronous programming! Node.js runs single-threaded, non-blocking, asynchronously programming,
                        which is very memory efficient.Node.js can generate dynamic page content. Node.js can create, open, read, write, delete, and close files on the server. Node.js can collect form data. Node.js can add, delete, modify data in your
                        database. Node.js files contain tasks that will be executed on certain events. A typical event is someone trying to access a port on the server. Node.js files must be initiated on the server before having any effect. Node.js files
                        have extension ".js"</p>
                </div>
                <p class="course-complete-butt"><input type="checkbox" name="Course-status" value="Completed" class="mycheckbox"> Completed</p>
            </div>
            <div class="course">
                <p class="course-name">JavaScript Course</p>
                <iframe width="60%" height="83%" src="https://www.youtube.com/embed/videoseries?list=PLRAV69dS1uWSxUIk5o3vQY2-_VKsOpXLD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <div class="course-desc">
                    <h3>About this course</h3>
                    <p>This course introduces the programming language JavaScript and shows the websites that include the type of interactions students will eventually be able to develop. Learners will understand the importance of how JavaScript was developed
                        and why such history impacts the way JavaScript is currently written and in future releases.
                        <br><br> Learners will write their first scripts, have their HTML and CSS skills assessed, create variables and arrays and assign values to them. If student’s skills are lacking, resources and recommendations are provided to improve
                        these skills. There is ample opportunity for students to practice these first, core skills.
                    </p>
                </div>
                <p class="course-complete-butt"><input type="checkbox" name="Course-status" value="Completed" class="mycheckbox"> Completed</p>
            </div>
        </div>
    </main>
    <footer>
        <p class="p1"> Happy Learning with EducationalRealm </p>
        <p class="p2"> Make a part of your journey with us. Enroll now ! </p>
        <hr>
        <p class="p3"><small>Copyright &copy; 2022 Joshuva Prabhakar</small></p>
    </footer>
</body>

</html>