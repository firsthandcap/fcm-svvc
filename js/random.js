// JavaScript Document
// init
randomOrder();



// FUNCTIONS
// . . . . .

function randomOrder()
{
  var randomArray = ["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven"];
  var newOrder = [];
  var originalNumberOfItems = randomArray.length;
  var movingIndex = originalNumberOfItems -1;

  for (var foo = 0; foo < originalNumberOfItems; foo++) {
    var random = randomArray[Math.floor(Math.random() * randomArray.length)];
    var indexNumber = randomArray.indexOf(random);
    newOrder.push(random);
    randomArray.splice( indexNumber, 1);
  }
  randomDisplay(newOrder, originalNumberOfItems, movingIndex); // pass data to randomDisplay
}


function randomDisplay(newOrder, originalNumberOfItems, movingIndex) {

 for (var bar = 0; bar < originalNumberOfItems; bar++) {

   // console.log(movingIndex);
   // take index[0] and use that number to grab that script ID's html
   // then append it to the DOM
   var y = newOrder[movingIndex];
   movingIndex = movingIndex-1;
   console.log("movingIndex is: " + movingIndex);
   console.log("y ID from newOrder array: " + y);


   var tempHTML = $('#'+y).html();
   console.log(tempHTML);

   $('.randomized-board').append(tempHTML);


 }
}
