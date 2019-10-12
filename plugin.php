<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Sibtain
 * Date: 12/13/2017
 * Time: 10:00 PM
 */
include_once ('header1.php');
//include_once ('side-menu.php')
?>

<div class="container">

    <div class="row">

        <div class="col-lg-3">
            <div class="list-group">
                <!--<a href="#" class="list-group-item"> Product Categories </a>-->
                <a href="allProducts.php" class="list-group-item active"> Product Categories </a>
                <a href="natural.php" class="list-group-item"> Natural Salt Lamps </a>
                <a href="crafted.php" class="list-group-item"> Crafted Salt Lamps </a>
                <a href="wildlife.php" class="list-group-item">Wildlife Salt Lamps </a>
                <a href="candle.php" class="list-group-item">Salt Candle Holders </a>
                <a href="plugin.php" class="list-group-item active">Plugin Salt Lamps </a>
                <a href="animal.php" class="list-group-item">Animal Licking Salt</a>
                <a href="tiles.php" class="list-group-item">Salt Tiles </a>
                <a href="spa.php" class="list-group-item">Spa Salts Products </a>
                <a href="edible.php" class="list-group-item">Edible Salts </a>
                <a href="bath.php" class="list-group-item">Bath Salts </a>
                <a href="raw.php" class="list-group-item">Raw Salt Stones </a>
            </div>

        </div>
        <!-- /.col-lg-3 -->
        
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">



        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/PluginSaltLamp/2.jpg" alt=""></a>
                    <!--<div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Item Six</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                    </div>-->
                    <div class="card-footer">
                        <small class="text-muted">Cylinder Plugin</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/PluginSaltLamp/4.jpg" alt=""></a>
                    <!--<div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Item Six</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                    </div>-->
                    <div class="card-footer">
                        <small class="text-muted">Lamp Plugin</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/PluginSaltLamp/5.jpg" alt=""></a>
                    <!--<div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Item Six</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                    </div>-->
                    <div class="card-footer">
                        <small class="text-muted">Marble Plugin</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/PluginSaltLamp/6.jpg" alt=""></a>
                    <!--<div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Item Six</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                    </div>-->
                    <div class="card-footer">
                        <small class="text-muted">Natural Plugin</small>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="benefit-guideline">
                    <h3 class="benefit-text">Benefits of Salt Lamps</h3>
                    <img src="img/PluginSaltLamp/Assistance/1.jpg" class="benefit-pic"><br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="user-guide">
                                <h3>Usage Guide</h3>
                                <img src="img/PluginSaltLamp/Assistance/2.jpg" class="user-guide">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dimesion-assistance">
                                <h3>Dimesional Assistance</h3>
                                <img src="img/PluginSaltLamp/Assistance/3.jpg" class="dimension-size">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-note">
                    <p><b class="note-font">Note : </b> These are only samples, we can make any design or specification. If customers have any design out of above range, they are welcome to share
                        with us, we will made it accordingly.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-lg-9 -->
    <div tabindex="-1" class="modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- /.row -->

    </div>
    <!-- /.container -->

<?php
include_once ('footer.php')
?>