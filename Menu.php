
<?php
session_start();

$count = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $count += $item['quantity'];
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="utf-8">
  <title>Piatto - Menu</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div style="text-align:right; padding:15px;">
    <a href="cart.php" style="text-decoration:none; color:#000; font-size:24px;">
        🛒
        <span style="
            background:red;
            color:white;
            padding:3px 8px;
            border-radius:50%;
            font-size:14px;
            position:relative;
            top:-5px;">
            <?php echo $count; ?>
        </span>
    </a>
</div>
  <div class="container">
    <header>
      <h1>Menu</h1>
    </header>

    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="AboutUs.html">About Us</a></li>
        <li><a href="ContactUs.html">Contact us</a></li>
        <li><a href="cart.php">My Cart</a></li>
      </ul>
    </nav>

    <main>
      <section class="menu-section">
        <h2>Appetizers </h2>
        <ul class="simple-list">
          <li>
            <img src="IMG_0812.JPEG" alt="Caesar Salad" class="thumb">
            <div class="item-info">
              <strong>Caesar Salad</strong>
              <div class="price">15.00 SAR</div>
              <form action="addToCart.php" method="POST">
                <input type="hidden" name="id" value="Caesar Salad">
    <input type="hidden" name="id" value="Caesar Salad">
    <input type="hidden" name="name" value="Caesar Salad">
    <input type="hidden" name="price" value="15">
    <input type="hidden" name="image" value="IMG_0812.JPEG">
    <button type="submit">Add to cart</button>
</form>
            </div>
          </li>
          <li>
            <img src="IMG_0813.JPEG" alt="Mozzarella Sticks" class="thumb">
            <div class="item-info">
              <strong>Mozzarella Sticks</strong>
              <div class="price">12.00 SAR</div>
              <form action="addToCart.php" method="POST">
    <input type="hidden" name="id" value="Mozzarella Sticks">
    <input type="hidden" name="name" value="Mozzarella Sticks">
    <input type="hidden" name="price" value="12">
    <input type="hidden" name="image" value="IMG_0813.JPEG">
    <button type="submit">Add to cart</button>
</form>
            </div>
          </li>
        </ul>
      </section>

      <section class="menu-section">
        <h2>Meals</h2>
        <ul class="simple-list">
          <li>
            <img src="IMG_0814.JPEG" alt="Margherita" class="thumb">
            <div class="item-info">
              <strong>Margherita Pizza</strong>
              <div class="price">25.00 SAR</div>
              <form action="addToCart.php" method="POST">
      <input type="hidden" name="id" value="Margherita">
    <input type="hidden" name="name" value="Margherita">
    <input type="hidden" name="price" value="25">
    <input type="hidden" name="image" value="IMG_0814.JPEG">
    <button type="submit">Add to cart</button>
</form>
            </div>
          </li>
          <li>
            <img src="IMG_0815.JPEG" alt="Pepperoni" class="thumb">
            <div class="item-info">
              <strong>Pepperoni Pizza</strong>
              <div class="price">28.00 SAR</div>
              <form action="addToCart.php" method="POST">
     <input type="hidden" name="id" value="Pepperoni">
    <input type="hidden" name="name" value="Pepperoni">
    <input type="hidden" name="price" value="28">
    <input type="hidden" name="image" value="IMG_0815.JPEG">
    <button type="submit"> Add to cart</button>
</form>
            </div>
          </li>
          <li>
            <img src="IMG_0816.JPEG" alt="Pasta Alfredo" class="thumb">
            <div class="item-info">
              <strong>Pasta Alfredo</strong>
              <div class="price">24.00 SAR</div>
              <form action="addToCart.php" method="POST">
    <input type="hidden" name="id" value="Pasta Alfredo">
    <input type="hidden" name="name" value="Pasta Alfredo">
    <input type="hidden" name="price" value="24">
    <input type="hidden" name="image" value="IMG_0816.JPEG">
    <button type="submit"> Add to cart</button>
