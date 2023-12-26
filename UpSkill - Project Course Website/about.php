<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php include 'components/user_header.php'; ?>

    <!-- about section starts  -->

    <section class="about">

        <div class="row">

            <div class="image">
                <img src="images/about-img.svg" alt="">
            </div>

            <div class="content">
                <h3>Why Choose Us?</h3>
                <p>Life is busy, and we understand that. UpSkill offers the flexibility of learning on your terms.
                    Access your courses anytime, anywhere, allowing you to integrate learning seamlessly into your
                    schedule.
                </p>
                <a href="courses.php" class="inline-btn">our courses</a>
            </div>

        </div>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <div>
                    <h3>+1k</h3>
                    <span>online courses</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-user-graduate"></i>
                <div>
                    <h3>+25k</h3>
                    <span>brilliants students</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-chalkboard-user"></i>
                <div>
                    <h3>+5k</h3>
                    <span>tutor experts</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-briefcase"></i>
                <div>
                    <h3>100%</h3>
                    <span>job placement</span>
                </div>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- reviews section starts  -->

    <section class="reviews">

        <h1 class="heading">student's reviews</h1>

        <div class="box-container">

            <div class="box">
                <p>UpSkill has truly transformed my approach to learning. The courses are not just informative but also
                    incredibly engaging. The practical insights I gained have proven invaluable in my professional
                    journey. Kudos to the exceptional team at UpSkill!</p>
                <div class="user">
                    <img src="images/pic-10.jpg" alt="">
                    <div>
                        <h3>Seviannanda Kurniawan</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>While the content was informative, I found the delivery a bit dry. Adding more interactive elements
                    could enhance the overall learning experience. Additionally, clearer communication on the expected
                    time commitment would be helpful.</p>
                <div class="user">
                    <img src="images/pic-3.jpg" alt="">
                    <div>
                        <h3>Rahaditya Rizky</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>What I appreciate most about UpSkill is the ongoing support. It doesn't end with the completion of a
                    course. The team provides continuous guidance and feedback, ensuring I stay on the path to success.
                    It's a testament to their commitment to student achievement.</p>
                <div class="user">
                    <img src="images/pic-4.jpg" alt="">
                    <div>
                        <h3>Indah Paraswati</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>Joining UpSkill means becoming part of a supportive community. The collaborative atmosphere fosters
                    shared success. It's inspiring to connect with like-minded individuals and learn together. The
                    community support adds tremendous value to the overall experience.</p>
                <div class="user">
                    <img src="images/pic-5.jpg" alt="">
                    <div>
                        <h3>Rangga Ranubaya</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>Learning from industry experts who bring real-world experience into the classroom has been a
                    game-changer for me. The instructors at UpSkill are not only knowledgeable but also passionate about
                    sharing their insights. I couldn't have asked for a better learning environment.</p>
                <div class="user">
                    <img src="images/pic-6.jpg" alt="">
                    <div>
                        <h3>Shendy Teuku</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>The innovative learning resources at UpSkill make the entire learning process enjoyable. From
                    interactive modules to multimedia content, every aspect is designed to keep you engaged. Learning
                    has never been this much fun!</p>
                <div class="user">
                    <img src="images/pic-7.jpg" alt="">
                    <div>
                        <h3>Ade Bagus</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- reviews section ends -->










    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>