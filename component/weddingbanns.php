<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/weddingbanns.css">
</head>
<style>
    .carousels {
        display: grid;
        place-items: center;
        background: #f5f5f5;
    }

    .slider-container ul,
    li {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .slider-carousel {
        display: flex;
        flex: none;
        column-gap: 10px;
        transition: transform 0.9s ease;
        /* Adjust transition duration and timing function for smoothness */
    }

    .slider-container li {
        min-width: 24.50%;
        min-height: 300px;
        text-align: center;
        padding: 5px 5px;
        /* background: rgba(255, 0, 255, 0.3) */
    }

    .slider-container {
        overflow: hidden;
        width: 90%;
        /* background: rgba(0, 255, 255, 0.1); */
    }

    .responsives {
        padding: 0 6px;
        /* float: left; */
        min-width: 24.50%;
    }

    .carousel-buttons {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .carousel-buttons button {
        background: #035d13;
        color: #fff;
        border: none;
        padding: 10px 20px;
        margin: 0 10px;
        cursor: pointer;
    }
</style>

<body>
    <div class="carousels">
        <div class="slider-container">
            <ul class="slider-carousel" data-element="slider-carousel">
                <?php
                // Connect to MySQL database
                $DB_HOST = 'localhost';
                $DB_USER = 'root';
                $DB_PASS = '';
                $DB_NAME = 'thesis_latest';

                

                $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // $sql = "SELECT * FROM wedding_banns";
                $sql = "SELECT * FROM wedding_banns WHERE status = 'ongoing'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<li>';
                        echo '<div class="responsives">';
                        echo '<div class="gallery">';
                        echo '<div class="row">';
                        echo '<div class="column1" style="background-color:#fff;">';
                        echo '<img src="' . $row['id_picture_groom'] . '" style="width:80px; height:80px;">';
                        echo '<h2>' . $row['groom_name'] . '</h2>';
                        echo '<h3><b>Groom</b></h3>';
                        echo '<p>' . $row['groom_age'] . '</p>';
                        echo '<p><b>Father: </b><br>' . $row['groom_father_name'] . '</p>';
                        echo '<p><b>Mother: </b><br>' . $row['groom_mother_name'] . '</p>';
                        echo '</div>';
                        echo '<div class="column1" style="background-color:#fff;">';
                        echo '<img src="' . $row['id_picture_bride'] . '" style="width:80px; height:80px;">';
                        echo '<h2>' . $row['bride_name'] . '</h2>';
                        echo '<h3>Bride</h3>';
                        echo '<p>' . $row['bride_age'] . '</p>';
                        echo '<p><b>Father: </b><br>' . $row['bride_father_name'] . '</p>';
                        echo '<p><b>Mother: </b><br>' . $row['bride_mother_name'] . '</p>';
                        echo '</div>';
                        echo '<div class="column3" style="background-color:#fff;">';
                        echo '<p><b>Place of Marriage: </b><br>Immaculate Conception Parish Pandi</p>';
                        echo '<p><b>Date of Marriage: </b><br># ## ####</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</li>';
                        $additional_sql = "SELECT 'status' FROM wedding_banns WHERE reference_id = " . $row['id'];
                        $additional_result = $conn->query($additional_sql);
                        if ($additional_result->num_rows > 0) {
                            while ($additional_row = $additional_result->fetch_assoc()) {
                                echo '<li>';
                                echo '<div class="responsives">';
                                echo '<div class="gallery">';
                                echo '<div class="row">';
                                echo '<div class="column1" style="background-color:#fff;">';
                                echo '<img src="' . $row['id_picture_groom'] . '" style="width:40; height:auto;">';
                                echo '<h2>' . $row['groom_name'] . '</h2>';
                                echo '<h3>Groom</h3>';
                                echo '<p>' . $row['groom_age'] . '</p>';
                                echo '<p><b>Father: </b>' . $row['groom_father_name'] . '</p>';
                                echo '<p><b>Mother: </b>' . $row['groom_mother_name'] . '</p>';
                                echo '</div>';
                                echo '<div class="column1" style="background-color:#fff;">';
                                echo '<img src="' . $row['id_picture_bride'] . '" style="width:40; height:auto;">';
                                echo '<h2>' . $row['bride_name'] . '</h2>';
                                echo '<h3>Bride</h3>';
                                echo '<p>' . $row['bride_age'] . '</p>';
                                echo '<p><b>Father: </b>' . $row['bride_father_name'] . '</p>';
                                echo '<p><b>Mother: </b>' . $row['bride_mother_name'] . '</p>';
                                echo '</div>';
                                // echo '<div class="column3" style="background-color:#fff;">';
                                // echo '<p><b>Place of Marriage: </b>Immaculate Conception Parish Pandi</p>';
                                // echo '<p><b>Date of Marriage: </b></p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</li>';
                            }
                        }
                    }
                } else {
                    echo '<li>';
                    echo '<div class="no-weddings-container">';
                    echo '<h1 style="text-align: center; color: #035d13;">No Post Available</h1>';
                    echo '</div>';
                    echo '</li>';
                }

                // Close connection
                $conn->close();
                ?>
            </ul>
            <!-- <ul class="slider-carousel" data-element="slider-carousel">
                <li>
                    <div class="responsives">
                        <div class="gallery">
                            <div class="row">
                                <div class="column1" style="background-color:#fff;">
                                    <img src="image/man.png" style="width:80%; height:auto; ">
                                    <h2>Pangalan ng Lalaki</h2>
                                    <h3>Groom</h3>
                                    <p>27</p>
                                    <p><b>Father: </b>Pangalan ng Ama</p>
                                    <p><b>Mother: </b>Pangalan ng Ina</p>
                                </div>
                                <div class="column1" style="background-color:#fff;">
                                    <img src="image/woman.png" style="width:80%; height:auto; ">
                                    <h2>Pangalan ng Babae</h2>
                                    <h3>Bride</h3>
                                    <p>25</p>
                                    <p><b>Father: </b>Pangalan ng Ama</p>
                                    <p><b>Mother: </b>Pangalan ng Ina</p>
                                </div>
                                <div class="column3" style="background-color:#fff;">
                                    <p><b>Place of Marriage: </b>Immaculate Conception Parish</p>
                                    <p><b>Date of Marriage: </b>September 20, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="responsives">
                        <div class="gallery">
                            <div class="row">
                                <div class="column1" style="background-color:#fff;">
                                    <img src="image/man.png" style="width:80%; height:auto; ">
                                    <h2>Pangalan ng Lalaki</h2>
                                    <h3>Groom</h3>
                                    <p>27</p>
                                    <p><b>Father: </b>Pangalan ng Ama</p>
                                    <p><b>Mother: </b>Pangalan ng Ina</p>
                                </div>
                                <div class="column1" style="background-color:#fff;">
                                    <img src="image/woman.png" style="width:80%; height:auto; ">
                                    <h2>Pangalan ng Babae</h2>
                                    <h3>Bride</h3>
                                    <p>25</p>
                                    <p><b>Father: </b>Pangalan ng Ama</p>
                                    <p><b>Mother: </b>Pangalan ng Ina</p>
                                </div>
                                <div class="column3" style="background-color:#fff;">
                                    <p><b>Place of Marriage: </b>Immaculate Conception Parish</p>
                                    <p><b>Date of Marriage: </b>September 20, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="responsives">
                        <div class="gallery">
                            <div class="row">
                                <div class="column1" style="background-color:#fff;">
                                    <img src="image/man.png" style="width:80%; height:auto; ">
                                    <h2>Pangalan ng Lalaki</h2>
                                    <h3>Groom</h3>
                                    <p>27</p>
                                    <p><b>Father: </b>Pangalan ng Ama</p>
                                    <p><b>Mother: </b>Pangalan ng Ina</p>
                                </div>
                                <div class="column1" style="background-color:#fff;">
                                    <img src="image/woman.png" style="width:80%; height:auto; ">
                                    <h2>Pangalan ng Babae</h2>
                                    <h3>Bride</h3>
                                    <p>25</p>
                                    <p><b>Father: </b>Pangalan ng Ama</p>
                                    <p><b>Mother: </b>Pangalan ng Ina</p>
                                </div>
                                <div class="column3" style="background-color:#fff;">
                                    <p><b>Place of Marriage: </b>Immaculate Conception Parish</p>
                                    <p><b>Date of Marriage: </b>September 20, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="responsives">
                        <div class="gallery">
                            <div class="row">
                                <div class="column1" style="background-color:#fff;">
                                    <img src="image/man.png" style="width:80%; height:auto; ">
                                    <h2>Pangalan ng Lalaki</h2>
                                    <h3>Groom</h3>
                                    <p>27</p>
                                    <p><b>Father: </b>Pangalan ng Ama</p>
                                    <p><b>Mother: </b>Pangalan ng Ina</p>
                                </div>
                                <div class="column1" style="background-color:#fff;">
                                    <img src="image/woman.png" style="width:80%; height:auto; ">
                                    <h2>Pangalan ng Babae</h2>
                                    <h3>Bride</h3>
                                    <p>25</p>
                                    <p><b>Father: </b>Pangalan ng Ama</p>
                                    <p><b>Mother: </b>Pangalan ng Ina</p>
                                </div>
                                <div class="column3" style="background-color:#fff;">
                                    <p><b>Place of Marriage: </b>Immaculate Conception Parish</p>
                                    <p><b>Date of Marriage: </b>September 20, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="responsives">
                        <div class="gallery">
                            <div class="row">
                                <div class="column1" style="background-color:#fff;">
                                    <img src="image/man.png" style="width:80%; height:auto; ">
                                    <h2>Pangalan ng Lalaki</h2>
                                    <h3>Groom</h3>
                                    <p>27</p>
                                    <p><b>Father: </b>Pangalan ng Ama</p>
                                    <p><b>Mother: </b>Pangalan ng Ina</p>
                                </div>
                                <div class="column1" style="background-color:#fff;">
                                    <img src="image/woman.png" style="width:80%; height:auto; ">
                                    <h2>Pangalan ng Babae</h2>
                                    <h3>Bride</h3>
                                    <p>25</p>
                                    <p><b>Father: </b>Pangalan ng Ama</p>
                                    <p><b>Mother: </b>Pangalan ng Ina</p>
                                </div>
                                <div class="column3" style="background-color:#fff;">
                                    <p><b>Place of Marriage: </b>Immaculate Conception Parish</p>
                                    <p><b>Date of Marriage: </b>September 20, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="responsives">
                        <div class="gallery">
                            <div class="row">
                                <div class="column1" style="background-color:#fff;">
                                    <img src="image/man.png" style="width:80%; height:auto; ">
                                    <h2>Pangalan ng Lalaki</h2>
                                    <h3>Groom</h3>
                                    <p>27</p>
                                    <p><b>Father: </b>Pangalan ng Ama</p>
                                    <p><b>Mother: </b>Pangalan ng Ina</p>
                                </div>
                                <div class="column1" style="background-color:#fff;">
                                    <img src="image/woman.png" style="width:80%; height:auto; ">
                                    <h2>Pangalan ng Babae</h2>
                                    <h3>Bride</h3>
                                    <p>25</p>
                                    <p><b>Father: </b>Pangalan ng Ama</p>
                                    <p><b>Mother: </b>Pangalan ng Ina</p>
                                </div>
                                <div class="column3" style="background-color:#fff;">
                                    <p><b>Place of Marriage: </b>Immaculate Conception Parish</p>
                                    <p><b>Date of Marriage: </b>September 20, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul> -->
        </div>
    </div>
</body>
<script>
    const sliderItemsContainer = document.querySelector('[data-element="slider-carousel"]');

    function moveSlider() {
        const firstItem = sliderItemsContainer.children[0];
        const itemWidth = firstItem.offsetWidth + 10; // Include column-gap

        sliderItemsContainer.style.transition = "transform 0.5s ease"; // Adjust the transition duration
        sliderItemsContainer.style.transform = `translateX(-${itemWidth}px)`;

        // After the transition, reset the styles and move the first item to the end
        setTimeout(() => {
            sliderItemsContainer.style.transition = "none";
            sliderItemsContainer.style.transform = "translateX(0)";
            sliderItemsContainer.appendChild(firstItem);
        }, 500); // Should match the transition duration
    }

    setInterval(moveSlider, 3000); // Adjust the interval duration
</script>

</html>
