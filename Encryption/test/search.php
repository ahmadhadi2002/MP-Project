
<?php
if (isset($_POST['query']) && isset($_POST['searchType'])) {
  $query = $_POST['query'];
  $searchType = $_POST['searchType'];
  $file = $_FILES['file'];
  $result = perform_search($query, $searchType, $file);
  echo $result;
  echo $_POST['wed'];
  echo "test";
}

function perform_search($query, $searchType, $file) {
  if ($searchType == 'reverse') {
    return strrev($query);
  } else {
    return $query;
  }
}
?>
