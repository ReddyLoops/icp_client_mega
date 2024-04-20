
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Simple Profile</title>
</head>
<style>
/* PROCESS STEPS */
@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

:root {
    --line-border-fill: #3FB07C;
    --line-border-empty: #bdbdbd;
    --background-fill: #57DB9E;
}

* {
    box-sizing: border-box;
}

.process_steps {
    /* background-color: rgb(223, 255, 244); */
    font-family: 'Muli', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 20vh;
    overflow: hidden;
    margin: 0;
}

.container_progress {
    text-align: center;
}

.progress-container {
    display: flex;
    justify-content: space-between;
    position: relative;
    max-width: 100%;
    width: 900px;
    margin-bottom: 2.5em;
}

.progress-container::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    height: 10px;
    width: 100%;
    /* Changed from 350px to 100% */
    background-color: var(--line-border-empty);
    z-index: -1;
}

.progress_line {
    position: absolute;
    top: 50%;
    left: 0;
    width: 0;
    height: 10px;
    background-color: var(--line-border-fill);
    z-index: -1;
    transition: all .5s ease-in;
}


.step-text {
    color: transparent; /* Hide the text by default */
    position: absolute;
    bottom: -30px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 15px;
    width: 200px;
    font-weight: bold;
    transition: color 0.4s ease-in; /* Smooth transition when displaying the text */
}

.circle.active .step-text {
    color: #000; /* Display the text when the circle is active */
}

.step-date {
    color: transparent; /* Hide the date by default */
    position: absolute;
    bottom: -50px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 15px;
    width: 200px;
    transition: color 0.4s ease-in; /* Smooth transition when displaying the date */
}

.circle.active .step-date {
    color: #000; /* Display the date when the circle is active */
}


.circle {
    position: relative;
    font-size: 50px;
    color: var(--line-border-empty);
    background-color: #fff;
    height: 120px;
    width: 120px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid var(--line-border-empty);
    border-radius: 50%;
    transition: all .4s ease-in;
}

.circle.active {
    border-color: var(--line-border-fill);
    background-color: var(--background-fill);
    color: #fff;
    /* box-shadow: 0px 0px 31px -2px rgba(0, 105, 37, 0.62); */
}

.btn {
    padding: 1em 3em;
    background-color: var(--line-border-fill);
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: .6em;
}

.btn:active {
    transform: scale(0.98);
}

.btn:disabled {
    background-color: var(--line-border-empty);
    cursor: not-allowed;
}





.list-group-item.active {
    background: #ffc107;
}

/* end common class */


/* end top status */

ul.timeline {
    list-style-type: none;
    position: relative;
}

ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}

ul.timeline>li {
    margin: 20px 0;
    padding-left: 30px;
}

ul.timeline>li:before {
    content: '\2713';
    background: #fff;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 0;
    left: 5px;
    width: 50px;
    height: 50px;
    z-index: 400;
    text-align: center;
    line-height: 50px;
    color: #d4d9df;
    font-size: 24px;
    border: 2px solid #d4d9df;
}

ul.timeline>li.active:before {
    content: '\2713';
    background: #28a745;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 0;
    left: 5px;
    width: 50px;
    height: 50px;
    z-index: 400;
    text-align: center;
    line-height: 50px;
    color: #fff;
    font-size: 30px;
    border: 2px solid #28a745;
}

/* end timeline */
</style>

