function SmallIconChecked(){
    var image = document.getElementById('smallIcon');
    var SmallCheckBox = document.getElementById('checkboxsmall')
    var MediumCheckBox = document.getElementById('checkboxmedium')
    var LargeCheckBox = document.getElementById('checkboxlarge')
    SmallCheckBox.style.visibility = "visible";
    SmallCheckBox.checked = true;

    if(SmallCheckBox.checked = true){
        MediumCheckBox.checked = false;
        MediumCheckBox.style.visibility = "hidden";
       
        LargeCheckBox.checked = false;
        LargeCheckBox.style.visibility = "hidden";
    }
}

function MediumIconChecked(){
    var image = document.getElementById('mediumIcon');
    var SmallCheckBox = document.getElementById('checkboxsmall');
    var MediumCheckBox = document.getElementById('checkboxmedium');
    var LargeCheckBox = document.getElementById('checkboxlarge');
    MediumCheckBox.style.visibility = "visible";
    MediumCheckBox.checked = true;

    if(MediumCheckBox.checked = true){
        SmallCheckBox.checked = false;
        SmallCheckBox.style.visibility = "hidden";
       
        LargeCheckBox.checked = false;
        LargeCheckBox.style.visibility = "hidden";
    }
}

function LargeIconChecked(){
    var image = document.getElementById('largeIcon');
    var SmallCheckBox = document.getElementById('checkboxsmall');
    var MediumCheckBox = document.getElementById('checkboxmedium');
    var LargeCheckBox = document.getElementById('checkboxlarge');
    LargeCheckBox.style.visibility = "visible";
    LargeCheckBox.checked = true;

    if(LargeCheckBox.checked = true){
        SmallCheckBox.checked = false;
        SmallCheckBox.style.visibility = "hidden";
       
        MediumCheckBox.checked = false;
        MediumCheckBox.style.visibility = "hidden";
    }
}

function MoveToSauce()
{
    var Sauce = document.getElementById('SauceAndToppings').scrollIntoView({behavior: "smooth"});
}

function TomatoIconChecked(){
    var image = document.getElementById('TomatoIcon');
    var TomatoCheckBox = document.getElementById('checkboxtomato');
    var AlfredoCheckBox = document.getElementById('checkboxalfredo');
    TomatoCheckBox.style.visibility = "visible";
    TomatoCheckBox.checked = true;

    if(TomatoCheckBox.checked = true){
        AlfredoCheckBox.checked = false;
        AlfredoCheckBox.style.visibility = "hidden";
    }
}

function AlfredoIconChecked(){
    var image = document.getElementById('AlfredoIcon');
    var TomatoCheckBox = document.getElementById('checkboxtomato');
    var AlfredoCheckBox = document.getElementById('checkboxalfredo');
    AlfredoCheckBox.style.visibility = "visible";
    AlfredoCheckBox.checked = true;

    if(AlfredoCheckBox.checked = true){
        TomatoCheckBox.checked = false;
        TomatoCheckBox.style.visibility = "hidden";
    }
}

function PepperoniIconChecked(){
    var image = document.getElementById('PepperoniIcon');
    var PepperoniCheckBox = document.getElementById('checkboxpepperoni');
    PepperoniCheckBox.style.visibility = "visible";
    PepperoniCheckBox.checked = true;
}

function PepperoniIconNotChecked(){
    var image = document.getElementById('PepperoniIcon');
    var PepperoniCheckBox = document.getElementById('checkboxpepperoni');
    PepperoniCheckBox.style.visibility = "hidden";
    PepperoniCheckBox.checked = false;
}

function SausageIconChecked(){
    var image = document.getElementById('SausageIcon');
    var SausageCheckBox = document.getElementById('checkboxsausage');
    SausageCheckBox.style.visibility = "visible";
    SausageCheckBox.checked = true;
}

function SausageIconNotChecked(){
    var image = document.getElementById('SausageIcon');
    var SausageCheckBox = document.getElementById('checkboxsausage');
    SausageCheckBox.style.visibility = "hidden";
    SausageCheckBox.checked = false;
}

function ChickenIconChecked(){
    var image = document.getElementById('ChickenIcon');
    var ChickenCheckBox = document.getElementById('checkboxchicken');
    ChickenCheckBox.style.visibility = "visible";
    ChickenCheckBox.checked = true;
}

function ChickenIconNotChecked(){
    var image = document.getElementById('ChickenIcon');
    var ChickenCheckBox = document.getElementById('checkboxchicken');
    ChickenCheckBox.style.visibility = "hidden";
    ChickenCheckBox.checked = false;
}

function HamIconChecked(){
    var image = document.getElementById('HamIcon');
    var HamCheckBox = document.getElementById('checkboxham');
    HamCheckBox.style.visibility = "visible";
    HamCheckBox.checked = true;
}

function HamIconNotChecked(){
    var image = document.getElementById('HamIcon');
    var HamCheckBox = document.getElementById('checkboxham');
    HamCheckBox.style.visibility = "hidden";
    HamCheckBox.checked = false;
}

function PineappleIconChecked(){
    var image = document.getElementById('PineappleIcon');
    var PineappleCheckBox = document.getElementById('checkboxpineapple');
    PineappleCheckBox.style.visibility = "visible";
    PineappleCheckBox.checked = true;
}

function PineappleIconNotChecked(){
    var image = document.getElementById('PineappleIcon');
    var PineappleCheckBox = document.getElementById('checkboxpineapple');
    PineappleCheckBox.style.visibility = "hidden";
    PineappleCheckBox.checked = false;
}