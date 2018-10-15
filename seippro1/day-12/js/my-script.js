

$("#firstName").keyup(function(){
    var firstNamevalue = $("#firstName").val();
    $("#first").text(firstNamevalue);

});

$("#lastName").keyup(function(){
    var lastNamevalue = $("#lastName").val();
    $("#last").text(lastNamevalue);

});

$("#lastName").blur(function(){
    var firstNamevalue = $("#firstName").val();
    var lastNamevalue = $("#lastName").val();
    $("#full").text(firstNamevalue+" "+lastNamevalue);

});




//
//$("#btn").click(function() {
//    var firstNameValue = $("#firstName").val();
//    var lastNameValue = $("#lastName").val();
//    var fullName = firstNameValue + ' ' + lastNameValue;
//    $("#fullName").val(fullName);
//});

//alert($('#h1') .text());



//
//var redBtnElement = document.getElementById('redBtn');
//
//    redBtnElement.onclick = function(){
//
//        var divOneElement = document.getElementById('div-one');
//        //divOneElement.style.backgroundColor = 'red';
//        divOneElement.className = 'class-one';
//
//    };
//var greenBtnElement = document.getElementById('greenBtn');
//
//greenBtnElement.onclick = function(){
//
//    var divOneElement = document.getElementById('div-one');
//   // divOneElement.style.backgroundColor = 'green';
//    divOneElement.className = 'class-two';
//
//};
//
//var blueBtnElement = document.getElementById('blueBtn');
//
//blueBtnElement.onclick = function(){
//
//    var divOneElement = document.getElementById('div-one');
//    //divOneElement.style.backgroundColor = 'blue';
//    divOneElement.className = 'class-three';
//
//};
//
//var defaultBtnElement = document.getElementById('defaultBtn');
//
//defaultBtnElement.onclick = function(){
//
//    var divOneElement = document.getElementById('div-one');
//    divOneElement.style.backgroundColor = 'white';
//
//};
//
//
//
//
//
//
//
//
//
//var btnElement = document.getElementById('btn');
//
//    btnElement.onclick = function(){
//        var startingNumberValue = document.getElementById('startingNumber').value;
//        var endingNumberValue = document.getElementById('endingNumber').value;
//
//        var res = '';
//        for(var x=startingNumberValue; x<=endingNumberValue; x++){
//
//            res+=x;// res = res(string) + x(string);
//        }
//
//        document.getElementById('result').value = res;
//
//    };