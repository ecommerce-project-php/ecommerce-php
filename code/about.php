<?php
$title = "About";
include "./includes/header.php"; ?>
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        About
    </h2>
</section>

<style>
.row {
    display: flex;
    flex-wrap: wrap;
    padding: 30px;
}

.column {
    width: 100%;
    padding: 0.5em 0;
    margin-bottom: 30px;
}

h1 {
    width: 100%;
    text-align: center;
    font-size: 3.5em;
    color: #1f003b;
}

.card {
    box-shadow: 0 0 2.4em rgba(25, 0, 58, 0.1);
    padding: 3.5em 1em;
    border-radius: 0.6em;
    color: #1f003b;
    cursor: pointer;
    transition: 0.3s;
    background-color: #ffffff;
    text-align: center;
}

.card .img-container {
    width: 8em;
    height: 8em;
    background-color: #a993ff;
    padding: 0.5em;
    border-radius: 50%;
    margin: 0 auto 2em auto;
}

.card img {
    width: 100%;
    border-radius: 50%;
}

.card h3 {
    font-weight: 500;
}

.card p {
    font-weight: 300;
    text-transform: uppercase;
    margin: 0.5em 0 2em 0;
    letter-spacing: 2px;
}

.icons {
    width: 50%;
    min-width: 180px;
    margin: auto;
    display: flex;
    justify-content: space-between;
}

.card a {
    text-decoration: none;
    color: inherit;
    font-size: 1.4em;
}

/* .card:hover {
    background: linear-gradient(#717fe0d9, #717fe0);
    color: #ffffff;
  } */
.card:hover .img-container {
    transform: scale(1.15);
}

@media screen and (min-width: 768px) {
    section {
        padding: 1em 7em;
    }
}

@media screen and (min-width: 992px) {
    section {
        padding: 1em;
    }

    .card {
        padding: 5em 1em;
    }

    .column {
        flex: 0 0 33.33%;
        max-width: 33.33%;
        padding: 0 1em;

    }
}
</style>
<!-- Content page -->
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Our Story
                    </h3>

                    <p class="stext-113 cl6 p-b-26">

                        Hello and welcome to ORENS STORE, the place to find the best products for every taste and
                        occasion. We thoroughly check the quality of our goods, working only with reliable suppliers so
                        that you only receive the best quality product.


                    </p>

                    <p class="stext-113 cl6 p-b-26">
                        We at ORENS STORE believe in high quality and exceptional customer service. But most importantly
                        , we believe shopping is a right, not a luxury, so we strive to deliver the best products at the
                        most affordable prices, and ship them to you regardless of where you are located.
                    </p>


                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img loading="lazy" src="images/about-01.jpg" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
	</div>

</section>
<?php include "./includes/footer.php" ?>