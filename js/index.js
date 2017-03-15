$( document ).ready(function() {
  // Handler for .ready() called.
  //debugger;
	$(".card-panel").makeCardsDraggable();
});

function swapCards(card1, card2){
  var bottomCardPrevious = $(card2).prev();
  $(card1).before($(card2));
  $(bottomCardPrevious).after($(card1));
}

function swapCardsAnimated(card1, card2){
  var origPos = [];
  var listOfCards = $(card1).parent().children(".card-panel");
  
  // Get the origonal positions of all the cards
  // Todo: Animate only the cards that are moved
  $.each(listOfCards, function(i, o) {
    origPos.push($(o).getBoundingClientRect());
  });
  
  // Swap cards
  $(card1).before($(card2));
  
  // 
  $.each(listOfCards, function(i, o) {
    origPos.push($(o).getBoundingClientRect());
  });
  
}