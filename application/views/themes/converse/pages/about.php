<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="hero-wrap hero-bread"
    style="background-image: url('<?php echo get_theme_uri('images/background_01.jpeg'); ?>');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span> <span>Tentang
                        Kami</span></p>
                <h1 class="mb-0 bread">Tentang Kami</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
        <div class="row">
            <!-- Background image section -->
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url(<?php echo get_theme_uri('images/about.jpeg'); ?>);">
                <!-- Play button to open modal -->
                <div class="icon popup-vimeo d-flex justify-content-center align-items-center" id="playButton">
                    <span class="icon-play"></span>
                </div>
            </div>
            <!-- Description and button -->
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section-bold mb-4 mt-md-5">
                    <div class="ml-md-0">
                        <h2 class="mb-4">Welcome to <?php echo get_store_name(); ?></h2>
                    </div>
                </div>
                <div class="pb-md-5">
                    <p><?php echo get_settings('store_description'); ?></p>
                    <p><a href="/ecommerce/" class="btn btn-primary">Belanja sekarang!</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Section -->
    <div class="modal" id="videoModal">
        <div class="modal-content">
            <span class="modal-close" id="closeModal">×</span>
            <iframe id="youtubeVideo" 
                src="" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
    </div>
</section>

<style>
    /* Modal Styling */
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        visibility: hidden;
        opacity: 0;
        transition: visibility 0.3s, opacity 0.3s ease;
    }

    .modal.show {
        visibility: visible;
        opacity: 1;
    }

    .modal-content {
        position: relative;
        width: 80%;
        max-width: 800px;
        height: 450px;
        background: #000;
        border-radius: 10px;
        overflow: hidden;
    }

    .modal-content iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    .modal-close {
        position: absolute;
        top: 10px;
        right: 15px;
        color: #fff;
        font-size: 25px;
        cursor: pointer;
    }
</style>

<script>
    // JavaScript to handle modal functionality
    const playButton = document.getElementById('playButton');
    const videoModal = document.getElementById('videoModal');
    const closeModal = document.getElementById('closeModal');
    const youtubeVideo = document.getElementById('youtubeVideo');

    playButton.addEventListener('click', () => {
        // Set YouTube embed URL
        youtubeVideo.src = "https://www.youtube.com/embed/qBX4v0cfDWA?autoplay=1";
        videoModal.classList.add('show');
    });

    closeModal.addEventListener('click', () => {
        videoModal.classList.remove('show');
        youtubeVideo.src = ""; // Clear video source to stop playback
    });

    window.addEventListener('click', (event) => {
        if (event.target === videoModal) {
            videoModal.classList.remove('show');
            youtubeVideo.src = ""; // Clear video source to stop playback
        }
    });
</script>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">Apa yang pelanggan kami katakan?</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <?php if (count($reviews) > 0) : ?>
                    <?php foreach ($reviews as $review) : ?>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5"
                                style="background-image: url(<?php echo base_url('assets/uploads/users/' . $review->profile_picture); ?>)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line"><?php echo $review->review_text; ?></p>
                                <p class="name"><?php echo $review->name; ?></p>
                                <span class="position"><?php echo get_formatted_date($review->review_date); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php else : ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Gratis Ongkir</h3>
                        <span>Belanja minimal Rp
                            <?php echo format_rupiah(get_settings('min_shop_to_free_shipping_cost')); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="bi bi-shield-check"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Keamanan Terjaga</h3>
                        <span>Aman & Terpercaya</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Kualitas Terbaik</h3>
                        <span>Kualitas dari Pertanian Terbaik</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">


                        <h3 class="heading">Bantuan</h3>
                        <span>Bantuan 24/7 Selalu Online</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>