<?php
include('navbar.php');
include('login.php');
include('signup.php');
?>
<script src="validation.js"></script>
<!-- banner section-->

<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="promo-title">EZ-DEB</p>
                <p> Manage Debian packages from GitHub and websites with ease. </p>
                <a href="#"><img  src="images/play.png" class="play-btn">about us</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="/images/home2.png" class="img-fluid">
            </div>
        </div>
    </div>
     <img src="/images/wave1.png" class="bottom-img">
</section>

<!---services section-->

<section id="services">
    <div class="container  text-center">
        <h1 class="title">Features</h1>
        <div class="row text-center">
        <div class="col-md-4 services">
                <img  src="/images/service3.png" class="service-img">
                <h4 >easily update packages</h4>
                <p>ezdeb provides an easy way for users to update packages through a simple update command. The update command fetches the latest version of the package and installs it on the user's system. Additionally, users can selectively update packages by specifying package names as input, or they can use the check-only flag to only check for updates without actually installing them. The hold command can be used to hold updates for specific packages, allowing users to keep a particular version of the package without updating it. This feature is useful for users who may not want to update their packages to the latest version due to compatibility
                     issues or other reasons. Overall, ezdeb provides a convenient and flexible way for users to update their packages.
                </p>
            </div>

            <div class="col-md-4 services text-center">
                <img src="/images/service1.png" class="service-img">           
                <h4>easily install packages</h4>               
                <p>With ezdeb, installing packages from Github or other websites is a breeze. ezdeb will automatically download the package and its dependencies, and install them without the need for manual intervention. This saves a lot of time and effort, especially for developers who need to install and manage multiple packages for their projects. Additionally, ezdeb's intuitive command-line interface makes it easy for even novice
                     users to get started and install packages without having to worry about the complexities of the installation process.
                </p>           
            </div>

            <div class="col-md-4 services text-center">
                <img src="/images/service2.png" class="service-img">
                <h4>Community support</h4>
                <p>Ezdeb not only makes package installation easier but also provides a robust feedback system and community support. Users can rate and comment on packages they have installed, giving valuable feedback to package maintainers and other users. Additionally, Ezdeb provides a forum where users can ask questions and get help with issues they may be facing. This not only helps individual users, but it also allows the community to come together to share knowledge and solutions. This kind of support encourages collaboration and helps 
                    users feel more connected to the community, making the overall experience of using Ezdeb more satisfying and enjoyable.
                </p>
            </div>

            
        </div>
        <button type="button" class="btn btn-primary ">ALL SERVICES</button>
    </div>
</section>

<!---About Us-->

<section id="about-us">
    <div class="container">
        <h1 class="title text-center">WHY CHOOSE US</h1>
        <div class="row">
            <div class="col-md-6 about-us">
                <p class="about-title">why we are differnt</p>
                <ul>
                    <li>belive in doing everything with honesty</li>
                    <li>belive in doing everything with honesty</li>
                    <li>belive in doing everything with honesty</li>
                    <li>belive in doing everything with honesty</li>
                    <li>belive in doing everything with honesty</li>
                    <li>belive in doing everything with honesty</li>
                    <li>belive in doing everything with honesty</li> 
                </ul>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="/images/network.png">
            </div>
        </div>
    </div>
</section>

<!-- testimonials--->
<section id="testimonials">
    <div class="container">
        <h1 class="title text-center">WHAT CLIENT SAYS</h1>
        <div class="row offset-1">
            <div class="col-md-5 testimonials">
              <p>It is a long established fact that a reader will be distracted by the readable
                 content of a page when looking at its layout. </p>
             <img src="/images/user1.jpg" >
             <p class="user-details"><b>AJAY V</b><br> CO-FOUNDER AUTO-NATION</p>
            </div>
            <div class="col-md-5 testimonials">
                <p>It is a long established fact that a reader will be distracted by the readable
                   content of a page when looking at its layout. </p>
               <img src="/images/user2.jpg" >
               <p class="user-details"><b>ADAM </b><br> CO-FOUNDER AUTO-NATION</p>
              </div>
        </div>
    </div>
</section>
<!---socialmedia section--->
<section id="social-media">
<div class="container  text-center">
<p>FIND US ON SOCIAL MEDIA</p>
<div class="social-icons">
    <a href="#"><img src="/images/facebook-icon.png"></a>
    <a href="#"><img src="/images/instagram-icon.png"></a>
    <a href="#"><img src="/images/whatsapp-icon.png"></a>
    <a href="#"><img src="/images/twitter-icon.png"></a>
    <a href="#"><img src="/images/linkedin-icon.png"></a>
    <a href="#"><img src="/images/snapchat-icon.png"></a>
</div>
</div>
</section>

<?php
include('footer.php');
?>


