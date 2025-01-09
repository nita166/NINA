<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="hero-wrap hero-bread"
    style="background-image: url('<?php echo get_theme_uri('images/background_01.jpeg'); ?>');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span> <span>Hubungi
                        Kami</span></p>
                <h1 class="mb-0 bread">Hubungi Kami</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Alamat</span> <?php echo get_settings('store_address'); ?></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>No. HP</span> <?php echo get_settings('store_phone_number'); ?></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Email:</span> <?php echo get_settings('store_email'); ?></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>githubotw</span></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="<?php echo site_url('pages/send_message'); ?>" class="bg-white p-5 contact-form"
                    method="POST">
                    <?php if ($flash) : ?>
                    <div class="text-success text-center" style="margin-bottom: 25px;"><?php echo $flash; ?></div>
                    <?php endif; ?>

                    <div class="form-group">
                        <input type="text" name="name" class="form-control"
                            value="<?php echo set_value('name', (is_login() ? get_user_name() : '')); ?>"
                            placeholder="Nama" required>
                        <?php echo form_error('name'); ?>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control"
                            value="<?php echo set_value('email', (is_login() ? $user->email : '')); ?>"
                            placeholder="Email" required>
                        <?php echo form_error('email'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control"
                            value="<?php echo set_value('subject'); ?>" placeholder="Subjek pesan" required>
                        <?php echo form_error('subject'); ?>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"
                            required><?php echo set_value('message'); ?></textarea>
                        <?php echo form_error('message'); ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">

            <div style="width: 100%">
    <iframe width="100%" height="600"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63289.53051525195!2d110.35951831589739!3d-7.776118306745568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a56a4db4017fd%3A0xbf4d0346787a3d2b!2sUniversitas%20Islam%20Indonesia%20(UII)%20Jl.%20Kaliurang%20No.Km.%2014%2C5%2C%20Krawitan%2C%20Umbulmartani%2C%20Kec.%20Ngemplak%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta%2055584!5e0!3m2!1sid!2sid!4v1673404471412!5m2!1sid!2sid"
        frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen>
    </iframe>
    <p><a href="https://www.google.com/maps/place/Universitas+Islam+Indonesia/@-7.6876448,110.4116616,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7a5e970cd4fa51:0xa527d07122b90c40!8m2!3d-7.6876501!4d110.4142365!16s%2Fm%2F04n340m?entry=ttu&g_ep=EgoyMDI1MDEwNy4wIKXMDSoASAFQAw%3D%3D">Lihat Peta Lebih Besar</a></p>
</div>

            </div>
        </div>
    </div>
</section>