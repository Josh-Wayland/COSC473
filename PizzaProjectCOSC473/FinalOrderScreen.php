<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <body>
  <link rel="stylesheet" href="FinalOrderSCreenCSS.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <center><h1> Thank you for your purchase!</h1></center>
    <center><p id="ThankYou">
    Your order number is: <?= rand(1, 100); ?>
    </br>
	The Food should be delivered in about: <?= rand(45, 60); ?> Minutes!
    </p></center>

    <form action="">
    <center><button id="HomeButton">Back To home page</button></center>
    </form>
  
  </body>
</html>  