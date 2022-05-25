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

<!-- <?php
        $getRestaurantApiRequest = file_get_contents('http://localhost/EzMenu/api/restaurants/read.php');
        $resraurantResult = json_decode($getRestaurantApiRequest, true);
        echo"<div class=\"menu-top-bar\">" .
        
        "<div class=\"menu-top-bar-restaurant-title\">" . $resraurantResult['name'] . "</div>" . 
        "<div class=\"menu-top-bar-restaurant-table-number\"> staying on the table #20 </div>" . 
        "</div>";

        $products = $resraurantResult['products'];

        for($i=0;$i<count($products);$i++)
        {
            echo "<div style=\"border-radius:10px;width: 300px; background-color:grey;\">";
            echo "<p>" . $products[$i]['title']. "</p>";
            echo "<p>" . $products[$i]['description']. "</p>";
            echo "<p>" . $products[$i]['price']. " lei</p>";
            echo "<p>" . $products[$i]['cantity']. " grame</p>";
            echo "</div>";
        }

?> -->

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
                <div class="row justify-content-around">
                    <h3 class="col-4 btn-text">view order</h3>
                    <h3 class="col-4 btn-text">call waiter</h3>
                    <h3 class="col-4 btn-text">request bill</h3>
                </div>
                <div class="row justify-content-around">
                    <img class="col-4 btn text-center request-restaurant-service-btn rounded-lg" src="img\firstImageFromWebsite.png" alt="">
                    <img class="col-4 btn text-center request-restaurant-service-btn rounded-lg" src="img\firstImageFromWebsite.png" alt="">
                    <img class="col-4 btn text-center request-restaurant-service-btn rounded-lg" src="img\firstImageFromWebsite.png" alt="">
                </div>

            </div>
        </div>
    </div>

    <div class="container" style="margin-top:100px" ;>
        <div class="row">
            <!-- categories -->
            <div class="col-md-2 mb-5">
                <div class="row">
                    <img class="p-0 m-0 ml-2" src="img\categoriesImg.png" alt="">
                    <h4 class="p-0 m-2 categories-title">Categories</h4>
                </div>
                
                <br>
                <br>
                <div class="ml-3">
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

                <div class= "row">


                    <div class="col-md-5 mr-3 menu-product">
                        <img class="col-md-4 m-2 pl-0 pr-0 product-img" src="img\productDummyImg.png" alt="">
                        <div class="col-md-8">
                            <div class="row m-2 text-left product-text font-weight-bold">
                                Crispy Menu
                            </div>
                            <div class="row m-2 small text-left product-text">
                                French fries, garlic mayonnaise, lightly spicy chicken breast, coleslaw salad - 550g
                            </div>
                            <div class="row d-flex justify-content-between m-2 text-left font-weight-bold product-text">
                                <p class="m-0 p-0">31.90 RON</p>
                                <button class="d-inline-flex justify-content-center m-0 p-0 pl-2 pr-2 align-items-center btn btn-primary font-weight-bold" style="border-radius:15px; border-color:#FDFDFD;background-color:#F9B356">Add</button>                                            
                            </div>
                        </div>    
                    </div>

                    <div class="col-md-5 mr-3 menu-product">
                        <img class="col-md-4 m-2 pl-0 pr-0 product-img" src="img\productDummyImg.png" alt="">
                        <div class="col-md-8">
                            <div class="row m-2 text-left product-text font-weight-bold">
                                Crispy Menu
                            </div>
                            <div class="row m-2 small text-left product-text">
                                French fries, garlic mayonnaise, lightly spicy chicken breast, coleslaw salad - 550g
                            </div>
                            <div class="row d-flex justify-content-between m-2 text-left font-weight-bold product-text">
                                <p class="m-0 p-0">31.90 RON</p>
                                <button class="d-inline-flex justify-content-center m-0 p-0 pl-2 pr-2 align-items-center btn btn-primary font-weight-bold" style="border-radius:15px; border-color:#FDFDFD;background-color:#F9B356">Add</button>                                            
                            </div>
                        </div>    
                    </div>

                    <div class="col-md-5 mr-3 menu-product">
                        <img class="col-md-4 m-2 pl-0 pr-0 product-img" src="img\productDummyImg.png" alt="">
                        <div class="col-md-8">
                            <div class="row m-2 text-left product-text font-weight-bold">
                                Crispy Menu
                            </div>
                            <div class="row m-2 small text-left product-text">
                                French fries, garlic mayonnaise, lightly spicy chicken breast, coleslaw salad - 550g
                            </div>
                            <div class="row d-flex justify-content-between m-2 text-left font-weight-bold product-text">
                                <p class="m-0 p-0">31.90 RON</p>
                                <button class="d-inline-flex justify-content-center m-0 p-0 pl-2 pr-2 align-items-center btn btn-primary font-weight-bold" style="border-radius:15px; border-color:#FDFDFD;background-color:#F9B356">Add</button>                                            
                            </div>
                        </div>    
                    </div>

                    <div class="col-md-5 mr-3 menu-product">
                        <img class="col-md-4 m-2 pl-0 pr-0 product-img" src="img\productDummyImg.png" alt="">
                        <div class="col-md-8">
                            <div class="row m-2 text-left product-text font-weight-bold">
                                Crispy Menu
                            </div>
                            <div class="row m-2 small text-left product-text">
                                French fries, garlic mayonnaise, lightly spicy chicken breast, coleslaw salad - 550g
                            </div>
                            <div class="row d-flex justify-content-between m-2 text-left font-weight-bold product-text">
                                <p class="m-0 p-0">31.90 RON</p>
                                <button class="d-inline-flex justify-content-center m-0 p-0 pl-2 pr-2 align-items-center btn btn-primary font-weight-bold" style="border-radius:15px; border-color:#FDFDFD;background-color:#F9B356">Add</button>                                            
                            </div>
                        </div>    
                    </div>

                    <div class="col-md-5 mr-3 menu-product">
                        <img class="col-md-4 m-2 pl-0 pr-0 product-img" src="img\productDummyImg.png" alt="">
                        <div class="col-md-8">
                            <div class="row m-2 text-left product-text font-weight-bold">
                                Crispy Menu
                            </div>
                            <div class="row m-2 small text-left product-text">
                                French fries, garlic mayonnaise, lightly spicy chicken breast, coleslaw salad - 550g
                            </div>
                            <div class="row d-flex justify-content-between m-2 text-left font-weight-bold product-text">
                                <p class="m-0 p-0">31.90 RON</p>
                                <button class="d-inline-flex justify-content-center m-0 p-0 pl-2 pr-2 align-items-center btn btn-primary font-weight-bold" style="border-radius:15px; border-color:#FDFDFD;background-color:#F9B356">Add</button>                                            
                            </div>
                        </div>    
                    </div>

                    <div class="col-md-5 mr-3 menu-product">
                        <img class="col-md-4 m-2 pl-0 pr-0 product-img" src="img\productDummyImg.png" alt="">
                        <div class="col-md-8">
                            <div class="row m-2 text-left product-text font-weight-bold">
                                Crispy Menu
                            </div>
                            <div class="row m-2 small text-left product-text">
                                French fries, garlic mayonnaise, lightly spicy chicken breast, coleslaw salad - 550g
                            </div>
                            <div class="row d-flex justify-content-between m-2 text-left font-weight-bold product-text">
                                <p class="m-0 p-0">31.90 RON</p>
                                <button class="d-inline-flex justify-content-center m-0 p-0 pl-2 pr-2 align-items-center btn btn-primary font-weight-bold" style="border-radius:15px; border-color:#FDFDFD;background-color:#F9B356">Add</button>                                            
                            </div>
                        </div>    
                    </div>

                    <div class="col-md-5 mr-3 menu-product">
                        <img class="col-md-4 m-2 pl-0 pr-0 product-img" src="img\productDummyImg.png" alt="">
                        <div class="col-md-8">
                            <div class="row m-2 text-left product-text font-weight-bold">
                                Crispy Menu
                            </div>
                            <div class="row m-2 small text-left product-text">
                                French fries, garlic mayonnaise, lightly spicy chicken breast, coleslaw salad - 550g
                            </div>
                            <div class="row d-flex justify-content-between m-2 text-left font-weight-bold product-text">
                                <p class="m-0 p-0">31.90 RON</p>
                                <button class="d-inline-flex justify-content-center m-0 p-0 pl-2 pr-2 align-items-center btn btn-primary font-weight-bold" style="border-radius:15px; border-color:#FDFDFD;background-color:#F9B356">Add</button>                                            
                            </div>
                        </div>    
                    </div>

                    <div class="col-md-5 mr-3 menu-product">
                        <img class="col-md-4 m-2 pl-0 pr-0 product-img" src="img\productDummyImg.png" alt="">
                        <div class="col-md-8">
                            <div class="row m-2 text-left product-text font-weight-bold">
                                Crispy Menu
                            </div>
                            <div class="row m-2 small text-left product-text">
                                French fries, garlic mayonnaise, lightly spicy chicken breast, coleslaw salad - 550g
                            </div>
                            <div class="row d-flex justify-content-between m-2 text-left font-weight-bold product-text">
                                <p class="m-0 p-0">31.90 RON</p>
                                <button class="d-inline-flex justify-content-center m-0 p-0 pl-2 pr-2 align-items-center btn btn-primary font-weight-bold" style="border-radius:15px; border-color:#FDFDFD;background-color:#F9B356">Add</button>                                            
                            </div>
                        </div>    
                    </div>
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