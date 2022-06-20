<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>

    <?php
    require "database.php";
    $results =  $conn->query("SELECT *  FROM  project ");
    $alle_projecten = $results->fetch_all(MYSQLI_ASSOC);

    $skillsresults =  $conn->query("SELECT *  FROM  skills ");
    $alle_skills = $skillsresults->fetch_all(MYSQLI_ASSOC);

    $worksresults =  $conn->query("SELECT *  FROM  work ");
    $alle_werk = $worksresults->fetch_all(MYSQLI_ASSOC);

    ?>



    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#projects" class="menu-btn">Projects</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#workexperience" class="menu-btn">Work Experience</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Kenny Bogaart</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-1.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Kenny. <span class="typing-2"></span></div>
                    <p>I'm 21 and write code in my free time.</p>
                    <a href="CV.docx" download>Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="projects" id="projects">
        <div class="max-width">
            <h2 class="title">My project</h2>
            <div class="serv-content">


                <?php foreach ($alle_projecten as $project) {

                ?>


                    <div class="card">
                        <div class="box">


                            <div class="text"><?php echo $project['projectnaam']  ?> </div>
                            <p>I made a simulation for a crossroad to simulate how you can make it smart </p>
                        </div>
                    </div>

                <?php  }   ?>




            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>those are my Programmer skills</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">

                    <?php foreach ($alle_skills as $skill) { ?>

                        <div class="bars" style="--progress: <?php echo $skill['progress']; ?>%;">
                            <div class="info">
                                <span><?php echo $skill['title']      ?></span>
                                <span><?php echo $skill['progress']      ?>%</span>
                            </div>
                            <div class="line"></div>
                        </div>
                    <?php  }    ?>

                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="workexperience" id="workexperience">
        <div class="max-width">
            <h2 class="title">work experience </h2>
            <div class="carousel owl-carousel">

                <?php foreach ($alle_werk as $work) { ?>

                    <div class="card">
                        <div class="box">
                            <img src="images\<?php echo $work['image'] ?> " alt=""> <?php echo $work['name'] ?>
                            <div class="text"><?php ['name'] ?></div>
                            <p><?php echo $work['description'] ?> </p>
                        </div>
                    </div>
                <?php    } ?>
               




            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>If you have any questions, Feel free to Contact me</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Kenny Bogaart </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Roggeland 30, Netherland</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">kennybogaart@hotmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="contact.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" name="name" id="name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" name="subject" id="subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." name="message" id="message" required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By Kenny</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>

</html>