</form>
            </div>
          </li>
        </ul>
      </section>

      <section class="menu-section">
        <h2>Drinks</h2>
        <ul class="simple-list">
          <li>
            <img src="IMG_0817.JPEG" alt="Sprite" class="thumb">
            <div class="item-info">
              <strong>Sprite</strong>
              <div class="price">5.00 SAR</div>
              <form action="addToCart.php" method="POST">
   <input type="hidden" name="id" value="Sprite">
    <input type="hidden" name="name" value="Sprite">
    <input type="hidden" name="price" value="5">
    <input type="hidden" name="image" value="IMG_0817.JPEG">
    <button type="submit">Add to cart </button>
</form>
            </div>
          </li>
          <li>
            <img src="IMG_0818.JPEG" alt="Pepsi" class="thumb">
            <div class="item-info">
              <strong>Pepsi</strong>
              <div class="price">5.00 SAR</div>
              <form action="addToCart.php" method="POST">
   <input type="hidden" name="id" value="Pepsi">
    <input type="hidden" name="name" value="Pepsi">
    <input type="hidden" name="price" value="5">
    <input type="hidden" name="image" value="IMG_0818.JPEG">
    <button type="submit"> Add to cart</button>
</form>
            </div>
          </li>
          <li>
            <img src="IMG_0819.JPEG" alt="Orange Juice" class="thumb">
            <div class="item-info">
              <strong>Orange Juice</strong>
              <div class="price">8.00 SAR</div>
              <form action="addToCart.php" method="POST">
    <input type="hidden" name="id" value="Orange Juice">
    <input type="hidden" name="name" value="Orange Juice">
    <input type="hidden" name="price" value="8">
    <input type="hidden" name="image" value="IMG_0819.JPEG">
    <button type="submit">Add to cart </button>
</form>
            </div>
          </li>
        </ul>
      </section>

      <section class="menu-section">
        <h2>Dessert</h2>
        <ul class="simple-list">
          <li>
            <img src="IMG_0820.JPEG" alt="Tiramisu" class="thumb">
            <div class="item-info">
              <strong>Tiramisu</strong>
              <div class="price">14.00 SAR</div>
              <form action="addToCart.php" method="POST">
    <input type="hidden" name="id" value="Tiramisu">
    <input type="hidden" name="name" value="Tiramisu">
    <input type="hidden" name="price" value="14">
    <input type="hidden" name="image" value="IMG_0820.JPEG">
    <button type="submit"> Add to cart</button>
</form>
            </div>
          </li>
        </ul>
      </section>
      <section class="menu-section">
        <h2>Coffee </h2>
        <ul class="simple-list">
          <li>
            <img src="IMG_0821.JPEG" alt="Espresso" class="thumb">
            <div class="item-info">
              <strong>Espresso</strong>
              <div class="price">10.00 SAR</div>
              <form action="addToCart.php" method="POST">
       <input type="hidden" name="id" value="Espresso">
    <input type="hidden" name="name" value="Espresso">
    <input type="hidden" name="price" value="10">
    <input type="hidden" name="image" value="IMG_0821.JPEG">
    <button type="submit">Add to cart </button>
</form>
            </div>
          </li>
          <li>
            <img src="IMG_0822.JPEG" alt="Italian Coffee" class="thumb">
            <div class="item-info">
              <strong>Italian Coffee</strong>
              <div class="price">12.00 SAR</div>
              <form action="addToCart.php" method="POST">
    <input type="hidden" name="name" value="Italian Coffee">
    <input type="hidden" name="price" value="12">
    <input type="hidden" name="image" value="IMG_0822.JPEG">
    <button type="submit">Add to cart </button>
</form>
            </div>
          </li>
        </ul>
      </section>
    </main>
    <footer>
      <p>©️ Piatto</p>    </footer>  </div>  </body>