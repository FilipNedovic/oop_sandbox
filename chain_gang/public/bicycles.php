<?php require_once("../private/initialize.php"); ?>

<?php $page_title = "Inventory"; ?>
<?php include(SHARED_PATH . "/public_header.php"); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for("/images/AdobeStock_55807979_thumb.jpeg") ?>" />
      <h2>Our Inventory of Used Bicycles</h2>
      <p>Choose the bike you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category</th>
        <th>Gender</th>
        <th>Color</th>
        <th>Weight</th>
        <th>Condition</th>
        <th>Price</th>
      </tr>

      <?php

      $parser = new ParseCSV(PRIVATE_PATH . "/used_bicycles.csv");
      $bike_array = $parser->parse();

      print_r($bike_array);

      $args = [
        "brand" => "Trek",
        "model" => "Emonda",
        "year" => 2017,
        "gender" => "Unisex",
        "color" => "black",
        "weight_kg" => 1.5,
        "category" => "Road",
        "price" => 1000.00
      ];
      $bike = new Bicycle($args);

      ?>

      <?php for ($i = 0; $i <= 10; $i++) { ?>
        <tr>
          <td>
            <?php echo $bike->brand; ?>
          </td>
          <td>
            <?php echo $bike->model; ?>
          </td>
          <td>
            <?php echo $bike->year; ?>
          </td>
          <td>
            <?php echo $bike->category; ?>
          </td>
          <td>
            <?php echo $bike->gender; ?>
          </td>
          <td>
            <?php echo $bike->color; ?>
          </td>
          <td>
            <?php echo h($bike->weight_kg()) . " / " . h($bike->weight_lbs()); ?>
          </td>
          <td>
            <?php echo $bike->condition(); ?>
          </td>
          <td>
            <?php echo h(sprintf("%01.2f", $bike->price)); ?>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>

</div>

<?php include(SHARED_PATH . "/public_footer.php"); ?>