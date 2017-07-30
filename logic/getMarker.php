<?php 
    session_start();
    include('conection.php');

// Start XML file, create parent node
$doc = new DOMDocument('1.0', 'utf-8');
$node = $doc->create_element("markers");
$parnode = $doc->append_child($node);

// Select all the rows in the markers table
$id_place = $_SESSION['id_place'];
$query = "SELECT latitude, longitude FROM places WHERE id_place='$id_place'";
$result = mysqli_query($conection, $query);

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  // Add to XML document node
  $node = $doc->create_element("marker");
  $newnode = $parnode->append_child($node);
  $newnode->set_attribute("lat", $row['lat']);
  $newnode->set_attribute("lng", $row['lng']);
}

$xmlfile = $doc->dump_mem();
echo $xmlfile;
?>