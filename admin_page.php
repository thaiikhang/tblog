<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header   -->

<header class="header">

    <a href="#" class="logo"><span>Tr</span>blog</a>

    <nav class="navbar">
        <a href="#banner">welcome</a>
        <a href="#posts">my posts</a>
        <a href="#contact">contact me</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>

<!-- header -->

<!-- welcome   -->

<section class="banner" id="banner">

    <div class="content">
        <h3>hi, <span>admin</span></h3>
        <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
        <p>this is an admin page</p>
        <a href="create_article.html" class="btn">create article</a>
        <a href="logout.php" class="btn">logout</a>
    </div>

</section>

<!-- welcome -->

<!-- posts  -->

<section class="container" id="posts">

    <div class="posts-container">

        <div class="post">
            <img src="images/blog-1.jpg" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span>1st may, 2021</span>
            </div>
            <h3 class="title">this is the title of blog 1</h3>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam quam?</p>
            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>by admin</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-comment"></i>
                    <span>(45)</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    <span>(29)</span>
                </a>
            </div>
        </div>

        <div class="post">
            <img src="images/blog-2.jpg" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span>1st may, 2021</span>
            </div>
            <h3 class="title">this is the title of blog 2</h3>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam quam?</p>
            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>by admin</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-comment"></i>
                    <span>(45)</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    <span>(29)</span>
                </a>
            </div>
        </div>

        <div class="post">
            <img src="images/blog-3.jpg" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span>1st may, 2021</span>
            </div>
            <h3 class="title">this is the title of blog 3</h3>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam quam?</p>
            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>by admin</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-comment"></i>
                    <span>(45)</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    <span>(29)</span>
                </a>
            </div>
        </div>

    </div>

    <div class="sidebar">

        <div class="box">
            <h3 class="title">about me</h3>
            <div class="about">
                <img src="images/user.jpg" alt="">
                <h3>truong dep trai</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, officia.</p>
                <div class="follow">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <h3 class="title">categories</h3>
            <div class="category">
                <a href="#"> travel <span>42</span></a>
                <a href="#"> photography <span>75</span> </a>
                <a href="#"> technology <span>22</span> </a>
                <a href="#"> fashion <span>17</span> </a>
                <a href="#"> study <span>48</span> </a>
                <a href="#"> science <span>39</span> </a>
                <a href="#"> music <span>59</span> </a>
                <a href="#"> public <span>12</span> </a>
                <a href="#"> business <span>32</span> </a>
                <a href="#"> sports <span>18</span> </a>
            </div>
        </div>

        <div class="box">
            <h3 class="title">popular posts</h3>
            <div class="p-post">
                <a href="#">
                    <h3>01. blog title goes here</h3>
                    <span><i class="far fa-clock"></i>1st may, 2021</span>
                </a>
                <a href="#">
                    <h3>02. blog title goes here</h3>
                    <span><i class="far fa-clock"></i>1st may, 2021</span>
                </a>
                <a href="#">
                    <h3>03. blog title goes here</h3>
                    <span><i class="far fa-clock"></i>1st may, 2021</span>
                </a>
                <a href="#">
                    <h3>04. blog title goes here</h3>
                    <span><i class="far fa-clock"></i>1st may, 2021</span>
                </a>
            </div>
        </div>

        <div class="box">
            <h3 class="title">popular tags</h3>
            <div class="tags">
                <a href="#">travel</a>
                <a href="#">photo</a>
                <a href="#">science</a>
                <a href="#">biology</a>
                <a href="#">aliens</a>
                <a href="#">nature</a>
                <a href="#">mountain</a>
                <a href="#">river</a>
                <a href="#">camp</a>
                <a href="#">landscape</a>
                <a href="#">world</a>
            </div>
        </div>

    </div>

</section>

<!-- posts  -->

<!-- contact  -->

<section class="contact" id="contact">

    <form action="">
        <h3>contact me</h3>
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="text" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<!-- contact -->

<!-- footer -->

<section class="footer">

    <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>

</section>

<!-- footer -->


<script src="js/script.js"></script>
    
</body>
</html>