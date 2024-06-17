
  // Get the form element
  var form = document.querySelector("form");

  // Add event listener for form submission
  form.addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Get the form input values
    var firstName = document.getElementById("first-name").value;
    var lastName = document.getElementById("last-name").value;
    var address = document.getElementById("address").value;
    var nic = document.getElementById("nic").value;
    var areaCode = document.getElementById("area-code").value;
    var phoneNumber = document.getElementById("phone-number").value;

    // Perform validation or further processing here
    // ...

    // Display a success message
    alert("Form submitted successfully!");

    // Reset the form
    form.reset();
  });
});
