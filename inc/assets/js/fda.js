  function submitGoogleForm(form) {
    var emailValue = encodeURIComponent(form.email.value);    // Encode the email value
    var domainValue = encodeURIComponent(form.domain.value);  // Encode the domain value
    var url = 'https://docs.google.com/forms/d/e/1FAIpQLSfJcgVxIz_pNPZU6dMfezuhyN3QFgc5zIxrDv5XGc4wDbAY4A/formResponse';
    url += '?entry.119725478=' + emailValue;   // Replace 'entry.119725478' with the actual field ID
    url += '&entry.1614327637=' + domainValue; // Replace 'entry.1614327637' with the actual field ID
    url += '&submit=Submit';

    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);

    // Set the appropriate headers
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader('Accept', 'application/xml');

    // Handle the response
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Request succeeded
        console.log('Form submitted successfully.');
      } else if (xhr.readyState === 4 && xhr.status !== 200) {
        // Request failed
        console.error('Error submitting the form.');
      }
    };

    // Send the request
    xhr.send();

    return false; // Prevent the default form submission
  }