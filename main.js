function newsletter(){
var email = document.getElementById("nw_input").value;
var messageElement = document.getElementById("newsletter_message");
// Check if the email field is empty
    if (email.trim() === "") {
      messageElement.innerHTML = "Please enter your email address.";
     messageElement.style.color = "#FFFFFF";
     messageElement.style.marginTop = "10px";
	  // Clear the message after 2 seconds
        setTimeout(function () {
          messageElement.innerHTML = "";
        }, 2000);
		
      return; // Exit the function if the field is empty
    }
   // Email validation regular expression
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      messageElement.innerHTML = "Please enter a valid email address.";
      messageElement.style.color = "#FFFFFF";
     messageElement.style.marginTop = "10px";
	  // Clear the message after 2 seconds
        setTimeout(function () {
          messageElement.innerHTML = "";
		  document.getElementById("nw_input").value = "";
        }, 2000);
      return; // Exit the function if the email format is invalid
}
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4) {
        if (this.status == 200) {
          messageElement.innerHTML = this.responseText;
          messageElement.style.color = "#FFFFFF";
          messageElement.style.marginTop = "10px";
        } else {
          messageElement.innerHTML = "Failed to send email.";
          messageElement.style.color = "#FFFFFF";
          messageElement.style.marginTop = "10px";
        }
        // Clear the message after 2 seconds
        setTimeout(function () {
          messageElement.innerHTML = "";
        }, 2000);
      }
    };
    xhttp.open("POST", "newsletter.php?email=" + email, true);
    xhttp.send();
	// Clear previous message and input field
    messageElement.innerHTML = "";
    document.getElementById("nw_input").value = "";
} // end of newsletter function
//*************************************************************
  function submitForm(event) {
    event.preventDefault(); // Prevent form submission and page reload
    // Get form values
    var name = document.getElementById('name').value;
    var number = document.getElementById('number').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;
    var messageElement1 = document.getElementById("email_message");
    // Check if fields are empty
    if (name === '' || email === '' || subject === '' || message === '' || number=== '') {
      //alert('Please fill in all the fields.');
    messageElement1.innerHTML = "Please fill in all the fields.";
    messageElement1.style.color = "#fba504";
    messageElement1.style.marginTop = "10px";
      // Clear the message after 2 seconds
      setTimeout(function () {
          messageElement1.innerHTML = "";
        }, 2000);
      return;
    }
    // Email validation using a regular expression
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
    messageElement1.innerHTML = "Please enter a valid email address.";
    messageElement1.style.color = "#fba504";
    messageElement1.style.marginTop = "10px";
    setTimeout(function () {
          messageElement1.innerHTML = "";
        }, 2000);
      return;
    }
    // Send the request
    fetch('send_email.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body:
        'name=' +
        encodeURIComponent(name) +
        '&number=' +
        encodeURIComponent(number) +
        '&email=' +
        encodeURIComponent(email) +
        '&subject=' +
        encodeURIComponent(subject) +
        '&message=' +
        encodeURIComponent(message)
    })
      .then(function(response) {
        if (response.ok) {
          // Request completed successfully
          messageElement1.innerHTML = "Email sent successfully!";
          messageElement1.style.color = "#008000";
          messageElement1.style.marginTop = "10px";
          document.getElementById('name').value='';
          document.getElementById('number').value='';
          document.getElementById('email').value='';
          document.getElementById('subject').value='';
          document.getElementById('message').value='';
          setTimeout(function () {
          messageElement1.innerHTML = "";
        }, 2000);

        }else {
          // Request completed with errors
          messageElement1.innerHTML = "An error occurred while sending the email.";
          messageElement1.style.color = "#FF0000";
          messageElement1.style.marginTop = "10px";
        }
      })
      .catch(function(error) {
        // Request failed
        messageElement1.innerHTML = "An error occurred while sending the email.";
        messageElement1.style.color = "#FF0000";
        messageElement1.style.marginTop = "10px";
        console.error(error);
      });
  }