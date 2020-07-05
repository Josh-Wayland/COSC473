function SmallRadioShow()
{
    var image = document.getElementById('smallIcon');
    var SmallRadio = document.getElementById('SmallSizeRadio');
    SmallRadio.style.visibility = "visible";
}

function SmallRadioHide()
{
    var image = document.getElementById('smallIcon');
    var SmallRadio = document.getElementById('SmallSizeRadio');
    SmallRadio.style.visibility = "hidden";
}

function MoveToSauce()
{
    var Sauce = document.getElementById('SauceAndToppings').scrollIntoView({behavior: "smooth"});
}