
<script>
$(document).ready(function() {
  $("#search-form").submit(function(e) {
    e.preventDefault();
    var searchQuery = $("#search-input").val();
    $.ajax({
      type: "GET",
      url: "q.php",
      data: { q: searchQuery },
      success: function(results) {
        $("#search-results").html(results);
      }
    });
  });
});
</script>
<form id="search-form">
  <input type="text" id="search-input">
  <button type="submit">Search</button>
</form>
<div id="search-results"></div>
