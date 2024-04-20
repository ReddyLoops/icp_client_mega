<?php 
	require_once "connect.php";
	$is_customer_logged_in = isset($_SESSION['auth_login']);
?>

<?php
    if ( isset($_SESSION['auth_login']) ) {

		$auth = $_SESSION['auth_login'];
		$auth_id = $auth['id'];
        $auth_full_name = $auth['first_name'] . $auth['last_name'];
		$cart_name = 'cart-' . $auth['id'] . '-cart';
        
		if (!isset($_SESSION[$cart_name])) {
			$_SESSION[$cart_name] = [];
		}

		extract($_POST);

		if (isset($cart_checkout)) {
			$sql = "SELECT () AS 'id'";
			$result = mysqli_query($db, $sql);
			$group_order = mysqli_fetch_assoc($result)['id'];
			$group_order = explode('-', $group_order);
			$group_order = $group_order[0];

			foreach ($_SESSION[$cart_name] as $key => $cart) {
				extract($cart);
				$sql = "INSERT INTO `orders`(`group_order`, `customer_id`, `product_name`, `product_price`, `product_image`)
						VALUES(?, ?, ?, ?, ?);";
				$stmt = $pdo->prepare($sql);
				$stmt->execute([$group_order, $auth_id, $name, $price, $image]);
			}

			unset($_SESSION[$cart_name]);
			header("location: orders.php");
			exit;
		}

		if (isset($product_id)) {
			unset($_SESSION[$cart_name][$product_id]);
			header("location: index.php");
			exit;
		}

		if (isset($product_add)) {
			array_push($_SESSION[$cart_name], [
				"product_name" => $product_name,
				"product_price" => $product_price,
				"product_image" => $product_image
			]);

			$_SESSION['alert'] = "Product added";
		}

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - ICP</title>
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/slideshow.css">
    <link rel="stylesheet" href="style/banner.css">
    <link rel="stylesheet" href="style/weddingbanns.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<?php include 'nav.php';?>

<body>
<?php include 'preloader.php'; ?>
    <!-- Slideshow Section -->
    <br>
    <div class="slideshow">
        <div class="images">
            <img class="fade" src="image/cover1.jpg" style="width:100%">
        </div>
        <div class="images">
            <img class="fade" src="image/cover2.jpg" style="width:100%">
        </div>
        <div class="images">
            <img class="fade" src="image/cover3.jpg" style="width:100%">
        </div>
        <div class="dot-container">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>

    <!-- Featured Section -->
    <br><br>
    <!-- <div>
        <ul class="process">
            <li class="process__item animate-from-bottom__1">
                <span class="process__number"><i class="fas fa-cubes"></i></span>
                <span class="process__title">Management</span>
                <span class="process__subtitle">We manage the data of records</span>
            </li>

            <li class="process__item animate-from-bottom__2">
                <span class="process__number"><i class="fas fa-handshake"></i></span>
                <span class="process__title">Services</span>
                <span class="process__subtitle">We off services online to be more convenient</span>
            </li>

            <li class="process__item animate-from-bottom__3">
                <span class="process__number"><i class="fas fa-shopping-bag"></i></i></span>
                <span class="process__title">Products</span>
                <span class="process__subtitle">We offer products and deliver nationwide</span>
            </li>

            <li class="process__item animate-from-bottom__4">
                <span class="process__number"><i class="fas fa-code"></i></span>
                <span class="process__title">Development</span>
                <span class="process__subtitle">We analyze the requirments to develop a strategy</span>
            </li>
        </ul>
    </div> -->

    <br><br>

    <!-- Verses Section-->
    <section id="about" class="section-verse">
        <div class="overlay">
            <div class="section-verse-inner py-5">
                <p class="mt-1">Verse of the Day:</p>
                <?php include './component/verse.php';?>
                <?php echo '<h3 class="text-2"> '.$verseOfTheDay['author'].' </h3>'; ?>
                <?php echo '<h2 class="text-5 mt-1">" '.$verseOfTheDay['quote'].' "</h2>'; ?>
            </div>
        </div>
    </section>


    <!-- weddingbanns Section -->
    <div style="background-color: #f5f5f5">
    <div style="padding: 50px;"></div>
        <h1 style="text-align:center; color: #035d13;">Ikakasal sa Parokya</h1>
        <h4 style="text-align:center; color: #258d36;">Marriage Banns of the Proposed Marriage of:</h4>
        <hr style="width: 90%;  border: 1px solid #035d13;">
        <?php include './component/weddingbanns.php';?>
        <a class="view_button" href="#">View All</a>
        <hr style="width: 90%;  border: 1px solid #035d13; margin-top: 30px;">
        <div style="padding: 50px;"></div>
    </div>



    <!-- Showcase Section -->
    <section class="section-showcase">
    <div style="padding: 0px;"></div>
        <div class="container">
            <div>
                <h1>Immaculate Conception Parish</h1>
                <p>
                    Pandi was founded in 1792. The earthquake of 1880 damaged the church and the convent constructed
                    early in the nineteenth century. They were finally destroyed by fire, with the town itself, incident
                    to an encounter between American and Filipino forces in April, 1899.
                </p>
                <a href="about.php" class="btn_readmore">Read More</a>
            </div>
            <img src="image/banner2.png" alt="" />
        </div>
        <div style="padding: 0px;"></div>
    </section>



    <!-- FAQ Section -->
    <div class="accordion" id="faq_section">
        <div style="padding: 50px;"></div>
        <h1 class="faq">FAQ'S</h1>
        <div class="accordion-item">
            <div class="accordion-item-header">
                What is ICP?
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Pandi was founded in 1792. The earthquake of 1880 damaged the church and the convent constructed
                    early in the nineteenth century. They were finally destroyed by fire, with the town itself, incident
                    to an encounter between American and Filipino forces in April, 1899.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header">
                What are the services offered by ICP?
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    ICP offers services:
                    <ul style="padding-left: 1rem;">
                        <li>Wedding</li>
                        <li>Baptism</li>
                        <li>Funeral</li>
                        <li>Sick Call</li>
                        <li>Blessing</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header">
                What are the products offered by ICP?
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    <ul style="padding-left: 1rem;">
                        <li>Chibi Products</li>
                        <li>T-shirt</li>
                        <li>Others</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header">
                How many days will wait to approved an application?
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    It takes 1 - 2 days, ICP will inform applicants if they requirements are completed or not.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header">
                How many days before the products recieved by the customer?
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Once Shipped out, It takes 1 to 3 days in luzon, 3 to 5 days in Visayas, 5 to 7 days in Mindanao
                </div>
            </div>
        </div>
        <div style="padding: 50px;"></div>
    </div>
        <!-- Gallery -->
    <!-- <section class="section-gallery">
      <div class="gallery">
        <a href="https://i.ibb.co/CHLBZnp/gal2323.jpg" class="big"
          ><img src="https://i.ibb.co/CHLBZnp/gal2323.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/4pBbhfY/gal39834.jpg" class="big"
          ><img src="https://i.ibb.co/4pBbhfY/gal39834.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/xSnHP7g/gal43884.jpg" class="big"
          ><img src="https://i.ibb.co/xSnHP7g/gal43884.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/QN6Bnrb/gal4958.jpg" class="big"
          ><img src="https://i.ibb.co/QN6Bnrb/gal4958.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/dGZvj75/gal4545.jpg" class="big">
          <img src="https://i.ibb.co/dGZvj75/gal4545.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/S6FVFNt/gal74744.jpg" class="big"
          ><img src="https://i.ibb.co/S6FVFNt/gal74744.jpg" alt=""
        /></a>
      </div>
    </section> -->
    <?php include 'footer.php';?>

</body>
<script src="js/slideshow.js"></script>
<script src="js/accordion.js"></script>
</html>