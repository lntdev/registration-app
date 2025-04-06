$(document).ready(function() {
  $('#registerForm').on('submit', function(e) {
    let name = $('input[name="name"]').val();
    alert("Thank you for registering, " + name + "!");
  });
});
  