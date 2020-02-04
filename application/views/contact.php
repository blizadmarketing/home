<!DOCTYPE html>
<html lang="en">

    <body>
        
        
        <!--================Banner Area =================-->
        <section class="banner" style="background: url(assets/img/bg.jpg);">
            <div class="container">
                <div class="banner_inner_text">
                    <h2 style="text-align: center; color: goldenrod;">blizAd Marketing |Contact.</h2>
                    <p style="text-align: center; color: goldenrod;">talk to us today</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area p_100" style="background-image: url(assets/img/64652.jpg);">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6">
                        <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6" >
                        <div class="touch_details">
                            <div class="l_title">
                                <h6>Say hello</h6>
                                <h2 style="text-align: center;">Get in touch, send us an e-mail or call us</h2>
                            </div>
                            <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.</p>
                            <a href="tel:+256705714159"><h5>Call us now</h5></a>
                            <a href="tel:+256705714159"><h4>+256 705 714 159</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <?php include ('includes/map.php'); ?>
        
       
    </body>
</html>