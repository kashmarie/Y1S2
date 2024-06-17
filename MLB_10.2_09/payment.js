
document.addEventListener('DOMContentLoaded', function() {

  var paymentForm = document.querySelector('form');

 
  paymentForm.addEventListener('submit', function(event) {
    event.preventDefault(); 

    
    var paymentMethod = document.getElementById('paymentMethod').value;
    var cardNumber = document.getElementById('cardNumber').value;
    var cardHolderName = document.getElementById('cardHolderName').value;
    var expiryDate = document.getElementById('expiryDate').value;
    var cvv = document.getElementById('cvv').value;

  
    var paymentData = {
      paymentMethod: paymentMethod,
      cardNumber: cardNumber,
      cardHolderName: cardHolderName,
      expiryDate: expiryDate,
      cvv: cvv
    };

    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'process_payment.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');

    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
       
        alert('Payment processed successfully.');
        paymentForm.reset(); 
      }
    };

    xhr.send(JSON.stringify(paymentData));
  });
});
