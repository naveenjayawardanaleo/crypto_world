<?php include 'inc/header.php' ?>

<section class="slider-hero  align-items-center d-flex">

    <div id="carouselExample" class="carousel slide w-100 carousel-fade ">
        <div class="carousel-inner">


            <div class="carousel-item active">

                <img src="img/black.jpg" class="d-block w-100" alt="">

                <div class="carousel-caption">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-8 text-center ">
                            <h3 class="text-white title-font slider-main-text">Hi There! My name is Tesla, I am your virtual AI assistant.
                            </h3>
                            <p class="text-white slider-paragraph">Although I’m from the future, you can talk to me naturally.</p>
                            <div class="w-100 d-flex justify-content-center">
                                <img src="img/voice.gif" class="d-block w-50 " alt="">

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="https://crypto--world.com/wp-content/uploads/2023/01/young-people-in-process-of-working-on-project-2022-01-19-00-09-06-utc-scaled-1-1.jpg" alt="Image">
                    <div id="g-item-num">01</div>
                    
                    <div class="overlay ">
                        <p>Be Educated. Be Enlightened. Be Empowered.</p>
                        <ul class="overlay-text">
                            <li>> Millennials</li>
                            <li>> Analysts</li>
                            <li>> Professors</li>
                            <li>> Investors</li>
                            <li>> Students</li>
                            <li>> The curious ones</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">


            </div>
            <div class="col-md-4">


            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">


            </div>
            <div class="col-md-4">


            </div>
            <div class="col-md-4">


            </div>
        </div>
    </div>
</section>


<section class="section-padding tour-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Sri Lanka Tour Packages</h2>
            </div>
        </div>
        <div class="row mt-5">


            <?php foreach ($products as $k => $row) : ?>

                <div class="col-md-4">
                    <div class="tour-box bg-white">
                        <a href="tour-details/<?= strtolower(url_title($row->ProductTitle)) ?>/<?= $row->ProductId ?>">
                            <img src="media/image/<?= $row->Image ?>" class="w-100" alt="">
                            <div class=" p-3">
                                <h5><?= $row->ProductTitle ?></h5>
                                <p><?= $row->ShortDescription ?></p>
                                <h5><small>From</small> <span class="text-blue fw-bold"> <?= $row->Price ?> USD</span></h5>
                                <h5>09 D / 08 N</h5>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>




        </div>
    </div>
</section>
<section class="section-padding">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/safari tours with taxi touring sri lanka.jpg" class="w-100  image-settings" alt="">
            </div>
            <div class="col-md-6 align-self-center">
                <h5 class="mt-2">Safari Tours Sri Lanka</h5>
                <h3>Taxi Touring Safari Experience</h3>
                <p>Embark on an extraordinary adventure with our Safari Tours in Sri Lanka. Explore the untamed beauty of the island's national parks, where diverse ecosystems come alive with exotic wildlife. Our expert guides lead you through the lush landscapes, offering a front-row seat to majestic elephants, elusive leopards, and a myriad of vibrant bird species. Whether you choose Yala, Udawalawe, or Wilpattu, our Safari Tours promise an immersive experience, blending the thrill of wildlife encounters with the serenity of nature. Join us for an unforgettable journey into the heart of Sri Lanka's wilderness, where each safari unveils the magic of this biodiverse paradise.</p>

                <a href="#" class="btn purple-btn">Learn More</a>
            </div>
        </div>
    </div>
</section>
<section class="section-padding contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Contact us</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 mb-5">
                <div class=" slider-overlay text-center p-5">
                    <h5 class=" text-white ">Contact Information</h5>

                    <h6 class=" text-white mt-3">
                        Taxi Touring Sri Lanka. <br>
                        Telephone : +94 77 7481 172 <br>
                        Email : info@taxitouringsrilanka.com <br>
                        Web : www.taxitouringsrilanka.com
                    </h6>

                    <iframe class="mt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047293.6600842737!2d78.06407926329861!3d7.849435767178971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1700115489125!5m2!1sen!2slk" width="100%" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class=" slider-overlay text-white p-5">
                    <h5 class=" text-white">Contact Form</h5>
                    <form action="" class="mt-3">
                        <div class="mb-3">
                            <label for="" class="form-label">Full Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Telephone</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Note</label>
                            <textarea type="text" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <a href="" class="btn blue-btn">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Our Blogs</h2>

            </div>
        </div>
        <div class="row mt-3">

            <?php foreach ($news as $k => $row) : ?>
                <div class="col-md-4">
                    <div class="tour-box bg-white">

                        <img src="media/image/<?= $row->Image ?>" class="w-100" alt="">
                        <div class=" p-3">
                            <h5><?= $row->Title ?></h5>
                            <p><?= $row->ShortDescription ?></p>
                            <a class="btn blue-btn text-white" href="blog-details/<?= strtolower(url_title($row->Title)) ?>/<?= $row->NewsId ?>">Learn More</a>

                        </div>

                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</section>


<!-- ends index  -->

<!-- <section>
    <div class="container-fluid">
        <div class="row">

            <div class="owl-carousel owl-theme index-slider">
                <?php
                $x = 1;

                foreach ($slider as $k => $va) : ?>


                        <img class="d-block w-100" src="media/image/<?= $va->Image ?>" alt="">

                <?php

                    $x++;
                endforeach ?>

            </div>

        </div>
    </div>
</section> -->

<?php include 'inc/footer.php' ?>