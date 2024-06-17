

// Add an event listener to the login form submit button
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission

    // Get the entered username and password values
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Validate the username and password
    if (username && password) {
        // Perform login logic here
        // ...
        // Show login success message
        alert('Login successful! Welcome, ' + username + '!');
    } else {
        // Show error message if username or password is empty
        alert('Please fill in all fields.');
    }
});
