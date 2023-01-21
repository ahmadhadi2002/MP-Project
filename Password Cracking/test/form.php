
<form method="post" action="form-submit.php" onsubmit="return false;">
  <input type="text" name="name" placeholder="Enter your name">
  <input type="email" name="email" placeholder="Enter your email">
  <textarea name="message" placeholder="Enter your message"></textarea>
  <input type="submit" value="Submit" onclick="submitForm(event)">
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  function submitForm(event) {
    event.preventDefault();

    var formData = {
      'name': $('input[name=name]').val(),
      'email': $('input[name=email]').val(),
      'message': $('textarea[name=message]').val()
    };

    $.ajax({
      type: "POST",
      url: "form-submit.php",
      data: formData,
      success: function(data) {
        console.log(data);
        alert("Form submitted successfully!");
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
        alert("An error occurred while submitting the form.");
      }
    });
  }
</script>

<?php
// form data processing logic


    $table = "<table>";
    $table .= "<tr><th>Name</th><th>Email</th><th>Message</th></tr>";
    $table .= "<tr><td>$name</td><td>$email</td><td>$message</td></tr>";
    $table .= "</table>";

    echo $table;

?>
