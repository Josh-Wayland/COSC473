<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <body>
  <link rel="stylesheet" href="Cart.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <?php
        $PizzaSizeText;
        $PizzaSizePrice = 5.25;
        $PizzaSauceText;
        $PizzaSaucePrice = 2.25;
        $PepperoniText;
        $SausageText;
        $ChickenText;
        $HamText;
        $PineappleText;
        $Total = 50;

        //Pizza Sizes
        if(isset($_POST["smallpizza"]))
        {
            $PizzaSizeText = "Small Pizza";
        }
        else if(isset($_POST["mediumpizza"]))
        {
            $PizzaSizeText = "Medium Pizza";
        }
        else
        {
            $PizzaSizeText = "Large Pizza";
        }

        //Pizza Sauces
        if(isset($_POST["TomatoSauce"]))
        {
            $PizzaSauceText = "Tomato Sauce";
        }
        else if(isset($_POST["AlfredoSauce"]))
        {
            $PizzaSauceText = "Alfredo Sauce";
        }
        else{
            $PizzaSauceText = "No Sauce";
        }
        
        //Toppings
        if(isset($_POST["PepperoniTopping"]))
        {
            $PepperoniText = "Pepperoni";
        }
        else
        {
            $PepperoniText = "No Pepperoni";
        }
        if(isset($_POST["SausageTopping"]))
        {
            $SausageText = "Sausage";
        }
        else
        {
            $SausageText = "No Sausage";
        }
        if(isset($_POST["ChickenTopping"]))
        {
            $ChickenText = "Chicken";
        }
        else
        {
            $ChickenText = "No Chicken";
        }
        if(isset($_POST["HamTopping"]))
        {
            $HamText = "Ham";
        }
        else
        {
            $HamText = "No Ham";
        }
        if(isset($_POST["PineappleTopping"]))
        {
            $PineappleText = "Pineapple";
        }
        else
        {
            $PineappleText = "No Pineapple";
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
                <li id="ToppingsTitleText">Toppings (All Toppings are $... each)</li>
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