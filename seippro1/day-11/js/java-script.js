
var btnElement = document.getElementById('btn');

btnElement.onclick = function () {
    var firstNameValue = document.getElementById('firstName').value;
    var lastNameValue = document.getElementById('lastName').value;

    var fullName = firstNameValue+' '+lastNameValue;

    document.getElementById('fullName').value = fullName;
};

var additonBtn = document.getElementById('addition');
additonBtn.onclick = function(){
        var firstNumber1 = Number(document.getElementById('firstNumber').value);
        var secondNumber2 = Number(document.getElementById('secondNumber').value);
        var total = firstNumber1+secondNumber2;
        document.getElementById('result').value = total;

    };

var subtractionBtn = document.getElementById('subtraction');
subtractionBtn.onclick = function(){
    var firstNumber1 = Number(document.getElementById('firstNumber').value);
    var secondNumber2 = Number(document.getElementById('secondNumber').value);
    var total = firstNumber1-secondNumber2;
    document.getElementById('result').value = total;

};

var multiplicationBtn = document.getElementById('multiplication');
multiplicationBtn.onclick = function(){
    var firstNumber1 = Number(document.getElementById('firstNumber').value);
    var secondNumber2 = Number(document.getElementById('secondNumber').value);
    var total = firstNumber1*secondNumber2;
    document.getElementById('result').value = total;

};

var divisionBtn = document.getElementById('division');
divisionBtn.onclick = function(){
    var firstNumber1 = Number(document.getElementById('firstNumber').value);
    var secondNumber2 = Number(document.getElementById('secondNumber').value);
    var total = firstNumber1/secondNumber2;
    document.getElementById('result').value = total;

};

var remainderBtn = document.getElementById('remainder');
remainderBtn.onclick = function(){
    var firstNumber1 = Number(document.getElementById('firstNumber').value);
    var secondNumber2 = Number(document.getElementById('secondNumber').value);
    var total = firstNumber1%secondNumber2;
    document.getElementById('result').value = total;

};



//var paragraphElement = document.getElementsByTagName('p');
//
//                for(var key = 0;key<paragraphElement.length;key++){
//                    document.write(paragraphElement[key].innerHTML)+'<br/>';
//                }
//                for(var key in paragraphElement){
//                    document.write(paragraphElement[key].innerHTML+'<br/>');
//                }
//                var data = [];
//              data[0] = 10;
//              data[1] = 20;
//              data[2] = 30;
//
//                data['name'] = 'farid';
//                data['city'] = 'mirpur-10';
//                data['district'] = 'dhaka';
//
//                for(var key in data){
//                    document.write(data[key]+'<br/>');
//                }

//            var data = ['farid','dhaka','faridpur','rajbari'];
//            for(var anyname in data){
//                document.write(data[anyname]+'<br/>');


//            }

//            function demo(){
//                document.write('I love my country');
//            }
//
//            document.write('<br/>=================================<br/>');
//            demo();
//            document.write('<br/>=================================<br/>');
//            demo();
//            document.write('<br/>=================================<br/>');
//            demo();
//

//            function demo(firstName,lastName){
//                var fullName = firstName+ ' '+lastName;
//                document.write(fullName);
//            }
//
//            document.write('<br/>=================================<br/>');
//            demo('farid','mia');




