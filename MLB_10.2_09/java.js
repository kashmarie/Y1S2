// Get the form and input elements
const form = document.getElementById('hform');
const input1 = document.getElementById('input1');
const input2 = document.getElementById('input2');
const input3 = document.getElementById('input3');
const submitButton = document.getElementById('submitButton');

// Add event listeners to the input fields
input1.addEventListener('input', validateForm);
input2.addEventListener('input', validateForm);
input3.addEventListener('input', validateForm);



// Function to validate the form inputs
function validateForm() {
  // Check if both inputs have a value
  if (input1.value && input2.value && input3.value) {
    submitButton.disabled = false; // Enable the submit button
  } else {
    submitButton.disabled = true; // Disable the submit button
  }
}
function redirectToPage() {
      // Redirect to the desired page
      window.open("Food.html");
}
