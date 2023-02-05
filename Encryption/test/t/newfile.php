<form id="input-form">
  <input type="text" id="input-field">
</form>
<div id="output"></div>

<script>
    $(document).ready(function() {
  $("#input-field").on("keyup", function() {
    var input = $(this).val();
    console.log(input);
    $.ajax({
      type: "GET",
      url: "processor.php",
      data: { input: input },
      success: function(response) {
        $("#output").html(response);
      }
    });
  });
});

</script>