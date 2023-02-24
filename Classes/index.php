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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azzam</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../style.css">
	
	<style>

	.profile{
	color: var(--color);
    text-transform: uppercase;
    font-weight: 600;
	font-size:30px;
	text-align:center;
	margin-top:;
	}
</style>

</head>
<body>


<h1 class="profile">Hello, <?php echo $user_data['user_name']; ?></h1>
    <!-- Header Section Starts -->

    <header>
        <div class="user">
            <img src="img/me.jpg" alt="">
            <h3 class="name">Azzam Jehtarhe</h3>
            <p class="post">A Future Developer</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="logout.php">Logout</a><li>
				

                
            </ul>
        </nav>
    </header>

	

    <!-- Header Section Ends -->

    <div id="menu" class="fa fa-bars"></div>
	

    <!-- Home Section Starts -->

    <section class="home" id="home">
        <h3>HI !</h3>
        <h1>I'M <span>Azzam Jehtarhe</span></h1>
        <p>IT Student 2nd year, a future web developer.</p>
        <a href="#about"><button class="btn">About Me <i class="fas fa-user"></i></button></a>
    </section>

    <!-- Home Section Ends -->

    <!-- About Section Starts -->

    <section class="about" id="about">
        <h1 class="heading"><span>About</span> Me</h1>
        <div class="row">
            <div class="info">
                <h3><span>Name: </span>Azzam Jehtarhe</h3>
                <h3><span>Age: </span>20</h3>
                <h3><span>Post: </span>web developer</h3>
                <h3><span>Language: </span>English - Arabic</h3>

            <a href="#">
                <button class="btn">Download CV <i class="fas fa-download"></i></button>
            </a>
            </div>

            <div class="counter">
                <div class="box">
                    <span>7+</span>
                    <h3>Programming languages courses</h3>
                </div>
                <div class="box">
                    <span>+10</span>
                    <h3>Projects</h3>
                </div>
                <div class="box">
                    <span>Soft Skilss</span>
                    <h3>Coummunication
                        Leadership
                        Teamwork
                        Time Managment
                    </h3>
                </div>
                <div class="box">
                    <span>Hard Skills</span>
                    <h3>Typing Speed
                        Certificate
                        Computer Programming 
                        Adope
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Ends -->

    <!-- Education Section Starts -->

    <section class="education" id="education">
        <h1 class="heading">My
            <span>Education</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span> 2017 - 2019</span>
                <h3>high school - King Abdulaziz</h3>
                <p>certificate for Highschool 92.25%
                    Excellent Arabic Grammar and spelling 
                    IELTS test with 5.</p>
            </div>
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2021 - present</span>
                <h3>university - fatoni </h3>
                <p>Information technology of Faculty of sciences and technology
                    .</p>
            </div>
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2018-2020</span>
                <h3>Microsoft office, managment course</h3>
                <p>learning the basic and the standard of Microsoft office  
                    got experience and certificate of managment.</p>
            </div>
        </div>
    </section>

    <!-- Education Section Ends -->


    <!-- Contact Section Starts -->

    <section class="contact" id="contact">
        <h1 class="heading">
            <span>Contact</span>
        </h1>

        <div class="row">
            <div class="content">
                <h3 class="title">Contact Info</h3>
                <div class="info">
                    <h3><i class="fas fa-envelope"></i>Azzamjeh@gmail.com</h3>
                    <h3><i class="fas fa-phone"></i>+66 1463 3302</h3>
                    <h3><i class="fas fa-map-marker-alt"></i>Yala, Thai</h3>
                </div>
            </div>

            <form action="action.php" method="post">

                <input type="text" placeholder="Name" class="box" title="Enter your real name"
                  id="name" name="name"  pattern="[A-Za-z]{2,}.[A-Za-z]{2,}" required>

                <input type="email" placeholder="Email" class="box"
                  id="email" name="email"  pattern="[a-z0-9._%+-]+@(gmail|icloud|hotmail)\.[A-Za-z]{2,}"
                   title="only gmail, icoud or hotmail "required>

                <input type="tel" placeholder="phone" class="box" title="Your phone number" pattern="[0-9]{10}"
                  id="phone" name="phone"  maxlength="10" required>

                <textarea name="message" id="message" cols="30" rows="10" class="box message" placeholder="message"
                    title="Should be 10 words at least" required></textarea>

                <button type="submit" class="btn">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </section>

    <!-- Contact Section Ends -->




    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Javascript file link -->
    <script src="script.js"></script>

</body>
</html>
