<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewMenu</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/menu.css" />

</head>

<body>

    <div style="border-radius:0.8rem !important; box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.4);" ; class="container bg-white shadow-lg">
        <div class="row">
            <div class="col-md-8 align-self-center">
                <div class="row">
                    <div class="col-md-8 bg-white">
                        <h2 style="text-align:center; font-weight: bold;">Mama mia!</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 bg-white">
                        <h3 style="text-align:center; font-weight: bold;">Table #23</h3>
                    </div>
                </div>

            </div>

            <div class="col-md-4 align-self-center">
                <div class="row justify-content-md-around">
                    <div class="col-4">
                        <div class="sidebar-content">
                            <h3 class="btn-text">view order</h3>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="sidebar-content">
                            <h3 class="btn-text">call waiter</h3>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="sidebar-content">
                            <h3 class="btn-text">request bill</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 text-center">
                        <img src="img\firstImageFromWebsite.png" alt="" class="request-restaurant-service-btn rounded-lg">
                    </div>
                    <div class="col-4 text-center">
                        <img src="img\firstImageFromWebsite.png" alt="" class="request-restaurant-service-btn rounded-lg">
                    </div>

                    <div class="col-4 text-center">
                        <img src="img\firstImageFromWebsite.png" alt="" class="request-restaurant-service-btn rounded-lg">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container" style="margin-top:100px" ;>
        <div class="row">
            <!-- categories -->
            <div class="col-md-2">
                <div class="row">
                    <img src="img\categoriesImg.png" alt="">
                    <h4 style="margin-left:10px;align-self:center">Categories</h4>
                </div>
                <br>
                <br>
                <div class="row">
                    <h5 style="font-weight:bold">BestSellers</h5>
                </div>

                <hr style="border-top: 1px solid rgba(0,0,0,.3); width:70%;" class="row mt-1" />

                <div class="row">
                    <h5>News</h5>
                </div>

                <hr style="border-top: 1px solid rgba(0,0,0,.3); width:70%;" class="row mt-1" />

                <div class="row">
                    <h5>Soups</h5>
                </div>

                <hr style="border-top: 1px solid rgba(0,0,0,.3); width:70%;" class="row mt-1" />

                <div class="row">
                    <h5>News</h5>
                </div>

                <hr style="border-top: 1px solid rgba(0,0,0,.3); width:70%;" class="row mt-1" />

                <div class="row">
                    <h5>Soups</h5>
                </div>

                <hr style="border-top: 1px solid rgba(0,0,0,.3); width:70%;" class="row mt-1" />

                <div class="row">
                    <h5>News</h5>
                </div>

                <hr style="border-top: 1px solid rgba(0,0,0,.3); width:70%;" class="row mt-1" />

                <div class="row">
                    <h5>Soups</h5>
                </div>

                <hr style="border-top: 1px solid rgba(0,0,0,.3); width:70%;" class="row mt-1" />

                <div class="row">
                    <h5>News</h5>
                </div>

                <hr style="border-top: 1px solid rgba(0,0,0,.3); width:70%;" class="row mt-1" />

                <div class="row">
                    <h5>Soups</h5>
                </div>

            </div>

            <div class="col-md-10">
                <!-- searchBar -->
                <div class="form d-flex">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control form-input" placeholder="Search in Mama Mia...">
                    <span class="left-pan"><i class="fa fa-microphone"></i></span>
                </div>

                <!-- Selected category + allergensBar -->
                <br>
                <div class="row">
                    <!-- Selected category -->
                    <div class="col-md-2">
                        <h3 style="font-weight:bold">BestSellers:</h3>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <p class="col-md-4 align-self-center"></p>
                            <label  class="col-md-8 p-0 m-0 d-flex" for="whatev2" style="border-radius:0.8rem !important; box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.4);">
                                <button class="p-2 m-2 btn btn-primary bg-danger" style="border-radius:15px; border-color:#FDFDFD">Milk<span style="font-weight:bold"> -</span></button>                                            
                                <button class="p-2 m-2 btn btn-primary bg-danger" style="border-radius:15px; border-color:#FDFDFD">Eggs<span style="font-weight:bold"> -</span></button>                                            
                                <button class="p-2 ml-3 ml-auto btn btn-primary" style="border-radius: 0px 10px 10px 0px; background-color:#F9B356; border-color:#F9B356">Add Allergens<span style="font-weight:bold;"> +</span></button>                                            
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mr-3 menu-product">Produs1</div>
                    <div class="col-md-5 mr-3 menu-product">Produs2</div>
                    <div class="col-md-5 mr-3 menu-product">Produs3</div>
                    <div class="col-md-5 mr-3 menu-product">Produs4</div>
                    <div class="col-md-5 mr-3 menu-product">Produs5</div>
                    <div class="col-md-5 mr-3 menu-product">Produs6</div>
                    <div class="col-md-5 mr-3 menu-product">Produs7</div>
                    <div class="col-md-5 mr-3 menu-product">Produs8</div>
                </div>
            </div>

        </div>
    </div>

</body>

<!-- bootstrap scripts start -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- bootstrap scripts end -->

</html>