<body>
    <section class="my-5">
        <div class="container">
            <div class="main-body">

                <button class="btn" id="prev" disabled>Prev</button>
                <button class="btn" id="next">Next</button>

                <!-- ORDER PROGRESS -->
                <div class="row">
                    <div class="col-lg">
                        <div class="card bg-transparent mb-5">
                            <div class="card-body">
                                <div class="top-status">
                                    <h5>ORDER# 0000000000000</h5>
                                    <div class="process_steps">
                                        <div class="container_progress">
                                            <div class="progress-container">
                                                <div class="progress_line"></div>
                                                <div class="circle active"><i class="fas fa-box"></i>
                                                    <span class="step-date">11/22/24</span>
                                                    <span class="step-text">Order Place</span>
                                                </div>
                                                <div class="circle"><i class="fas fa-truck"></i>
                                                    <span class="step-date">11/22/24</span>
                                                    <span class="step-text">Order Shipped Out</span>
                                                </div>
                                                <div class="circle"><i class="fas fa-box-open"></i>
                                                    <span class="step-date">11/22/24</span>
                                                    <span class="step-text">Order Received</span>
                                                </div>
                                                <div class="circle"><i class="fas fa-check-circle"></i>
                                                    <span class="step-date">11/22/24</span>
                                                    <span class="step-text">Order Completed</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- CLIENT INFO -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                            <h4>Delivery Address</h4>
                            <hr>
                                <div class="d-flex flex-column align-items-left text-left">

                                    <div class="mt-3">
                                    <h5><strong class="text-secondary mb-1">Romelyn Leynes</strong></h5>
                                        <p class="text-secondary mb-0">09396004981</p>
                                        <p class="text-secondary mb-0">#14 C. Galvez St.</p>
                                        <p class="text-secondary mb-0">Poblacion, Pandi, Bulacan, Region III, 3014</p>
                                        <hr>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PRODUCT DESCRIPTION -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body p-0 table-responsive">
                                <h4 class="p-3 mb-0">Product Description</h4>
                                <table class="table mb-0 text-right">
                                    <thead>
                                        <tr>
                                            <th scope="col">Description</th>
                                            <th scope="col"></th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <th>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                    alt="product" class="" width="80">
                                            </th>
                                            <td>Lorem, ipsum dolor.</td>
                                            <td>$100</td>
                                            <td>X 2</td>
                                            <td><strong>$200</strong></td>

                                        </tr>
                                        <tr>

                                            <th>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                    alt="product" class="" width="80">
                                            </th>
                                            <td>Lorem ipsum dolor</td>
                                            <td>$100</td>
                                            <td>X 2</td>
                                            <td><strong>$200</strong></td>

                                        </tr>
                                        <tr>
                                            <th colspan="2">
                                                <span>Payment Method:</span>
                                                <span class="badge badge-success">COD</span>
                                            </th>
                                            <td>

                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                <span class="text-muted">Order Total</span>
                                                <strong>$400</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- TIMELINE -->
                        <div class="card mt-4">
                            <div class="card-body">
                                <h4>Timeline</h4>
                                <ul class="timeline">
                                    <li class="active">
                                        <h6>PICKED</h6>
                                        <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Quisque Lorem ipsum dolor</p>
                                        <o class="text-muted">21 March, 2014</p>
                                    </li>
                                    <li>
                                        <h6>PICKED</h6>
                                        <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Quisque</p>
                                        <o class="text-muted">21 March, 2014</p>
                                    </li>
                                    <li>
                                        <h6>PICKED</h6>
                                        <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Quisque</p>
                                        <o class="text-muted">21 March, 2014</p>
                                    </li>
                                    <li>
                                        <h6>PICKED</h6>
                                        <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Quisque</p>
                                        <o class="text-muted">21 March, 2014</p>
                                    </li>
                                    <li>
                                        <h6>PICKED</h6>
                                        <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Quisque</p>
                                        <o class="text-muted">21 March, 2014</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
<script>
const next = document.querySelector("#next");
const prev = document.querySelector("#prev");
const progress = document.querySelector(".progress_line");
const circles = document.querySelectorAll(".circle");
const totalSteps = circles.length;
let currentStep = 1;

next.addEventListener("click", () => {
    if (currentStep < totalSteps) {
        currentStep++;
        updateProgress();
    }
});

prev.addEventListener("click", () => {
    if (currentStep > 1) {
        currentStep--;
        updateProgress();
    }
});

function updateProgress() {
    circles.forEach((circle, index) => {
        if (index < currentStep) {
            circle.classList.add("active");
        } else {
            circle.classList.remove("active");
        }
    });

    if (currentStep === 1) {
        prev.disabled = true;
    } else if (currentStep === totalSteps) {
        next.disabled = true;
    } else {
        prev.disabled = false;
        next.disabled = false;
    }

    const progressWidth = ((currentStep - 1) / (totalSteps - 1)) * 100 + '%';
    progress.style.width = progressWidth;
}
</script>


</html>