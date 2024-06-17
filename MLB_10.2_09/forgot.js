  var form = document.querySelector('form');

  form.addEventListener('submit', function(event) {
    event.preventDefault(); 

    var emailTelephone = document.getElementById('emailTelephone').value;
    var otp = document.getElementById('OTP').value;
    var newPassword = document.getElementById('NewPassword').value;
    var confirmNewPassword = document.getElementById('confirmNew').value;

  
    if (emailTelephone === '' || otp === '' || newPassword === '' || confirmNewPassword === '') {
      alert('Please fill in all fields.');
      return;
    }

    if (newPassword !== confirmNewPassword) {
      alert('Passwords do not match.');
      return;
    }

    var data = {
      emailTelephone: emailTelephone,
      otp: otp,
      newPassword: newPassword,
      confirmNewPassword: confirmNewPassword
    };

   
    fetch('process_password.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
    .then(function(response) {
      if (response.ok) {
        return response.json();
      } else {
        throw new Error('Error: ' + response.status);
      }
    })
    .then(function(data) {
      
      if (data.status === 'success') {
        alert(data.message);
       

      } else {
        alert('Error: ' + data.message);
      }
    })
    .catch(function(error) {
      console.error(error);
      alert('An error occurred. Please try again later.');
    });
  });

