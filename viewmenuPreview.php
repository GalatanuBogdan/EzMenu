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

<?php
    //init all variables that uses dynamic data from DB
    $restaurantID = 1; //when generating the QRCode, this should be set
    $tableNumber = 1;  //when generating the QRCode, this should be set
    
    $restaurantID=$_GET['restaurantID'] ?? 1;
    $restaurantTableNumber=$_GET['tableNumber'] ?? 1;
    
    $getRestaurantApiRequest = file_get_contents("http://localhost/EzMenu/api/restaurants/read.php?restaurantID=$restaurantID");
    $restaurant = json_decode($getRestaurantApiRequest, true);
    $products = array();
    $categories = array();
    $tables = array();
    if($restaurant != null)
    {
        $products = $restaurant['products'];
        $categories = $restaurant['categories'];
        $tables = $restaurant['tables'];
    }
    else
    {
        echo "No restaurant found with restaurantId=$restaurantID";
        //to do: add an exception
    }

    $table = null;
    foreach($tables as $current_table) {
        if($current_table['tableNumber'] == $restaurantTableNumber)
        {
            $table = $current_table;
            break;
        }
    }
?>
<body>
    
    <div style="border-radius:0.8rem !important; box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.4);" ; class="container bg-white shadow-lg">
        <div class="row">
            <div class="col-md-8 align-self-center">
                <div class="row">
                    <div class="col-md-8 bg-white">
                        <?php 
                            if($restaurant)
                                echo '<h2 style="text-align:center; font-weight: bold;">' . $restaurant['name'] .'!</h2>' ; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 bg-white">

                        <?php 
                            if($table)
                                echo '<h3 style="text-align:center; font-weight: bold;"> Table #' . $table['tableNumber'] .'</h3>';
                         ?>
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

    <div class="container-fluid" style="margin-top:100px" ;>
        <div class="row">
            <!-- categories -->
            <div class="col-md-2 pl-4">
                <div class="row">
                    <img class="p-0 m-0 ml-2" src="img\categoriesImg.png" alt="">
                    <h4 class="p-0 m-2 categories-title">Categories</h4>
                </div>
                
                <br>
                <br>
                <div class="ml-3">

                    <?php
                        if($categories)        
                            $currentSelected = $categories[0];
                        else
                            $currentSelected = null;

                        for($i=0;$i<count($categories); $i++)
                        {
                            if($categories[$i] == $currentSelected)
                            {
                                echo '
                                    <div class="row">
                                        <h5 style="font-weight:bold">' . $categories[$i]['name'] . '</h5>
                                    </div>
                                    <hr style="border-top: 1px solid rgba(0,0,0,.3); width:70%;" class="row mt-1" />
                                    ';
                            }
                            else
                            {
                                echo '
                                    <div class="row">
                                        <h5>' . $categories[$i]['name'] . '</h5>
                                    </div>
                                    <hr style="border-top: 1px solid rgba(0,0,0,.3); width:70%;" class="row mt-1" />
                                ';
                            }
                          
                        }

                    ?>
                </div>
            </div>

            <div class="col-md-10">
                <!-- searchBar -->
                <div class="form d-flex col-md-9">
                    <i class="fa fa-search"></i>
                    <input id="custom-input" type="text" class="form-control form-input" placeholder="Search in Mama Mia...">
                    <span class="absolute left-pan"><i class="fa fa-filter"></i></span>
                </div>
                <!-- Selected category + allergensBar -->
                <br>
                <div class="row">
                    <!-- Selected category -->
                    <div class="col-md-4">
                    <?php
                        if($currentSelected != null)
                        {
                            echo '<h3 style="font-weight:bold">' . $currentSelected['name'] . ':</h3> ';
                        }
                        else
                        {
                            //something wrong to categories, but add the col-md-2 class for better spacing
                            echo '<h3 style="font-weight:bold"></h3>';
                        }
                       
                    ?>
                     </div>
                    <div class="col-md-7">
                        <div class="row">
                            <label  class="col-md-8 p-0 m-0 d-flex" for="whatev2" style="border-radius:0.8rem !important; box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.4);">
                                <button class="m-2 btn btn-primary bg-danger" style="border-radius:15px; border-color:#FDFDFD">Milk<span style="font-weight:bold"> -</span></button>                                            
                                <button class="m-2 btn btn-primary bg-danger" style="border-radius:15px; border-color:#FDFDFD">Eggs<span style="font-weight:bold"> -</span></button>                                            
                                <button class="ml-auto btn btn-primary" style="border-radius: 0px 10px 10px 0px; background-color:#F9B356; border-color:#F9B356">Add Allergens<span style="font-weight:bold;"> +</span></button>                                            
                            </label>
                        </div>
                    </div>
                </div>

                <div class= "d-flex row mt-5" id="products-list">
                    <?php
                        for($i=0;$i<count($products);$i++)
                        {
                            echo 
                            '<div class="col-md-4 m-4 mt-5 p-0 menu-product">
                                <img class="col-4 m-0 p-0 product-img" src="img\productDummyImg.png" alt="">
                                <div class="d-flex flex-column col-md-8 m-0 p-0 justify-content-around">
                                    <div class="row m-2 text-left product-text font-weight-bold">
                                        '. $products[$i]['title'] .'
                                    </div>
                                    <div class="d-flex row m-2 small text-left product-text">
                                        '. $products[$i]['previewDescription'] .'
                                    </div>
                                    <div class="d-flex row m-2 small text-left product-text">
                                        '. $products[$i]['cantity'] .'
                                    </div>
                                    <div class="row d-flex justify-content-between m-2 text-left font-weight-bold product-text">
                                        '. $products[$i]['price'] .'
                                    </div>
                                    <div class="row d-flex p-0 pr-3 pb-2 m-0 font-weight-bold justify-content-end">
                                        <button class="d-inline-flex m-0 p-0 pl-2 pr-2 align-items-center btn btn-primary font-weight-bold product-img justify-content-center" style="border-radius:15px; border-color:#FDFDFD;background-color:#F9B356">Add</button>                                            
                                    </div>
                                </div>    
                            </div>
                            ';
                        }
                    ?>

                    <!-- <div class="col-md-5 mr-3 menu-product">
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
                    </div> -->
                </div>
            </div>

        </div>
    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>	
    function autocomplete(inp, products)
    {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e)
        {
            var productsListContainer, inputFormText = this.value;
            /*close any already open lists of autocompleted values*/
            clearSearchResults();

            console.log(inputFormText);

            /*create a DIV element that will contain the items (values):*/
            productsListContainer = document.getElementById("products-list");
            

            var productsToShow = getFilteredProductsResults(inputFormText, products);

            for (var i = 0; i < productsToShow.length; i++)
            {			
                var productItem, productImage, textSection;
                productItem = document.createElement("DIV");
                /*make the matching letters bold:*/
                productItem.setAttribute("class", "col-md-4 m-4 mt-5 p-0 menu-product");
                
                productImage = document.createElement("IMG");
                productImage.setAttribute("class", "col-4 m-0 p-0 product-img");
                productImage.setAttribute("src", "img/productDummyImg.png");
                productItem.appendChild(productImage);

                textSection = document.createElement("DIV");
                textSection.setAttribute("class", "d-flex flex-column col-md-8 m-0 p-0 justify-content-around")
                productItem.appendChild(textSection);

                var productTitle, productShortDescription, productWeight, productPrice, productBtnContainer, productAddBtn;

                productTitle = document.createElement("DIV");
                productTitle.setAttribute("class", "row m-2 text-left product-text font-weight-bold");
                productTitle.innerHTML = productsToShow[i]['title'];
                textSection.appendChild(productTitle);

                productShortDescription = document.createElement("DIV");
                productShortDescription.setAttribute("class", "d-flex row m-2 small text-left product-text");
                productShortDescription.innerHTML = productsToShow[i]['previewDescription'];
                textSection.appendChild(productShortDescription);

                productCantity = document.createElement("DIV");
                productCantity.setAttribute("class", "d-flex row m-2 small text-left product-text");
                productCantity.innerHTML = productsToShow[i]['cantity'];
                textSection.appendChild(productCantity);

                productPrice = document.createElement("DIV");
                productPrice.setAttribute("class", "row d-flex justify-content-between m-2 text-left font-weight-bold product-text");
                productPrice.innerHTML = productsToShow[i]['price'];
                textSection.appendChild(productPrice);

                productBtnContainer = document.createElement("DIV");
                productBtnContainer.setAttribute("class", "row d-flex p-0 pr-3 pb-2 m-0 font-weight-bold justify-content-end");
                productBtnContainer.innerHTML = "<button class=\"d-inline-flex m-0 p-0 pl-2 pr-2 align-items-center btn btn-primary font-weight-bold product-img justify-content-center\" style=\"border-radius:15px; border-color:#FDFDFD;background-color:#F9B356\">Add</button>";
                textSection.appendChild(productBtnContainer);
                
                productsListContainer.appendChild(productItem);
            }
        });
    }

    function getFilteredProductsResults(searchInputText, products)
    {
        var showRandomProducts = false;
        var matchedProducts = [];
        for (var i = 0; i < products.length; i++)
        {
            var textCopy = searchInputText;
            var match = false;
            while(textCopy.length > 0 && !match)
            {
                if (products[i]['title'].substr(0, textCopy.length).toUpperCase() == textCopy.toUpperCase() || showRandomProducts)
                    match = true;
                
                textCopy = textCopy.slice(0, -1);
                console.log(textCopy);
            }

            if(match)
                matchedProducts.push(products[i]);
        }
        return matchedProducts;
    }

    function clearSearchResults(elmnt)
    {
        var productsList = document.getElementById("products-list");
        if(productsList)
        {
            var first = productsList.firstElementChild;
            while (first)
            {
                first.remove();
                first = productsList.firstElementChild;
            }
        }
    }

    var jsRestaurantID = "<?php echo $restaurantID; ?>";
    var loadProductsApiRequest = "http://localhost/ezmenu/api/products/read.php?restaurantID=" + jsRestaurantID;
    // Assign handlers immediately after making the request,
    var productsJson = jQuery.getJSON( loadProductsApiRequest, function() {})
        .done(function() {
            //console.log( "second success" );
            console.log(productsJson);
            var productsArray = JSON.parse(productsJson.responseText);
            console.log(productsArray);
            autocomplete(document.getElementById("custom-input"), productsArray);
        })
        .fail(function() {
        //console.log( "error" );
        })
        .always(function() {
        //console.log( "complete" );
        });
        
</script>

<!-- bootstrap scripts start -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- bootstrap scripts end -->

</html>