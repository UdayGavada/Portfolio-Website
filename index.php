<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Personal Portfolio website</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    </head>
    <body>
        <div class="scroll-up-btn">
            <i class="fas fa-angle-up"></i>
        </div>
        <nav class="navbar">
            <div class="max-width">
                <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
                <ul class="menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#teams">Teams</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
        
        <!-- home section start -->
        <section Class="home" id="home">
            <div class="max-width">
                <div class="home-content">
                    <div class="text-1">Hello, My name is</div>
                    <div class="text-2">Uday Gavada</div>
                    <div class="text-3">And I'm a <span> Programmer </span></div>
                    <a href="#">Hire me</a> 
                </div>
            </div>
        </section>

        <!-- about section start -->
        <section Class="about" id="about">
            <div class="max-width">
                <h2 class="title">About me</h2>
                <div class="about-content">
                    <div class="column left">
                        <img src="images/uday2.png" alt="">
                    </div>
                    <div class="column right">
                        <div class="text">I'm Uday and I'm a<span> Programmer</span></div>
                        <p>I am doing Bachlear of computer application from Savitribai phule pune university. Currently my aggrigate score is 9.5 CGPA. Computer application is omni present and it is present in every field. hence, I have invested last 2.5 years almost in developing my software skills. My technical skills include programming language like C, C++, Java and databases. I am also familier with web development, So this all my technical skills.</p>
                        <a href="images/Uday_Gavada_Resume.pdf">Download CV</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services section start -->
        <section Class="services" id="services">
            <div class="max-width">
                <h2 class="title">My Services</h2>
                <div class="serv-content">
                  <div class="card">
                      <div class="box">
                          <i class="fas fa-paint-brush"></i>
                          <div class="text">Projects</div>
                          <p>an individual or collaborative enterprise that is carefully planned to achieve a particular aim</p>                     
                      </div>
                  </div>

                  <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>describe or draw attention to (a product, service, or event) in a public medium in order to promote sales or attendance.</p>                     
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>a plan or drawing produced to show the look and function or workings of a App.</p>                     
                    </div>
                </div>

                </div>
            </div>
        </section>


        <!-- Skills section start -->
        <section class="skills" id="skills">
            <div class="max-width">
                <h2 class="title">My Skills</h2>
                <div class="skills-content">
                    <div class="column left">
                        <div class="text">My creative skills & experience</div>
                        <p> I used this skills to build Several projects which include cyber cafe Management system and coaching class Management system. Coming to my extra curricular activities I love to drama. I also like to travel, explore new things. I have been Student Co-ordinator of our college NSS unit and currently I am one of the head of our cultural drama circle. I have also participited in several blood donation camp, Cleanliness drive and awerness program. I completed my NSS with two special winter camp.</p>
                        <a href="images/Uday Gavad Cover Letter.pdf">Read more</a>
                    </div>
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span>HTML</span>
                                <span>90%</span>
                            </div>
                            <div class="line html"></div>
                        </div>

                         <div class="bars">
                            <div class="info">
                                <span>CSS</span>
                                <span>70%</span>
                            </div>
                            <div class="line css"></div>
                        </div>

                        <div class="bars">
                            <div class="info">
                                <span>C++</span>
                                <span>60%</span>
                            </div>
                            <div class="line c++"></div>
                        </div>

                        <div class="bars">
                            <div class="info">
                                <span>PHP</span>
                                <span>40%</span>
                            </div>
                            <div class="line php"></div>
                        </div>

                        <div class="bars">
                            <div class="info">
                                <span>MY SQL</span>
                                <span>70%</span>
                            </div>
                            <div class="line mysql"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team section start -->
        <section class="teams" id="teams">
            <div class="max-width">
                <h2 class="title">My Teams</h2>
                <div class="carousel owl-carousel">
                    <div class="card">
                        <div class="box">
                            <img src="images/ab2.png" alt="">
                            <div class="text">Atharv Barve</div>
                            <p>I am a software developer with holistic knowledge of software development and design.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <img src="images/lb2.png" alt="">
                            <div class="text">Lareb Bagwan</div>
                            <p>I am a buisness dealer who is goal-oriented. I'm highly skilled in handling clients and providing customer support.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <img src="images/sk2.png" alt="">
                            <div class="text">Shrinand Kulkarni</div>
                            <p>I am a specialist in software development and database management, and I love developing systems for businesses.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <img src="images/uday4.jpg" alt="">
                            <div class="text">Uday Gavada</div>
                            <p>I am a good in software programming and Data analytics. I'm proficient in a number of programming languages.</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="box">
                            <img src="images/ak2.jpg" alt="">
                            <div class="text">Aishwarya Kshirsagar</div>
                            <p>I am a graphic designer. I have worked in advertising agencies and for small business owners.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- contact section -->
        <section class="contact" id="contact">
            <div class="max-width">
                <h2 class="title">Contact me</h2>
                <div class="contact-content">
                    <div class="column left">
                        <div class="text">Get in Touch</div>
                        <p>Look at the sky. We are not alone. The whole universe is friendly to us and conspires only to give the best to those who dream and work.</p>
                        <div class="icons">
                            
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <div class="info">
                                    <div class="head">Name</div>
                                    <div class="sub-title">Uday Gavada</div>
                                </div>
                            </div>

                            <div class="row">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head">Address</div>
                                    <div class="sub-title">Narhe, Pune</div>
                                </div>
                            </div>

                            <div class="row">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Email</div>
                                    <div class="sub-title">UdayGavada@gmail.com</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="column right">
                        <div class="text">Message me</div>
                        <form action="#column right" method="post">
                            <div class="fields">
                                <div class="field name">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="field email">
                                    <input type="email" name="email"placeholder="Email" required>
                                </div>
                            </div>
                                <div class="field">
                                    <input type="number" name="phoneno" placeholder="Phone Number" required>
                                </div>
                                <div class="field textarea">
                                    <textarea name="message" cols="30" rows="10" placeholder="Want to say something" required></textarea>
                                </div>
                                <div class="button">
                                <button type="submit" name="submit">Send Message</button>
                            </div>
                        </form>

                        <?php
                            if (isset ($_POST['submit']))
                                {
                                    include_once 'function.php';
                                    $obj = new contact();
                                    $res = $obj->contact($_POST);
                                    if($res==true){
                                        echo "<script>alert('Query Successfully submitted.Thank you')</script>";
                                    }else{
                                        echo  "<script>alert('Response Successfully submitted.Thank you')</script>";
                                    }
                                }
                        ?>

                    </div>
                </div>
            </div>
        </section>

        <!-- footer sextion start -->
        <footer>
            <span>Created By <a href="#">CodingUday</a> | <span class="far fa-copyright">2022 All rights reserved</span></span>
        </footer>
        <script src="script.js"></script>
    </body>
</html>