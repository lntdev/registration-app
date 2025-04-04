$(document).ready(function() {
    $('#registrationForm').on('submit', function() {
      let name = $('input[name="name"]').val();
      if (name.trim() === '') {
        alert("Name is required!");
        return false;
      }
      // Additional validation logic here
    });
  });
  