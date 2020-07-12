<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <body>
  <link rel="stylesheet" href="Cart.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pizzapoloza";
        // Create connection

        $conn = new mysqli($servername, $username, $password, $dbname);
	    
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $PizzaSizeText;
        $PizzaSizePrice = 0;
        $PizzaSauceText;
        $PizzaSaucePrice = 0;
        $PepperoniText;
        $SausageText;
        $ChickenText;
        $HamText;
        $PineappleText;
        $ToppingsPrice = 0;
        $Total = 0;

        //Pizza Sizes
        if(isset($_POST["smallpizza"]))
        {
            $PizzaSizeText = "Small Pizza";
            $PizzaSizePrice = 5.00;
        }
        else if(isset($_POST["mediumpizza"]))
        {
            $PizzaSizeText = "Medium Pizza";
            $PizzaSizePrice = 7.00;
        }
        else
        {
            $PizzaSizeText = "Large Pizza";
            $PizzaSizePrice = 9.00;
        }

        //Pizza Sauces
        if(isset($_POST["TomatoSauce"]))
        {
            $PizzaSauceText = "Tomato Sauce";
            $PizzaSaucePrice = 0;
        }
        else if(isset($_POST["AlfredoSauce"]))
        {
            $PizzaSauceText = "Alfredo Sauce";
            $PizzaSaucePrice = 2.50;
        }
        else{
            $PizzaSauceText = "No Sauce";
        }
        
        //Toppings
        if(isset($_POST["PepperoniTopping"]))
        {
            $PepperoniText = "Pepperoni";
            $ToppingsPrice = $ToppingsPrice + 0;
        }
        else
        {
            $PepperoniText = "No Pepperoni";
        }
        if(isset($_POST["SausageTopping"]))
        {
            $SausageText = "Sausage";
            $ToppingsPrice = $ToppingsPrice + 1.00;
        }
        else
        {
            $SausageText = "No Sausage";
        }
        if(isset($_POST["ChickenTopping"]))
        {
            $ChickenText = "Chicken";
            $ToppingsPrice = $ToppingsPrice + 1.00;
        }
        else
        {
            $ChickenText = "No Chicken";
        }
        if(isset($_POST["HamTopping"]))
        {
            $HamText = "Ham";
            $ToppingsPrice = $ToppingsPrice + 1.00;
        }
        else
        {
            $HamText = "No Ham";
        }
        if(isset($_POST["PineappleTopping"]))
        {
            $PineappleText = "Pineapple";
            $ToppingsPrice = $ToppingsPrice + 1.00;
        }
        else
        {
            $PineappleText = "No Pineapple";
        }
        $Total = $PizzaSaucePrice + $PizzaSizePrice + $ToppingsPrice;

        $sql = "INSERT INTO `nousername`(`toppings`, `sauce`, `size`, `total`) VALUES ( $ToppingsPrice, $PizzaSaucePrice, $PizzaSizePrice, $Total)";

        if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        ?>
        
        <div>
            <img id="ShopIcon" src="images/CutePizzaShopIcon.jpg">
        </div>
        <center><p id="CartText"> Cart </p></center>
        <div id="FullCart">
        <table>
            <p id="YourOrderText">
                Your Order
            </p>
            <ul>
                <li id="SizeTitleText">Size</li>
                <ul>
                    <li id="PizzaSize"> <?= $PizzaSizeText ?> </li>
                    <li class="PizzaSizeSaucePrice"> $<?= $PizzaSizePrice ?> </li>
                </ul>
            </ul>
            <ul>
                <li id="SauceTitleText">Sauce</li>
                <ul>
                    <li id="PizzaSauce"> <?= $PizzaSauceText ?> </li>
                    <li class="PizzaSizeSaucePrice"> $<?= $PizzaSaucePrice ?> </li>
                </ul>
            </ul>
            <ul>
                <li id="ToppingsTitleText">Toppings (All Toppings are $ 1.00 each)</li>
                <ul>
                    <li class="PizzaToppings"> <?= $PepperoniText ?> </li>
                    <!-- <li class="PizzaToppingsPrice"> $</?= $PizzaSaucePrice ?> </li> -->
                    
                    <li class="PizzaToppings"> <?= $SausageText ?> </li>
                    <!-- <li class="PizzaToppingsPrice"> $</?= $PizzaSaucePrice ?> </li> -->
                    
                    <li class="PizzaToppings"> <?= $ChickenText ?> </li>
                    <!-- <li class="PizzaToppingsPrice"> $</?= $PizzaSaucePrice ?> </li> -->
                    
                    <li class="PizzaToppings"> <?= $HamText ?> </li>
                    <!-- <li class="PizzaToppingsPrice"> $</?= $PizzaSaucePrice ?> </li> -->
                    
                    <li class="PizzaToppings"> <?= $PineappleText ?> </li>
                    <!-- <li class="PizzaToppingsPrice"> $</?= $PizzaSaucePrice ?> </li> -->
                </ul>
            </ul>
            <ul>
                <li id="TotalTitleText">Total</li>
                <ul>
                    <li id="TotalPrice"> $<?= $Total ?> </li>
                </ul>
            </ul>
        </table>
    </div>
    
    <form action="ToppingTestPage.html">
        <button id="BackToToppings">Edit Order</button>
    </form>

    <form action="Checkout.php">
    <button id="Checkout">Checkout</button>
    </form>
 
  </body>
</html>