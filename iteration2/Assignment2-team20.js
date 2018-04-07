// Function that populates windows with selection from drop-down lists.
// Minor bug - when selecting between lists, desired output will not show
// if item had already been selected.

var modal = document.getElementById('mModal');
var close = document.getElementsByClassName("close")[0];
var modalBody = document.getElementById("modal-body");
var list = document.getElementsByClassName("nItems")[0];
var artName = "Did not pick artwork";
var artPrice = "Did not pick artwork";
var shipM = "Did not pick shipping method";
var quantityP = 'Did not select quantity';
var tax = 1.13;
var shipping = 0;

function toggleBar() {

  var sbar = document.getElementById('bar');

  if (sbar.style.display === "none"){
    sbar.style.display = "block";
  } else {
    sbar.style.display = "none";
  }

}

function myModal() {

  var opt = document.getElementById("amodal");

  opt.onclick = function() {
    modal.style.display = "block";
  }

  close.onclick = function() {
    modal.style.display = "none";
    modalBody.innerHTML = "";
    list.style.display = "block";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
      modalBody.innerHTML = '';
      list.style.display = "block";
    }
  }
}

function invoice() {

  if (typeof quantityP == 'string') {
    quantityP = 0;
  }
  var fullPrice = quantityP * artPrice * tax + shipping;
  var curTax = artPrice * (0.13);
  var stringArtPrice, stringCurTax, stringFullPrice;

  if (typeof artPrice == 'number') {
    stringArtPrice = "$" + artPrice.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    stringCurTax = "$" + curTax.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    stringFullPrice = "$" + fullPrice.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
  } else {
    stringArtPrice = artPrice;
    stringCurTax = "$0";
    stringFullPrice = "$0";
  }

  if (list.style.display == "none") {
    list.style.display = "block";
  } else {
    list.style.display = "none";
  }
  modalBody.innerHTML = "<p>Title: " + artName + "</p><br>" +
    "<p>Price: " + stringArtPrice + "</p><br>" +
    "<p>Tax: " + stringCurTax + "</p><br>" +
    "<p>Quantity: " + quantityP + "</p><br>" +
    "<p>Shipping Method: " + shipM + "</p><br>" +
    "<p>Total: " + stringFullPrice + "</p>";
}

function artworkSelect(artworkName) {

  switch (artworkName.value) {
    case 'Mona Lisa':
      {
        artName = "Mona Lisa";
        artPrice = 1000000000;
        break;
      }
    case 'De Matteis Triumph of the Immaculate Anagoria':
      {
        artName = "De Matteis Triumph of the Immaculate Anagoria";
        artPrice = 200000000;
        break;
      }
    case 'The Delivery of the Keys to Saint Peter':
      {
        artName = "The Delivery of the Keys to Saint Peter";
        artPrice = 999999;
        break;
      }
    case 'The Starry Night':
      {
        artName = "The Starry Night";
        artPrice = 300000000;
        break;
      }
    case 'The Creation of Adam':
      {
        artName = "The Creation of Adam";
        artPrice = 300000;
        break;
      }
    case 'pick':
      {
        artName="Did not pick artwork";
        artPrice=0;
      }
  }
}

function artQuantity(quantity) {

  switch (quantity.value) {
    case '1':
      {
        quantityP = 1;
        break;
      }
    case '2':
      {
        quantityP = 2;
        break;
      }
    case '3':
      {
        quantityP = 3;
        break;
      }
    case '4':
      {
        quantityP = 4;
        break;
      }
    case '5':
      {
        quantityP = 5;
        break;
      }
    case 'SQ':
      {
        quantityP = 0;
        break;
      }
  }
}

function shipMethod(method) {

  switch (method.value) {
    case 'express':
      {
        shipM = "Express ($19.95)";
        shipping = 19.95;
        break;
      }
    case '2DS':
      {
        shipM = "2-Day Shipping ($14.95)";
        shipping = 14.95;
        break;
      }
    case 'standard':
      {
        shipM = "Standard ($10.95)";
        shipping = 10.95;
        break;
      }
    case 'ssm':
      {
        shipM = "Did not pick shipping method"
        shipping = 0;
      }
  }
}

function purchase() {

}
