<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $comment = htmlspecialchars(trim($_POST['comment']));

    if (!empty($name) && !empty($comment)) {
        $newComment = "<div class='comment'><span>{$name}</span><br />
                       <span>" . date("Y/m/d") . " | " . date("h:i:A") . "</span><br />
                       <span>{$comment}</span></div>\n";

        $oldComments = file_get_contents("comments.txt");
        $allComments = $newComment . $oldComments;
        file_put_contents("comments.txt", $allComments);

        // Redirect to the comments section
        header("Location: " . $_SERVER['REQUEST_URI'] . "#commentsSection");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oasis Of Hope Health center</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2? family=Poppins:wght@100;200;300;400;600;700&display=swap">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <script src="https://unpkg.com/scrollreveal"></script>
       
        <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YD3WMCREY3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-YD3WMCREY3');
    </script>
</head>
    
<body>
<!------------------Navigation Section--------------->
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/logo.png" class="logo" alt="logo"></a>
            <div class="nav" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul class="nav-section">
                    <li><a href="index.html" class="active">HOME</a></li>
                    <li><a href="about.html" class="active">ABOUT</a></li>
                    <li><a href="services.html" class="active">SERVICES</a></li>
                    <li><a href="blog.php" class="active">BLOG</a></li>
                    <li><a href="contact.html" class="active">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1 class="title-heading">On-Going Community Projects</h1>
    </section>


<!---------------blog page------------------>
    <section class="blog-content">
        <div class="blog-left">

            <h2 class="blog-section">Women Empowerment Groups Launch 2025</h2>
            <div class="image-container">
            <img src="images/DSC_0026.JPG" alt="outreach">
            <img src="images/DSC_0074.JPG" alt="outreach">
            <img src="images/DSC_0101.JPG" alt="outreach">
            </div>

            <div class="image-container">
                <img src="images/DSC_0088.JPG" alt="outreach">
                <img src="images/DSC_0090.JPG" alt="outreach">
                <img src="images/DSC_0087.JPG" alt="outreach">
            </div>

            <p>
                The successful launch of four women’s groups by Oasis of Hope Initiatives (OHI) in February 2025 stands as a testament to the dedication and leadership of Michelle Mwikali, Project Manager, 
                and Suleiman Guyo. Their unwavering commitment to empowering women in Bulapesa has played a pivotal role in equipping them with essential skills in savings, table banking, health, nutrition, 
                and entrepreneurship.<br><br>

                With the groups now officially launched, the women will embark on a structured six-month training program designed to enhance their financial literacy, entrepreneurial skills, 
                and overall well-being. This journey will culminate in a graduation ceremony, marking their transition into self-reliance and sustainable economic participation.<br><br>
                
                The launch event was a celebration of their journey, symbolizing new beginnings and opportunities for growth within the community. Michelle Mwikali’s visionary leadership, 
                coupled with Suleiman Guyo’s dedication to community engagement, has ensured that these groups are not just formed but are well-prepared for long-term success. 
                Their efforts have fostered an environment where women can support one another, build sustainable livelihoods, and contribute to the well-being of their families 
                and the broader Bulapesa community.<br><br>
                
                This achievement highlights the transformative power of empowerment and collaboration. As the women progress through their training, the foundation laid by Michelle Mwikali 
                and Suleiman Guyo will continue to inspire and uplift them, proving that sustainable development starts with investing in people.<br><br>
            </p>

           
            <h2 class="blog-section">Medical Camp 2024</h2>

            <div class="image-container">
            <img src="images/m2024.jpg" alt="medicalcamp">
            <img src="images/mm2024.jpg" alt="medicalcamp">
            <img src="images/mmm2024.jpg" alt="medicalcamp">
            </div>

            <div class="image-container">
                <img src="images/DSC_13.jpg" alt="medicalcamp">
                <img src="images/DSC_9.jpg" alt="medicalcamp">
                <img src="images/DSC_15.jpg" alt="medicalcamp">
            </div>

            <h3 class="blog-section">Medical Diagnosis and Treatment Of Patients</h3>
            <p>
                In March 2024, Oasis of Hope Health Center organized yet another impactful medical camp. 
                This three-day event offered attendees complimentary medical diagnosis and treatment, with a 
                special focus on those facing financial hardships. The initiative reached out to over 900 individuals, 
                providing them with essential healthcare services they might otherwise have struggled to access.

                The significance of this medical camp cannot be overstated. It not only addressed immediate healthcare 
                needs but also played a vital role in saving lives within the Bulapesa community. The commitment and 
                dedication of the Oasis of Hope Health Center in serving the people of Bulapesa are truly commendable.

                Such initiatives demonstrate the profound impact that targeted healthcare interventions can have on 
                communities, particularly those facing economic challenges. Oasis of Hope Health Center's continued 
                efforts are instrumental in promoting health and well-being in the region, and their contributions are 
                deeply appreciated by all those who benefit from their services.
            </p>

            <h2 class="blog-section">Completion Of Water Project</h2>

            <div class="image-container">
            <img src="images/water.jpg" alt="water">
            <img src="images/Isiolo-180.jpg" alt="water">
            </div>

            <p>
                Oasis of Hope Health center has undertaken the commendable initiative of establishing a borehole to enhance
                water, sanitation, and hygiene (WASH) conditions. Collaborating with Isiolo Water & Sewerage Company (IWASCO),
                the center is committed to efficiently distributing water to the neighboring households. This strategic partnership
                aims to promote proper sanitation within the local community, effectively addressing the risk of diseases such as cholera and typhoid.
                The borehole project is instrumental in ensuring that residents in the Bulapesa area have access to clean and safe water for both
                consumption and general hygiene practices.<br><br>
            </p>
            <h3 class="blog-section">Newly Installed water system</h3>
            <img src="images/tank.jpg" alt="waterproject">
            <p>
                In 2024, Oasis of Hope Health Center proudly announces the completion of the water project initiated in 2023. 
                With the collaborative efforts of the center and the Isiolo Water & Sewerage Company (IWASCO), a newly installed 
                water tank and system now stand as a testament to their commitment to enhancing water, sanitation, and hygiene (WASH) 
                conditions in the Bulapesa community.<br>

                This achievement marks a significant milestone in the center's ongoing efforts to improve the lives of residents 
                in the region. The newly installed water infrastructure not only ensures a reliable supply of clean and safe water 
                but also promotes proper sanitation practices among households.<br>

                The completion of the water project represents a transformative moment for the Bulapesa community, as access to 
                clean water is essential for various aspects of daily life, including drinking, cooking, and personal hygiene. 
                By addressing this fundamental need, Oasis of Hope Health Center continues to make a meaningful impact on the 
                well-being of the community.<br>

                This accomplishment would not have been possible without the support and collaboration of all involved parties. 
                The center extends its heartfelt gratitude to everyone who contributed to the success of the project, emphasizing 
                the importance of collective action in achieving positive change.<br>

                As the newly installed water tank and system begin serving the community, Oasis of Hope Health Center remains 
                committed to ensuring that residents in Bulapesa have access to the resources they need to lead healthy and dignified 
                lives. This milestone is not just a reflection of past achievements but also a testament to the center's ongoing 
                dedication to serving the needs of the community.<br><br>
            </p>

        
            <P>
                In conclusion, Oasis of Hope Health center emerges as a transformative force in the Bulapesa community,
                extending its impact far beyond conventional healthcare services. Through initiatives like empowering women,
                educating the youth on critical issues, and investing in water infrastructure, the center demonstrates a holistic
                commitment to the well-being of the community. By addressing essential aspects such as health, education,
                and access to clean water, Oasis of Hope Health center not only strives to improve immediate living conditions
                but also lays the groundwork for a healthier, more resilient future for the residents of Bulapesa.
                As a beacon of positive change, the center exemplifies the profound impact that community-focused initiatives
                can have on enhancing the overall quality of life.
            </P>

        </div>

        <div class="blog-right">
            <h3 class="comment-section">Post Categories</h3>
            <div class="post">
                <ul>
                    <li>
                        <a href="posts.html" class="active">Women Empowerment Graduation 2024</a>
                    </li>
                </ul>
                <span>1</span>
            </div>
            <div class="post">
                <ul>
                    <li>
                        <a href="posts.html" class="active">Youth & Women Empowerment</a>
                    </li>
                </ul>
                <span>2</span>
            </div>
            <div class="post">
                <ul>
                    <li>
                        <a href="posts.html" class="active">Community Home Visits</a>
                    </li>
                </ul>
                <span>3</span>
            </div>
            <div class="post">
                <ul>
                    <li>
                        <a href="posts.html" class="active">Medical Camp 2023</a>
                    </li>
                </ul>
                <span>4</span>
            </div>

            <div class="post">
                <ul>
                    <li>
                    <a href="posts.html" class="active">Youth Training On Sex Education, Drugs & Substance Abuse And Career</a>
                    </li>
                </ul>
                <span>5</span>
            </div>

            <div class="post">
                <ul>
                    <li>
                        <a href="posts.html" class="active">The Start Of The Water Project</a>
                    </li>
                </ul>
                <span>6</span>
            </div>
        </div>

        <div class="comment-box">
            <h3 class="comment-section">Leave a comment</h3>
            <form class="comment-form" method="POST" action="">
                <label> Name:
                    <input type="text" name="name" placeholder="Enter Name" required></label>

                <label>Comment: <br />
                    <textarea name="comment" rows="5" placeholder="Your comment" required></textarea></label>
                
                <button type="submit" name="submit" value="submit" class="hero-btn red-btn">POST COMMENT</button>
            </form>
        



            <script>
                document.getElementById('commentForm').addEventListener('submit', function(event) {
                    event.preventDefault();
        
                    const formData = new FormData(this);
        
                fetch('blog.php', {
                    method: 'POST',
                    body: formData
             })
                .then(response => response.text())
                .then(data => {
                     // Update the comments section with the new comment
                    document.querySelector('.comments-section').innerHTML = "<h1>Comments</h1><hr>" + data;
                    // clear the form
                    document.getElementById('commentForm').reset();

             })
                .catch(error => console.error('Error:', error));
          });
        </script>
<script>
    // Save scroll position before reload
    window.onbeforeunload = function() {
        sessionStorage.setItem('scrollPosition', window.scrollY);
    };

    // Restore scroll position after reload
    window.onload = function() {
        const scrollPosition = sessionStorage.getItem('scrollPosition');
        if (scrollPosition) {
            window.scrollTo(0, parseInt(scrollPosition));
            sessionStorage.removeItem('scrollPosition');
        }
    };
</script>




        </div>
<?php 
    //display all the comments
    $read = fopen("comments.txt", "r+t");
    echo "<h1>Comments</h1><hr>".fread($read, 1024);
    fclose($read);
?>
  
    </section>    





<!---------------------- Footer   ----------------->
<section class="footer">
    <p class="footer-section">Find us on the following platforms</p>
    <div class="icons">
        <a href="www.facebook.com/login" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
        <a href="www.twitter.com/login" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter-square"></i></a>
        <a href="https://www.instagram.com/accounts/login/?next=%2Flogin%2F&source=desktop_nav" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
        <a href="https://www.linkedin.com/login?fromSignIn=true&trk=guest_homepage-basic_nav-header-signin" target="_blank" rel="noopener noreferrer"><i class="fa fa-linkedin"></i></a>
    </div>
    <p>&copy; <span id="year"></span> www.oasisofhopeinitiativesisiolo.org | All rights reserved.
    </p>
    
    
    <script>
        document.getElementById('year').textContent = new Date().getFullYear().toString();
    </script>


</section>



<!---------------Javascript for Toggle Menu------------->
<script>
    let navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right="0"
    }
    function hideMenu(){
        navLinks.style.right="-200px"
    }
</script>

<!--Animate on scroll-->
<script>
    //common reveal options to create reveal animations
    ScrollReveal({
        //reset: true,
        reset: true,
        distance: '60px',
        duration: 2500,
        delay:400
});

    //target elements, and specify options to create reveal animations
    ScrollReveal().reveal('.nav-section', { delay: 500, origin: 'bottom'});
    ScrollReveal().reveal('.title-heading, .nav', { delay: 500, origin: 'bottom' });
    ScrollReveal().reveal('.blog-section', { delay: 500, origin:'left' });
    ScrollReveal().reveal('', { delay: 500, origin:'left' });
    ScrollReveal().reveal('', { delay: 500, origin:'left' });
    ScrollReveal().reveal('', { delay: 500, origin:'bottom' });
    ScrollReveal().reveal('', { delay: 500, origin:'left' });
    ScrollReveal().reveal('.footer-section', { delay: 500, origin: 'left' });
    ScrollReveal().reveal('.icons', { delay: 500, origin:'bottom' });
</script>

</body>
</html>