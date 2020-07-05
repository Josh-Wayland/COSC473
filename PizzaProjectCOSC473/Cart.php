<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <body>
  <link rel="stylesheet" href="Cart.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <?php
        $PizzaSizeText;
        $PizzaSauceText;
        $PepperoniText;
        $SausageText;
        $ChickenText;
        $HamText;
        $PineappleText;
        $Total;

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
            $PepperoniText = "";
        }
        if(isset($_POST["SausageTopping"]))
        {
            $SausageText = "Sausage";
        }
        else
        {
            $SausageText = "";
        }
        if(isset($_POST["ChickenTopping"]))
        {
            $ChickenText = "Chicken";
        }
        else
        {
            $ChickenText = "";
        }
        if(isset($_POST["HamTopping"]))
        {
            $HamText = "Ham";
        }
        else
        {
            $HamText = "";
        }
        if(isset($_POST["PineappleTopping"]))
        {
            $PineappleText = "Pineapple";
        }
        else
        {
            $PineappleText = "";
        }
        ?>
        
        <div>Top bar</div>
        <center><p id="CartText"> Cart </p></center>
        <div id="FullCart">
        <center><table>
            <tr id="YourOrderText">
                <th>Your Order</th>
            </tr>
            <tr>
                <th id="SizeTitleText">Size</td>
                <tr>
                    <td id="PizzaSize"> <?= $PizzaSizeText ?> </td>
                </tr>
            </tr>
            <tr>
                <th id="SauceTitleText">Sauce</td>
                <tr>
                    <td id="PizzaSauce"> <?= $PizzaSauceText ?> </td>
                </tr>
            </tr>
            <tr>
                <th id="ToppingsTitleText">Toppings</td>
                <tr>
                    <td class="PizzaToppings"> <?= $PepperoniText ?> </td>
                    <tr>
                        <td class="PizzaToppings"> <?= $SausageText ?> </td>
                    </tr>
                    <tr>
                        <td class="PizzaToppings"> <?= $ChickenText ?> </td>
                    </tr>
                    <tr>
                        <td class="PizzaToppings"> <?= $HamText ?> </td>
                    </tr>
                    <td class="PizzaToppings"> <?= $PineappleText ?> </td>
                </tr>
            </tr>
            <tr>
                <th id="TotalTitleText">Total</td>
                <tr>
                    <td id="TotalPrice"> $50</td>
                </tr>
            </tr>
        </table></center>
    </div>
  </body>
</html>  