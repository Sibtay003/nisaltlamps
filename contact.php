<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Sibtain
 * Date: 12/13/2017
 * Time: 10:19 PM
 */
include_once ('header1.php')
?>

<div class="container">
    <div class="company-info">
        <h3 class="map-title">Office Location</h3>
        <div id="map"></div>
        <script>
            function initMap() {
                var uluru = {lat: 32.1995664, lng: 74.1923678};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkOitY7myuRqkqlDjfsugYRg3J9jNJmAQ&callback=initMap">
        </script>
        <div class="row">
            <div class="col-lg-6">
                <div class="company-details">
                    <h2>Address : </h2><p><b>N&I Salt International</b>, St#15, Main Bazar, Faiz Alam Town,  Near BISE, Gujranwala-05225, Punjab, Pakistan. </p>
                    <h2>Contact Us: </h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <p><i class="fa fa-user"></i> Naeem Ahmad<br>
                                <i class="fa fa-mobile"></i>&nbsp;0092 324 7471111<br>
                                info@nisaltlamps.com</p>
                        </div>
                        <div class="col-lg-6">
                            <p><i class="fa fa-user"></i> Ibrar Bukhari<br>
                                <i class="fa fa-mobile"></i> 0092 312 7331667<br>
                                <i class="fa fa-mobile"></i> &nbsp;0092 307 6630818<br>
                                <i class="fa fa-mobile"></i>&nbsp;0092 345 6462161<br>
                                sales@nisaltlamps.com</p>
                        </div>
                    </div>
                    <p>
                        <!--<i class="fa fa-mobile"></i> &nbsp;0092 324 7471111<br>-->
                        <i class="fa fa-envelope"></i> info.nisalt@gmail.com<br>
                        <i class="fa fa-whatsapp"></i> <b>Whatsapp : </b>  0092 345 6462161<br>
                        <!--<p><i class=""></i> <b>Imo : </b>  0092 345 6462161  </p>-->
                        <i class="fa fa-skype"></i> <b> Skype : </b>  syed_ibrar_shah <br>
                        <i class="fa fa-map"></i> <b>URL : </b><a href="www.nisaltlamps.com" target="_blank">www.nisaltlamps.com</a><br></p>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <h4><strong>Email Us</strong></h4>
                    <form method="post">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="fname" value="" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="" placeholder="E-mail" required="required" >
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="cell" value="" placeholder="Phone" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="msg" rows="6" placeholder="Message" required="required"></textarea>
                            </div>
                            <div class="success">
                                <p>Query Submitted!!</p>
                            </div>
                            <button class="btn btn-default" type="submit" name="button">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
      	</div>
    </div>
</div>

<?php
include_once ('footer.php');
if (!isset($_POST['button']))
{

}
else
{
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $cell=$_POST['cell'];
    $msg=$_POST['msg'];
    if(mail('info4ibrar@gmail.com','info',$msg,'From:'.$email))
     {
    ?>
    	<script>alert('Your E-mail has been sent....');</script>
    <?php
    }
}
?>
