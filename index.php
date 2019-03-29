<?php
    include("includes/header.php");
    include("includes/navbar.php");
?>

<!-- Jumbotron -->
<section class="jumbotron">
    <div class="container">
        <span class="display-4"><span>Mauritian </span><span id="typingTitle"></span></span>
        <p class="lead">A platform for promoting and preserving our mauritian culture.</p>
        <hr class="my-4">
        <a class="btn btn-success btn-lg" href="#" role="button">Explore</a>
        <a class="btn btn-outline-success btn-lg" href="#" role="button">Contribute</a>
    </div>
</section>

<div class="container">

    <section id="cards">
        <div class="row">

            <!-- Card 1 -->
            <div class="col-sm mb-5">
                <div class="card" style="width: 100%;">
                    <img src="assets/images/food.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Learn about the unique food culture of Mauritius. We have got all sorts of
                            mauritians food recipes ranging from dholl puri to briani. Become a mauritian cook.</p>
                        <a href="#" class="card-link">Learn more</a>
                    </div>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="col-sm mb-5">
                <div class="card" style="width: 100%;">
                    <img src="assets/images/music.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Learn about the music culture of Mauritius. Experience like never before
                            the Sega and geet gawai. Listen to songs and watch videos made by mauritians.
                        </p>
                        <a href="#" class="card-link">Learn more</a>
                    </div>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="col-sm mb-5">
                <div class="card" style="width: 100%;">
                    <img src="assets/images/lemorne.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Discover cultural places in Mauritius. From temples to museums, you will
                            learn about the enriching history of Mauritius. Prepare to dive into the shoes of a local
                            explorer.</p>
                        <a href="#" class="card-link">Learn more</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>

<!-- Typed.js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>

<script>
var typed = new Typed('#typingTitle', {
    strings: ['<i>culture.</i>', '<i>talent.</i>', '<i>history.</i>'],
    typeSpeed: 35,
    backSpeed: 45,
    smartBackspace: false, // this is a default
    loop: true,
    showCursor: false
});
</script>

<?php include("includes/footer.php"); ?>