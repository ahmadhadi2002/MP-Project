<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<form id="search-form" enctype="multipart/form-data">
<data id="technique" ; name="technique" ; value="en"></data>
            
  <input type="text" name="query">
  <br><br>
  <input type="radio" name="searchType" value="normal" checked> Normal
  <input type="radio" name="searchType" value="reverse"> Reverse
  <br><br>
  <input type="file" name="file">
  <br><br>
  <textarea name="result" readonly></textarea>
  <br><br>
  <input type="text" value="Search" name="wed">
</form>

<script>
  $(document).ready(function() {
  $("#search-form").on("keyup", function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "search.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function(result) {
        $("textarea[name='result']").val(result);
      }
    });
  });
});

  </script>