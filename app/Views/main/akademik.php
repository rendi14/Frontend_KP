<section id="heroakademik" class="d-flex justify-cntent-center align-items-center">
    <div class="carousel-item active">
        <div class="section-title-bgorange ptb-70">
            <h1>Akademik</h1>
            <h1>Akademi Komunitas Toyota Indonesia</h1>
        </div>
    </div>
</section>



<!-- ======= Services Section ======= -->
<section id="akademik" class="akademik">
    <div class="container">

        <div class="section-title">
            <h2>akademik</h2>
            <!-- <p>akademik yang dimiliki AKTI</p> -->
        </div>

        <div class="row">
            <?php foreach ($user as $u) : ?>
                <div class="col-md-6">
                    <div class="icon-box mb-3">
                        <!-- <i class="bx bx-briefcase"></i> -->
                        <!-- <img src="/assets/img/akademik/1611204006-Presentation3.jpg" alt=""> -->
                        <img src="" alt="">
                        <td class="text-center"><img src="/gambar/akademik/<?= $u['akademik_gambar']; ?>" alt="<?= $u['akademik_title']; ?>" width="60px;" height="60px;"></td>
                        <h4>
                            <a><?= $u['akademik_title']; ?></a>
                        </h4>
                        <p>
                            <td><?= $u['akademik_deskripsi']; ?></td>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


    </div>
</section>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gojek Super App: Ojek Online, Taksi Online, Pesan Makan, Kirim Barang, Pembayaran</title>
    <meta name="description" content="Lebih dari 1 juta driver Gojek siap melayani ojek online, taksi online, pesan antar makanan, kirim barang, belanja &amp; pembayaran. Download Gojek Super App.">
    <meta name="keywords" content="gojek, gojek, go jek, hidup, tanpa, batas, ojek, online, indonesia, nadiem, driver, gofood, gomart, goshop, golife, gosend, gobox, gocar, goride, goride, gocar, gosend, gofood, golife, ojek online">


    <meta itemprop="name" content="Gojek Super App: Ojek Online, Taksi Online, Pesan Makan, Kirim Barang, Pembayaran">
    <meta itemprop="description" content="Lebih dari 1 juta driver Gojek siap melayani ojek online, taksi online, pesan antar makanan, kirim barang, belanja &amp; pembayaran. Download Gojek Super App.">
    <meta itemprop="image" content="">


    <meta name=twitter:site content="">
    <meta name="twitter:title" content="Gojek Super App: Ojek Online, Taksi Online, Pesan Makan, Kirim Barang, Pembayaran">
    <meta name="twitter:description" content="Lebih dari 1 juta driver Gojek siap melayani ojek online, taksi online, pesan antar makanan, kirim barang, belanja &amp; pembayaran. Download Gojek Super App.">

    <meta name="twitter:image:src" content="">
    <meta name=twitter:card content="summary_large_image">


    <meta property="og:title" content="Gojek Super App: Ojek Online, Taksi Online, Pesan Makan, Kirim Barang, Pembayaran" />
    <meta property="og:type" content="webiste" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Lebih dari 1 juta driver Gojek siap melayani ojek online, taksi online, pesan antar makanan, kirim barang, belanja &amp; pembayaran. Download Gojek Super App." />
    <meta property="og:site_name" content="" />



    <link rel="alternate" hreflang="id-id" href="https://www.gojek.com/id-id/" />

    <link rel="alternate" hreflang="en-id" href="https://www.gojek.com/en-id/" />


    <link href="https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/images/gojek_favicon.png" rel="shortcut icon" type="image/x-icon">

    <link href="//go-jek.com" rel="preconnect">
    <link href="//d1j87w3j7cc3a6.cloudfront.net" rel="preconnect">
    <link href="//lelogama.go-jek.com" rel="preconnect">
    <link href="//bilba.go-jek.com" rel="preconnect">
    <link href="//www.youtube.com" rel="preconnect">

    <!--Style-->
    <style>
        @font-face {
            font-family: MaisonNeue-Book;
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Book.eot);
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Book.eot#iefix) format("embedded-opentype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Book.woff2) format("woff2"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Book.woff) format("woff"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Book.ttf) format("truetype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Book.svg#svgFontName) format("svg");
            font-weight: 400;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: MaisonNeue-BookItalic;
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-BookItalic.eot);
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-BookItalic.eot#iefix) format("embedded-opentype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-BookItalic.woff2) format("woff2"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-BookItalic.woff) format("woff"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-BookItalic.ttf) format("truetype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-BookItalic.svg#svgFontName) format("svg");
            font-weight: 400;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: MaisonNeue-Demi;
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Demi.eot);
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Demi.eot#iefix) format("embedded-opentype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Demi.woff2) format("woff2"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Demi.woff) format("woff"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Demi.ttf) format("truetype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Demi.svg#svgFontName) format("svg");
            font-weight: 400;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: MaisonNeue-DemiItalic;
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-DemiItalic.eot);
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-DemiItalic.eot#iefix) format("embedded-opentype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-DemiItalic.woff2) format("woff2"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-DemiItalic.woff) format("woff"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-DemiItalic.ttf) format("truetype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-DemiItalic.svg#svgFontName) format("svg");
            font-weight: 400;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: MaisonNeue-Bold;
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Bold.eot);
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Bold.eot#iefix) format("embedded-opentype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Bold.woff2) format("woff2"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Bold.woff) format("woff"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Bold.ttf) format("truetype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeue-Bold.svg#svgFontName) format("svg");
            font-weight: 400;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: MaisonNeueExtended-Bold;
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeueExtended-Bold.eot);
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeueExtended-Bold.eot#iefix) format("embedded-opentype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeueExtended-Bold.woff2) format("woff2"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeueExtended-Bold.woff) format("woff"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeueExtended-Bold.ttf) format("truetype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeueExtended-Bold.svg#svgFontName) format("svg");
            font-weight: 400;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: MaisonNeueExtended-ExtraBold;
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeueExtended-ExtraBold.eot);
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeueExtended-ExtraBold.eot#iefix) format("embedded-opentype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeueExtended-ExtraBold.woff2) format("woff2"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeueExtended-ExtraBold.woff) format("woff"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeueExtended-ExtraBold.ttf) format("truetype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/maison-neue/MaisonNeueExtended-ExtraBold.svg#svgFontName) format("svg");
            font-weight: 400;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: primeicon;
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/primeicon/primeicon.eot?o0nsn6=);
            src: url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/primeicon/primeicon.woff?o0nsn6=) format("woff2"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/primeicon/primeicon.eot?o0nsn6=#iefix) format("embedded-opentype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/primeicon/primeicon.ttf?o0nsn6=) format("truetype"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/primeicon/primeicon.woff?o0nsn6=) format("woff"), url(https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/fonts/primeicon/primeicon.svg?o0nsn6=#primeicon) format("svg");
            font-display: swap;
            font-weight: 400;
            font-style: normal
        }

        .pi {
            font-family: primeicon !important;
            speak: never;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .pi-angkot:before {
            content: "\e904"
        }

        .pi-bus:before {
            content: "\e905"
        }

        .pi-city:before {
            content: "\e906"
        }

        .pi-current_location_marker:before {
            content: "\e907"
        }

        .pi-current_location:before {
            content: "\e908"
        }

        .pi-destination_location:before {
            content: "\e909"
        }

        .pi-destination:before {
            content: "\e90a"
        }

        .pi-ferry:before {
            content: "\e90b"
        }

        .pi-live_location:before {
            content: "\e90c"
        }

        .pi-location:before {
            content: "\e90d"
        }

        .pi-medical_assistance:before {
            content: "\e90e"
        }

        .pi-metro:before {
            content: "\e90f"
        }

        .pi-navigation:before {
            content: "\e910"
        }

        .pi-pickup_transit:before {
            content: "\e911"
        }

        .pi-pickup:before {
            content: "\e912"
        }

        .pi-police:before {
            content: "\e913"
        }

        .pi-scooter:before {
            content: "\e914"
        }

        .pi-start_circled:before {
            content: "\e915"
        }

        .pi-start:before {
            content: "\e916"
        }

        .pi-surge:before {
            content: "\e917"
        }

        .pi-train:before {
            content: "\e918"
        }

        .pi-unsupported_region:before {
            content: "\e919"
        }

        .pi-walk:before {
            content: "\e91a"
        }

        .pi-add_contact:before {
            content: "\e91b"
        }

        .pi-block:before {
            content: "\e91c"
        }

        .pi-emoji:before {
            content: "\e91d"
        }

        .pi-group:before {
            content: "\e91e"
        }

        .pi-share_ios:before {
            content: "\e91f"
        }

        .pi-share:before {
            content: "\e920"
        }

        .pi-stickers:before {
            content: "\e921"
        }

        .pi-add_card:before {
            content: "\e922"
        }

        .pi-bill:before {
            content: "\e923"
        }

        .pi-blocked:before {
            content: "\e924"
        }

        .pi-card:before {
            content: "\e925"
        }

        .pi-coupon:before {
            content: "\e926"
        }

        .pi-declined_request:before {
            content: "\e927"
        }

        .pi-history:before {
            content: "\e928"
        }

        .pi-low_balance:before {
            content: "\e929"
        }

        .pi-payment_options:before {
            content: "\e92a"
        }

        .pi-request_money:before {
            content: "\e92b"
        }

        .pi-scan:before {
            content: "\e92c"
        }

        .pi-send_money:before {
            content: "\e92d"
        }

        .pi-split_bill:before {
            content: "\e92e"
        }

        .pi-topup:before {
            content: "\e92f"
        }

        .pi-transactions:before {
            content: "\e930"
        }

        .pi-voucher_horizontal:before {
            content: "\e931"
        }

        .pi-voucher_vertical:before {
            content: "\e932"
        }

        .pi-wallet:before {
            content: "\e933"
        }

        .pi-back_ios:before {
            content: "\e934"
        }

        .pi-back:before {
            content: "\e935"
        }

        .pi-backward:before {
            content: "\e936"
        }

        .pi-cancel:before {
            content: "\e937"
        }

        .pi-downward:before {
            content: "\e938"
        }

        .pi-edit:before {
            content: "\e939"
        }

        .pi-erase_text:before {
            content: "\e93a"
        }

        .pi-expand_less:before {
            content: "\e93b"
        }

        .pi-expand_more:before {
            content: "\e93c"
        }

        .pi-favorite_options:before {
            content: "\e93d"
        }

        .pi-filters:before {
            content: "\e93e"
        }

        .pi-first_page:before {
            content: "\e93f"
        }

        .pi-food_menu:before {
            content: "\e940"
        }

        .pi-forward:before {
            content: "\e941"
        }

        .pi-grid:before {
            content: "\e942"
        }

        .pi-history1:before {
            content: "\e943"
        }

        .pi-home:before {
            content: "\e944"
        }

        .pi-last_page:before {
            content: "\e945"
        }

        .pi-list_view:before {
            content: "\e946"
        }

        .pi-list:before {
            content: "\e947"
        }

        .pi-more_home:before {
            content: "\e948"
        }

        .pi-more:before {
            content: "\e949"
        }

        .pi-my_orders:before {
            content: "\e94a"
        }

        .pi-next_ios:before {
            content: "\e94b"
        }

        .pi-next:before {
            content: "\e94c"
        }

        .pi-notification:before {
            content: "\e94d"
        }

        .pi-options:before {
            content: "\e94e"
        }

        .pi-overflow:before {
            content: "\e94f"
        }

        .pi-reorder:before {
            content: "\e950"
        }

        .pi-search:before {
            content: "\e951"
        }

        .pi-settings:before {
            content: "\e952"
        }

        .pi-skip:before {
            content: "\e953"
        }

        .pi-ticket:before {
            content: "\e954"
        }

        .pi-up:before {
            content: "\e955"
        }

        .pi-upward:before {
            content: "\e956"
        }

        .pi-add_image:before {
            content: "\e957"
        }

        .pi-added_to_downloads:before {
            content: "\e958"
        }

        .pi-annotations:before {
            content: "\e959"
        }

        .pi-cast_active:before {
            content: "\e95a"
        }

        .pi-cast_inactive:before {
            content: "\e95b"
        }

        .pi-close_caption:before {
            content: "\e95c"
        }

        .pi-downloaded:before {
            content: "\e95d"
        }

        .pi-downloads:before {
            content: "\e95e"
        }

        .pi-episodes:before {
            content: "\e95f"
        }

        .pi-exit_fullscreen:before {
            content: "\e960"
        }

        .pi-feature:before {
            content: "\e961"
        }

        .pi-flash:before {
            content: "\e962"
        }

        .pi-fullscreen:before {
            content: "\e963"
        }

        .pi-genre_action:before {
            content: "\e964"
        }

        .pi-genre_animation:before {
            content: "\e965"
        }

        .pi-genre_comedy:before {
            content: "\e966"
        }

        .pi-genre_documentry:before {
            content: "\e967"
        }

        .pi-genre_drama:before {
            content: "\e968"
        }

        .pi-genre_horror:before {
            content: "\e969"
        }

        .pi-genre_kids:before {
            content: "\e96a"
        }

        .pi-genre_romance:before {
            content: "\e96b"
        }

        .pi-genre_scifi:before {
            content: "\e96c"
        }

        .pi-genre_short_movie:before {
            content: "\e96d"
        }

        .pi-genre_thriller:before {
            content: "\e96e"
        }

        .pi-image:before {
            content: "\e96f"
        }

        .pi-news_entertainment:before {
            content: "\e970"
        }

        .pi-pause_filled_circle:before {
            content: "\e971"
        }

        .pi-pause:before {
            content: "\e972"
        }

        .pi-play_circled:before {
            content: "\e973"
        }

        .pi-play_filled_circle:before {
            content: "\e974"
        }

        .pi-play:before {
            content: "\e975"
        }

        .pi-stop_circled:before {
            content: "\e976"
        }

        .pi-stop_download:before {
            content: "\e977"
        }

        .pi-stop_filled_circle:before {
            content: "\e978"
        }

        .pi-stop:before {
            content: "\e979"
        }

        .pi-subtitles:before {
            content: "\e97a"
        }

        .pi-volume_down:before {
            content: "\e97b"
        }

        .pi-volume_off:before {
            content: "\e97c"
        }

        .pi-volume_up:before {
            content: "\e97d"
        }

        .pi-alerts:before {
            content: "\e97e"
        }

        .pi-app_and_phone_issues:before {
            content: "\e97f"
        }

        .pi-birthday:before {
            content: "\e980"
        }

        .pi-blocked1:before {
            content: "\e981"
        }

        .pi-clock_filled:before {
            content: "\e982"
        }

        .pi-clock_stroked:before {
            content: "\e983"
        }

        .pi-contact:before {
            content: "\e984"
        }

        .pi-correct:before {
            content: "\e985"
        }

        .pi-coupon_applied:before {
            content: "\e986"
        }

        .pi-coupon1:before {
            content: "\e987"
        }

        .pi-covid:before {
            content: "\e988"
        }

        .pi-cross_selling:before {
            content: "\e989"
        }

        .pi-daily_needs:before {
            content: "\e98a"
        }

        .pi-devices:before {
            content: "\e98b"
        }

        .pi-dish:before {
            content: "\e98c"
        }

        .pi-error:before {
            content: "\e98d"
        }

        .pi-flag:before {
            content: "\e98e"
        }

        .pi-freshly_made:before {
            content: "\e98f"
        }

        .pi-help:before {
            content: "\e990"
        }

        .pi-hygiene:before {
            content: "\e991"
        }

        .pi-item:before {
            content: "\e992"
        }

        .pi-job_title:before {
            content: "\e993"
        }

        .pi-linked_app:before {
            content: "\e994"
        }

        .pi-live:before {
            content: "\e995"
        }

        .pi-loading:before {
            content: "\e996"
        }

        .pi-maintenance:before {
            content: "\e997"
        }

        .pi-notes:before {
            content: "\e998"
        }

        .pi-order_issue:before {
            content: "\e999"
        }

        .pi-package:before {
            content: "\e99a"
        }

        .pi-pickup1:before {
            content: "\e99b"
        }

        .pi-portion:before {
            content: "\e99c"
        }

        .pi-rating:before {
            content: "\e99d"
        }

        .pi-star_basket:before {
            content: "\e99e"
        }

        .pi-terms_and_conditions:before {
            content: "\e99f"
        }

        .pi-thermometer:before {
            content: "\e9a0"
        }

        .pi-time_expire:before {
            content: "\e9a1"
        }

        .pi-time_left:before {
            content: "\e9a2"
        }

        .pi-trending:before {
            content: "\e9a3"
        }

        .pi-trophy:before {
            content: "\e9a4"
        }

        .pi-user:before {
            content: "\e9a5"
        }

        .pi-wrong:before {
            content: "\e9a6"
        }

        .pi-call_circled:before {
            content: "\e9a7"
        }

        .pi-call:before {
            content: "\e9a8"
        }

        .pi-chat_bubble:before {
            content: "\e9a9"
        }

        .pi-chat_delivered:before {
            content: "\e9aa"
        }

        .pi-chat_sent:before {
            content: "\e9ab"
        }

        .pi-chat:before {
            content: "\e9ac"
        }

        .pi-comment:before {
            content: "\e9ad"
        }

        .pi-create_chat:before {
            content: "\e9ae"
        }

        .pi-help_chat:before {
            content: "\e9af"
        }

        .pi-inbox:before {
            content: "\e9b0"
        }

        .pi-language_letters:before {
            content: "\e9b1"
        }

        .pi-language:before {
            content: "\e9b2"
        }

        .pi-mobile_data:before {
            content: "\e9b3"
        }

        .pi-report:before {
            content: "\e9b4"
        }

        .pi-reported_post:before {
            content: "\e9b5"
        }

        .pi-send_chat:before {
            content: "\e9b6"
        }

        .pi-swap:before {
            content: "\e9b7"
        }

        .pi-video_call:before {
            content: "\e9b8"
        }

        .pi-wifi:before {
            content: "\e9b9"
        }

        .pi-canned_message:before {
            content: "\e9ba"
        }

        .pi-read_message:before {
            content: "\e9bb"
        }

        .pi-edit_privacy_setting:before {
            content: "\e9bc"
        }

        .pi-face_id:before {
            content: "\e9bd"
        }

        .pi-forgot_password:before {
            content: "\e9be"
        }

        .pi-logout_circled:before {
            content: "\e9bf"
        }

        .pi-logout:before {
            content: "\e9c0"
        }

        .pi-password:before {
            content: "\e9c1"
        }

        .pi-privacy_setting:before {
            content: "\e9c2"
        }

        .pi-reset_password:before {
            content: "\e9c3"
        }

        .pi-secured:before {
            content: "\e9c4"
        }

        .pi-security:before {
            content: "\e9c5"
        }

        .pi-touch_id:before {
            content: "\e9c6"
        }

        .pi-add_notes_pencil:before {
            content: "\e9c7"
        }

        .pi-add_notes:before {
            content: "\e9c8"
        }

        .pi-add_to_favorites:before {
            content: "\e9c9"
        }

        .pi-add:before {
            content: "\e9ca"
        }

        .pi-auto_repayment:before {
            content: "\e9cb"
        }

        .pi-bookmark:before {
            content: "\e9cc"
        }

        .pi-calendar:before {
            content: "\e9cd"
        }

        .pi-camera:before {
            content: "\e9ce"
        }

        .pi-cash:before {
            content: "\e9cf"
        }

        .pi-copy:before {
            content: "\e9d0"
        }

        .pi-delete:before {
            content: "\e9d1"
        }

        .pi-dislike:before {
            content: "\e9d2"
        }

        .pi-info:before {
            content: "\e9d3"
        }

        .pi-like_heart:before {
            content: "\e9d4"
        }

        .pi-like:before {
            content: "\e9d5"
        }

        .pi-minus:before {
            content: "\e9d6"
        }

        .pi-paste:before {
            content: "\e9d7"
        }

        .pi-plus:before {
            content: "\e9d8"
        }

        .pi-print:before {
            content: "\e9d9"
        }

        .pi-rate:before {
            content: "\e9da"
        }

        .pi-remove_friends:before {
            content: "\e9db"
        }

        .pi-remove:before {
            content: "\e9dc"
        }

        .pi-report1:before {
            content: "\e9dd"
        }

        .pi-retry:before {
            content: "\e9de"
        }

        .pi-spam:before {
            content: "\e9df"
        }

        .pi-facebook-border:before {
            content: "\e9e0"
        }

        .pi-instagram-border:before {
            content: "\e9e1"
        }

        .pi-linkedin-border:before {
            content: "\e9e2"
        }

        .pi-twitter-border:before {
            content: "\e9e3"
        }

        .pi-appstore:before {
            content: "\e9e4"
        }

        .pi-playstore:before {
            content: "\e9e5"
        }

        .pi-facebook:before {
            content: "\e900"
        }

        .pi-instagram:before {
            content: "\e901"
        }

        .pi-twitter:before {
            content: "\e902"
        }

        .pi-youtube:before {
            content: "\e903"
        }

        @-webkit-keyframes spin {
            to {
                transform: rotate(1turn)
            }
        }

        @keyframes spin {
            to {
                transform: rotate(1turn)
            }
        }

        @-webkit-keyframes ping {

            75%,
            to {
                transform: scale(2);
                opacity: 0
            }
        }

        @keyframes ping {

            75%,
            to {
                transform: scale(2);
                opacity: 0
            }
        }

        @-webkit-keyframes pulse {
            50% {
                opacity: .5
            }
        }

        @keyframes pulse {
            50% {
                opacity: .5
            }
        }

        @-webkit-keyframes bounce {

            0%,
            to {
                transform: translateY(-25%);
                -webkit-animation-timing-function: cubic-bezier(.8, 0, 1, 1);
                animation-timing-function: cubic-bezier(.8, 0, 1, 1)
            }

            50% {
                transform: none;
                -webkit-animation-timing-function: cubic-bezier(0, 0, .2, 1);
                animation-timing-function: cubic-bezier(0, 0, .2, 1)
            }
        }

        @keyframes bounce {

            0%,
            to {
                transform: translateY(-25%);
                -webkit-animation-timing-function: cubic-bezier(.8, 0, 1, 1);
                animation-timing-function: cubic-bezier(.8, 0, 1, 1)
            }

            50% {
                transform: none;
                -webkit-animation-timing-function: cubic-bezier(0, 0, .2, 1);
                animation-timing-function: cubic-bezier(0, 0, .2, 1)
            }
        }

        :root {
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4
        }

        body,
        html {
            -webkit-text-size-adjust: 100%;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        body {
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji;
            font-family: inherit;
            line-height: inherit;
            text-rendering: optimizelegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -ms-text-size-adjust: 100%;
            letter-spacing: 0;
            font-feature-settings: "kern"1;
            -webkit-font-kerning: normal;
            font-kerning: normal
        }

        hr {
            height: 0;
            color: inherit
        }

        abbr[title] {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            margin: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        button {
            -webkit-appearance: button
        }

        legend {
            padding: 0
        }

        progress {
            vertical-align: baseline
        }

        summary {
            display: list-item
        }

        blockquote,
        body,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        button {
            background-color: transparent;
            background-image: none
        }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color
        }

        fieldset,
        ol,
        ul {
            margin: 0;
            padding: 0
        }

        ol,
        ul {
            list-style: none
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid
        }

        hr {
            border-top-width: 1px
        }

        textarea {
            resize: vertical
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            color: #a1a1aa
        }

        input::placeholder,
        textarea::placeholder {
            color: #a1a1aa
        }

        [role=button],
        button {
            cursor: pointer
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            padding: 0;
            line-height: inherit;
            color: inherit
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img {
            height: auto
        }

        img,
        video {
            max-width: 100%
        }

        video {
            height: auto
        }

        .tns-outer {
            padding: 0 !important
        }

        .tns-outer [hidden] {
            display: none !important
        }

        .tns-outer [aria-controls],
        .tns-outer [data-action] {
            cursor: pointer
        }

        .tns-slider {
            transition: all 0s
        }

        .tns-slider>.tns-item {
            box-sizing: border-box
        }

        .tns-horizontal.tns-subpixel {
            white-space: nowrap
        }

        .tns-horizontal.tns-subpixel>.tns-item {
            display: inline-block;
            vertical-align: top;
            white-space: normal
        }

        .tns-horizontal.tns-no-subpixel:after,
        .tns-t-ct:after {
            content: "";
            display: table;
            clear: both
        }

        .tns-horizontal.tns-no-subpixel>.tns-item {
            float: left
        }

        .tns-horizontal.tns-carousel.tns-no-subpixel>.tns-item {
            margin-right: -100%
        }

        .tns-gallery,
        .tns-no-calc {
            position: relative;
            left: 0
        }

        .tns-gallery {
            min-height: 1px
        }

        .tns-gallery>.tns-item {
            position: absolute;
            left: -100%;
            transition: transform 0s, opacity 0s
        }

        .tns-gallery>.tns-slide-active {
            position: relative;
            left: auto !important
        }

        .tns-gallery>.tns-moving {
            transition: all .25s
        }

        .tns-autowidth,
        .tns-vpfix>div,
        .tns-vpfix>li {
            display: inline-block
        }

        .tns-lazy-img {
            transition: opacity .6s;
            opacity: .6
        }

        .tns-lazy-img.tns-complete {
            opacity: 1
        }

        .tns-ah {
            transition: height 0s
        }

        .tns-visually-hidden {
            position: absolute;
            left: -10000em
        }

        .tns-transparent {
            opacity: 0;
            visibility: hidden
        }

        .tns-fadeIn {
            opacity: 1;
            z-index: 0
        }

        .tns-fadeOut,
        .tns-normal {
            opacity: 0;
            z-index: -1
        }

        .tns-vpfix {
            white-space: nowrap
        }

        .tns-t-subp2 {
            margin: 0 auto;
            width: 310px;
            position: relative;
            height: 10px;
            overflow: hidden
        }

        .tns-t-ct {
            width: 2333.33333%;
            position: absolute;
            right: 0
        }

        .tns-t-ct>div {
            width: 1.42857%;
            height: 10px;
            float: left
        }

        [data-sal] {
            transition-duration: var(--sal-duration, .2s);
            transition-delay: 0s;
            transition-delay: var(--sal-delay, 0s);
            transition-timing-function: ease;
            transition-timing-function: var(--sal-easing, ease)
        }

        [data-sal],
        [data-sal][data-sal-duration="200"] {
            transition-duration: .2s
        }

        [data-sal][data-sal-duration="250"] {
            transition-duration: .25s
        }

        [data-sal][data-sal-duration="300"] {
            transition-duration: .3s
        }

        [data-sal][data-sal-duration="350"] {
            transition-duration: .35s
        }

        [data-sal][data-sal-duration="400"] {
            transition-duration: .4s
        }

        [data-sal][data-sal-duration="450"] {
            transition-duration: .45s
        }

        [data-sal][data-sal-duration="500"] {
            transition-duration: .5s
        }

        [data-sal][data-sal-duration="550"] {
            transition-duration: .55s
        }

        [data-sal][data-sal-duration="600"] {
            transition-duration: .6s
        }

        [data-sal][data-sal-duration="650"] {
            transition-duration: .65s
        }

        [data-sal][data-sal-duration="700"] {
            transition-duration: .7s
        }

        [data-sal][data-sal-duration="750"] {
            transition-duration: .75s
        }

        [data-sal][data-sal-duration="800"] {
            transition-duration: .8s
        }

        [data-sal][data-sal-duration="850"] {
            transition-duration: .85s
        }

        [data-sal][data-sal-duration="900"] {
            transition-duration: .9s
        }

        [data-sal][data-sal-duration="950"] {
            transition-duration: .95s
        }

        [data-sal][data-sal-duration="1000"] {
            transition-duration: 1s
        }

        [data-sal][data-sal-duration="1050"] {
            transition-duration: 1.05s
        }

        [data-sal][data-sal-duration="1100"] {
            transition-duration: 1.1s
        }

        [data-sal][data-sal-duration="1150"] {
            transition-duration: 1.15s
        }

        [data-sal][data-sal-duration="1200"] {
            transition-duration: 1.2s
        }

        [data-sal][data-sal-duration="1250"] {
            transition-duration: 1.25s
        }

        [data-sal][data-sal-duration="1300"] {
            transition-duration: 1.3s
        }

        [data-sal][data-sal-duration="1350"] {
            transition-duration: 1.35s
        }

        [data-sal][data-sal-duration="1400"] {
            transition-duration: 1.4s
        }

        [data-sal][data-sal-duration="1450"] {
            transition-duration: 1.45s
        }

        [data-sal][data-sal-duration="1500"] {
            transition-duration: 1.5s
        }

        [data-sal][data-sal-duration="1550"] {
            transition-duration: 1.55s
        }

        [data-sal][data-sal-duration="1600"] {
            transition-duration: 1.6s
        }

        [data-sal][data-sal-duration="1650"] {
            transition-duration: 1.65s
        }

        [data-sal][data-sal-duration="1700"] {
            transition-duration: 1.7s
        }

        [data-sal][data-sal-duration="1750"] {
            transition-duration: 1.75s
        }

        [data-sal][data-sal-duration="1800"] {
            transition-duration: 1.8s
        }

        [data-sal][data-sal-duration="1850"] {
            transition-duration: 1.85s
        }

        [data-sal][data-sal-duration="1900"] {
            transition-duration: 1.9s
        }

        [data-sal][data-sal-duration="1950"] {
            transition-duration: 1.95s
        }

        [data-sal][data-sal-duration="2000"] {
            transition-duration: 2s
        }

        [data-sal][data-sal-delay="50"] {
            transition-delay: .05s
        }

        [data-sal][data-sal-delay="100"] {
            transition-delay: .1s
        }

        [data-sal][data-sal-delay="150"] {
            transition-delay: .15s
        }

        [data-sal][data-sal-delay="200"] {
            transition-delay: .2s
        }

        [data-sal][data-sal-delay="250"] {
            transition-delay: .25s
        }

        [data-sal][data-sal-delay="300"] {
            transition-delay: .3s
        }

        [data-sal][data-sal-delay="350"] {
            transition-delay: .35s
        }

        [data-sal][data-sal-delay="400"] {
            transition-delay: .4s
        }

        [data-sal][data-sal-delay="450"] {
            transition-delay: .45s
        }

        [data-sal][data-sal-delay="500"] {
            transition-delay: .5s
        }

        [data-sal][data-sal-delay="550"] {
            transition-delay: .55s
        }

        [data-sal][data-sal-delay="600"] {
            transition-delay: .6s
        }

        [data-sal][data-sal-delay="650"] {
            transition-delay: .65s
        }

        [data-sal][data-sal-delay="700"] {
            transition-delay: .7s
        }

        [data-sal][data-sal-delay="750"] {
            transition-delay: .75s
        }

        [data-sal][data-sal-delay="800"] {
            transition-delay: .8s
        }

        [data-sal][data-sal-delay="850"] {
            transition-delay: .85s
        }

        [data-sal][data-sal-delay="900"] {
            transition-delay: .9s
        }

        [data-sal][data-sal-delay="950"] {
            transition-delay: .95s
        }

        [data-sal][data-sal-delay="1000"] {
            transition-delay: 1s
        }

        [data-sal][data-sal-easing=linear] {
            transition-timing-function: linear
        }

        [data-sal][data-sal-easing=ease] {
            transition-timing-function: ease
        }

        [data-sal][data-sal-easing=ease-in] {
            transition-timing-function: ease-in
        }

        [data-sal][data-sal-easing=ease-out] {
            transition-timing-function: ease-out
        }

        [data-sal][data-sal-easing=ease-in-out] {
            transition-timing-function: ease-in-out
        }

        [data-sal][data-sal-easing=ease-in-cubic] {
            transition-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        [data-sal][data-sal-easing=ease-out-cubic] {
            transition-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        [data-sal][data-sal-easing=ease-in-out-cubic] {
            transition-timing-function: cubic-bezier(.645, .045, .355, 1)
        }

        [data-sal][data-sal-easing=ease-in-circ] {
            transition-timing-function: cubic-bezier(.6, .04, .98, .335)
        }

        [data-sal][data-sal-easing=ease-out-circ] {
            transition-timing-function: cubic-bezier(.075, .82, .165, 1)
        }

        [data-sal][data-sal-easing=ease-in-out-circ] {
            transition-timing-function: cubic-bezier(.785, .135, .15, .86)
        }

        [data-sal][data-sal-easing=ease-in-expo] {
            transition-timing-function: cubic-bezier(.95, .05, .795, .035)
        }

        [data-sal][data-sal-easing=ease-out-expo] {
            transition-timing-function: cubic-bezier(.19, 1, .22, 1)
        }

        [data-sal][data-sal-easing=ease-in-out-expo] {
            transition-timing-function: cubic-bezier(1, 0, 0, 1)
        }

        [data-sal][data-sal-easing=ease-in-quad] {
            transition-timing-function: cubic-bezier(.55, .085, .68, .53)
        }

        [data-sal][data-sal-easing=ease-out-quad] {
            transition-timing-function: cubic-bezier(.25, .46, .45, .94)
        }

        [data-sal][data-sal-easing=ease-in-out-quad] {
            transition-timing-function: cubic-bezier(.455, .03, .515, .955)
        }

        [data-sal][data-sal-easing=ease-in-quart] {
            transition-timing-function: cubic-bezier(.895, .03, .685, .22)
        }

        [data-sal][data-sal-easing=ease-out-quart] {
            transition-timing-function: cubic-bezier(.165, .84, .44, 1)
        }

        [data-sal][data-sal-easing=ease-in-out-quart] {
            transition-timing-function: cubic-bezier(.77, 0, .175, 1)
        }

        [data-sal][data-sal-easing=ease-in-quint] {
            transition-timing-function: cubic-bezier(.755, .05, .855, .06)
        }

        [data-sal][data-sal-easing=ease-out-quint] {
            transition-timing-function: cubic-bezier(.23, 1, .32, 1)
        }

        [data-sal][data-sal-easing=ease-in-out-quint] {
            transition-timing-function: cubic-bezier(.86, 0, .07, 1)
        }

        [data-sal][data-sal-easing=ease-in-sine] {
            transition-timing-function: cubic-bezier(.47, 0, .745, .715)
        }

        [data-sal][data-sal-easing=ease-out-sine] {
            transition-timing-function: cubic-bezier(.39, .575, .565, 1)
        }

        [data-sal][data-sal-easing=ease-in-out-sine] {
            transition-timing-function: cubic-bezier(.445, .05, .55, .95)
        }

        [data-sal][data-sal-easing=ease-in-back] {
            transition-timing-function: cubic-bezier(.6, -.28, .735, .045)
        }

        [data-sal][data-sal-easing=ease-out-back] {
            transition-timing-function: cubic-bezier(.175, .885, .32, 1.275)
        }

        [data-sal][data-sal-easing=ease-in-out-back] {
            transition-timing-function: cubic-bezier(.68, -.55, .265, 1.55)
        }

        [data-sal|=fade] {
            opacity: 0;
            transition-property: opacity
        }

        [data-sal|=fade].sal-animate,
        body.sal-disabled [data-sal|=fade] {
            opacity: 1
        }

        [data-sal|=slide] {
            opacity: 0;
            transition-property: opacity, transform
        }

        [data-sal=slide-up] {
            transform: translateY(20%)
        }

        [data-sal=slide-down] {
            transform: translateY(-20%)
        }

        [data-sal=slide-left] {
            transform: translateX(20%)
        }

        [data-sal=slide-right] {
            transform: translateX(-20%)
        }

        [data-sal|=slide].sal-animate,
        [data-sal|=zoom].sal-animate,
        body.sal-disabled [data-sal|=slide],
        body.sal-disabled [data-sal|=zoom] {
            opacity: 1;
            transform: none
        }

        [data-sal|=zoom] {
            opacity: 0;
            transition-property: opacity, transform
        }

        [data-sal=zoom-in] {
            transform: scale(.5)
        }

        [data-sal=zoom-out] {
            transform: scale(1.1)
        }

        [data-sal|=flip] {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition-property: transform
        }

        [data-sal=flip-left] {
            transform: perspective(2000px) rotateY(-91deg)
        }

        [data-sal=flip-right] {
            transform: perspective(2000px) rotateY(91deg)
        }

        [data-sal=flip-up] {
            transform: perspective(2000px) rotateX(-91deg)
        }

        [data-sal=flip-down] {
            transform: perspective(2000px) rotateX(91deg)
        }

        [data-sal|=flip].sal-animate,
        body.sal-disabled [data-sal|=flip] {
            transform: none
        }

        [data-sal|=hide] {
            opacity: 1;
            transition-property: opacity, transform
        }

        [data-sal|=hide].sal-animate,
        body.sal-disabled [data-sal|=hide] {
            opacity: 0;
            transform: none
        }

        [data-sal|=transform] {
            transition-property: transform
        }

        [data-sal|=transform].sal-animate,
        body.sal-disabled [data-sal|=transform] {
            transform: none
        }

        img {
            border-style: none
        }

        img:not([src]):not([srcset]) {
            visibility: hidden
        }

        img.lazy.error,
        img[src=""] {
            visibility: hidden
        }

        .space-y-4>:not([hidden])~:not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(16px*(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(16px*var(--tw-space-y-reverse))
        }

        .space-y-5>:not([hidden])~:not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(20px*(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(20px*var(--tw-space-y-reverse))
        }

        .space-x-5>:not([hidden])~:not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(20px*var(--tw-space-x-reverse));
            margin-left: calc(20px*(1 - var(--tw-space-x-reverse)))
        }

        .space-y-6>:not([hidden])~:not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(24px*(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(24px*var(--tw-space-y-reverse))
        }

        .space-x-8>:not([hidden])~:not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(32px*var(--tw-space-x-reverse));
            margin-left: calc(32px*(1 - var(--tw-space-x-reverse)))
        }

        .divide-y>:not([hidden])~:not([hidden]) {
            --tw-divide-y-reverse: 0;
            border-top-width: calc(1px*(1 - var(--tw-divide-y-reverse)));
            border-bottom-width: calc(1px*var(--tw-divide-y-reverse))
        }

        .bg-black,
        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgba(0, 0, 0, var(--tw-bg-opacity))
        }

        .bg-white {
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity))
        }

        .bg-brand,
        .bg-dark {
            --tw-bg-opacity: 1;
            background-color: rgba(0, 170, 19, var(--tw-bg-opacity))
        }

        .bg-dark {
            background-color: rgba(16, 24, 32, var(--tw-bg-opacity))
        }

        .bg-dark100,
        .bg-dark200 {
            --tw-bg-opacity: 1;
            background-color: rgba(22, 34, 46, var(--tw-bg-opacity))
        }

        .bg-dark200 {
            background-color: rgba(24, 36, 48, var(--tw-bg-opacity))
        }

        .bg-green-primary,
        .bg-green-thin2 {
            --tw-bg-opacity: 1;
            background-color: rgba(0, 170, 19, var(--tw-bg-opacity))
        }

        .bg-green-thin2 {
            background-color: rgba(161, 216, 132, var(--tw-bg-opacity))
        }

        .bg-green-thin3,
        .bg-green-thin6 {
            --tw-bg-opacity: 1;
            background-color: rgba(124, 204, 108, var(--tw-bg-opacity))
        }

        .bg-green-thin6 {
            background-color: rgba(117, 186, 129, var(--tw-bg-opacity))
        }

        .bg-red-primary,
        .bg-red-thin2 {
            --tw-bg-opacity: 1;
            background-color: rgba(238, 39, 55, var(--tw-bg-opacity))
        }

        .bg-red-thin2 {
            background-color: rgba(255, 177, 187, var(--tw-bg-opacity))
        }

        .bg-orange-thin2,
        .bg-red-thin3 {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 128, 139, var(--tw-bg-opacity))
        }

        .bg-orange-thin2 {
            background-color: rgba(255, 194, 123, var(--tw-bg-opacity))
        }

        .bg-orange-thin4,
        .bg-pink-primary {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 143, 28, var(--tw-bg-opacity))
        }

        .bg-pink-primary {
            background-color: rgba(223, 25, 149, var(--tw-bg-opacity))
        }

        .bg-pink-thin2,
        .bg-pink-thin6 {
            --tw-bg-opacity: 1;
            background-color: rgba(234, 190, 219, var(--tw-bg-opacity))
        }

        .bg-pink-thin6 {
            background-color: rgba(255, 155, 214, var(--tw-bg-opacity))
        }

        .bg-blue-primary,
        .bg-pink-shade3 {
            --tw-bg-opacity: 1;
            background-color: rgba(137, 12, 88, var(--tw-bg-opacity))
        }

        .bg-blue-primary {
            background-color: rgba(0, 174, 214, var(--tw-bg-opacity))
        }

        .bg-blue-thin2,
        .bg-blue-thin4 {
            --tw-bg-opacity: 1;
            background-color: rgba(164, 219, 232, var(--tw-bg-opacity))
        }

        .bg-blue-thin4 {
            background-color: rgba(74, 201, 227, var(--tw-bg-opacity))
        }

        .bg-blue-shade3,
        .bg-blue-thin6 {
            --tw-bg-opacity: 1;
            background-color: rgba(114, 130, 206, var(--tw-bg-opacity))
        }

        .bg-blue-shade3 {
            background-color: rgba(0, 133, 173, var(--tw-bg-opacity))
        }

        .bg-purple-primary {
            --tw-bg-opacity: 1;
            background-color: rgba(147, 50, 142, var(--tw-bg-opacity))
        }

        .bg-purple-thin2,
        .bg-purple-thin4 {
            --tw-bg-opacity: 1;
            background-color: rgba(226, 172, 215, var(--tw-bg-opacity))
        }

        .bg-purple-thin4 {
            background-color: rgba(189, 122, 179, var(--tw-bg-opacity))
        }

        .bg-purple-shade3 {
            --tw-bg-opacity: 1;
            background-color: rgba(114, 0, 98, var(--tw-bg-opacity))
        }

        .bg-gray-primary,
        .bg-purple-shade6 {
            --tw-bg-opacity: 1;
            background-color: rgba(170, 0, 97, var(--tw-bg-opacity))
        }

        .bg-gray-primary {
            background-color: rgba(16, 24, 32, var(--tw-bg-opacity))
        }

        .bg-gray-alternate {
            --tw-bg-opacity: 1;
            background-color: rgba(237, 237, 237, var(--tw-bg-opacity))
        }

        .bg-gray-thin1,
        .bg-gray-thin6 {
            --tw-bg-opacity: 1;
            background-color: rgba(217, 217, 214, var(--tw-bg-opacity))
        }

        .bg-gray-thin6 {
            background-color: rgba(232, 232, 232, var(--tw-bg-opacity))
        }

        .bg-inactive-system1 {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity))
        }

        .bg-center {
            background-position: 50%
        }

        .bg-cover {
            background-size: cover
        }

        .border-black {
            --tw-border-opacity: 1;
            border-color: rgba(0, 0, 0, var(--tw-border-opacity))
        }

        .border-dark200,
        .border-gray-primary {
            --tw-border-opacity: 1;
            border-color: rgba(24, 36, 48, var(--tw-border-opacity))
        }

        .border-gray-primary {
            border-color: rgba(16, 24, 32, var(--tw-border-opacity))
        }

        .rounded-r4,
        .tns-nav>button {
            border-radius: 4px
        }

        .rounded-r16 {
            border-radius: 16px
        }

        .rounded-r24 {
            border-radius: 24px
        }

        .rounded-r32 {
            border-radius: 32px
        }

        .rounded-r48 {
            border-radius: 48px
        }

        .rounded-r40 {
            border-radius: 40px
        }

        .rounded-circle {
            border-radius: 100%
        }

        .rounded-t-r40 {
            border-top-left-radius: 40px;
            border-top-right-radius: 40px
        }

        .rounded-b-r40 {
            border-bottom-right-radius: 40px;
            border-bottom-left-radius: 40px
        }

        .border-2 {
            border-width: 2px
        }

        .border-r-2 {
            border-right-width: 2px
        }

        .border-b-2 {
            border-bottom-width: 2px
        }

        .block {
            display: block
        }

        .inline-block {
            display: inline-block
        }

        .flex {
            display: flex
        }

        .table {
            display: table
        }

        .grid {
            display: grid
        }

        .inline-grid {
            display: inline-grid
        }

        .hidden,
        .lazy.loaded+.u-lazy__placeholder,
        .lazy.loaded+.u-lazy__placeholder-clear,
        .lazy.loaded+.u-lazy__placeholder-grayed,
        .u-lazy__placeholder img,
        .u-lazy__placeholder-grayed img {
            display: none
        }

        .flex-row {
            flex-direction: row
        }

        .flex-col {
            flex-direction: column
        }

        .flex-wrap {
            flex-wrap: wrap
        }

        .items-start {
            align-items: flex-start
        }

        .items-end {
            align-items: flex-end
        }

        .items-center {
            align-items: center
        }

        .self-end {
            align-self: flex-end
        }

        .self-center {
            align-self: center
        }

        .justify-items-auto {
            justify-items: auto
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .justify-between {
            justify-content: space-between
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .order-1 {
            order: 1
        }

        .order-2 {
            order: 2
        }

        .font-body {
            font-family: MaisonNeue-Book
        }

        .font-maisonDemi {
            font-family: MaisonNeue-Demi
        }

        .font-maisonDemiItalic {
            font-family: MaisonNeue-DemiItalic
        }

        .font-maisonBook {
            font-family: MaisonNeue-Book
        }

        .font-maisonBookItalic {
            font-family: MaisonNeue-BookItalic
        }

        .font-maisonBold {
            font-family: MaisonNeue-Bold
        }

        .font-maisonExtendedBold {
            font-family: MaisonNeueExtended-Bold
        }

        .font-maisonExtendedExtraBold {
            font-family: MaisonNeueExtended-ExtraBold
        }

        .font-light {
            font-weight: 300
        }

        .font-normal {
            font-weight: 400
        }

        .font-medium {
            font-weight: 500
        }

        .font-bold,
        .u-wysiwyg-content b,
        .u-wysiwyg-content strong {
            font-weight: 700
        }

        .font-extrabold {
            font-weight: 800
        }

        .h-0 {
            height: 0
        }

        .h-3 {
            height: 12px
        }

        .h-4 {
            height: 16px
        }

        .h-5 {
            height: 20px
        }

        .h-6 {
            height: 24px
        }

        .h-8 {
            height: 32px
        }

        .h-11 {
            height: 44px
        }

        .h-18 {
            height: 4.5rem
        }

        .h-30 {
            height: 120px
        }

        .h-auto {
            height: auto
        }

        .h-40p {
            height: 40%
        }

        .h-full {
            height: 100%
        }

        .h-screen {
            height: 100vh
        }

        .h-140p {
            height: 140%
        }

        .h-screen_4\/5x {
            height: 80vh
        }

        .h-screen_9\/10x {
            height: 90vh
        }

        .text-size_6x {
            font-size: 12px
        }

        .text-size_7x {
            font-size: 14px
        }

        .text-size_8x {
            font-size: 16px
        }

        .text-size_9x {
            font-size: 18px
        }

        .text-size_10x {
            font-size: 20px
        }

        .text-size_12x {
            font-size: 24px
        }

        .text-size_13x {
            font-size: 26px
        }

        .text-size_14x {
            font-size: 28px
        }

        .text-size_16x {
            font-size: 32px
        }

        .text-size_18x {
            font-size: 36px
        }

        .text-size_20x {
            font-size: 40px
        }

        .text-size_26x {
            font-size: 52px
        }

        .leading-height_18x {
            line-height: 18px
        }

        .leading-height_20x {
            line-height: 20px
        }

        .leading-height_21x {
            line-height: 21px
        }

        .leading-height_24x {
            line-height: 24px
        }

        .leading-height_26x {
            line-height: 26px
        }

        .leading-height_27x {
            line-height: 27px
        }

        .leading-height_32x {
            line-height: 32px
        }

        .leading-height_36x {
            line-height: 36px
        }

        .leading-height_39x {
            line-height: 39px
        }

        .leading-height_44x {
            line-height: 44px
        }

        .leading-height_48x {
            line-height: 48px
        }

        .leading-height_52x {
            line-height: 52px
        }

        .list-inside {
            list-style-position: inside
        }

        .list-outside {
            list-style-position: outside
        }

        .list-disc {
            list-style-type: disc
        }

        .list-decimal {
            list-style-type: decimal
        }

        .list-loweralpha {
            list-style-type: lower-alpha
        }

        .m-0 {
            margin: 0
        }

        .mx-2 {
            margin-left: 8px;
            margin-right: 8px
        }

        .my-32 {
            margin-top: 128px;
            margin-bottom: 128px
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .-mx-4 {
            margin-left: -16px;
            margin-right: -16px
        }

        .mb-0 {
            margin-bottom: 0
        }

        .ml-0 {
            margin-left: 0
        }

        .mt-1 {
            margin-top: 4px
        }

        .mb-1 {
            margin-bottom: 4px
        }

        .ml-1 {
            margin-left: 4px
        }

        .mt-2 {
            margin-top: 8px
        }

        .mr-2 {
            margin-right: 8px
        }

        .mb-2 {
            margin-bottom: 8px
        }

        .ml-2 {
            margin-left: 8px
        }

        .mt-3 {
            margin-top: 12px
        }

        .mr-3 {
            margin-right: 12px
        }

        .mb-3 {
            margin-bottom: 12px
        }

        .mt-4 {
            margin-top: 16px
        }

        .mr-4 {
            margin-right: 16px
        }

        .mb-4,
        .u-wysiwyg-content ol ol,
        .u-wysiwyg-content ol ul,
        .u-wysiwyg-content p,
        .u-wysiwyg-content ul ol,
        .u-wysiwyg-content ul ul {
            margin-bottom: 16px
        }

        .ml-4 {
            margin-left: 16px
        }

        .mt-5 {
            margin-top: 20px
        }

        .mr-5 {
            margin-right: 20px
        }

        .mb-5 {
            margin-bottom: 20px
        }

        .ml-5 {
            margin-left: 20px
        }

        .mt-6 {
            margin-top: 24px
        }

        .mb-6 {
            margin-bottom: 24px
        }

        .mb-7 {
            margin-bottom: 1.75rem
        }

        .mt-8 {
            margin-top: 32px
        }

        .mb-8 {
            margin-bottom: 32px
        }

        .mt-10 {
            margin-top: 40px
        }

        .mb-10 {
            margin-bottom: 40px
        }

        .ml-10 {
            margin-left: 40px
        }

        .mb-11 {
            margin-bottom: 44px
        }

        .mt-12 {
            margin-top: 48px
        }

        .mb-12 {
            margin-bottom: 48px
        }

        .mb-13 {
            margin-bottom: 3.5rem
        }

        .mb-14 {
            margin-bottom: 56px
        }

        .mb-17 {
            margin-bottom: 68px
        }

        .mb-18 {
            margin-bottom: 4.5rem
        }

        .mb-21 {
            margin-bottom: 84px
        }

        .mb-35 {
            margin-bottom: 140px
        }

        .mb-40 {
            margin-bottom: 160px
        }

        .mt-auto {
            margin-top: auto
        }

        .mr-auto {
            margin-right: auto
        }

        .ml-auto {
            margin-left: auto
        }

        .-mt-10 {
            margin-top: -40px
        }

        .-mt-17 {
            margin-top: -68px
        }

        .-mt-20 {
            margin-top: -80px
        }

        .-mt-24 {
            margin-top: -96px
        }

        .-mb-35 {
            margin-bottom: -140px
        }

        .max-h-0 {
            max-height: 0
        }

        .max-h-screen {
            max-height: 100vh
        }

        .min-h-screen {
            min-height: 100vh
        }

        .min-h-screen_3\/2x {
            min-height: 150vh
        }

        .object-cover {
            -o-object-fit: cover;
            object-fit: cover
        }

        .opacity-0 {
            opacity: 0
        }

        .opacity-80 {
            opacity: .8
        }

        .opacity-100 {
            opacity: 1
        }

        .overflow-hidden {
            overflow: hidden
        }

        .overflow-x-scroll {
            overflow-x: scroll
        }

        .overflow-y-scroll {
            overflow-y: scroll
        }

        .p-0 {
            padding: 0
        }

        .p-1 {
            padding: 4px
        }

        .p-2 {
            padding: 8px
        }

        .p-4 {
            padding: 16px
        }

        .p-5 {
            padding: 20px
        }

        .p-6 {
            padding: 24px
        }

        .p-7 {
            padding: 1.75rem
        }

        .p-8 {
            padding: 32px
        }

        .p-10 {
            padding: 40px
        }

        .p-6px {
            padding: 6px
        }

        .py-3 {
            padding-top: 12px;
            padding-bottom: 12px
        }

        .py-4 {
            padding-top: 16px;
            padding-bottom: 16px
        }

        .px-4 {
            padding-left: 16px;
            padding-right: 16px
        }

        .py-5 {
            padding-top: 20px;
            padding-bottom: 20px
        }

        .px-5 {
            padding-left: 20px;
            padding-right: 20px
        }

        .px-6 {
            padding-left: 24px;
            padding-right: 24px
        }

        .py-8 {
            padding-top: 32px;
            padding-bottom: 32px
        }

        .px-9 {
            padding-left: 36px;
            padding-right: 36px
        }

        .py-10 {
            padding-top: 40px;
            padding-bottom: 40px
        }

        .py-12 {
            padding-top: 48px;
            padding-bottom: 48px
        }

        .px-12 {
            padding-left: 48px;
            padding-right: 48px
        }

        .pt-0 {
            padding-top: 0
        }

        .pb-1 {
            padding-bottom: 4px
        }

        .pb-3 {
            padding-bottom: 12px
        }

        .pl-4 {
            padding-left: 16px
        }

        .pl-5 {
            padding-left: 20px
        }

        .pb-6 {
            padding-bottom: 24px
        }

        .pt-7 {
            padding-top: 1.75rem
        }

        .pb-7 {
            padding-bottom: 1.75rem
        }

        .pt-8 {
            padding-top: 32px
        }

        .pb-8 {
            padding-bottom: 32px
        }

        .pt-10 {
            padding-top: 40px
        }

        .pb-10 {
            padding-bottom: 40px
        }

        .pt-12 {
            padding-top: 48px
        }

        .pb-12 {
            padding-bottom: 48px
        }

        .pt-14 {
            padding-top: 56px
        }

        .pt-15 {
            padding-top: 60px
        }

        .pt-16 {
            padding-top: 64px
        }

        .pb-16 {
            padding-bottom: 64px
        }

        .pt-30 {
            padding-top: 120px
        }

        .pointer-events-none {
            pointer-events: none
        }

        .static {
            position: static
        }

        .fixed {
            position: fixed
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .sticky {
            position: sticky
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .bottom-0 {
            bottom: 0
        }

        .left-0 {
            left: 0
        }

        .top-50p {
            top: 50%
        }

        .-top-20p {
            top: -20%
        }

        .-left-20p {
            left: -20%
        }

        .resize {
            resize: both
        }

        * {
            --tw-shadow: 0 0 transparent;
            --tw-ring-inset: var(--tw-empty, );
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgba(59, 130, 246, 0.5);
            --tw-ring-offset-shadow: 0 0 transparent;
            --tw-ring-shadow: 0 0 transparent
        }

        .shadow-high {
            --tw-shadow: 0px 0px 14px 0px rgba(16, 24, 32, 0.14)
        }

        .shadow-green,
        .shadow-high {
            box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow)
        }

        .shadow-green {
            --tw-shadow: 0px 0px 32px 10px #b2e5b8
        }

        .shadow-purple {
            --tw-shadow: 0px 0px 32px 10px #d0b4d4
        }

        .shadow-orange,
        .shadow-purple {
            box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow)
        }

        .shadow-orange {
            --tw-shadow: 0px 0px 32px 10px #fac9a6
        }

        .shadow-blue {
            --tw-shadow: 0px 0px 32px 10px #b2e6f2
        }

        .shadow-blue,
        .shadow-pink,
        .shadow-red {
            box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow)
        }

        .shadow-red {
            --tw-shadow: 0px 0px 32px 10px #f9bec3
        }

        .shadow-pink {
            --tw-shadow: 0px 0px 32px 10px #f5badf
        }

        .fill-current {
            fill: currentColor
        }

        .text-left {
            text-align: left
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity))
        }

        .hover\:text-brand:hover,
        .text-brand,
        .text-dark {
            --tw-text-opacity: 1;
            color: rgba(0, 170, 19, var(--tw-text-opacity))
        }

        .text-dark {
            color: rgba(16, 24, 32, var(--tw-text-opacity))
        }

        .text-gray-primary,
        .text-pink-shade1 {
            --tw-text-opacity: 1;
            color: rgba(208, 0, 111, var(--tw-text-opacity))
        }

        .text-gray-primary {
            color: rgba(16, 24, 32, var(--tw-text-opacity))
        }

        .hover\:text-hover-system1:hover {
            --tw-text-opacity: 1;
            color: rgba(240, 240, 240, var(--tw-text-opacity))
        }

        .overflow-ellipsis {
            text-overflow: ellipsis
        }

        .italic,
        .u-wysiwyg-content em,
        .u-wysiwyg-content i {
            font-style: italic
        }

        .uppercase {
            text-transform: uppercase
        }

        .lowercase {
            text-transform: lowercase
        }

        .u-wysiwyg-content u,
        .underline {
            text-decoration: underline
        }

        .tracking-normal {
            letter-spacing: 0
        }

        .tracking-title {
            letter-spacing: .8px
        }

        .align-middle {
            vertical-align: middle
        }

        .visible {
            visibility: visible
        }

        .invisible,
        .lazy.error {
            visibility: hidden
        }

        .w-3 {
            width: 12px
        }

        .w-4 {
            width: 16px
        }

        .w-5 {
            width: 20px
        }

        .w-8 {
            width: 32px
        }

        .w-18 {
            width: 4.5rem
        }

        .w-30 {
            width: 120px
        }

        .w-auto {
            width: auto
        }

        .w-1\/2 {
            width: 50%
        }

        .w-full {
            width: 100%
        }

        .w-screen {
            width: 100vw
        }

        .w-140p {
            width: 140%
        }

        .w-fit {
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content
        }

        .z-0 {
            z-index: 0
        }

        .z-10 {
            z-index: 10
        }

        .z-20 {
            z-index: 20
        }

        .z-40 {
            z-index: 40
        }

        .z-50 {
            z-index: 50
        }

        .z-n1 {
            z-index: -1
        }

        .gap-4 {
            gap: 16px
        }

        .gap-5 {
            gap: 20px
        }

        .gap-6 {
            gap: 24px
        }

        .gap-8 {
            gap: 32px
        }

        .gap-15 {
            gap: 60px
        }

        .gap-x-3 {
            -moz-column-gap: 12px;
            column-gap: 12px
        }

        .gap-x-10 {
            -moz-column-gap: 40px;
            column-gap: 40px
        }

        .gap-x-15 {
            -moz-column-gap: 60px;
            column-gap: 60px
        }

        .gap-y-2 {
            row-gap: 8px
        }

        .gap-y-6 {
            row-gap: 24px
        }

        .gap-y-10 {
            row-gap: 40px
        }

        .gap-y-12 {
            row-gap: 48px
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr))
        }

        .grid-cols-4 {
            grid-template-columns: repeat(4, minmax(0, 1fr))
        }

        .grid-cols-8 {
            grid-template-columns: repeat(8, minmax(0, 1fr))
        }

        .col-span-1 {
            grid-column: span 1/span 1
        }

        .col-span-2 {
            grid-column: span 2/span 2
        }

        .col-span-3 {
            grid-column: span 3/span 3
        }

        .transform {
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .origin-center {
            transform-origin: center
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1
        }

        .scale-150 {
            --tw-scale-x: 1.5;
            --tw-scale-y: 1.5
        }

        .scale-300 {
            --tw-scale-x: 3;
            --tw-scale-y: 3
        }

        .rotate-0 {
            --tw-rotate: 0deg
        }

        .rotate-180 {
            --tw-rotate: 180deg
        }

        .-translate-x-1\/4 {
            --tw-translate-x: -25%
        }

        .translate-y-0 {
            --tw-translate-y: 0
        }

        .translate-y-8 {
            --tw-translate-y: 32px
        }

        .-translate-y-2 {
            --tw-translate-y: -8px
        }

        .-translate-y-6 {
            --tw-translate-y: -24px
        }

        .-translate-y-10p {
            --tw-translate-y: -10%
        }

        .translate-y-full {
            --tw-translate-y: 100%
        }

        .-translate-y-1\/2 {
            --tw-translate-y: -50%
        }

        .-translate-y-1\/4 {
            --tw-translate-y: -25%
        }

        .transition,
        .transition-colors,
        .transition-opacity {
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .15s
        }

        .transition-colors,
        .transition-opacity {
            transition-property: background-color, border-color, color, fill, stroke
        }

        .transition-opacity {
            transition-property: opacity
        }

        .transition-height,
        .transition-height-width,
        .transition-transform,
        .transition-transform-opacity {
            transition-property: transform;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .15s
        }

        .transition-height,
        .transition-height-width,
        .transition-transform-opacity {
            transition-property: height
        }

        .transition-height-width,
        .transition-transform-opacity {
            transition-property: height, max-height, width, max-width
        }

        .transition-transform-opacity {
            transition-property: transform, opacity
        }

        .ease-in {
            transition-timing-function: cubic-bezier(.4, 0, 1, 1)
        }

        .ease-out {
            transition-timing-function: cubic-bezier(0, 0, .2, 1)
        }

        .ease-in-out {
            transition-timing-function: cubic-bezier(.4, 0, .2, 1)
        }

        .duration-100 {
            transition-duration: .1s
        }

        .duration-200 {
            transition-duration: .2s
        }

        .duration-300 {
            transition-duration: .3s
        }

        .duration-500 {
            transition-duration: .5s
        }

        .duration-700 {
            transition-duration: .7s
        }

        .duration-1000 {
            transition-duration: 1s
        }

        .duration-2000 {
            transition-duration: 2s
        }

        .delay-50 {
            transition-delay: 50ms
        }

        .delay-100 {
            transition-delay: .1s
        }

        .delay-150 {
            transition-delay: .15s
        }

        .delay-300 {
            transition-delay: .3s
        }

        .delay-400 {
            transition-delay: .4s
        }

        .container {
            max-width: 100%;
            padding: 0 1.25rem
        }

        @media (min-width:640px) {
            .container {
                max-width: 100%;
                padding: 0 1.25rem
            }
        }

        @media (min-width:768px) {
            .container {
                max-width: 688px;
                padding: 0
            }
        }

        @media (min-width:992px) {
            .container {
                max-width: 864px;
                padding: 0
            }
        }

        @media (min-width:1200px) {
            .container {
                max-width: 1140px;
                padding: 0
            }
        }

        @media (min-width:1600px) {
            .container {
                max-width: 1350px;
                padding: 0
            }
        }

        .u-animation-underline {
            text-decoration: none;
            position: relative
        }

        .btn-nude:hover .pi,
        .u-animation-underline:before {
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .u-animation-underline:before {
            content: "";
            --tw-bg-opacity: 1;
            background-color: rgba(16, 24, 32, var(--tw-bg-opacity));
            height: 1px;
            position: absolute;
            left: 0;
            visibility: hidden;
            width: 100%;
            --tw-scale-x: 0;
            --tw-scale-y: 0;
            transition-property: transform;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .2s;
            bottom: -3px
        }

        .u-animation-underline.active:before,
        .u-animation-underline.visit:before,
        .u-animation-underline:active:before,
        .u-animation-underline:hover:before {
            visibility: visible;
            --tw-scale-x: 1;
            --tw-scale-y: 1
        }

        .u-translate-z-0 {
            transform: translateZ(0)
        }

        .u-ratio {
            padding: 0;
            position: relative;
            width: 100%
        }

        .u-ratio:before {
            display: block;
            content: ""
        }

        .u-ratio__item {
            height: 100%;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%
        }

        .u-ratio--1by1:before {
            padding-top: 100%
        }

        .u-ratio--4by3:before {
            padding-top: 75%
        }

        .u-ratio--16by9:before {
            padding-top: 56.25%
        }

        .u-lazy,
        .u-lazy__placeholder {
            height: 100%;
            position: relative;
            width: 100%
        }

        .u-lazy__placeholder {
            position: absolute;
            top: 0;
            left: 0
        }

        .u-lazy__placeholder-grayed {
            background-color: #e8e8e8
        }

        .u-lazy__placeholder-clear,
        .u-lazy__placeholder-grayed {
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%
        }

        .u-lazy__placeholder-clear img {
            height: 100%;
            width: 100%;
            filter: blur(10px)
        }

        .u-safe-y-100-200 {
            padding-top: 48px;
            padding-bottom: 96px
        }

        @media (min-width:768px) {
            .u-safe-y-100-200 {
                padding-top: 80px;
                padding-bottom: 160px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-100-200 {
                padding-top: 100px;
                padding-bottom: 200px
            }
        }

        .u-safe-y-100-200.extra-button {
            padding-bottom: 136px
        }

        @media (min-width:768px) {
            .u-safe-y-100-200.extra-button {
                padding-bottom: 224px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-100-200.extra-button {
                padding-bottom: 296px
            }
        }

        .u-safe-y-100-200.extra-button-inherit {
            padding-bottom: 96px
        }

        @media (min-width:768px) {
            .u-safe-y-100-200.extra-button-inherit {
                padding-bottom: 160px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-100-200.extra-button-inherit {
                padding-bottom: 200px
            }
        }

        .u-safe-y-200-100 {
            padding-bottom: 48px;
            padding-top: 96px
        }

        @media (min-width:768px) {
            .u-safe-y-200-100 {
                padding-bottom: 80px;
                padding-top: 160px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-200-100 {
                padding-top: 200px;
                padding-bottom: 100px
            }
        }

        .u-safe-y-200-100.extra-button {
            padding-bottom: 88px
        }

        @media (min-width:768px) {
            .u-safe-y-200-100.extra-button {
                padding-bottom: 144px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-200-100.extra-button {
                padding-bottom: 196px
            }
        }

        .u-safe-y-200-100.extra-button-inherit {
            padding-bottom: 48px
        }

        @media (min-width:768px) {
            .u-safe-y-200-100.extra-button-inherit {
                padding-bottom: 80px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-200-100.extra-button-inherit {
                padding-bottom: 100px
            }
        }

        .u-safe-y-200-200 {
            padding-top: 96px;
            padding-bottom: 96px
        }

        @media (min-width:768px) {
            .u-safe-y-200-200 {
                padding-top: 160px;
                padding-bottom: 160px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-200-200 {
                padding-bottom: 200px;
                padding-top: 200px
            }
        }

        .u-safe-y-200-200.extra-button {
            padding-bottom: 136px
        }

        @media (min-width:768px) {
            .u-safe-y-200-200.extra-button {
                padding-bottom: 224px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-200-200.extra-button {
                padding-bottom: 296px
            }
        }

        .u-safe-y-160-160,
        .u-safe-y-200-200.extra-button-inherit {
            padding-bottom: 96px
        }

        @media (min-width:768px) {
            .u-safe-y-200-200.extra-button-inherit {
                padding-bottom: 160px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-200-200.extra-button-inherit {
                padding-bottom: 200px
            }
        }

        .u-safe-y-160-160 {
            padding-top: 96px
        }

        @media (min-width:768px) {
            .u-safe-y-160-160 {
                padding-top: 160px;
                padding-bottom: 160px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-160-160 {
                padding-top: 160px;
                padding-bottom: 160px
            }
        }

        .u-safe-y-160-160.extra-button {
            padding-bottom: 136px
        }

        @media (min-width:768px) {
            .u-safe-y-160-160.extra-button {
                padding-bottom: 224px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-160-160.extra-button {
                padding-bottom: 256px
            }
        }

        .u-safe-y-160-160.extra-button-inherit {
            padding-bottom: 96px
        }

        @media (min-width:768px) {
            .u-safe-y-160-160.extra-button-inherit {
                padding-bottom: 160px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-160-160.extra-button-inherit {
                padding-bottom: 160px
            }
        }

        .u-safe-y-120-120 {
            padding-top: 64px;
            padding-bottom: 64px
        }

        @media (min-width:768px) {
            .u-safe-y-120-120 {
                padding-top: 80px;
                padding-bottom: 80px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-120-120 {
                padding-top: 120px;
                padding-bottom: 120px
            }
        }

        .u-safe-y-120-120.extra-button {
            padding-bottom: 104px
        }

        @media (min-width:768px) {
            .u-safe-y-120-120.extra-button {
                padding-bottom: 144px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-120-120.extra-button {
                padding-bottom: 216px
            }
        }

        .u-safe-y-120-120.extra-button-inherit {
            padding-bottom: 64px
        }

        @media (min-width:768px) {
            .u-safe-y-120-120.extra-button-inherit {
                padding-bottom: 80px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-120-120.extra-button-inherit {
                padding-bottom: 120px
            }
        }

        @media (min-width:992px) {
            .u-safe-y-120-120--lg-top {
                padding-bottom: 216px !important;
                padding-top: 120px
            }
        }

        .u-safe-y-100-100 {
            padding-top: 48px;
            padding-bottom: 48px
        }

        @media (min-width:768px) {
            .u-safe-y-100-100 {
                padding-top: 80px;
                padding-bottom: 80px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-100-100 {
                padding-top: 100px;
                padding-bottom: 100px
            }
        }

        .u-safe-y-100-100.extra-button {
            padding-bottom: 88px
        }

        @media (min-width:768px) {
            .u-safe-y-100-100.extra-button {
                padding-bottom: 144px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-100-100.extra-button {
                padding-bottom: 196px
            }
        }

        .u-safe-y-100-100.extra-button-inherit {
            padding-bottom: 48px
        }

        @media (min-width:768px) {
            .u-safe-y-100-100.extra-button-inherit {
                padding-bottom: 80px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-100-100.extra-button-inherit {
                padding-bottom: 100px
            }
        }

        .u-safe-y-120-100 {
            padding-bottom: 32px;
            padding-top: 64px
        }

        @media (min-width:768px) {
            .u-safe-y-120-100 {
                padding-bottom: 56px;
                padding-top: 80px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-120-100 {
                padding-bottom: 100px;
                padding-top: 120px
            }
        }

        .u-safe-y-120-100.extra-button {
            padding-bottom: 72px
        }

        @media (min-width:768px) {
            .u-safe-y-120-100.extra-button {
                padding-bottom: 144px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-120-100.extra-button {
                padding-bottom: 196px
            }
        }

        .u-safe-y-120-100.extra-button-inherit {
            padding-bottom: 48px
        }

        @media (min-width:768px) {
            .u-safe-y-120-100.extra-button-inherit {
                padding-bottom: 80px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-120-100.extra-button-inherit {
                padding-bottom: 100px
            }
        }

        .u-safe-y-120-80 {
            padding-bottom: 40px;
            padding-top: 64px
        }

        @media (min-width:768px) {
            .u-safe-y-120-80 {
                padding-bottom: 64px;
                padding-top: 80px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-120-80 {
                padding-bottom: 80px;
                padding-top: 120px
            }
        }

        .u-safe-y-120-80.extra-button {
            padding-bottom: 80px
        }

        @media (min-width:768px) {
            .u-safe-y-120-80.extra-button {
                padding-bottom: 128px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-120-80.extra-button {
                padding-bottom: 176px
            }
        }

        .u-safe-y-120-80.extra-button-inherit,
        .u-safe-y-84-84 {
            padding-bottom: 40px
        }

        @media (min-width:768px) {
            .u-safe-y-120-80.extra-button-inherit {
                padding-bottom: 64px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-120-80.extra-button-inherit {
                padding-bottom: 80px
            }
        }

        .u-safe-y-84-84 {
            padding-top: 40px
        }

        @media (min-width:768px) {
            .u-safe-y-84-84 {
                padding-top: 64px;
                padding-bottom: 64px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-84-84 {
                padding-top: 84px;
                padding-bottom: 84px
            }
        }

        .u-safe-y-84-84.extra-button {
            padding-bottom: 80px
        }

        @media (min-width:768px) {
            .u-safe-y-84-84.extra-button {
                padding-bottom: 128px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-84-84.extra-button {
                padding-bottom: 180px
            }
        }

        .u-safe-y-80-80,
        .u-safe-y-84-84.extra-button-inherit {
            padding-bottom: 40px
        }

        @media (min-width:768px) {
            .u-safe-y-84-84.extra-button-inherit {
                padding-bottom: 64px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-84-84.extra-button-inherit {
                padding-bottom: 84px
            }
        }

        .u-safe-y-80-80 {
            padding-top: 40px
        }

        @media (min-width:768px) {
            .u-safe-y-80-80 {
                padding-top: 64px;
                padding-bottom: 64px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-80-80 {
                padding-top: 80px;
                padding-bottom: 80px
            }
        }

        .u-safe-y-80-80.extra-button {
            padding-bottom: 80px
        }

        @media (min-width:768px) {
            .u-safe-y-80-80.extra-button {
                padding-bottom: 128px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-80-80.extra-button {
                padding-bottom: 176px
            }
        }

        .u-safe-extra-bottom,
        .u-safe-y-80-80.extra-button-inherit {
            padding-bottom: 40px
        }

        @media (min-width:768px) {
            .u-safe-y-80-80.extra-button-inherit {
                padding-bottom: 64px
            }
        }

        @media (min-width:1200px) {
            .u-safe-y-80-80.extra-button-inherit {
                padding-bottom: 80px
            }
        }

        @media (min-width:768px) {
            .u-safe-extra-bottom {
                padding-bottom: 64px
            }
        }

        @media (min-width:1200px) {
            .u-safe-extra-bottom {
                padding-bottom: 96px
            }
        }

        .u-special-padding-container {
            padding-left: 20px
        }

        @media (min-width:768px) {
            .u-special-padding-container {
                padding-left: calc((100vw - 688px)/ 2)
            }
        }

        @media (min-width:992px) {
            .u-special-padding-container {
                padding-left: calc((100vw - 864px)/ 2)
            }
        }

        @media (min-width:1200px) {
            .u-special-padding-container {
                padding-left: calc((100vw - 1140px)/ 2)
            }
        }

        @media (min-width:1600px) {
            .u-special-padding-container {
                padding-left: calc((100vw - 1350px)/ 2)
            }
        }

        .text-squishy {
            word-break: break-word;
            word-wrap: break-word;
            overflow-wrap: anywhere;
            -webkit-hyphens: auto;
            hyphens: auto
        }

        .u-wysiwyg-content {
            font-family: MaisonNeue-Book;
            line-height: 1.5
        }

        .u-wysiwyg-content h1,
        .u-wysiwyg-content h2,
        .u-wysiwyg-content h3,
        .u-wysiwyg-content h4,
        .u-wysiwyg-content h5,
        .u-wysiwyg-content h6 {
            font-family: MaisonNeue-Bold;
            margin-bottom: 12px
        }

        @media (min-width:1200px) {

            .u-wysiwyg-content h1,
            .u-wysiwyg-content h2,
            .u-wysiwyg-content h3,
            .u-wysiwyg-content h4,
            .u-wysiwyg-content h5,
            .u-wysiwyg-content h6 {
                margin-bottom: 16px
            }
        }

        .u-wysiwyg-content .h1,
        .u-wysiwyg-content h1 {
            font-size: 40px
        }

        .u-wysiwyg-content .h2,
        .u-wysiwyg-content h2 {
            font-size: 32px
        }

        .u-wysiwyg-content .h3,
        .u-wysiwyg-content h3 {
            font-size: 28px
        }

        .u-wysiwyg-content .h4,
        .u-wysiwyg-content h4 {
            font-size: 24px
        }

        .u-wysiwyg-content .h5,
        .u-wysiwyg-content h5 {
            font-size: 20px
        }

        .btn,
        .u-wysiwyg-content .h6,
        .u-wysiwyg-content h6 {
            font-size: 16px
        }

        .u-wysiwyg-content ol,
        .u-wysiwyg-content ul {
            list-style-position: outside;
            margin-bottom: 1.75rem;
            padding-left: 16px
        }

        .u-wysiwyg-content ul {
            list-style-type: disc
        }

        .u-wysiwyg-content ol {
            list-style-type: decimal
        }

        .btn {
            display: inline-block;
            font-family: MaisonNeue-Demi;
            font-weight: 500;
            line-height: 24px;
            position: relative;
            transition-property: background-color, border-color, color, fill, stroke;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .3s;
            min-width: 44px
        }

        .btn-solid {
            border-radius: 24px;
            height: 44px;
            line-height: 44px;
            padding-left: 24px;
            padding-right: 24px
        }

        .btn-solid--light,
        .btn-solid--primary {
            --tw-bg-opacity: 1;
            background-color: rgba(0, 136, 13, var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity))
        }

        .btn-solid--primary:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(26, 148, 37, var(--tw-bg-opacity))
        }

        .btn-solid--primary:active {
            --tw-bg-opacity: 1;
            background-color: rgba(0, 122, 11, var(--tw-bg-opacity))
        }

        .btn-solid--light {
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            color: rgba(16, 24, 32, var(--tw-text-opacity))
        }

        .btn-solid--light:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(240, 240, 240, var(--tw-bg-opacity))
        }

        .btn-solid--light:active {
            --tw-bg-opacity: 1;
            background-color: rgba(230, 230, 230, var(--tw-bg-opacity))
        }

        .btn-nude {
            display: inline-block
        }

        .btn-nude:hover .pi {
            --tw-translate-x: 4px
        }

        .btn-nude--primary {
            --tw-text-opacity: 1;
            color: rgba(0, 136, 13, var(--tw-text-opacity))
        }

        .btn-nude--primary-on-dark {
            color: #009c11
        }

        .btn-nude--primary-on-dark:hover,
        .btn-nude--primary:hover {
            --tw-text-opacity: 1;
            color: rgba(26, 148, 37, var(--tw-text-opacity))
        }

        .btn-nude--primary-on-dark:active,
        .btn-nude--primary:active {
            --tw-text-opacity: 1;
            color: rgba(0, 122, 11, var(--tw-text-opacity))
        }

        .btn-nude--dark,
        .btn-nude--light {
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity))
        }

        .btn-nude--dark {
            color: rgba(16, 24, 32, var(--tw-text-opacity))
        }

        .btn .pi,
        .btn-play {
            transition-property: transform;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1)
        }

        .btn .pi {
            display: inline-block;
            font-size: 16px;
            margin-left: 8px;
            vertical-align: middle;
            transition-duration: .2s
        }

        .btn-play {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            transition-duration: .3s
        }

        .o-burger__item {
            height: 2px
        }

        .o-burger__item--middle {
            top: 7px
        }

        .o-burger.active .o-burger__item--top {
            --tw-rotate: 45deg;
            top: 50%
        }

        .o-burger.active .o-burger__item--middle {
            opacity: 0
        }

        .o-burger.active .o-burger__item--bottom {
            --tw-rotate: -45deg;
            top: 50%
        }

        .tns-nav {
            text-align: center
        }

        .tns-nav>button {
            width: 8px;
            height: 8px;
            margin-right: 4px;
            background-color: #bbb
        }

        .c-header__menu li:last-child,
        .tns-nav>button:last-child {
            margin-right: 0
        }

        .tns-nav .tns-nav-active {
            background-color: #00aa13
        }

        .tns-outer {
            position: relative
        }

        .tns-outer:hover .tns-controls button {
            opacity: 1;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-translate-x: 0
        }

        .tns-outer:hover .tns-controls button:disabled,
        .tns-outer:hover .tns-controls button[disabled] {
            opacity: .5
        }

        .tns-controls button {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 44px;
            font-size: 20px;
            opacity: 0;
            position: absolute;
            top: 50%;
            --tw-text-opacity: 1;
            color: rgba(16, 24, 32, var(--tw-text-opacity));
            width: 44px;
            z-index: 10;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            --tw-scale-x: 1.25;
            --tw-scale-y: 1.25;
            --tw-translate-y: -50%;
            transition-property: transform, opacity;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .3s;
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, .2)
        }

        .tns-controls button:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(240, 240, 240, var(--tw-bg-opacity))
        }

        .tns-controls button:active {
            --tw-bg-opacity: 1;
            background-color: rgba(230, 230, 230, var(--tw-bg-opacity))
        }

        .tns-controls button[data-controls=prev] {
            margin-left: 16px;
            left: 0;
            --tw-translate-x: -80px
        }

        .tns-controls button[data-controls=next] {
            margin-right: 16px;
            right: 0;
            --tw-translate-x: 80px
        }

        .tns-controls button:disabled,
        .tns-controls button[disabled] {
            opacity: .25;
            pointer-events: none
        }

        .tns-inner,
        .tns-outer,
        .tns-ovh {
            height: 100%
        }

        .tns-ovh {
            overflow: hidden
        }

        .tns-item {
            height: 100%
        }

        .tns-control-edge .tns-outer {
            position: static
        }

        .tns-control-edge:hover .tns-outer .tns-controls button {
            --tw-translate-x: 0
        }

        .tns-control-edge .tns-ovh {
            overflow: visible
        }

        @media (max-width:767.98px) {
            [data-sal].u-sal__disabled--mobile {
                opacity: 1;
                transform: none
            }
        }

        @media (min-width:768px) and (max-width:1199.98px) {
            [data-sal].u-sal__disabled--tablet {
                opacity: 1;
                transform: none
            }
        }

        @media (min-width:768px) and (max-width:991.98px) {
            [data-sal].u-sal__disabled--tablet-sm {
                opacity: 1;
                transform: none
            }
        }

        @media (min-width:992px) and (max-width:1199.98px) {
            [data-sal].u-sal__disabled--tablet-lg {
                opacity: 1;
                transform: none
            }
        }

        @media (min-width:1200px) {
            [data-sal].u-sal__disabled--desktop {
                opacity: 1;
                transform: none
            }
        }

        .o-underline {
            padding-bottom: 4px;
            position: relative
        }

        .o-underline:before {
            content: "";
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            position: absolute;
            bottom: 0;
            left: 0;
            height: 1px;
            width: 85%
        }

        .form-control {
            border-radius: 24px;
            font-family: MaisonNeue-Book;
            font-weight: 300;
            height: 44px;
            font-size: 16px;
            transition-property: background-color, border-color, color, fill, stroke;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .3s
        }

        .form__input-text {
            padding-left: 20px;
            padding-right: 20px
        }

        .form__input-text--light,
        .form__input-text--light:hover {
            --tw-bg-opacity: 1;
            --tw-border-opacity: 1;
            border-color: rgba(187, 187, 187, var(--tw-border-opacity));
            border-width: 1px
        }

        .form__input-text--light {
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgba(16, 24, 32, var(--tw-text-opacity))
        }

        .form__input-text--light:hover {
            background-color: rgba(240, 240, 240, var(--tw-bg-opacity))
        }

        .form__input-text--light:focus {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            --tw-border-opacity: 1;
            border-color: rgba(16, 24, 32, var(--tw-border-opacity));
            border-width: 1px;
            --tw-text-opacity: 1;
            color: rgba(16, 24, 32, var(--tw-text-opacity))
        }

        .form__input-text--light::-moz-placeholder {
            color: #727272
        }

        .form__input-text--light::placeholder {
            color: #727272
        }

        .form__select-wrapper {
            position: relative
        }

        .form__select-wrapper:after {
            font-weight: 400;
            height: 16px;
            line-height: 1;
            pointer-events: none;
            position: absolute;
            top: 50%;
            font-style: normal;
            text-transform: none;
            width: 16px;
            z-index: 10;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            --tw-translate-y: -50%;
            transition-property: transform;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .3s;
            font-family: primeicon !important;
            content: "\e93c";
            speak: none;
            font-variant: normal;
            right: 20px
        }

        .form__select-wrapper--light {
            --tw-text-opacity: 1;
            color: rgba(16, 24, 32, var(--tw-text-opacity))
        }

        .form__select-wrapper.active:after {
            --tw-rotate: 180deg
        }

        .form__select-option {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding-left: 20px;
            padding-right: 20px
        }

        @media (min-width:768px) {
            .form__select-option {
                line-height: 1.5
            }
        }

        .form__select-option--light {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            --tw-border-opacity: 1;
            border-color: rgba(187, 187, 187, var(--tw-border-opacity));
            border-width: 1px;
            --tw-text-opacity: 1;
            color: rgba(16, 24, 32, var(--tw-text-opacity))
        }

        .form__select-option--light:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(240, 240, 240, var(--tw-bg-opacity))
        }

        .form__select-option--light:focus {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            --tw-border-opacity: 1;
            border-color: rgba(16, 24, 32, var(--tw-border-opacity));
            border-width: 1px
        }

        .dropdown__toggle {
            border-radius: 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-family: MaisonNeue-Book;
            font-weight: 300;
            font-size: 16px;
            line-height: 20px;
            padding: 12px 20px;
            text-align: left
        }

        .dropdown__toggle--dark,
        .dropdown__toggle--light {
            --tw-bg-opacity: 1;
            background-color: rgba(16, 24, 32, var(--tw-bg-opacity));
            --tw-border-opacity: 1;
            border: 1px solid rgba(31, 45, 61, var(--tw-border-opacity));
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity))
        }

        .dropdown__toggle--dark:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(20, 31, 41, var(--tw-bg-opacity))
        }

        .dropdown__toggle--dark.dropdown__toggle--active {
            --tw-border-opacity: 1;
            border: 1px solid rgba(232, 232, 232, var(--tw-border-opacity))
        }

        .dropdown__toggle--light {
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            border: 1px solid rgba(187, 187, 187, var(--tw-border-opacity));
            color: rgba(16, 24, 32, var(--tw-text-opacity))
        }

        .dropdown__toggle--light:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(240, 240, 240, var(--tw-bg-opacity))
        }

        .dropdown__toggle--light.dropdown__toggle--active {
            --tw-border-opacity: 1;
            border: 1px solid rgba(16, 24, 32, var(--tw-border-opacity))
        }

        .dropdown__menu {
            text-align: left;
            z-index: 10;
            min-width: 240px;
            left: calc((100% - 200px)/ 2)
        }

        .dropdown__menu,
        .dropdown__menu--alternate {
            border-radius: 24px
        }

        @media (min-width:1200px) {
            .dropdown__menu--alternate {
                border-radius: 16px
            }
        }

        .dropdown__menu--dark,
        .dropdown__menu--dark-2,
        .dropdown__menu--light {
            background-color: rgba(24, 36, 48, var(--tw-bg-opacity));
            --tw-bg-opacity: 1;
            --tw-shadow: 0px 0px 10px 0px rgba(16, 24, 32, 0.1);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow);
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity))
        }

        .dropdown__menu--dark-2,
        .dropdown__menu--light {
            background-color: rgba(16, 24, 32, var(--tw-bg-opacity))
        }

        .dropdown__menu--light {
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            color: rgba(16, 24, 32, var(--tw-text-opacity))
        }

        .dropdown__menu--header {
            top: auto;
            right: auto;
            bottom: 65px
        }

        @media (max-width:767.98px) {
            .dropdown__menu--header:not(.dropdown__menu--language) {
                background-color: transparent
            }
        }

        @media (min-width:768px) and (max-width:1199.98px) {
            .dropdown__menu--header:not(.dropdown__menu--language) {
                background-color: transparent
            }
        }

        @media (min-width:1200px) {
            .dropdown__menu--header {
                right: -30%;
                top: 45px;
                bottom: auto;
                left: auto
            }
        }

        @media (max-width:767.98px) {
            .dropdown__menu--language:not(.dropdown__menu--header-base) {
                display: flex !important
            }
        }

        @media (min-width:768px) and (max-width:1199.98px) {
            .dropdown__menu--language {
                display: flex !important
            }
        }

        @media (max-width:767.98px) {
            .dropdown__menu--language.dropdown__menu--dark-2 {
                --tw-bg-opacity: 1;
                background-color: rgba(24, 36, 48, var(--tw-bg-opacity))
            }
        }

        @media (min-width:768px) and (max-width:1199.98px) {
            .dropdown__menu--language.dropdown__menu--dark-2 {
                --tw-bg-opacity: 1;
                background-color: rgba(24, 36, 48, var(--tw-bg-opacity))
            }
        }

        .dropdown__menu--footer {
            top: auto;
            right: auto;
            bottom: 50px
        }

        .dropdown__item.active a {
            --tw-bg-opacity: 1;
            background-color: rgba(13, 19, 26, var(--tw-bg-opacity))
        }

        @media (min-width:768px) and (max-width:1199.98px) {
            .dropdown__item.active a {
                --tw-bg-opacity: 1;
                background-color: rgba(16, 24, 32, var(--tw-bg-opacity))
            }
        }

        .dropdown__link {
            display: block;
            font-family: MaisonNeue-Book;
            font-weight: 300;
            font-size: 16px;
            line-height: 24px;
            transition-property: background-color, border-color, color, fill, stroke;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .3s;
            padding: 10px 24px
        }

        @media (max-width:767.98px) {
            .dropdown__link--header {
                border-radius: 16px;
                padding: 2px 24px
            }
        }

        @media (min-width:768px) and (max-width:1199.98px) {
            .dropdown__link--header {
                border-radius: 16px;
                padding: 2px 32px
            }
        }

        @media (min-width:1200px) {
            .dropdown__link--header {
                padding-left: 24px;
                padding-right: 24px
            }
        }

        @media (max-width:767.98px) {
            .dropdown__link--header-base {
                padding: 10px 24px;
                border-radius: 0
            }
        }

        .dropdown__link--dark:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(20, 31, 41, var(--tw-bg-opacity))
        }

        .dropdown__link--dark.active,
        .dropdown__link--dark:active {
            --tw-bg-opacity: 1;
            background-color: rgba(13, 19, 26, var(--tw-bg-opacity))
        }

        .dropdown__link--dark-2:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(20, 31, 41, var(--tw-bg-opacity))
        }

        .dropdown__link--dark-2.active,
        .dropdown__link--dark-2:active {
            --tw-bg-opacity: 1;
            background-color: rgba(13, 19, 26, var(--tw-bg-opacity))
        }

        .dropdown__link--light:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(240, 240, 240, var(--tw-bg-opacity))
        }

        .dropdown__link--light.active,
        .dropdown__link--light:active {
            --tw-bg-opacity: 1;
            background-color: rgba(230, 230, 230, var(--tw-bg-opacity))
        }

        @media (max-width:767.98px) {
            .dropdown__link--language {
                font-family: MaisonNeue-Demi
            }
        }

        @media (min-width:768px) and (max-width:1199.98px) {
            .dropdown__link--language {
                font-family: MaisonNeue-Demi
            }
        }

        .c-header {
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate3d(var(--tw-translate-x), var(--tw-translate-y), 0) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .c-header__menu {
            padding-bottom: 70px;
            top: 60px;
            min-height: 100vh;
            min-height: calc(var(--vh, 1vh)*100)
        }

        @media (min-width:768px) {
            .c-header__menu {
                padding-top: 50px;
                padding-bottom: 50px
            }
        }

        .c-header__menu .pi {
            top: 3px
        }

        @media (min-width:1200px) {
            .c-header__menu .pi {
                top: 0
            }
        }

        .c-header__menu.active {
            top: 62px;
            margin-top: -1px;
            --tw-bg-opacity: 1;
            background-color: rgba(16, 24, 32, var(--tw-bg-opacity));
            opacity: 1;
            text-align: left;
            --tw-translate-y: 0 !important;
            visibility: visible !important;
            pointer-events: auto !important
        }

        @media (min-width:640px) {
            .c-header__menu.active {
                top: 70px
            }
        }

        @media (min-width:992px) {
            .c-header__menu.active {
                top: 94px
            }
        }

        .c-header__logo-solv {
            --tw-text-opacity: 1;
            color: rgba(0, 170, 19, var(--tw-text-opacity))
        }

        .c-header__logo-text {
            --tw-text-opacity: 1;
            color: rgba(16, 24, 32, var(--tw-text-opacity))
        }

        .c-header__language {
            bottom: 114px
        }

        @media (min-width:640px) {
            .c-header__language {
                bottom: 118px
            }
        }

        @media (min-width:992px) {
            .c-header__language {
                bottom: 162px
            }
        }

        @media (max-width:767.98px) {
            .c-header__language--static {
                position: static
            }
        }

        @media (min-width:768px) and (max-width:991.98px) {
            .c-header__language--static {
                position: static
            }
        }

        .c-header--active,
        .c-header--active .c-header__logo-solv,
        .c-header--active .c-header__logo-text,
        .c-header--dark,
        .c-header--dark .c-header__logo-solv,
        .c-header--dark .c-header__logo-text,
        .c-header--show,
        .c-header--show .c-header__logo-solv,
        .c-header--show .c-header__logo-text {
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity))
        }

        .c-header--active .o-burger__item,
        .c-header--active .u-animation-underline:before,
        .c-header--dark .o-burger__item,
        .c-header--dark .u-animation-underline:before,
        .c-header--show .o-burger__item,
        .c-header--show .u-animation-underline:before {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity))
        }

        .c-header--top {
            background-color: transparent
        }

        @media (min-width:992px) {
            .c-header--scrolled {
                padding-top: 32px;
                padding-bottom: 32px
            }
        }

        .c-header--hide {
            opacity: 0;
            --tw-translate-y: -100px
        }

        .c-header--active,
        .c-header--show {
            opacity: 1;
            --tw-translate-y: 0;
            --tw-bg-opacity: 1;
            background-color: rgba(16, 24, 32, var(--tw-bg-opacity))
        }

        @media (max-width:767.98px) {
            .c-header--active {
                height: 120vh;
                height: calc(var(--vh, 1vh)*120);
                overflow: hidden
            }
        }

        @media (min-width:768px) and (max-width:1199.98px) {
            .c-header--active {
                height: 120vh;
                height: calc(var(--vh, 1vh)*120);
                overflow: hidden
            }
        }

        .c-header-dropdown__item {
            display: block
        }

        .c-header-dropdown__item:before {
            content: "";
            --tw-bg-opacity: 1;
            background-color: rgba(22, 34, 46, var(--tw-bg-opacity));
            border-radius: 32px;
            height: 75%;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: -1
        }

        .c-header-dropdown__item:last-child {
            margin-bottom: 0
        }

        @media (min-width:640px) {
            .c-header-dropdown__item {
                max-width: 320px;
                margin-right: 24px;
                margin-left: 24px
            }
        }

        @media (min-width:768px) {
            .c-header-dropdown__item:nth-child(odd) {
                margin-left: 0
            }

            .c-header-dropdown__item:nth-child(2n) {
                margin-right: 0
            }
        }

        @media (min-width:1200px) {
            .c-header-dropdown__item {
                max-width: 492px;
                margin-left: 57.5px;
                margin-right: 57.5px
            }

            .c-header-dropdown__item:before {
                display: none
            }

            .c-header-dropdown__image {
                width: 198px
            }
        }

        @media (max-width:767.98px) {
            .c-header .u-animation-underline:hover:before {
                opacity: 0
            }
        }

        @media (min-width:768px) and (max-width:1199.98px) {
            .c-header .u-animation-underline:hover:before {
                opacity: 0
            }
        }

        .c-hero-intro__background-overlay {
            background: linear-gradient(-180deg, rgba(0, 0, 0, .34), rgba(0, 0, 0, .15) 66%, rgba(0, 0, 0, .57))
        }

        @media (min-width:768px) {
            .c-hero-intro__background-overlay {
                background: linear-gradient(-135deg, transparent, transparent 41%, #000)
            }
        }

        .c-hero-form__form-container {
            width: 100%
        }

        @media (min-width:768px) {
            .c-hero-form__form-container {
                width: 444px
            }
        }

        .c-hero-form__spot-illustration {
            height: auto;
            margin-left: auto;
            position: relative;
            right: 0;
            bottom: 0;
            width: 65%
        }

        .c-hero-form__spot-illustration img {
            height: 100%;
            width: 100%
        }

        @media (min-width:768px) {
            .c-hero-form__spot-illustration {
                width: 60%;
                height: auto;
                right: 0;
                bottom: 0
            }
        }

        @media (min-width:1200px) {
            .c-hero-form__spot-illustration {
                width: 43%;
                right: 8%;
                height: auto;
                bottom: 0
            }
        }

        .c-hero-image__content,
        .c-hero-image__image {
            height: 100vh
        }

        .c-hero-image__overlay--to-t {
            background: linear-gradient(0deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
        }

        .c-hero-image__overlay--to-r {
            background: linear-gradient(90deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
        }

        .c-hero-image__overlay--to-b {
            background: linear-gradient(180deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
        }

        .c-hero-image__overlay--to-l {
            background: linear-gradient(270deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
        }

        [x-cloak] {
            display: none
        }

        @media (min-width:640px) {
            .sm\:rounded-r24 {
                border-radius: 24px
            }

            .sm\:rounded-r40 {
                border-radius: 40px
            }

            .sm\:rounded-t-r64 {
                border-top-left-radius: 64px;
                border-top-right-radius: 64px
            }

            .sm\:rounded-b-r64 {
                border-bottom-right-radius: 64px;
                border-bottom-left-radius: 64px
            }

            .sm\:block {
                display: block
            }

            .sm\:flex {
                display: flex
            }

            .sm\:grid {
                display: grid
            }

            .sm\:hidden {
                display: none
            }

            .sm\:flex-row {
                flex-direction: row
            }

            .sm\:flex-row-reverse {
                flex-direction: row-reverse
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:flex-shrink-0 {
                flex-shrink: 0
            }

            .sm\:order-1 {
                order: 1
            }

            .sm\:order-2 {
                order: 2
            }

            .sm\:font-maisonBold {
                font-family: MaisonNeue-Bold
            }

            .sm\:font-maisonExtendedBold {
                font-family: MaisonNeueExtended-Bold
            }

            .sm\:font-bold {
                font-weight: 700
            }

            .sm\:h-full {
                height: 100%
            }

            .sm\:text-size_8x {
                font-size: 16px
            }

            .sm\:text-size_9x {
                font-size: 18px
            }

            .sm\:text-size_12x {
                font-size: 24px
            }

            .sm\:text-size_13x {
                font-size: 26px
            }

            .sm\:leading-height_21x {
                line-height: 21px
            }

            .sm\:leading-height_24x {
                line-height: 24px
            }

            .sm\:leading-height_27x {
                line-height: 27px
            }

            .sm\:leading-height_32x {
                line-height: 32px
            }

            .sm\:leading-height_36x {
                line-height: 36px
            }

            .sm\:mt-0 {
                margin-top: 0
            }

            .sm\:mr-0 {
                margin-right: 0
            }

            .sm\:mb-0 {
                margin-bottom: 0
            }

            .sm\:mb-2 {
                margin-bottom: 8px
            }

            .sm\:mb-3 {
                margin-bottom: 12px
            }

            .sm\:mt-4 {
                margin-top: 16px
            }

            .sm\:mb-4 {
                margin-bottom: 16px
            }

            .sm\:mr-5 {
                margin-right: 20px
            }

            .sm\:mb-5 {
                margin-bottom: 20px
            }

            .sm\:mr-6 {
                margin-right: 24px
            }

            .sm\:mb-6 {
                margin-bottom: 24px
            }

            .sm\:mt-8 {
                margin-top: 32px
            }

            .sm\:mr-8 {
                margin-right: 32px
            }

            .sm\:mb-8 {
                margin-bottom: 32px
            }

            .sm\:mt-9 {
                margin-top: 36px
            }

            .sm\:mb-9 {
                margin-bottom: 36px
            }

            .sm\:mr-10 {
                margin-right: 40px
            }

            .sm\:mb-13 {
                margin-bottom: 3.5rem
            }

            .sm\:-mt-16 {
                margin-top: -64px
            }

            .sm\:-ml-21 {
                margin-left: -84px
            }

            .sm\:-mt-22 {
                margin-top: -88px
            }

            .sm\:max-h-screen {
                max-height: 100vh
            }

            .sm\:min-h-0 {
                min-height: 0
            }

            .sm\:p-10 {
                padding: 40px
            }

            .sm\:p-12 {
                padding: 48px
            }

            .sm\:py-0 {
                padding-top: 0;
                padding-bottom: 0
            }

            .sm\:px-0 {
                padding-left: 0;
                padding-right: 0
            }

            .sm\:py-5 {
                padding-top: 20px;
                padding-bottom: 20px
            }

            .sm\:pb-4 {
                padding-bottom: 16px
            }

            .sm\:pt-5 {
                padding-top: 20px
            }

            .sm\:pb-5 {
                padding-bottom: 20px
            }

            .sm\:pt-9 {
                padding-top: 36px
            }

            .sm\:pl-11 {
                padding-left: 44px
            }

            .sm\:static {
                position: static
            }

            .sm\:absolute {
                position: absolute
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:w-auto {
                width: auto
            }

            .sm\:gap-5 {
                gap: 20px
            }

            .sm\:gap-8 {
                gap: 32px
            }

            .sm\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .sm\:u-ratio {
                padding: 0;
                position: relative;
                width: 100%
            }

            .sm\:u-ratio:before {
                display: block;
                content: ""
            }

            .sm\:u-ratio__item {
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%
            }

            .sm\:u-ratio--1by1:before {
                padding-top: 100%
            }

            .sm\:u-ratio--4by3:before {
                padding-top: 75%
            }

            .sm\:u-ratio--16by9:before {
                padding-top: 56.25%
            }

            .sm\:text-squishy {
                word-break: break-word;
                word-wrap: break-word;
                overflow-wrap: anywhere;
                -webkit-hyphens: auto;
                hyphens: auto
            }

            .sm\:c-hero-image__overlay--to-t {
                background: linear-gradient(0deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .sm\:c-hero-image__overlay--to-r {
                background: linear-gradient(90deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .sm\:c-hero-image__overlay--to-b {
                background: linear-gradient(180deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .sm\:c-hero-image__overlay--to-l {
                background: linear-gradient(270deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }
        }

        @media (min-width:768px) {
            .md\:space-y-0>:not([hidden])~:not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(0px*(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(0px*var(--tw-space-y-reverse))
            }

            .md\:space-y-5>:not([hidden])~:not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(20px*(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(20px*var(--tw-space-y-reverse))
            }

            .md\:space-y-6>:not([hidden])~:not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(24px*(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(24px*var(--tw-space-y-reverse))
            }

            .md\:space-x-6>:not([hidden])~:not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(24px*var(--tw-space-x-reverse));
                margin-left: calc(24px*(1 - var(--tw-space-x-reverse)))
            }

            .md\:space-x-8>:not([hidden])~:not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(32px*var(--tw-space-x-reverse));
                margin-left: calc(32px*(1 - var(--tw-space-x-reverse)))
            }

            .md\:space-x-12>:not([hidden])~:not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(48px*var(--tw-space-x-reverse));
                margin-left: calc(48px*(1 - var(--tw-space-x-reverse)))
            }

            .md\:bg-transparent,
            .md\:hover\:bg-transparent:hover {
                background-color: transparent
            }

            .md\:rounded-none {
                border-radius: 0
            }

            .md\:rounded-r48 {
                border-radius: 48px
            }

            .md\:rounded-t-r64 {
                border-top-left-radius: 64px;
                border-top-right-radius: 64px
            }

            .md\:block {
                display: block
            }

            .md\:flex {
                display: flex
            }

            .md\:grid {
                display: grid
            }

            .md\:hidden {
                display: none
            }

            .md\:flex-row {
                flex-direction: row
            }

            .md\:flex-col {
                flex-direction: column
            }

            .md\:justify-start {
                justify-content: flex-start
            }

            .md\:justify-center {
                justify-content: center
            }

            .md\:justify-between {
                justify-content: space-between
            }

            .md\:font-maisonBold {
                font-family: MaisonNeue-Bold
            }

            .md\:font-maisonExtendedBold {
                font-family: MaisonNeueExtended-Bold
            }

            .md\:font-maisonExtendedExtraBold {
                font-family: MaisonNeueExtended-ExtraBold
            }

            .md\:font-medium {
                font-weight: 500
            }

            .md\:font-bold {
                font-weight: 700
            }

            .md\:font-extrabold {
                font-weight: 800
            }

            .md\:h-6 {
                height: 24px
            }

            .md\:h-8 {
                height: 32px
            }

            .md\:h-10 {
                height: 40px
            }

            .md\:h-24 {
                height: 96px
            }

            .md\:h-30 {
                height: 120px
            }

            .md\:h-auto {
                height: auto
            }

            .md\:h-full {
                height: 100%
            }

            .md\:h-60p {
                height: 60%
            }

            .md\:text-size_7x {
                font-size: 14px
            }

            .md\:text-size_8x {
                font-size: 16px
            }

            .md\:text-size_9x {
                font-size: 18px
            }

            .md\:text-size_12x {
                font-size: 24px
            }

            .md\:text-size_13x {
                font-size: 26px
            }

            .md\:text-size_14x {
                font-size: 28px
            }

            .md\:text-size_18x {
                font-size: 36px
            }

            .md\:text-size_24x {
                font-size: 48px
            }

            .md\:text-size_40x {
                font-size: 80px
            }

            .md\:leading-snug {
                line-height: 1.375
            }

            .md\:leading-height_21x {
                line-height: 21px
            }

            .md\:leading-height_24x {
                line-height: 24px
            }

            .md\:leading-height_27x {
                line-height: 27px
            }

            .md\:leading-height_32x {
                line-height: 32px
            }

            .md\:leading-height_36x {
                line-height: 36px
            }

            .md\:leading-height_39x {
                line-height: 39px
            }

            .md\:leading-height_40x {
                line-height: 40px
            }

            .md\:leading-height_48x {
                line-height: 48px
            }

            .md\:leading-height_52x {
                line-height: 52px
            }

            .md\:leading-height_54x {
                line-height: 54px
            }

            .md\:leading-height_64x {
                line-height: 64px
            }

            .md\:m-0 {
                margin: 0
            }

            .md\:mx-auto {
                margin-left: auto;
                margin-right: auto
            }

            .md\:mt-0 {
                margin-top: 0
            }

            .md\:mr-0 {
                margin-right: 0
            }

            .md\:mb-0 {
                margin-bottom: 0
            }

            .md\:ml-0 {
                margin-left: 0
            }

            .md\:mb-1 {
                margin-bottom: 4px
            }

            .md\:mb-2 {
                margin-bottom: 8px
            }

            .md\:mb-3 {
                margin-bottom: 12px
            }

            .md\:ml-3 {
                margin-left: 12px
            }

            .md\:mt-4 {
                margin-top: 16px
            }

            .md\:mb-4 {
                margin-bottom: 16px
            }

            .md\:mt-5 {
                margin-top: 20px
            }

            .md\:mb-5 {
                margin-bottom: 20px
            }

            .md\:mr-6 {
                margin-right: 24px
            }

            .md\:mb-6 {
                margin-bottom: 24px
            }

            .md\:mt-7 {
                margin-top: 1.75rem
            }

            .md\:mb-7 {
                margin-bottom: 1.75rem
            }

            .md\:mt-8 {
                margin-top: 32px
            }

            .md\:mr-8 {
                margin-right: 32px
            }

            .md\:mb-8 {
                margin-bottom: 32px
            }

            .md\:mt-10 {
                margin-top: 40px
            }

            .md\:mb-10 {
                margin-bottom: 40px
            }

            .md\:mb-11 {
                margin-bottom: 44px
            }

            .md\:mt-12 {
                margin-top: 48px
            }

            .md\:mr-12 {
                margin-right: 48px
            }

            .md\:mb-12 {
                margin-bottom: 48px
            }

            .md\:mb-16 {
                margin-bottom: 64px
            }

            .md\:mt-20 {
                margin-top: 80px
            }

            .md\:mb-20 {
                margin-bottom: 80px
            }

            .md\:mb-21 {
                margin-bottom: 84px
            }

            .md\:mb-23 {
                margin-bottom: 92px
            }

            .md\:mb-30 {
                margin-bottom: 120px
            }

            .md\:mt-40 {
                margin-top: 160px
            }

            .md\:-mt-16 {
                margin-top: -64px
            }

            .md\:-mt-23 {
                margin-top: -92px
            }

            .md\:-mt-40 {
                margin-top: -160px
            }

            .md\:min-h-screen {
                min-height: 100vh
            }

            .md\:min-h-screen_5\/4x {
                min-height: 125vh
            }

            .md\:min-h-screen_3\/2x {
                min-height: 150vh
            }

            .md\:overflow-visible {
                overflow: visible
            }

            .md\:p-0 {
                padding: 0
            }

            .md\:p-2 {
                padding: 8px
            }

            .md\:p-6 {
                padding: 24px
            }

            .md\:p-8 {
                padding: 32px
            }

            .md\:p-10 {
                padding: 40px
            }

            .md\:p-16 {
                padding: 64px
            }

            .md\:p-6px {
                padding: 6px
            }

            .md\:px-0 {
                padding-left: 0;
                padding-right: 0
            }

            .md\:px-10 {
                padding-left: 40px;
                padding-right: 40px
            }

            .md\:py-16 {
                padding-top: 64px;
                padding-bottom: 64px
            }

            .md\:px-18 {
                padding-left: 4.5rem;
                padding-right: 4.5rem
            }

            .md\:py-20 {
                padding-top: 80px;
                padding-bottom: 80px
            }

            .md\:pt-0 {
                padding-top: 0
            }

            .md\:pb-0 {
                padding-bottom: 0
            }

            .md\:pt-5 {
                padding-top: 20px
            }

            .md\:pl-6 {
                padding-left: 24px
            }

            .md\:pr-8 {
                padding-right: 32px
            }

            .md\:pb-12 {
                padding-bottom: 48px
            }

            .md\:pb-14 {
                padding-bottom: 56px
            }

            .md\:pt-16 {
                padding-top: 64px
            }

            .md\:pb-16 {
                padding-bottom: 64px
            }

            .md\:pt-20 {
                padding-top: 80px
            }

            .md\:pb-20 {
                padding-bottom: 80px
            }

            .md\:pb-30 {
                padding-bottom: 120px
            }

            .md\:absolute {
                position: absolute
            }

            .md\:sticky {
                position: sticky
            }

            .md\:top-0 {
                top: 0
            }

            .md\:text-left {
                text-align: left
            }

            .md\:text-center {
                text-align: center
            }

            .md\:text-white {
                --tw-text-opacity: 1;
                color: rgba(255, 255, 255, var(--tw-text-opacity))
            }

            .md\:tracking-normal {
                letter-spacing: 0
            }

            .md\:tracking-title {
                letter-spacing: .8px
            }

            .md\:w-24 {
                width: 96px
            }

            .md\:w-auto {
                width: auto
            }

            .md\:w-1\/2 {
                width: 50%
            }

            .md\:w-1\/4 {
                width: 25%
            }

            .md\:w-3\/4 {
                width: 75%
            }

            .md\:w-2\/6 {
                width: 33.333333%
            }

            .md\:w-4\/6 {
                width: 66.666667%
            }

            .md\:w-7\/12 {
                width: 58.333333%
            }

            .md\:w-full {
                width: 100%
            }

            .md\:gap-6 {
                gap: 24px
            }

            .md\:gap-x-6 {
                -moz-column-gap: 24px;
                column-gap: 24px
            }

            .md\:gap-x-8 {
                -moz-column-gap: 32px;
                column-gap: 32px
            }

            .md\:gap-x-21 {
                -moz-column-gap: 84px;
                column-gap: 84px
            }

            .md\:gap-x-25 {
                -moz-column-gap: 100px;
                column-gap: 100px
            }

            .md\:gap-y-5 {
                row-gap: 20px
            }

            .md\:gap-y-9 {
                row-gap: 36px
            }

            .md\:gap-y-10 {
                row-gap: 40px
            }

            .md\:gap-y-12 {
                row-gap: 48px
            }

            .md\:gap-y-16 {
                row-gap: 64px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .md\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .md\:transform {
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .md\:scale-200 {
                --tw-scale-x: 2;
                --tw-scale-y: 2
            }

            .md\:translate-y-0 {
                --tw-translate-y: 0
            }

            .md\:transition-height-margin {
                transition-property: height, margin;
                transition-timing-function: cubic-bezier(.4, 0, .2, 1);
                transition-duration: .15s
            }

            .md\:ease-in {
                transition-timing-function: cubic-bezier(.4, 0, 1, 1)
            }

            .md\:duration-200 {
                transition-duration: .2s
            }

            .md\:container {
                max-width: 100%;
                padding: 0 1.25rem
            }

            @media (min-width:640px) {
                .md\:container {
                    max-width: 100%;
                    padding: 0 1.25rem
                }
            }

            @media (min-width:768px) {
                .md\:container {
                    max-width: 688px;
                    padding: 0
                }
            }

            @media (min-width:992px) {
                .md\:container {
                    max-width: 864px;
                    padding: 0
                }
            }

            @media (min-width:1200px) {
                .md\:container {
                    max-width: 1140px;
                    padding: 0
                }
            }

            @media (min-width:1600px) {
                .md\:container {
                    max-width: 1350px;
                    padding: 0
                }
            }

            .md\:u-ratio {
                padding: 0;
                position: relative;
                width: 100%
            }

            .md\:u-ratio:before {
                display: block;
                content: ""
            }

            .md\:u-ratio__item {
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%
            }

            .md\:u-ratio--1by1:before {
                padding-top: 100%
            }

            .md\:u-ratio--4by3:before {
                padding-top: 75%
            }

            .md\:u-ratio--16by9:before {
                padding-top: 56.25%
            }

            .md\:text-squishy {
                word-break: break-word;
                word-wrap: break-word;
                overflow-wrap: anywhere;
                -webkit-hyphens: auto;
                hyphens: auto
            }

            .md\:c-hero-image__overlay--to-t {
                background: linear-gradient(0deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .md\:c-hero-image__overlay--to-r {
                background: linear-gradient(90deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .md\:c-hero-image__overlay--to-b {
                background: linear-gradient(180deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .md\:c-hero-image__overlay--to-l {
                background: linear-gradient(270deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }
        }

        @media (min-width:992px) {
            .lg\:space-y-4>:not([hidden])~:not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(16px*(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(16px*var(--tw-space-y-reverse))
            }

            .lg\:space-x-10>:not([hidden])~:not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(40px*var(--tw-space-x-reverse));
                margin-left: calc(40px*(1 - var(--tw-space-x-reverse)))
            }

            .lg\:rounded-r24 {
                border-radius: 24px
            }

            .lg\:rounded-r40 {
                border-radius: 40px
            }

            .lg\:rounded-t-r96 {
                border-top-left-radius: 96px;
                border-top-right-radius: 96px
            }

            .lg\:rounded-b-r96 {
                border-bottom-right-radius: 96px;
                border-bottom-left-radius: 96px
            }

            .lg\:block {
                display: block
            }

            .lg\:flex {
                display: flex
            }

            .lg\:grid {
                display: grid
            }

            .lg\:hidden {
                display: none
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:flex-nowrap {
                flex-wrap: nowrap
            }

            .lg\:items-start {
                align-items: flex-start
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:items-center {
                align-items: center
            }

            .lg\:justify-start {
                justify-content: flex-start
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:justify-between {
                justify-content: space-between
            }

            .lg\:flex-grow {
                flex-grow: 1
            }

            .lg\:font-maisonBold {
                font-family: MaisonNeue-Bold
            }

            .lg\:font-maisonExtendedExtraBold {
                font-family: MaisonNeueExtended-ExtraBold
            }

            .lg\:font-bold {
                font-weight: 700
            }

            .lg\:font-extrabold {
                font-weight: 800
            }

            .lg\:h-8 {
                height: 32px
            }

            .lg\:h-10 {
                height: 40px
            }

            .lg\:h-20 {
                height: 80px
            }

            .lg\:h-30 {
                height: 120px
            }

            .lg\:h-auto {
                height: auto
            }

            .lg\:text-size_8x {
                font-size: 16px
            }

            .lg\:text-size_9x {
                font-size: 18px
            }

            .lg\:text-size_12x {
                font-size: 24px
            }

            .lg\:text-size_18x {
                font-size: 36px
            }

            .lg\:text-size_24x {
                font-size: 48px
            }

            .lg\:leading-snug {
                line-height: 1.375
            }

            .lg\:leading-height_18x {
                line-height: 18px
            }

            .lg\:leading-height_24x {
                line-height: 24px
            }

            .lg\:leading-height_27x {
                line-height: 27px
            }

            .lg\:leading-height_32x {
                line-height: 32px
            }

            .lg\:leading-height_39x {
                line-height: 39px
            }

            .lg\:leading-height_48x {
                line-height: 48px
            }

            .lg\:leading-height_52x {
                line-height: 52px
            }

            .lg\:leading-height_64x {
                line-height: 64px
            }

            .lg\:m-0 {
                margin: 0
            }

            .lg\:mx-auto {
                margin-left: auto;
                margin-right: auto
            }

            .lg\:mt-0 {
                margin-top: 0
            }

            .lg\:mr-0 {
                margin-right: 0
            }

            .lg\:mb-0 {
                margin-bottom: 0
            }

            .lg\:ml-0 {
                margin-left: 0
            }

            .lg\:mb-2 {
                margin-bottom: 8px
            }

            .lg\:mb-3 {
                margin-bottom: 12px
            }

            .lg\:mb-4 {
                margin-bottom: 16px
            }

            .lg\:mt-5 {
                margin-top: 20px
            }

            .lg\:mb-5 {
                margin-bottom: 20px
            }

            .lg\:mt-6 {
                margin-top: 24px
            }

            .lg\:mr-6 {
                margin-right: 24px
            }

            .lg\:mb-6 {
                margin-bottom: 24px
            }

            .lg\:mt-7 {
                margin-top: 1.75rem
            }

            .lg\:mb-8 {
                margin-bottom: 32px
            }

            .lg\:mb-10 {
                margin-bottom: 40px
            }

            .lg\:mt-12 {
                margin-top: 48px
            }

            .lg\:mb-12 {
                margin-bottom: 48px
            }

            .lg\:mb-16 {
                margin-bottom: 64px
            }

            .lg\:mb-28 {
                margin-bottom: 7rem
            }

            .lg\:mt-40 {
                margin-top: 160px
            }

            .lg\:mr-auto {
                margin-right: auto
            }

            .lg\:ml-auto {
                margin-left: auto
            }

            .lg\:-mt-6 {
                margin-top: -24px
            }

            .lg\:-mt-23 {
                margin-top: -92px
            }

            .lg\:-mt-24 {
                margin-top: -96px
            }

            .lg\:-mt-40 {
                margin-top: -160px
            }

            .lg\:-mb-10p {
                margin-bottom: -10%
            }

            .lg\:max-w-none {
                max-width: none
            }

            .lg\:max-w-screen-md {
                max-width: 768px
            }

            .lg\:min-h-screen {
                min-height: 100vh
            }

            .lg\:overflow-visible {
                overflow: visible
            }

            .lg\:p-10 {
                padding: 40px
            }

            .lg\:p-12 {
                padding: 48px
            }

            .lg\:px-0 {
                padding-left: 0;
                padding-right: 0
            }

            .lg\:py-10 {
                padding-top: 40px;
                padding-bottom: 40px
            }

            .lg\:py-20 {
                padding-top: 80px;
                padding-bottom: 80px
            }

            .lg\:px-21 {
                padding-left: 84px;
                padding-right: 84px
            }

            .lg\:pt-0 {
                padding-top: 0
            }

            .lg\:pb-5 {
                padding-bottom: 20px
            }

            .lg\:pl-12 {
                padding-left: 48px
            }

            .lg\:pl-20 {
                padding-left: 80px
            }

            .lg\:pb-24 {
                padding-bottom: 96px
            }

            .lg\:absolute {
                position: absolute
            }

            .lg\:left-0 {
                left: 0
            }

            .lg\:top-50p {
                top: 50%
            }

            .lg\:text-left {
                text-align: left
            }

            .lg\:tracking-title {
                letter-spacing: .8px
            }

            .lg\:w-1\/2 {
                width: 50%
            }

            .lg\:w-1\/3 {
                width: 33.333333%
            }

            .lg\:w-3\/4 {
                width: 75%
            }

            .lg\:w-2\/5 {
                width: 40%
            }

            .lg\:w-fit {
                width: -webkit-fit-content;
                width: -moz-fit-content;
                width: fit-content
            }

            .lg\:z-0 {
                z-index: 0
            }

            .lg\:z-10 {
                z-index: 10
            }

            .lg\:gap-0 {
                gap: 0
            }

            .lg\:gap-6 {
                gap: 24px
            }

            .lg\:gap-x-5 {
                -moz-column-gap: 20px;
                column-gap: 20px
            }

            .lg\:gap-x-6 {
                -moz-column-gap: 24px;
                column-gap: 24px
            }

            .lg\:gap-x-8 {
                -moz-column-gap: 32px;
                column-gap: 32px
            }

            .lg\:gap-x-10 {
                -moz-column-gap: 40px;
                column-gap: 40px
            }

            .lg\:gap-x-12 {
                -moz-column-gap: 48px;
                column-gap: 48px
            }

            .lg\:gap-x-14 {
                -moz-column-gap: 56px;
                column-gap: 56px
            }

            .lg\:gap-x-16 {
                -moz-column-gap: 64px;
                column-gap: 64px
            }

            .lg\:gap-x-24 {
                -moz-column-gap: 96px;
                column-gap: 96px
            }

            .lg\:gap-x-35 {
                -moz-column-gap: 140px;
                column-gap: 140px
            }

            .lg\:gap-y-6 {
                row-gap: 24px
            }

            .lg\:gap-y-10 {
                row-gap: 40px
            }

            .lg\:gap-y-12 {
                row-gap: 48px
            }

            .lg\:gap-y-14 {
                row-gap: 56px
            }

            .lg\:gap-y-16 {
                row-gap: 64px
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr))
            }

            .lg\:grid-cols-12 {
                grid-template-columns: repeat(12, minmax(0, 1fr))
            }

            .lg\:grid-cols-none {
                grid-template-columns: none
            }

            .lg\:col-span-3 {
                grid-column: span 3/span 3
            }

            .lg\:col-span-4 {
                grid-column: span 4/span 4
            }

            .lg\:col-span-5 {
                grid-column: span 5/span 5
            }

            .lg\:col-span-6 {
                grid-column: span 6/span 6
            }

            .lg\:scale-100 {
                --tw-scale-x: 1;
                --tw-scale-y: 1
            }

            .group:hover .lg\:group-hover\:scale-105 {
                --tw-scale-x: 1.05;
                --tw-scale-y: 1.05
            }

            .group:hover .lg\:group-hover\:scale-125 {
                --tw-scale-x: 1.25;
                --tw-scale-y: 1.25
            }

            .lg\:translate-x-0 {
                --tw-translate-x: 0
            }

            .lg\:-translate-y-1\/2 {
                --tw-translate-y: -50%
            }

            .lg\:-translate-y-1\/4 {
                --tw-translate-y: -25%
            }

            .lg\:container {
                max-width: 100%;
                padding: 0 1.25rem
            }

            @media (min-width:640px) {
                .lg\:container {
                    max-width: 100%;
                    padding: 0 1.25rem
                }
            }

            @media (min-width:768px) {
                .lg\:container {
                    max-width: 688px;
                    padding: 0
                }
            }

            @media (min-width:992px) {
                .lg\:container {
                    max-width: 864px;
                    padding: 0
                }
            }

            @media (min-width:1200px) {
                .lg\:container {
                    max-width: 1140px;
                    padding: 0
                }
            }

            @media (min-width:1600px) {
                .lg\:container {
                    max-width: 1350px;
                    padding: 0
                }
            }

            .lg\:u-ratio {
                padding: 0;
                position: relative;
                width: 100%
            }

            .lg\:u-ratio:before {
                display: block;
                content: ""
            }

            .lg\:u-ratio__item {
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%
            }

            .lg\:u-ratio--1by1:before {
                padding-top: 100%
            }

            .lg\:u-ratio--4by3:before {
                padding-top: 75%
            }

            .lg\:u-ratio--16by9:before {
                padding-top: 56.25%
            }

            .lg\:text-squishy {
                word-break: break-word;
                word-wrap: break-word;
                overflow-wrap: anywhere;
                -webkit-hyphens: auto;
                hyphens: auto
            }

            .lg\:c-hero-image__overlay--to-t {
                background: linear-gradient(0deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .lg\:c-hero-image__overlay--to-r {
                background: linear-gradient(90deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .lg\:c-hero-image__overlay--to-b {
                background: linear-gradient(180deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .lg\:c-hero-image__overlay--to-l {
                background: linear-gradient(270deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }
        }

        @media (min-width:1200px) {
            .xl\:space-x-8>:not([hidden])~:not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(32px*var(--tw-space-x-reverse));
                margin-left: calc(32px*(1 - var(--tw-space-x-reverse)))
            }

            .xl\:space-x-12>:not([hidden])~:not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(48px*var(--tw-space-x-reverse));
                margin-left: calc(48px*(1 - var(--tw-space-x-reverse)))
            }

            .xl\:bg-transparent {
                background-color: transparent
            }

            .xl\:rounded-r40 {
                border-radius: 40px
            }

            .xl\:rounded-t-r96 {
                border-top-left-radius: 96px;
                border-top-right-radius: 96px
            }

            .xl\:block {
                display: block
            }

            .xl\:flex {
                display: flex
            }

            .xl\:hidden {
                display: none
            }

            .xl\:flex-row {
                flex-direction: row
            }

            .xl\:items-end {
                align-items: flex-end
            }

            .xl\:items-center {
                align-items: center
            }

            .xl\:self-end {
                align-self: flex-end
            }

            .xl\:justify-start {
                justify-content: flex-start
            }

            .xl\:order-1 {
                order: 1
            }

            .xl\:order-2 {
                order: 2
            }

            .xl\:order-3 {
                order: 3
            }

            .xl\:font-maisonDemi {
                font-family: MaisonNeue-Demi
            }

            .xl\:font-maisonBold {
                font-family: MaisonNeue-Bold
            }

            .xl\:font-maisonExtendedBold {
                font-family: MaisonNeueExtended-Bold
            }

            .xl\:font-maisonExtendedExtraBold {
                font-family: MaisonNeueExtended-ExtraBold
            }

            .xl\:font-bold {
                font-weight: 700
            }

            .xl\:font-extrabold {
                font-weight: 800
            }

            .xl\:h-8 {
                height: 32px
            }

            .xl\:h-10 {
                height: 40px
            }

            .xl\:h-16 {
                height: 64px
            }

            .xl\:h-30 {
                height: 120px
            }

            .xl\:h-auto {
                height: auto
            }

            .xl\:h-40p {
                height: 40%
            }

            .xl\:text-size_7x {
                font-size: 14px
            }

            .xl\:text-size_8x {
                font-size: 16px
            }

            .xl\:text-size_9x {
                font-size: 18px
            }

            .xl\:text-size_12x {
                font-size: 24px
            }

            .xl\:text-size_13x {
                font-size: 26px
            }

            .xl\:text-size_18x {
                font-size: 36px
            }

            .xl\:text-size_24x {
                font-size: 48px
            }

            .xl\:text-size_36x {
                font-size: 72px
            }

            .xl\:leading-tight {
                line-height: 1.25
            }

            .xl\:leading-height_20x {
                line-height: 20px
            }

            .xl\:leading-height_21x {
                line-height: 21px
            }

            .xl\:leading-height_24x {
                line-height: 24px
            }

            .xl\:leading-height_27x {
                line-height: 27px
            }

            .xl\:leading-height_32x {
                line-height: 32px
            }

            .xl\:leading-height_36x {
                line-height: 36px
            }

            .xl\:leading-height_48x {
                line-height: 48px
            }

            .xl\:leading-height_54x {
                line-height: 54px
            }

            .xl\:leading-height_64x {
                line-height: 64px
            }

            .xl\:leading-height_87x {
                line-height: 87px
            }

            .xl\:m-0 {
                margin: 0
            }

            .xl\:my-0 {
                margin-top: 0;
                margin-bottom: 0
            }

            .xl\:mx-5 {
                margin-left: 20px;
                margin-right: 20px
            }

            .xl\:mt-0 {
                margin-top: 0
            }

            .xl\:mr-0 {
                margin-right: 0
            }

            .xl\:mb-0 {
                margin-bottom: 0
            }

            .xl\:ml-0 {
                margin-left: 0
            }

            .xl\:mt-1 {
                margin-top: 4px
            }

            .xl\:ml-1 {
                margin-left: 4px
            }

            .xl\:mr-2 {
                margin-right: 8px
            }

            .xl\:mb-2 {
                margin-bottom: 8px
            }

            .xl\:mt-3 {
                margin-top: 12px
            }

            .xl\:mb-3 {
                margin-bottom: 12px
            }

            .xl\:mb-4 {
                margin-bottom: 16px
            }

            .xl\:mt-5 {
                margin-top: 20px
            }

            .xl\:mb-5 {
                margin-bottom: 20px
            }

            .xl\:mt-6 {
                margin-top: 24px
            }

            .xl\:mb-6 {
                margin-bottom: 24px
            }

            .xl\:mt-7 {
                margin-top: 1.75rem
            }

            .xl\:mb-7 {
                margin-bottom: 1.75rem
            }

            .xl\:mt-8 {
                margin-top: 32px
            }

            .xl\:mr-8 {
                margin-right: 32px
            }

            .xl\:mb-8 {
                margin-bottom: 32px
            }

            .xl\:ml-8 {
                margin-left: 32px
            }

            .xl\:mr-9 {
                margin-right: 36px
            }

            .xl\:mt-10 {
                margin-top: 40px
            }

            .xl\:mb-10 {
                margin-bottom: 40px
            }

            .xl\:ml-11 {
                margin-left: 44px
            }

            .xl\:mt-12 {
                margin-top: 48px
            }

            .xl\:mb-12 {
                margin-bottom: 48px
            }

            .xl\:mt-14 {
                margin-top: 56px
            }

            .xl\:mb-14 {
                margin-bottom: 56px
            }

            .xl\:ml-15 {
                margin-left: 60px
            }

            .xl\:mb-16 {
                margin-bottom: 64px
            }

            .xl\:mt-18 {
                margin-top: 4.5rem
            }

            .xl\:mr-18 {
                margin-right: 4.5rem
            }

            .xl\:mb-19 {
                margin-bottom: 76px
            }

            .xl\:mt-20 {
                margin-top: 80px
            }

            .xl\:mb-20 {
                margin-bottom: 80px
            }

            .xl\:mb-25 {
                margin-bottom: 100px
            }

            .xl\:mb-27 {
                margin-bottom: 108px
            }

            .xl\:mb-28 {
                margin-bottom: 7rem
            }

            .xl\:mt-30 {
                margin-top: 120px
            }

            .xl\:mb-30 {
                margin-bottom: 120px
            }

            .xl\:mb-33 {
                margin-bottom: 132px
            }

            .xl\:mb-37 {
                margin-bottom: 148px
            }

            .xl\:ml-auto {
                margin-left: auto
            }

            .xl\:-mt-8 {
                margin-top: -32px
            }

            .xl\:-mt-23 {
                margin-top: -92px
            }

            .xl\:-mt-24 {
                margin-top: -96px
            }

            .xl\:-mt-26 {
                margin-top: -104px
            }

            .xl\:-mt-29 {
                margin-top: -116px
            }

            .xl\:max-h-inherit {
                max-height: inherit
            }

            .xl\:max-w-screen-lg {
                max-width: 992px
            }

            .xl\:min-h-0 {
                min-height: 0
            }

            .xl\:min-h-screen {
                min-height: 100vh
            }

            .xl\:min-h-screen_5\/4x {
                min-height: 125vh
            }

            .xl\:min-h-screen_3\/2x {
                min-height: 150vh
            }

            .xl\:opacity-100 {
                opacity: 1
            }

            .xl\:overflow-y-visible {
                overflow-y: visible
            }

            .xl\:p-4 {
                padding: 16px
            }

            .xl\:p-10 {
                padding: 40px
            }

            .xl\:p-12 {
                padding: 48px
            }

            .xl\:p-16 {
                padding: 64px
            }

            .xl\:px-0 {
                padding-left: 0;
                padding-right: 0
            }

            .xl\:py-5 {
                padding-top: 20px;
                padding-bottom: 20px
            }

            .xl\:px-6 {
                padding-left: 24px;
                padding-right: 24px
            }

            .xl\:py-8 {
                padding-top: 32px;
                padding-bottom: 32px
            }

            .xl\:py-12 {
                padding-top: 48px;
                padding-bottom: 48px
            }

            .xl\:py-14 {
                padding-top: 56px;
                padding-bottom: 56px
            }

            .xl\:py-30 {
                padding-top: 120px;
                padding-bottom: 120px
            }

            .xl\:pt-0 {
                padding-top: 0
            }

            .xl\:pb-0 {
                padding-bottom: 0
            }

            .xl\:pl-0 {
                padding-left: 0
            }

            .xl\:pb-4 {
                padding-bottom: 16px
            }

            .xl\:pt-5 {
                padding-top: 20px
            }

            .xl\:pb-6 {
                padding-bottom: 24px
            }

            .xl\:pl-18 {
                padding-left: 4.5rem
            }

            .xl\:pb-20 {
                padding-bottom: 80px
            }

            .xl\:pt-30 {
                padding-top: 120px
            }

            .xl\:pb-30 {
                padding-bottom: 120px
            }

            .xl\:pr-32 {
                padding-right: 128px
            }

            .xl\:pointer-events-auto {
                pointer-events: auto
            }

            .xl\:static {
                position: static
            }

            .xl\:absolute {
                position: absolute
            }

            .xl\:relative {
                position: relative
            }

            .xl\:bottom-0 {
                bottom: 0
            }

            .xl\:bottom-auto {
                bottom: auto
            }

            .xl\:text-left {
                text-align: left
            }

            .xl\:text-center {
                text-align: center
            }

            .xl\:text-disabled {
                --tw-text-opacity: 1;
                color: rgba(114, 114, 114, var(--tw-text-opacity))
            }

            .xl\:tracking-wide {
                letter-spacing: .025em
            }

            .xl\:tracking-title {
                letter-spacing: .8px
            }

            .xl\:visible {
                visibility: visible
            }

            .xl\:w-30 {
                width: 120px
            }

            .xl\:w-auto {
                width: auto
            }

            .xl\:w-1\/2 {
                width: 50%
            }

            .xl\:w-1\/4 {
                width: 25%
            }

            .xl\:w-3\/4 {
                width: 75%
            }

            .xl\:w-3\/12 {
                width: 25%
            }

            .xl\:w-9\/12 {
                width: 75%
            }

            .xl\:w-10\/12 {
                width: 83.333333%
            }

            .xl\:w-full {
                width: 100%
            }

            .xl\:gap-8 {
                gap: 32px
            }

            .xl\:gap-10 {
                gap: 40px
            }

            .xl\:gap-21 {
                gap: 84px
            }

            .xl\:gap-x-8 {
                -moz-column-gap: 32px;
                column-gap: 32px
            }

            .xl\:gap-x-10 {
                -moz-column-gap: 40px;
                column-gap: 40px
            }

            .xl\:gap-x-14 {
                -moz-column-gap: 56px;
                column-gap: 56px
            }

            .xl\:gap-x-20 {
                -moz-column-gap: 80px;
                column-gap: 80px
            }

            .xl\:gap-x-37 {
                -moz-column-gap: 148px;
                column-gap: 148px
            }

            .xl\:gap-y-8 {
                row-gap: 32px
            }

            .xl\:gap-y-10 {
                row-gap: 40px
            }

            .xl\:gap-y-12 {
                row-gap: 48px
            }

            .xl\:gap-y-14 {
                row-gap: 56px
            }

            .xl\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .xl\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .xl\:grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr))
            }

            .xl\:grid-cols-5 {
                grid-template-columns: repeat(5, minmax(0, 1fr))
            }

            .xl\:transform-none {
                transform: none
            }

            .xl\:scale-100 {
                --tw-scale-x: 1;
                --tw-scale-y: 1
            }

            .group:hover .xl\:group-hover\:scale-125 {
                --tw-scale-x: 1.25;
                --tw-scale-y: 1.25
            }

            .xl\:-translate-y-8 {
                --tw-translate-y: -32px
            }

            .xl\:u-ratio {
                padding: 0;
                position: relative;
                width: 100%
            }

            .xl\:u-ratio:before {
                display: block;
                content: ""
            }

            .xl\:u-ratio__item {
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%
            }

            .xl\:u-ratio--1by1:before {
                padding-top: 100%
            }

            .xl\:u-ratio--4by3:before {
                padding-top: 75%
            }

            .xl\:u-ratio--16by9:before {
                padding-top: 56.25%
            }

            .xl\:text-squishy {
                word-break: break-word;
                word-wrap: break-word;
                overflow-wrap: anywhere;
                -webkit-hyphens: auto;
                hyphens: auto
            }

            .xl\:c-hero-image__overlay--to-t {
                background: linear-gradient(0deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .xl\:c-hero-image__overlay--to-r {
                background: linear-gradient(90deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .xl\:c-hero-image__overlay--to-b {
                background: linear-gradient(180deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .xl\:c-hero-image__overlay--to-l {
                background: linear-gradient(270deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }
        }

        @media (min-width:1600px) {
            .xxl\:hidden {
                display: none
            }

            .xxl\:u-ratio {
                padding: 0;
                position: relative;
                width: 100%
            }

            .xxl\:u-ratio:before {
                display: block;
                content: ""
            }

            .xxl\:u-ratio__item {
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%
            }

            .xxl\:u-ratio--1by1:before {
                padding-top: 100%
            }

            .xxl\:u-ratio--4by3:before {
                padding-top: 75%
            }

            .xxl\:u-ratio--16by9:before {
                padding-top: 56.25%
            }

            .xxl\:text-squishy {
                word-break: break-word;
                word-wrap: break-word;
                overflow-wrap: anywhere;
                -webkit-hyphens: auto;
                hyphens: auto
            }

            .xxl\:c-hero-image__overlay--to-t {
                background: linear-gradient(0deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .xxl\:c-hero-image__overlay--to-r {
                background: linear-gradient(90deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .xxl\:c-hero-image__overlay--to-b {
                background: linear-gradient(180deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .xxl\:c-hero-image__overlay--to-l {
                background: linear-gradient(270deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }
        }

        @media (max-width:767.98px) {
            .onlyMobile\:flex-col {
                flex-direction: column
            }

            .onlyMobile\:mb-5 {
                margin-bottom: 20px
            }

            .onlyMobile\:min-w-0 {
                min-width: 0
            }

            .onlyMobile\:px-10 {
                padding-left: 40px;
                padding-right: 40px
            }

            .onlyMobile\:pb-0 {
                padding-bottom: 0
            }

            .onlyMobile\:absolute {
                position: absolute
            }

            .onlyMobile\:right-0 {
                right: 0
            }

            .onlyMobile\:bottom-0 {
                bottom: 0
            }

            .onlyMobile\:left-0 {
                left: 0
            }

            .onlyMobile\:transition-height {
                transition-property: height;
                transition-timing-function: cubic-bezier(.4, 0, .2, 1);
                transition-duration: .15s
            }

            .onlyMobile\:duration-300 {
                transition-duration: .3s
            }

            .onlyMobile\:delay-300 {
                transition-delay: .3s
            }

            .onlyMobile\:u-ratio {
                padding: 0;
                position: relative;
                width: 100%
            }

            .onlyMobile\:u-ratio:before {
                display: block;
                content: ""
            }

            .onlyMobile\:u-ratio__item {
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%
            }

            .onlyMobile\:u-ratio--1by1:before {
                padding-top: 100%
            }

            .onlyMobile\:u-ratio--4by3:before {
                padding-top: 75%
            }

            .onlyMobile\:u-ratio--16by9:before {
                padding-top: 56.25%
            }

            .onlyMobile\:text-squishy {
                word-break: break-word;
                word-wrap: break-word;
                overflow-wrap: anywhere;
                -webkit-hyphens: auto;
                hyphens: auto
            }

            .onlyMobile\:c-hero-image__overlay--to-t {
                background: linear-gradient(0deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyMobile\:c-hero-image__overlay--to-r {
                background: linear-gradient(90deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyMobile\:c-hero-image__overlay--to-b {
                background: linear-gradient(180deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyMobile\:c-hero-image__overlay--to-l {
                background: linear-gradient(270deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }
        }

        @media (min-width:768px) and (max-width:1199.98px) {
            .onlyTablet\:min-w-0 {
                min-width: 0
            }

            .onlyTablet\:top-0 {
                top: 0
            }

            .onlyTablet\:bottom-0 {
                bottom: 0
            }

            .onlyTablet\:top-50p {
                top: 50%
            }

            .onlyTablet\:transform {
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .onlyTablet\:-translate-y-1\/2 {
                --tw-translate-y: -50%
            }

            .onlyTablet\:u-ratio {
                padding: 0;
                position: relative;
                width: 100%
            }

            .onlyTablet\:u-ratio:before {
                display: block;
                content: ""
            }

            .onlyTablet\:u-ratio__item {
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%
            }

            .onlyTablet\:u-ratio--1by1:before {
                padding-top: 100%
            }

            .onlyTablet\:u-ratio--4by3:before {
                padding-top: 75%
            }

            .onlyTablet\:u-ratio--16by9:before {
                padding-top: 56.25%
            }

            .onlyTablet\:text-squishy {
                word-break: break-word;
                word-wrap: break-word;
                overflow-wrap: anywhere;
                -webkit-hyphens: auto;
                hyphens: auto
            }

            .onlyTablet\:c-hero-image__overlay--to-t {
                background: linear-gradient(0deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyTablet\:c-hero-image__overlay--to-r {
                background: linear-gradient(90deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyTablet\:c-hero-image__overlay--to-b {
                background: linear-gradient(180deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyTablet\:c-hero-image__overlay--to-l {
                background: linear-gradient(270deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }
        }

        @media (min-width:768px) and (max-width:991.98px) {
            .onlyTabletSm\:mx-23 {
                margin-left: 92px;
                margin-right: 92px
            }

            .onlyTabletSm\:pb-16 {
                padding-bottom: 64px
            }

            .onlyTabletSm\:absolute {
                position: absolute
            }

            .onlyTabletSm\:bottom-0 {
                bottom: 0
            }

            .onlyTabletSm\:u-ratio {
                padding: 0;
                position: relative;
                width: 100%
            }

            .onlyTabletSm\:u-ratio:before {
                display: block;
                content: ""
            }

            .onlyTabletSm\:u-ratio__item {
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%
            }

            .onlyTabletSm\:u-ratio--1by1:before {
                padding-top: 100%
            }

            .onlyTabletSm\:u-ratio--4by3:before {
                padding-top: 75%
            }

            .onlyTabletSm\:u-ratio--16by9:before {
                padding-top: 56.25%
            }

            .onlyTabletSm\:text-squishy {
                word-break: break-word;
                word-wrap: break-word;
                overflow-wrap: anywhere;
                -webkit-hyphens: auto;
                hyphens: auto
            }

            .onlyTabletSm\:c-hero-image__overlay--to-t {
                background: linear-gradient(0deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyTabletSm\:c-hero-image__overlay--to-r {
                background: linear-gradient(90deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyTabletSm\:c-hero-image__overlay--to-b {
                background: linear-gradient(180deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyTabletSm\:c-hero-image__overlay--to-l {
                background: linear-gradient(270deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }
        }

        @media (min-width:992px) and (max-width:1199.98px) {
            .onlyTabletLg\:u-ratio {
                padding: 0;
                position: relative;
                width: 100%
            }

            .onlyTabletLg\:u-ratio:before {
                display: block;
                content: ""
            }

            .onlyTabletLg\:u-ratio__item {
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%
            }

            .onlyTabletLg\:u-ratio--1by1:before {
                padding-top: 100%
            }

            .onlyTabletLg\:u-ratio--4by3:before {
                padding-top: 75%
            }

            .onlyTabletLg\:u-ratio--16by9:before {
                padding-top: 56.25%
            }

            .onlyTabletLg\:text-squishy {
                word-break: break-word;
                word-wrap: break-word;
                overflow-wrap: anywhere;
                -webkit-hyphens: auto;
                hyphens: auto
            }

            .onlyTabletLg\:c-hero-image__overlay--to-t {
                background: linear-gradient(0deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyTabletLg\:c-hero-image__overlay--to-r {
                background: linear-gradient(90deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyTabletLg\:c-hero-image__overlay--to-b {
                background: linear-gradient(180deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyTabletLg\:c-hero-image__overlay--to-l {
                background: linear-gradient(270deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }
        }

        @media (min-width:992px) and (max-width:1199.98px) and (orientation:portrait) {
            .onlyTabletLgPortrait\:mb-20 {
                margin-bottom: 80px
            }

            .onlyTabletLgPortrait\:mt-40 {
                margin-top: 160px
            }

            .onlyTabletLgPortrait\:pt-40 {
                padding-top: 160px
            }

            .onlyTabletLgPortrait\:scale-300 {
                --tw-scale-x: 3;
                --tw-scale-y: 3
            }

            .onlyTabletLgPortrait\:u-ratio {
                padding: 0;
                position: relative;
                width: 100%
            }

            .onlyTabletLgPortrait\:u-ratio:before {
                display: block;
                content: ""
            }

            .onlyTabletLgPortrait\:u-ratio__item {
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%
            }

            .onlyTabletLgPortrait\:u-ratio--1by1:before {
                padding-top: 100%
            }

            .onlyTabletLgPortrait\:u-ratio--4by3:before {
                padding-top: 75%
            }

            .onlyTabletLgPortrait\:u-ratio--16by9:before {
                padding-top: 56.25%
            }

            .onlyTabletLgPortrait\:text-squishy {
                word-break: break-word;
                word-wrap: break-word;
                overflow-wrap: anywhere;
                -webkit-hyphens: auto;
                hyphens: auto
            }

            .onlyTabletLgPortrait\:c-hero-image__overlay--to-t {
                background: linear-gradient(0deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyTabletLgPortrait\:c-hero-image__overlay--to-r {
                background: linear-gradient(90deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyTabletLgPortrait\:c-hero-image__overlay--to-b {
                background: linear-gradient(180deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }

            .onlyTabletLgPortrait\:c-hero-image__overlay--to-l {
                background: linear-gradient(270deg, rgba(16, 24, 32, .7), rgba(128, 132, 137, .31875) 52.6%, rgba(255, 255, 255, 0))
            }
        }
    </style>







    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W3VB57');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Analytics-->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-69417218-4', 'auto');
        ga('require', 'linkid', 'linkid.js');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');
        setTimeout("ga('send', 'event', 'Non-Bounce Engagement', 'time on page more than 30 seconds')", 30000);
    </script>
    <!-- End Google Analytics-->
</head>

<body class="font-body font-normal text-dark p-0 m-0">





    <!-- navigation-menu -->
    <header class="c-header c-header--alternate font-maisonDemi font-medium fixed top-0 z-50 w-full py-4 sm:py-5 lg:py-10 xl:py-8 transition duration-300 delay-100 ease-in-out" data-module="navigation" x-data="{...dropdownHeader(), ...dropdownLang()}" x-bind:class="{'c-header--active': isDropdownHeader}">
        <div class="container mx-auto flex justify-between items-center">
            <!-- logo -->
            <span>
                <a href="/">
                    <svg class="" width="92px" height="30px" viewBox="0 0 168 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>D2E90398-86ED-476F-BDF3-817CBFB99ABB@1.00x</title>
                        <g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="home-/-desktop" transform="translate(-164.000000, -9903.000000)">
                                <g id="block-/-footer--/-desktop" transform="translate(0.000000, 9743.000000)">
                                    <g id="Gojek-Logo" transform="translate(164.000000, 160.000000)">
                                        <ellipse id="Oval" cx="19.9903148" cy="20" rx="19.9903148" ry="20"></ellipse>
                                        <!-- logo solv -->
                                        <g class="c-header__logo-solv transition-colors duration-100 ease-out fill-current" id="Group" fill="#FFFFFF">
                                            <path d="M19.955244,7.10542736e-15 C30.9323818,7.10542736e-15 39.8754174,8.9122807 39.8052759,19.9298246 C39.8052759,28.2105263 34.8252326,35.2631579 27.6006627,38.3157895 C27.2148847,38.4912281 26.6888238,38.5964912 26.1627628,38.5964912 C24.1286606,38.5964912 22.4452657,36.9473684 22.4452657,34.877193 C22.4452657,33.3333333 23.3921754,32 24.724863,31.4385965 L24.724863,31.4385965 L25.0036771,31.3190047 C29.3440614,29.3929703 32.3702816,25.0153509 32.3702816,19.9649123 C32.3702816,13.0877193 26.7940359,7.50877193 19.9201733,7.50877193 C13.0463107,7.50877193 7.47006499,13.0877193 7.47006499,19.9649123 C7.47006499,25.122807 10.6264305,29.5438596 15.1154836,31.4385965 L15.1154836,31.4385965 L15.2947699,31.5198835 C16.5322975,32.1216471 17.3950809,33.4035088 17.3950809,34.877193 C17.3950809,36.9122807 15.7467567,38.5964912 13.6775838,38.5964912 C13.1865936,38.5964912 12.625462,38.4912281 12.239684,38.3157895 C5.01511406,35.2280702 0.0350707277,28.1754386 0.0350707277,19.9298246 C0.0350707277,8.9122807 8.97810628,7.10542736e-15 19.955244,7.10542736e-15 Z M19.955244,12.4210526 C24.080847,12.4210526 27.425309,15.767135 27.425309,19.8947368 C27.425309,24.0223387 24.080847,27.3684211 19.955244,27.3684211 C15.8296411,27.3684211 12.485179,24.0223387 12.485179,19.8947368 C12.485179,15.767135 15.8296411,12.4210526 19.955244,12.4210526 Z" id="Combined-Shape"></path>
                                        </g>
                                        <ellipse id="Oval" cx="19.9903148" cy="20" rx="19.9903148" ry="20"></ellipse>
                                        <!-- logo text -->
                                        <path class="c-header__logo-text transition-colors duration-100 ease-out fill-current" d="M112.797463,6.61971831 L112.797463,32.2887324 C112.797463,37.6760563 110.615421,40 104.808376,40 L101.0074,40 L101.0074,34.4014085 L104.315657,34.4014085 C106.075367,34.4014085 106.708863,33.7323944 106.708863,32.1830986 L106.708863,6.61971831 L112.797463,6.61971831 Z M74.8229035,6.58450704 L74.8229035,29.0492958 C74.8229035,35.2816901 70.0716843,39.9647887 63.1032295,39.9647887 C58.5279814,39.9647887 54.5158408,38.3450704 51.8410804,35.528169 L51.8410804,35.528169 L55.8180268,31.6901408 C57.5425434,33.3802817 59.5486137,34.3309859 62.9624527,34.3309859 C66.3762916,34.3309859 68.9454694,32.1478873 68.9454694,29.1549296 L68.9454694,29.1549296 L68.9454694,26.9366197 L68.875081,26.9366197 C67.3617297,28.6267606 64.8277461,29.5774648 61.8010435,29.5774648 C55.043754,29.5774648 49.9757869,24.6830986 49.9757869,17.9929577 C49.9757869,11.5492958 54.9029772,6.58450704 61.5898783,6.58450704 C64.6869693,6.58450704 67.2913413,7.5 68.875081,9.15492958 L68.875081,9.15492958 L68.9454694,9.15492958 L68.9454694,6.58450704 L74.8229035,6.58450704 Z M90.7658834,6.58450704 C97.9806977,6.58450704 103.083859,11.6197183 103.083859,18.1338028 C103.083859,24.6478873 97.9806977,29.6830986 90.7658834,29.6830986 C83.6214576,29.6830986 78.4479078,24.6478873 78.4479078,18.1338028 C78.4479078,11.6197183 83.5862633,6.58450704 90.7658834,6.58450704 Z M128.212529,6.58450704 C135.532926,6.58450704 140.07298,11.7957746 140.07298,18.3450704 L140.07298,18.3450704 L140.07298,20.0704225 L122.37029,20.0704225 C122.475872,22.3591549 125.326604,24.7183099 128.986802,24.7183099 C131.450397,24.7183099 133.104525,24.084507 134.934625,22.3943662 L134.934625,22.3943662 L139.052348,25.2816901 C137.292637,27.4295775 133.913992,29.6830986 129.233162,29.6830986 C121.560823,29.6830986 116.352079,25.1056338 116.352079,18.1690141 C116.352079,11.443662 121.279269,6.58450704 128.212529,6.58450704 Z M149.575419,5.32907052e-15 L149.610613,15.7746479 L149.681001,15.7746479 L159.535382,6.51408451 L167.418886,6.51408451 L157.212564,16.1971831 L167.383692,29.6478873 L160.344849,29.6478873 L153.376394,19.9295775 L153.306006,19.9295775 L149.610613,23.4507042 L149.610613,29.6830986 L143.733179,29.6830986 L143.733179,5.32907052e-15 L149.575419,5.32907052e-15 Z M90.7658834,11.9366197 C86.9649081,11.9366197 84.5365072,14.5774648 84.5365072,18.1338028 C84.5365072,21.6901408 86.9649081,24.3309859 90.7658834,24.3309859 C94.5668588,24.3309859 96.9952597,21.6549296 96.9952597,18.1338028 C96.9952597,14.5774648 94.5668588,11.9366197 90.7658834,11.9366197 Z M62.7160932,11.971831 C58.6687583,11.971831 56.0643863,14.4366197 56.0643863,17.9929577 C56.0643863,21.8661972 58.4927872,24.1901408 62.4345394,24.1901408 C65.9187668,24.1901408 68.6639157,22.0422535 68.6639157,19.3309859 L68.6639157,19.3309859 L68.6991099,19.3309859 L68.6991099,16.7605634 C68.6991099,14.2253521 65.9187668,11.971831 62.7160932,11.971831 Z M128.353306,11.5140845 C125.080244,11.5140845 122.79262,13.2042254 122.440678,15.7746479 L122.440678,15.7746479 L134.160352,15.7746479 C133.878798,13.2042254 131.591174,11.5140845 128.353306,11.5140845 Z" id="Combined-Shape" fill="#FFFFFF"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
            </span> <!-- end of logo -->
            <!-- burger menu -->
            <div class="o-burger relative w-4 h-4 z-10 xl:hidden">
                <span class="o-burger__item o-burger__item--top absolute left-0 w-full transform transition duration-100 ease-out top-0 bg-black rounded-r4"></span>
                <span class="o-burger__item o-burger__item--middle absolute left-0 w-full transform transition duration-100 ease-out bg-black rounded-r4"></span>
                <span class="o-burger__item o-burger__item--bottom absolute left-0 w-full transform transition duration-100 ease-out bottom-0 bg-black rounded-r4"></span>
            </div> <!-- end of burger menu -->
            <!-- menu item -->
            <ul class="c-header__menu c-header--alternate__menu items-start flex flex-col xl:flex-row absolute xl:static min-h-screen w-full xl:w-auto xl:min-h-0 max-h-0 sm:max-h-screen left-0 overflow-y-scroll xl:overflow-y-visible invisible xl:visible pointer-events-none xl:pointer-events-auto pl-5 sm:pl-11 lg:pl-20 xl:pl-0 pt-10 xl:pt-0 xl:pb-0 transform xl:transform-none -translate-y-6 opacity-0 xl:opacity-100 transition-transform-opacity duration-200 delay-50 ease-out">

                <li class="mb-8 sm:mb-9 xl:my-0 xl:mx-5 relative gtm-navbar-home">

                    <a href="/id-id/" class="font-maisonBold sm:font-maisonExtendedBold xl:font-maisonDemi leading-height_32x md:leading-height_36x xl:leading-height_27x text-size_12x md:text-size_13x xl:text-size_9x u-animation-underline visit">Beranda</a>

                </li>

                <li class="mb-8 sm:mb-9 xl:my-0 xl:mx-5 relative gtm-navbar-partner" x-data="{ isOpen: false }" x-bind:class="{'c-header__language--static': isOpen}">

                    <a href="" class="font-maisonBold sm:font-maisonExtendedBold xl:font-maisonDemi leading-height_32x md:leading-height_36x xl:leading-height_27x text-size_12x md:text-size_13x xl:text-size_9x u-animation-underline " x-on:click.prevent @click="isOpen = !isOpen">
                        <span>Gabung jadi Mitra</span>
                        <i class="pi pi-expand_more inline-block ml-1 relative xl:static transition-transform duration-200 ease-out" x-bind:class="{'transform rotate-180': isOpen}"></i>
                    </a>
                    <!-- dropdown-menu -->
                    <div class="dropdown__menu dropdown__menu--alternate dropdown__menu--dark dropdown__menu--dark-2 dropdown__menu--header xl:absolute pt-8 pb-1 sm:pt-9 xl:py-5 onlyTablet:min-w-0" x-bind:class="{'open': isOpen}" @click.away="isOpen = false" x-show="isOpen" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 transform translate-y-8 xl:-translate-y-8 z-n1" x-transition:enter-end="opacity-100 transform translate-y-0 z-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 transform translate-y-0 z-0" x-transition:leave-end="opacity-0 transform translate-y-8 xl:-translate-y-8 z-n1" x-cloak>

                        <div class="dropdown__item mb-5 xl:mb-0 gtm-navbar-driver-partners">
                            <a href="/id-id/driver/" class="dropdown__link dropdown__link--dark dropdown__link--header">
                                <span>Mitra Driver</span>
                            </a>
                        </div>

                        <div class="dropdown__item mb-0 xl:mb-0 gtm-navbar-merchant-partners">
                            <a href="/id-id/merchant/" class="dropdown__link dropdown__link--dark dropdown__link--header">
                                <span>Mitra Usaha</span>
                            </a>
                        </div>

                    </div> <!-- end of dropdown-menu -->

                </li>

                <li class="mb-8 sm:mb-9 xl:my-0 xl:mx-5 relative gtm-navbar-careers">

                    <a href="/id-id/employee/" class="font-maisonBold sm:font-maisonExtendedBold xl:font-maisonDemi leading-height_32x md:leading-height_36x xl:leading-height_27x text-size_12x md:text-size_13x xl:text-size_9x u-animation-underline ">Karir</a>

                </li>

                <li class="mb-8 sm:mb-9 xl:my-0 xl:mx-5 relative gtm-navbar-company" x-data="{ isOpen: false }" x-bind:class="{'c-header__language--static': isOpen}">

                    <a href="" class="font-maisonBold sm:font-maisonExtendedBold xl:font-maisonDemi leading-height_32x md:leading-height_36x xl:leading-height_27x text-size_12x md:text-size_13x xl:text-size_9x u-animation-underline visitvisitvisit" x-on:click.prevent @click="isOpen = !isOpen">
                        <span>Perusahaan</span>
                        <i class="pi pi-expand_more inline-block ml-1 relative xl:static transition-transform duration-200 ease-out" x-bind:class="{'transform rotate-180': isOpen}"></i>
                    </a>
                    <!-- dropdown-menu -->
                    <div class="dropdown__menu dropdown__menu--alternate dropdown__menu--dark dropdown__menu--dark-2 dropdown__menu--header xl:absolute pt-8 pb-1 sm:pt-9 xl:py-5 onlyTablet:min-w-0" x-bind:class="{'open': isOpen}" @click.away="isOpen = false" x-show="isOpen" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 transform translate-y-8 xl:-translate-y-8 z-n1" x-transition:enter-end="opacity-100 transform translate-y-0 z-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 transform translate-y-0 z-0" x-transition:leave-end="opacity-0 transform translate-y-8 xl:-translate-y-8 z-n1" x-cloak>

                        <div class="dropdown__item mb-5 xl:mb-0 hidden">
                            <a href="https://newsroom.gojek.com/" class="dropdown__link dropdown__link--dark dropdown__link--header">
                                <span>Company Backup Link 1</span>
                            </a>
                        </div>

                        <div class="dropdown__item mb-5 xl:mb-0 gtm-navbar-about">
                            <a href="https://www.gojek.com/about/" class="dropdown__link dropdown__link--dark dropdown__link--header">
                                <span>Tentang</span>
                            </a>
                        </div>

                        <div class="dropdown__item mb-5 xl:mb-0 gtm-navbar-newsroom">
                            <a href="https://newsroom.gojek.com/" class="dropdown__link dropdown__link--dark dropdown__link--header">
                                <span>Newsroom</span>
                            </a>
                        </div>

                        <div class="dropdown__item mb-5 xl:mb-0 gtm-navbar-safety">
                            <a href="https://www.gojek.com/aman/" class="dropdown__link dropdown__link--dark dropdown__link--header">
                                <span>Aman</span>
                            </a>
                        </div>

                        <div class="dropdown__item mb-5 xl:mb-0 hidden">
                            <a href="https://gojek.com" class="dropdown__link dropdown__link--dark dropdown__link--header">
                                <span>Company Backup Link 2</span>
                            </a>
                        </div>

                        <div class="dropdown__item mb-0 xl:mb-0 scrolling">
                            <a href="https://www.gojek.com/sustainability/" class="dropdown__link dropdown__link--dark dropdown__link--header">
                                <span>Sustainability</span>
                            </a>
                        </div>

                    </div> <!-- end of dropdown-menu -->

                </li>

                <li class="mb-8 sm:mb-9 xl:my-0 xl:mx-5 relative gtm-navbar-products">

                    <a href="/id-id/products/" class="font-maisonBold sm:font-maisonExtendedBold xl:font-maisonDemi leading-height_32x md:leading-height_36x xl:leading-height_27x text-size_12x md:text-size_13x xl:text-size_9x u-animation-underline ">Produk</a>

                </li>

                <li class="mb-8 sm:mb-9 xl:my-0 xl:mx-5 relative gtm-navbar-blog">

                    <a href="https://www.gojek.com/blog/" class="font-maisonBold sm:font-maisonExtendedBold xl:font-maisonDemi leading-height_32x md:leading-height_36x xl:leading-height_27x text-size_12x md:text-size_13x xl:text-size_9x u-animation-underline ">Blog</a>

                </li>

                <li class="mb-8 sm:mb-9 xl:my-0 xl:mx-5 relative gtm-navbar-help">

                    <a href="https://www.gojek.com/help/" class="font-maisonBold sm:font-maisonExtendedBold xl:font-maisonDemi leading-height_32x md:leading-height_36x xl:leading-height_27x text-size_12x md:text-size_13x xl:text-size_9x u-animation-underline ">Bantuan</a>

                </li>

                <!-- language-dropdown -->
                <li class="mb-8 mt-6 sm:mb-9 sm:mt-9 xl:my-0 xl:mx-5 xl:ml-11 flex items-center justify-center relative xl:bottom-auto">
                    <i class="pi pi-language_letters text-size_10x w-5 h-5 mr-4 xl:mr-2 text-white xl:text-disabled"></i>
                    <a href="#" class="bg-dark100 xl:bg-transparent leading-height_20x md:leading-height_36x xl:leading-height_27x hidden xl:flex xl:items-center text-size_8x md:text-size_13x xl:text-size_9x py-3 sm:py-0 px-5 sm:px-0 rounded-r32" x-on:click.prevent @click="isDropdownLangOpen = !isDropdownLangOpen">
                        <span class="hidden">Bahasa Indonesia</span>
                        <span class="hidden xl:block uppercase">id</span>
                        <i class="pi pi-expand_more inline-block ml-10 xl:ml-1 relative xl:static transition-transform duration-200 ease-out" x-bind:class="{'transform rotate-180': isDropdownLangOpen}"></i>
                    </a>
                    <!-- dropdown-menu -->
                    <div class="dropdown__menu dropdown__menu--alternate dropdown__menu--dark dropdown__menu--dark-2 dropdown__menu--header dropdown__menu--language static xl:absolute p-2 xl:py-5 xl:px-0 onlyMobile:min-w-0 onlyTablet:min-w-0" x-bind:class="{'open': isDropdownLangOpen}" @click.away="isDropdownLangOpen = false" x-show="isDropdownLangOpen" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 transform translate-y-8 xl:-translate-y-8 z-n1" x-transition:enter-end="opacity-100 transform translate-y-0 z-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 transform translate-y-0 z-0" x-transition:leave-end="opacity-0 transform translate-y-8 xl:-translate-y-8 z-n1" x-cloak>

                        <div class="dropdown__item dropdown__item--language active">
                            <a href="/id-id/" class="dropdown__link dropdown__link--dark dropdown__link--header dropdown__link--language">
                                <span class="hidden xl:block">Bahasa Indonesia</span>
                                <span class="block uppercase xl:hidden">id</span>
                            </a>
                        </div>

                        <div class="dropdown__item dropdown__item--language ">
                            <a href="/en-id/" class="dropdown__link dropdown__link--dark dropdown__link--header dropdown__link--language">
                                <span class="hidden xl:block">English</span>
                                <span class="block uppercase xl:hidden">en</span>
                            </a>
                        </div>

                    </div> <!-- end of dropdown-menu -->
                </li> <!-- end of language-dropdown -->
            </ul> <!-- end of menu item -->
        </div>
    </header> <!-- end of navigation-menu-->


    <script>
        function dropdownLang() {
            return {
                isDropdownLangOpen: false
            }
        }

        function dropdownHeader() {
            return {
                isDropdownHeader: false
            }
        }
    </script>


    <main>








        <section class="c-hero-intro h-screen w-full relative onlyMobile:transition-height onlyMobile:duration-300 onlyMobile:delay-300" data-theme="dark" data-module="sal" data-cy="c-hero-intro">
            <div class="w-full h-full overflow-hidden relative">
                <div class="relative z-10 w-full h-full transform transition-opacity duration-500 c-hero-intro__video-thumbnail" data-module="hero-intro">
                    <div class="u-lazy">



                        <picture>

                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/26/8d/268dc8a4e45b3885a0de7328e779a8dd.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/27/fd/27fdcff22ee06e86cc5af8e24e0a60d5.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/62/63/626317906f901afebde0c3b91245ea4a.webp 3000w" class="lazy w-full h-full object-cover" alt="Gojek" media="(min-width: 1280px)" type="image/webp" />


                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/36/a5/36a5f4e4c8cb9586756db4d8b1578288.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/59/34/59341d6e3845ef048f24232b23403463.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/7e/d7/7ed75217fc4d519df1bedcb7bcb3f22c.jpg 3000w" class="lazy w-full h-full object-cover" alt="Gojek" media="(min-width: 1280px)" type="image/jpeg" />





                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/26/8d/268dc8a4e45b3885a0de7328e779a8dd.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/27/fd/27fdcff22ee06e86cc5af8e24e0a60d5.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/62/63/626317906f901afebde0c3b91245ea4a.webp 3000w" class="lazy w-full h-full object-cover" alt="Gojek" media="(min-width: 640px)" type="image/webp" />


                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/36/a5/36a5f4e4c8cb9586756db4d8b1578288.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/59/34/59341d6e3845ef048f24232b23403463.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/7e/d7/7ed75217fc4d519df1bedcb7bcb3f22c.jpg 3000w" class="lazy w-full h-full object-cover" alt="Gojek" media="(min-width: 640px)" type="image/jpeg" />



                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/26/8d/268dc8a4e45b3885a0de7328e779a8dd.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/27/fd/27fdcff22ee06e86cc5af8e24e0a60d5.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/62/63/626317906f901afebde0c3b91245ea4a.webp 3000w" class="lazy w-full h-full object-cover" alt="Gojek" media="(min-width: 0px)" type="image/webp" />


                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/36/a5/36a5f4e4c8cb9586756db4d8b1578288.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/59/34/59341d6e3845ef048f24232b23403463.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/7e/d7/7ed75217fc4d519df1bedcb7bcb3f22c.jpg 3000w" class="lazy w-full h-full object-cover" alt="Gojek" media="(min-width: 0px)" type="image/jpeg" />


                            <img src="" data-src="https://lelogama.go-jek.com/prime/upload/image/hero.jpg" class="lazy w-full h-full object-cover" alt="Gojek" />
                        </picture>


                        <div class="u-lazy__placeholder-grayed"></div>
                    </div>
                </div>
                <iframe title="Gojek - The Flow" class="absolute w-140p h-140p -top-20p -left-20p transform scale-300 md:scale-200 lg:scale-100 onlyTabletLgPortrait:scale-300 xl:scale-100 c-hero-intro__video-background js-hero-intro__video lazy" width="560" height="315" data-src="https://www.youtube.com/embed/VJH5FJ5kaJA?enablejsapi=1&version=3&controls=0&rel=0&autoplay=1&loop=1&mute=1&playlist=VJH5FJ5kaJA&playsinline=1" frameborder="0" allow="autoplay; encrypted-media;" allowfullscreen data-player-status=""></iframe>

            </div>

            <div class="absolute top-0 z-20 w-full h-full c-hero-intro__background-overlay">
                <div class="container mx-auto h-full relative">
                    <div class="relative md:absolute bottom-0 h-full md:h-auto w-full md:w-3/4 flex items-end">
                        <div class="mb-35 xl:mb-30 w-full" data-sal="slide-up" data-sal-duration="850" data-sal-delay="500" data-sal-once="true">
                            <h1 class="font-maisonExtendedExtraBold 
                        font-extrabold 
                        tracking-normal xl:tracking-title
                        text-size_18x md:text-size_24x xl:text-size_36x 
                        leading-height_52x md:leading-height_64x xl:leading-tight
                        text-white">4 negara. </br>20+ layanan. </br>3 super App.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="c-card-factsheet-illustration bg-gray-primary flex flex-col relative u-safe-y-120-100" data-module="sal" data-theme="dark">
            <div class="absolute bg-white bottom-0 w-full h-40p md:h-60p xl:h-40p z-0 rounded-t-r40 md:rounded-t-r64 lg:rounded-t-r96"></div>
            <div class="z-10">
                <div class="container mx-auto">
                    <div class="text-center mb-8 md:mb-10 lg:mb-12 xl:mb-12">
                        <h2 class="font-maisonExtendedBold md:font-maisonExtendedExtraBold
                    font-bold md:font-extrabold
                    tracking-normal xl:tracking-title
                    text-size_13x md:text-size_18x xl:text-size_24x
                    leading-height_36x md:leading-height_64x
                    text-white mb-6 md:mb-7 xl:mb-7">
                            Kenalin, Gojek. <br>Si pembawa perubahan
                        </h2>
                        <a href="./employee" class="btn btn-solid btn-solid--primary" data-gtm="2021_homepage_explore_careers">Gabung</a>
                    </div>
                </div>

                <div class="md:container md:mx-auto" data-module="dotlottie-player">
                    <div class="c-feature-card-spot-brand__cards w-full md:grid
                  mb-6 md:mb-0
                  md:grid-cols-2 
                  xl:grid-cols-4
                  md:gap-y-9 md:gap-x-6 lg:gap-y-10 lg:gap-x-6 xl:gap-8" data-module="slider" data-slider-screen="sm" data-slider="{'controls' : false, 'items' : 1, 'gutter' : 20}">


                        <div class="text-center">
                            <div class="px-5 md:px-0 lg:px-0">
                                <div class="px-12 md:px-10 xl:px-6">
                                    <div class="c-feature-illustration__ratio">

                                        <dotlottie-player autoplay loop mode="normal" data-src="https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/images/feature/1.lottie" class="mb-3 md:mb-4 xl:mb-5 c-feature-illustration__img" data-sal="fade" data-sal-duration="800" data-sal-delay="500" data-sal-once="true">
                                        </dotlottie-player>

                                    </div>
                                </div>
                                <h3 class="font-maisonDemi md:font-maisonBold mb-1 text-size_9x leading-height_27x md:mb-1 md:text-size_9x md:leading-height_27x lg:mb-2 lg:text-size_12x lg:leading-height_32x xl:text-size_12x xl:leading-height_32x xl:mb-2">Fortune Top 20</h3>
                                <p class="font-maisonBook text-size_7x lg:text-size_8x leading-height_21x lg:leading-height_24x">Satu-satunya perusahaan di Asia Tenggara yang dua kali berada di daftar Perusahaan Pengubah Dunia versi majalah Fortune</p>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="px-5 md:px-0 lg:px-0">
                                <div class="px-12 md:px-10 xl:px-6">
                                    <div class="c-feature-illustration__ratio">

                                        <dotlottie-player autoplay loop mode="normal" data-src="https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/images/feature/2.lottie" class="mb-3 md:mb-4 xl:mb-5 c-feature-illustration__img" data-sal="fade" data-sal-duration="800" data-sal-delay="500" data-sal-once="true">
                                        </dotlottie-player>

                                    </div>
                                </div>
                                <h3 class="font-maisonDemi md:font-maisonBold mb-1 text-size_9x leading-height_27x md:mb-1 md:text-size_9x md:leading-height_27x lg:mb-2 lg:text-size_12x lg:leading-height_32x xl:text-size_12x xl:leading-height_32x xl:mb-2">Berkontribusi lebih dari $7.1 triliun</h3>
                                <p class="font-maisonBook text-size_7x lg:text-size_8x leading-height_21x lg:leading-height_24x">Penggerak roda perekonomian Indonesia</p>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="px-5 md:px-0 lg:px-0">
                                <div class="px-12 md:px-10 xl:px-6">
                                    <div class="c-feature-illustration__ratio">

                                        <dotlottie-player autoplay loop mode="normal" data-src="https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/images/feature/3.lottie" class="mb-3 md:mb-4 xl:mb-5 c-feature-illustration__img" data-sal="fade" data-sal-duration="800" data-sal-delay="500" data-sal-once="true">
                                        </dotlottie-player>

                                    </div>
                                </div>
                                <h3 class="font-maisonDemi md:font-maisonBold mb-1 text-size_9x leading-height_27x md:mb-1 md:text-size_9x md:leading-height_27x lg:mb-2 lg:text-size_12x lg:leading-height_32x xl:text-size_12x xl:leading-height_32x xl:mb-2">Jaket hijau, pergerakan juga hijau</h3>
                                <p class="font-maisonBook text-size_7x lg:text-size_8x leading-height_21x lg:leading-height_24x">Gojek mengurangi pemakaian plastik hingga 11.3 ton sejak Oktober 2020</p>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="px-5 md:px-0 lg:px-0">
                                <div class="px-12 md:px-10 xl:px-6">
                                    <div class="c-feature-illustration__ratio">

                                        <dotlottie-player autoplay loop mode="normal" data-src="https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/images/feature/4.lottie" class="mb-3 md:mb-4 xl:mb-5 c-feature-illustration__img" data-sal="fade" data-sal-duration="800" data-sal-delay="500" data-sal-once="true">
                                        </dotlottie-player>

                                    </div>
                                </div>
                                <h3 class="font-maisonDemi md:font-maisonBold mb-1 text-size_9x leading-height_27x md:mb-1 md:text-size_9x md:leading-height_27x lg:mb-2 lg:text-size_12x lg:leading-height_32x xl:text-size_12x xl:leading-height_32x xl:mb-2">Tumbuh 80% sejak pandemi</h3>
                                <p class="font-maisonBook text-size_7x lg:text-size_8x leading-height_21x lg:leading-height_24x">Mitra Food merchants naik 80% sejak pandemi berkat solusi digitalisasi Gojek untuk UMKM.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <section class="c-feature-card-spot-brand bg-white flex flex-col justify-center pt-8 md:pt-16 xl:pt-5 pb-16 md:pb-30" data-theme="light" data-cy="c-feature-card-spot-brand">
            <div>
                <div class="container mx-auto">
                    <div class="text-center mb-10 md:mb-12 xl:mb-14">
                        <h2 class="font-maisonExtendedBold md:font-maisonExtendedExtraBold
                    font-bold md:font-extrabold
                    tracking-normal xl:tracking-title
                    text-size_13x md:text-size_24x
                    leading-height_36x md:leading-height_64x">
                            Skala kami</h2>
                        <a href="./employee" data-gtm="2021_homepage_scale_withus">
                            <button class="btn btn-solid btn-solid--primary mt-6 md:mt-7" data-gtm="2021_homepage_scale_withus">Gabung</button>
                        </a>
                    </div>
                </div>
                <div class="md:container md:mx-auto">
                    <div class="c-feature-card-spot-brand__cards w-full flex flex-wrap md:grid
                mb-7 md:mb-0
                md:grid-cols-2 xl:grid-cols-4
                md:gap-x-6 md:gap-y-12 lg:gap-x-12 lg:gap-y-14 xl:gap-8" data-module="slider" data-slider-screen="sm" data-slider="{'controls' : false, 'edgePadding' : 20, 'items' : 1.3, 'gutter' : 20, 'swipeAngle' : 25 }">

                        <div class="c-feature-card-spot-brand__card--auto transition-height-width">
                            <div class="flex w-full h-full pt-15 md:pt-20 transition-height-width">
                                <div class="bg-green-thin3 shadow-green rounded-r40 flex flex-col w-full transition-height-width">

                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/170_mil.png" alt="Gojek" class="c-feature-card-spot-brand__image lazy w-full" width="300px" height="200px">

                                    <div class="p-10 pt-0">
                                        <h3 class="c-feature-card-spot-brand__card-title">190 juta+</h3>
                                        <p class="c-feature-card-spot-brand__card-desc mt-3">jumlah install aplikasi kami.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="c-feature-card-spot-brand__card--auto transition-height-width">
                            <div class="flex w-full h-full pt-15 md:pt-20 transition-height-width">
                                <div class="bg-purple-thin4 shadow-purple rounded-r40 flex flex-col w-full transition-height-width">

                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/2_million.png" alt="Gojek" class="c-feature-card-spot-brand__image lazy w-full" width="300px" height="200px">

                                    <div class="p-10 pt-0">
                                        <h3 class="c-feature-card-spot-brand__card-title">2 juta+</h3>
                                        <p class="c-feature-card-spot-brand__card-desc mt-3">mitra Driver yang sudah bergabung dengan kami</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="c-feature-card-spot-brand__card--auto transition-height-width">
                            <div class="flex w-full h-full pt-15 md:pt-20 transition-height-width">
                                <div class="bg-orange-thin4 shadow-orange rounded-r40 flex flex-col w-full transition-height-width">

                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/50_million.png" alt="Gojek" class="c-feature-card-spot-brand__image lazy w-full" width="300px" height="200px">

                                    <div class="p-10 pt-0">
                                        <h3 class="c-feature-card-spot-brand__card-title">900.000+</h3>
                                        <p class="c-feature-card-spot-brand__card-desc mt-3">jumlah mitra GoFood</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="c-feature-card-spot-brand__card--auto transition-height-width">
                            <div class="flex w-full h-full pt-15 md:pt-20 transition-height-width">
                                <div class="bg-blue-thin4 shadow-blue rounded-r40 flex flex-col w-full transition-height-width">

                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/12x_growth.png" alt="Gojek" class="c-feature-card-spot-brand__image lazy w-full" width="300px" height="200px">

                                    <div class="p-10 pt-0">
                                        <h3 class="c-feature-card-spot-brand__card-title">2.448x</h3>
                                        <p class="c-feature-card-spot-brand__card-desc mt-3">lipat kenaikan pengunduhan aplikasi Gojek dari 2015 sampai 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <section class="c-banners-marketing relative h-screen w-full bg-gray-thin1 onlyMobile:transition-height onlyMobile:duration-300 onlyMobile:delay-300" data-theme="dark" data-module="sal">
            <div data-module="banner" data-loop="false" class="c-banner-marketing">
                <!-- 
            Item of banner marketing
            * class .active for show bnnner
            * default item of hidden content
         -->



                <div class="c-banner-marketing__item" data-type="image">
                    <div class="w-full h-screen overflow-hidden relative onlyMobile:transition-height onlyMobile:duration-300 onlyMobile:delay-300">

                        <div class="u-lazy">
                            <!--
                        <picture>
                            <source data-srcset="https://lelogama.go-jek.com/prime/upload/image/WEB_HEADER_Dekstop_Version.jpg" media="(min-width: 1400px)" />
                <source data-srcset="" media="(min-width: 1024px)" />
                <source data-srcset="" media="(min-width: 640px)" />
                <source data-srcset="https://lelogama.go-jek.com/prime/upload/image/WEB_HEADER_Mobile_version.jpg" media="(min-width: 0px)" />
                <img data-src="https://lelogama.go-jek.com/prime/upload/image/WEB_HEADER_Dekstop_Version.jpg" alt="Gojek Indonesia" class="lazy c-banner-marketing__image">
                        </picture>
                      -->



                            <picture>

                                <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/6f/8c/6f8c50f8dd176becb02d576c6dfd1354.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/6d/20/6d20e56ca21a82c8f82cb0b53b846532.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/b1/fc/b1fcb926d9e274c421701447140e8dfc.webp 3000w" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" media="(min-width: 1280px)" type="image/webp" />


                                <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/97/2c/972cc187147d51c483230d720bddd57b.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/75/31/75312f32d910f849625e89436867c376.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/58/4e/584e6d6a19137844a646dce317612fde.jpg 3000w" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" media="(min-width: 1280px)" type="image/jpeg" />






                                <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/71/1a/711af467cd160b303d4b0a949a0fae1e.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/5f/de/5fde3c5cbdf629e46d084b07a81c0c0a.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/ec/50/ec50f0e6abb49ee89ec64d63505913fc.webp 3000w" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" media="(min-width: 0px)" type="image/webp" />


                                <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/ee/69/ee69b7d272785802e3e7d9823482c144.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/81/e1/81e1db8a306f4f0dee82356038b59bee.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/66/95/66952b1ada6bbfe1048ba8b43542a75f.jpg 3000w" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" media="(min-width: 0px)" type="image/jpeg" />


                                <img src="" data-src="https://lelogama.go-jek.com/prime/upload/image/WEB_HEADER_Mobile_version.jpg" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" />
                            </picture>



                            <div class="u-lazy__placeholder"></div>
                        </div>


                    </div>
                    <div class="c-banner-marketing__content c-banner-marketing__overlay onlyMobile:transition-height onlyMobile:duration-300 onlyMobile:delay-300">
                        <div class="w-full">
                            <div class="container mx-auto">
                                <div class="w-full" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300" data-sal-once="true">








                                    <div class="mt-8 sm:mt-8 xl:mt-10">
                                        <a href="https://www.gojek.com/pesandarirumah/" data-gtm="2021_homepage_marketing_pesandarirumah_knowmore">
                                            <button class="btn btn-solid btn-solid--primary" data-gtm="2021_homepage_marketing_pesandarirumah_knowmore">Selengkapnya</button>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="c-banner-marketing__item" data-type="image">
                    <div class="w-full h-screen overflow-hidden relative onlyMobile:transition-height onlyMobile:duration-300 onlyMobile:delay-300">

                        <div class="u-lazy">
                            <!--
                        <picture>
                            <source data-srcset="https://lelogama.go-jek.com/prime/upload/image/J3K_desktop_no-title_img.jpg" media="(min-width: 1400px)" />
                <source data-srcset="" media="(min-width: 1024px)" />
                <source data-srcset="" media="(min-width: 640px)" />
                <source data-srcset="https://lelogama.go-jek.com/prime/upload/image/J3K_mobile_no-title_img.jpg" media="(min-width: 0px)" />
                <img data-src="https://lelogama.go-jek.com/prime/upload/image/J3K_desktop_no-title_img.jpg" alt="Gojek Indonesia" class="lazy c-banner-marketing__image">
                        </picture>
                      -->



                            <picture>

                                <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/8c/81/8c8196d0218319b3810398ee62dd9261.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/71/35/71357bb16ed48cdb6522f95ff523c309.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/de/ba/deba2f4773097477085fd9792cf14438.webp 3000w" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" media="(min-width: 1280px)" type="image/webp" />


                                <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/6b/e9/6be96681f47cbc03c0af9ea38fa13672.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/c0/da/c0da5f9d8acf86e3ae8168e04080899f.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/1a/73/1a73f445f3fb8dd8add1dd32e72c9b8b.jpg 3000w" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" media="(min-width: 1280px)" type="image/jpeg" />






                                <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/cd/7c/cd7cf6249a48ed3f1bebd431215b2e4f.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/f0/8d/f08d5f2bd1252f9d0b57c9f53c8e6a60.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/14/1d/141d316982170d687a3bab2ebbe15c42.webp 3000w" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" media="(min-width: 0px)" type="image/webp" />


                                <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/2b/87/2b87afa6817ed78481415fce7d0c1b4e.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/20/c3/20c39904101905abd4542091643fa1eb.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/77/ba/77ba3a1ea3586e4092ab64f3d9eae4e5.jpg 3000w" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" media="(min-width: 0px)" type="image/jpeg" />


                                <img src="" data-src="https://lelogama.go-jek.com/prime/upload/image/J3K_mobile_no-title_img.jpg" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" />
                            </picture>



                            <div class="u-lazy__placeholder"></div>
                        </div>


                    </div>
                    <div class="c-banner-marketing__content c-banner-marketing__overlay onlyMobile:transition-height onlyMobile:duration-300 onlyMobile:delay-300">
                        <div class="w-full">
                            <div class="container mx-auto">
                                <div class="w-full" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300" data-sal-once="true">








                                    <div class="mt-8 sm:mt-8 xl:mt-10">
                                        <a href="https://www.gojek.com/j3k/" data-gtm="2021_homepage_marketing_knowmore">
                                            <button class="btn btn-solid btn-solid--primary" data-gtm="2021_homepage_marketing_knowmore">Selengkapnya</button>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="c-banner-marketing__item" data-type="image">
                    <div class="w-full h-screen overflow-hidden relative onlyMobile:transition-height onlyMobile:duration-300 onlyMobile:delay-300">

                        <div class="u-lazy">
                            <!--
                        <picture>
                            <source data-srcset="https://lelogama.go-jek.com/prime/upload/image/DesktopCenterImage_1.jpg" media="(min-width: 1400px)" />
                <source data-srcset="" media="(min-width: 1024px)" />
                <source data-srcset="" media="(min-width: 640px)" />
                <source data-srcset="https://lelogama.go-jek.com/prime/upload/image/MobileCenterImaeImage_1.jpg" media="(min-width: 0px)" />
                <img data-src="https://lelogama.go-jek.com/prime/upload/image/DesktopCenterImage_1.jpg" alt="Gojek Indonesia" class="lazy c-banner-marketing__image">
                        </picture>
                      -->



                            <picture>

                                <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/45/6f/456f4d88adbd96f8e2bc5ee09d23b5dc.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/59/04/590458e775eaa662cad4836326124c07.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/a6/49/a649269ee5ee58d4b561d162aa7faf55.webp 3000w" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" media="(min-width: 1280px)" type="image/webp" />


                                <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/36/46/36466c0acace340c625e2492f2b001fc.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/bd/62/bd623864c490f28a3ae95e07c29a4a93.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/dc/65/dc65224ab585d16129b6dd06f81c5219.jpg 3000w" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" media="(min-width: 1280px)" type="image/jpeg" />






                                <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/0e/f5/0ef5c45009b749f80408ae26edd2c535.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/a5/5e/a55e015701986dea1c72d7c1c55811ab.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/67/86/678650b635a5c976bff945dc14243efe.webp 3000w" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" media="(min-width: 0px)" type="image/webp" />


                                <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/78/c3/78c34439817ce4e122adad3eeea4eec6.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/95/10/95102b6a5b866594e0884124c429b095.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/29/1a/291a3daac6f9b626d3cb522aa4b6b9c7.jpg 3000w" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" media="(min-width: 0px)" type="image/jpeg" />


                                <img src="" data-src="https://lelogama.go-jek.com/prime/upload/image/MobileCenterImaeImage_1.jpg" class="lazy c-banner-marketing__image" alt="Gojek Indonesia" />
                            </picture>



                            <div class="u-lazy__placeholder"></div>
                        </div>


                    </div>
                    <div class="c-banner-marketing__content c-banner-marketing__overlay onlyMobile:transition-height onlyMobile:duration-300 onlyMobile:delay-300">
                        <div class="w-full">
                            <div class="container mx-auto">
                                <div class="w-full" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300" data-sal-once="true">




                                    <h2 class="font-maisonExtendedExtraBold 
                                    font-extrabold
                                    tracking-normal xl:tracking-title 
                                    text-size_18x md:text-size_18x xl:text-size_24x 
                                    md:leading-snug lg:leading-snug xl:leading-height_64x 
                                    text-white
                                    mb-4 sm:mb-4 xl:mb-5">
                                        Nikmati berbagai macam <br>reward khusus <br>untukmu di sini!
                                    </h2>





                                    <div class="mt-8 sm:mt-8 xl:mt-10">
                                        <a href="https://www.gojek.com/goclub/" data-gtm="2021_homepage_marketing_goclub_knowmore">
                                            <button class="btn btn-solid btn-solid--primary" data-gtm="2021_homepage_marketing_goclub_knowmore">Selengkapnya</button>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>



        <section class="c-feature-card-spot u-safe-y-120-120 u-safe-y-120-120--lg-top extra-button bg-dark relative" data-theme="dark">
            <!-- image cover-->
            <div class="c-feature-card-spot__cover absolute top-0 left-0 w-full z-0">
                <div class="u-lazy">



                    <picture>

                        <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/b2/0e/b20ef3ab07d32d1c43d04e5f8842f8a3.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/68/40/684051c333835fd3247ac31696ed81c1.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/15/d0/15d0ca41185801981410a7c5ce2087cf.webp 3000w" class="lazy w-full rounded-b-r40 sm:rounded-b-r64 lg:rounded-b-r96 object-cover" alt="Bertumbuh besar bersama Gojek" media="(min-width: 1280px)" type="image/webp" />


                        <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/42/62/4262392ad01bb988958676d6454a9adb.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/8a/7e/8a7e484874f47b6e16dde47dd3e0b48d.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/16/cf/16cf1e9d30c744d37fc0b09c4b645809.jpg 3000w" class="lazy w-full rounded-b-r40 sm:rounded-b-r64 lg:rounded-b-r96 object-cover" alt="Bertumbuh besar bersama Gojek" media="(min-width: 1280px)" type="image/jpeg" />





                        <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/59/5a/595a0804039a1c0f88f9762be412a197.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/e2/ce/e2ce6c3561473606f15e989fc83af09d.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/96/92/9692d42428875a7ad0a21810c6742659.webp 3000w" class="lazy w-full rounded-b-r40 sm:rounded-b-r64 lg:rounded-b-r96 object-cover" alt="Bertumbuh besar bersama Gojek" media="(min-width: 640px)" type="image/webp" />


                        <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/84/bb/84bb5f4ec60153be365c2aa8c7647f59.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/a0/0f/a00f326e819312e1900d73125338add0.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/61/6f/616f9e0ffdc3fda39ed96f70a6836f1a.jpg 3000w" class="lazy w-full rounded-b-r40 sm:rounded-b-r64 lg:rounded-b-r96 object-cover" alt="Bertumbuh besar bersama Gojek" media="(min-width: 640px)" type="image/jpeg" />



                        <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/79/7d/797d2dd08476a626c03870e5ca30e5a2.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/45/1c/451c5a1d7b486a9d7d6932c9b20ec167.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/e8/79/e87987f38f269307518557aef095f323.webp 3000w" class="lazy w-full rounded-b-r40 sm:rounded-b-r64 lg:rounded-b-r96 object-cover" alt="Bertumbuh besar bersama Gojek" media="(min-width: 0px)" type="image/webp" />


                        <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/ee/43/ee43293223bd7bafc2d2d7bd3cad517e.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/bb/16/bb165ae67fb56c878f2b65a94c64719f.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/75/c5/75c551ab4365166467dc11b19d93127f.jpg 3000w" class="lazy w-full rounded-b-r40 sm:rounded-b-r64 lg:rounded-b-r96 object-cover" alt="Bertumbuh besar bersama Gojek" media="(min-width: 0px)" type="image/jpeg" />


                        <img src="" data-src="https://lelogama.go-jek.com/prime/upload/image/join_the_ride_top_cover-mobile.jpg" class="lazy w-full rounded-b-r40 sm:rounded-b-r64 lg:rounded-b-r96 object-cover" alt="Bertumbuh besar bersama Gojek" />
                    </picture>



                </div>
                <div class="u-lazy__placeholder"></div>
            </div> <!-- end of image cover-->
            <div class="container mx-auto relative z-10">
                <h2 class="c-feature-card-spot__title
            font-maisonExtendedExtraBold
            font-extrabold
            xl:tracking-title
            text-size_18x lg:text-size_24x xl:text-size_36x
            leading-height_48x lg:leading-height_64x
            text-white md:text-center xl:text-left mb-21 md:mb-12 lg:mb-16 xl:mb-37">Bertumbuh besar <br>bersama Gojek</h2>
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-15 sm:gap-5 lg:gap-6 xl:gap-8">

                    <div class="c-feature-card-spot__card sm:flex sm:items-center xl:block bg-dark200 rounded-r32 sm:rounded-r40 mx-auto p-10 xl:p-16 shadow-high relative">
                        <div class="c-feature-card-spot__image sm:flex-shrink-0 -mt-20 sm:mt-0 xl:-mt-26 sm:mr-10 xl:mr-0 mb-6 xl:mb-8 sm:-ml-21 xl:ml-0">
                            <div class="u-lazy">
                                <img data-src="https://lelogama.go-jek.com/prime/upload/image/employees.svg" alt="Gojek Indonesia" class="lazy rounded-r16 sm:rounded-r24">
                            </div>
                        </div>
                        <div class="c-feature-card-spot__body">
                            <h3 class="font-maisonDemi lg:font-maisonBold xl:font-maisonExtendedBold font-medium text-size_9x lg:text-size_12x xl:text-size_13x text-white leading-height_27x lg:leading-height_32x xl:leading-height_36x mb-3 sm:mb-2 lg:mb-3 xl:mb-4">Gabung jadi GoTroops, yuk!</h3>
                            <p class="font-maisonBook font-light text-size_7x lg:text-size_8x text-white leading-height_21x lg:leading-height_24x xl:leading-height_24x mb-5 sm:mb-6 xl:mb-19">Di belakang startup dengan pertumbuhan paling tinggi di Asia Tenggara, terdapat talenta yang memiliki ide-ide cemerlang</p>
                            <a href="./employee" aria-label="Gojek Indonesia" class="btn btn-solid btn-solid--primary xl:absolute xl:bottom-0 xl:mb-16" data-gtm="2021_homepage_employee_join">Selengkapnya
                                <!--<i class="pi pi-next"></i>-->
                            </a>
                        </div>
                    </div>

                    <div class="c-feature-card-spot__card sm:flex sm:items-center xl:block bg-dark200 rounded-r32 sm:rounded-r40 mx-auto p-10 xl:p-16 shadow-high relative">
                        <div class="c-feature-card-spot__image sm:flex-shrink-0 -mt-20 sm:mt-0 xl:-mt-26 sm:mr-10 xl:mr-0 mb-6 xl:mb-8 sm:-ml-21 xl:ml-0">
                            <div class="u-lazy">
                                <img data-src="https://lelogama.go-jek.com/prime/upload/image/driver_partner.svg" alt="Gojek Indonesia" class="lazy rounded-r16 sm:rounded-r24">
                            </div>
                        </div>
                        <div class="c-feature-card-spot__body">
                            <h3 class="font-maisonDemi lg:font-maisonBold xl:font-maisonExtendedBold font-medium text-size_9x lg:text-size_12x xl:text-size_13x text-white leading-height_27x lg:leading-height_32x xl:leading-height_36x mb-3 sm:mb-2 lg:mb-3 xl:mb-4">Gabung jadi Mitra Driver</h3>
                            <p class="font-maisonBook font-light text-size_7x lg:text-size_8x text-white leading-height_21x lg:leading-height_24x xl:leading-height_24x mb-5 sm:mb-6 xl:mb-19">Kami adalah rumah bagi lebih dari 2 juta mitra driver di Asia Tenggara, yang mendapat jaminan finansial dan fasilitas kesehatan.</p>
                            <a href="./driver" aria-label="Gojek Indonesia" class="btn btn-solid btn-solid--primary xl:absolute xl:bottom-0 xl:mb-16" data-gtm="2021_homepage_driver_join">Selengkapnya
                                <!--<i class="pi pi-next"></i>-->
                            </a>
                        </div>
                    </div>

                    <div class="c-feature-card-spot__card sm:flex sm:items-center xl:block bg-dark200 rounded-r32 sm:rounded-r40 mx-auto p-10 xl:p-16 shadow-high relative">
                        <div class="c-feature-card-spot__image sm:flex-shrink-0 -mt-20 sm:mt-0 xl:-mt-26 sm:mr-10 xl:mr-0 mb-6 xl:mb-8 sm:-ml-21 xl:ml-0">
                            <div class="u-lazy">
                                <img data-src="https://lelogama.go-jek.com/prime/upload/image/merchant_partner.svg" alt="Gojek Indonesia" class="lazy rounded-r16 sm:rounded-r24">
                            </div>
                        </div>
                        <div class="c-feature-card-spot__body">
                            <h3 class="font-maisonDemi lg:font-maisonBold xl:font-maisonExtendedBold font-medium text-size_9x lg:text-size_12x xl:text-size_13x text-white leading-height_27x lg:leading-height_32x xl:leading-height_36x mb-3 sm:mb-2 lg:mb-3 xl:mb-4">Gabung jadi Mitra Usaha</h3>
                            <p class="font-maisonBook font-light text-size_7x lg:text-size_8x text-white leading-height_21x lg:leading-height_24x xl:leading-height_24x mb-5 sm:mb-6 xl:mb-19">Kami membantu 500.000+ Mitra Usaha melipatgandakan penjualan, meluaskan jangkauan, dan berkembang dengan teknologi baru.</p>
                            <a href="./merchant" aria-label="Gojek Indonesia" class="btn btn-solid btn-solid--primary xl:absolute xl:bottom-0 xl:mb-16" data-gtm="2021_homepage_merchant_join">Selengkapnya
                                <!--<i class="pi pi-next"></i>-->
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <section class="c-feature-background bg-white u-safe-y-120-120 relative flex flex-col justify-center items-center overflow-hidden rounded-t-r40 md:rounded-t-r64 lg:rounded-t-r96 -mt-10 md:-mt-16 lg:-mt-24" data-theme="light">
            <div class="h-auto w-full">
                <div class="container mx-auto text-center">
                    <h2 class="font-maisonExtendedBold md:font-maisonExtendedExtraBold
                font-bold md:font-extrabold
                tracking-normal xl:tracking-title
                text-size_13x md:text-size_18x xl:text-size_24x
                leading-height_36x md:leading-height_48x xl:leading-height_64x
                mb-8 md:mb-12 xl:mb-16 mx-auto">
                        Kerja di Gojek itu beda karena...
                    </h2>
                </div>
                <div class="relative">
                    <div class="mb-8 md:mb-10 xl:mb-0" data-module="slider" data-slider-use="{ 'module' : 'setHeight' }" data-slider="{ 'items' : 1, 'center' : false, 'gutter' : 20, 'nav' : true, 'controls' : false, 'edgePadding' : 20, 'loop' : true, 'lazyload': true }" data-slider-md="{ 'items' : 2, 'center' : true, 'gutter' : 24, 'nav' : true, 'controls' : false }" data-slider-lg="{ 'items' : 2, 'center' : true, 'gutter' : 24, 'nav' : true, 'controls' : false }" data-slider-xl="{ 'items' : 2, 'center' : true, 'gutter' : 32, 'nav' : false, 'controls' : true }">

                        <div>
                            <div class="relative bg-gray-thin6 w-full h-full overflow-hidden rounded-r24 md:rounded-r48 c-feature-background__card">
                                <div class="absolute top-0 left-0 w-full h-full">
                                    <div class="u-lazy">



                                        <picture>

                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/f0/00/f000c195116d429f0476ee97295f07e1.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/b1/6b/b16b3d1eb2109b812ffffc65032f52c5.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/9e/4b/9e4be008e40e4e5b8304e77ae6a49956.webp 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 1280px)" type="image/webp" />


                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/fc/b8/fcb863ef615812e11bf58035646de075.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/81/fd/81fdec2dc9b54c2be15cbf8f5af57562.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/8e/48/8e48d4226daa0be88efea884c7e43a6b.jpg 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 1280px)" type="image/jpeg" />





                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/f0/00/f000c195116d429f0476ee97295f07e1.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/b1/6b/b16b3d1eb2109b812ffffc65032f52c5.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/9e/4b/9e4be008e40e4e5b8304e77ae6a49956.webp 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 640px)" type="image/webp" />


                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/fc/b8/fcb863ef615812e11bf58035646de075.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/81/fd/81fdec2dc9b54c2be15cbf8f5af57562.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/8e/48/8e48d4226daa0be88efea884c7e43a6b.jpg 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 640px)" type="image/jpeg" />



                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/f0/00/f000c195116d429f0476ee97295f07e1.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/b1/6b/b16b3d1eb2109b812ffffc65032f52c5.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/9e/4b/9e4be008e40e4e5b8304e77ae6a49956.webp 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 0px)" type="image/webp" />


                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/fc/b8/fcb863ef615812e11bf58035646de075.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/81/fd/81fdec2dc9b54c2be15cbf8f5af57562.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/8e/48/8e48d4226daa0be88efea884c7e43a6b.jpg 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 0px)" type="image/jpeg" />


                                            <img src="" data-src="https://lelogama.go-jek.com/prime/upload/image/Your_work_your_time.jpg" class="lazy w-full h-full object-cover" alt="" />
                                        </picture>


                                        <div class="u-lazy__placeholder"></div>
                                    </div>
                                </div>
                                <div class="h-full w-full absolute top-0 left-0 z-10 c-feature-background__image-overlay"></div>

                                <div class="relative w-full h-full z-20 p-8 xl:p-12 flex flex-col justify-end">
                                    <div class="xl:flex w-full">
                                        <div class="xl:w-3/4">

                                            <h3 class="font-maisonDemi md:font-maisonBold xl:font-maisonExtendedBold text-white font-medium md:font-bold text-size_9x md:text-size_12x xl:text-size_13x mb-1 md:mb-2 xl:mb-3 tracking-normal leading-height_27x md:leading-height_32x xl:leading-height_36x">Asuransi kesehatan buat ayah ibu</h3>
                                            <p class="font-maisonBook font-light text-white text-size_7x md:text-size_8x tracking-normal xl:leading-height_24x mb-5 md:mb-6 xl:mb-0">Subsidi asuransi kesehatan buat kedua orang tuamu.</p>
                                        </div>
                                        <div class="xl:w-1/4 xl:flex xl:items-end">

                                            <a href="./employee/#the-perks-of-being-in-good-company" class="xl:ml-auto">
                                                <button class="btn btn-solid btn-solid--primary">Selengkapnya</button>

                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="relative bg-gray-thin6 w-full h-full overflow-hidden rounded-r24 md:rounded-r48 c-feature-background__card">
                                <div class="absolute top-0 left-0 w-full h-full">
                                    <div class="u-lazy">



                                        <picture>

                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/8a/09/8a09fa3d1037dac7f051bf9df49ec094.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/23/cd/23cdb979a6cea6146b58cf30cc98c9bc.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/62/ac/62ac3b0465bd61d4f71f1920238467bc.webp 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 1280px)" type="image/webp" />


                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/a5/49/a549fcd4976b8cdcf5d8be7905d94319.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/c5/1f/c51f838601cd773de2590609c638f29d.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/f7/5f/f75f90654385a29b7f5e1dc9378573c3.jpg 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 1280px)" type="image/jpeg" />





                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/8a/09/8a09fa3d1037dac7f051bf9df49ec094.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/23/cd/23cdb979a6cea6146b58cf30cc98c9bc.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/62/ac/62ac3b0465bd61d4f71f1920238467bc.webp 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 640px)" type="image/webp" />


                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/a5/49/a549fcd4976b8cdcf5d8be7905d94319.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/c5/1f/c51f838601cd773de2590609c638f29d.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/f7/5f/f75f90654385a29b7f5e1dc9378573c3.jpg 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 640px)" type="image/jpeg" />



                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/8a/09/8a09fa3d1037dac7f051bf9df49ec094.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/23/cd/23cdb979a6cea6146b58cf30cc98c9bc.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/62/ac/62ac3b0465bd61d4f71f1920238467bc.webp 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 0px)" type="image/webp" />


                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/a5/49/a549fcd4976b8cdcf5d8be7905d94319.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/c5/1f/c51f838601cd773de2590609c638f29d.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/f7/5f/f75f90654385a29b7f5e1dc9378573c3.jpg 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 0px)" type="image/jpeg" />


                                            <img src="" data-src="https://lelogama.go-jek.com/prime/upload/image/home__culture_share_bills_659x440.jpg" class="lazy w-full h-full object-cover" alt="" />
                                        </picture>


                                        <div class="u-lazy__placeholder"></div>
                                    </div>
                                </div>
                                <div class="h-full w-full absolute top-0 left-0 z-10 c-feature-background__image-overlay"></div>

                                <div class="relative w-full h-full z-20 p-8 xl:p-12 flex flex-col justify-end">
                                    <div class="xl:flex w-full">
                                        <div class="xl:w-3/4">

                                            <h3 class="font-maisonDemi md:font-maisonBold xl:font-maisonExtendedBold text-white font-medium md:font-bold text-size_9x md:text-size_12x xl:text-size_13x mb-1 md:mb-2 xl:mb-3 tracking-normal leading-height_27x md:leading-height_32x xl:leading-height_36x">Bermacam-macam subsidi</h3>
                                            <p class="font-maisonBook font-light text-white text-size_7x md:text-size_8x tracking-normal xl:leading-height_24x mb-5 md:mb-6 xl:mb-0">Mau beli buku, daftar gym membership, isi pulsa? Gojek bisa kasih subsidi ;).</p>
                                        </div>
                                        <div class="xl:w-1/4 xl:flex xl:items-end">

                                            <a href="./employee/#the-perks-of-being-in-good-company" class="xl:ml-auto">
                                                <button class="btn btn-solid btn-solid--primary">Selengkapnya</button>

                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="relative bg-gray-thin6 w-full h-full overflow-hidden rounded-r24 md:rounded-r48 c-feature-background__card">
                                <div class="absolute top-0 left-0 w-full h-full">
                                    <div class="u-lazy">



                                        <picture>

                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/b2/0b/b20b71eb76e6317c8de804acc2db03d6.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/73/bb/73bbe62f39da4b90d6c997b88380fa1c.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/c3/92/c392712c606a8a4a0c2a7d6fa191771f.webp 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 1280px)" type="image/webp" />


                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/65/4e/654eafa9935ba1ff189d564b854f94fc.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/8c/01/8c017b1c17b6dfab88bcf00c2dc3a52a.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/2f/43/2f43f263bb23b392584e74df69de7e57.jpg 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 1280px)" type="image/jpeg" />





                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/b2/0b/b20b71eb76e6317c8de804acc2db03d6.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/73/bb/73bbe62f39da4b90d6c997b88380fa1c.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/c3/92/c392712c606a8a4a0c2a7d6fa191771f.webp 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 640px)" type="image/webp" />


                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/65/4e/654eafa9935ba1ff189d564b854f94fc.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/8c/01/8c017b1c17b6dfab88bcf00c2dc3a52a.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/2f/43/2f43f263bb23b392584e74df69de7e57.jpg 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 640px)" type="image/jpeg" />



                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/b2/0b/b20b71eb76e6317c8de804acc2db03d6.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/73/bb/73bbe62f39da4b90d6c997b88380fa1c.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/c3/92/c392712c606a8a4a0c2a7d6fa191771f.webp 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 0px)" type="image/webp" />


                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/65/4e/654eafa9935ba1ff189d564b854f94fc.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/8c/01/8c017b1c17b6dfab88bcf00c2dc3a52a.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/2f/43/2f43f263bb23b392584e74df69de7e57.jpg 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 0px)" type="image/jpeg" />


                                            <img src="" data-src="https://lelogama.go-jek.com/prime/upload/image/Fly_for_work__fun.jpg" class="lazy w-full h-full object-cover" alt="" />
                                        </picture>


                                        <div class="u-lazy__placeholder"></div>
                                    </div>
                                </div>
                                <div class="h-full w-full absolute top-0 left-0 z-10 c-feature-background__image-overlay"></div>

                                <div class="relative w-full h-full z-20 p-8 xl:p-12 flex flex-col justify-end">
                                    <div class="xl:flex w-full">
                                        <div class="xl:w-3/4">

                                            <h3 class="font-maisonDemi md:font-maisonBold xl:font-maisonExtendedBold text-white font-medium md:font-bold text-size_9x md:text-size_12x xl:text-size_13x mb-1 md:mb-2 xl:mb-3 tracking-normal leading-height_27x md:leading-height_32x xl:leading-height_36x">Kolaborasi antar budaya</h3>
                                            <p class="font-maisonBook font-light text-white text-size_7x md:text-size_8x tracking-normal xl:leading-height_24x mb-5 md:mb-6 xl:mb-0">Bisa kerjasama dengan GoTroops dari berbagai negara!</p>
                                        </div>
                                        <div class="xl:w-1/4 xl:flex xl:items-end">

                                            <a href="./employee/#the-perks-of-being-in-good-company" class="xl:ml-auto">
                                                <button class="btn btn-solid btn-solid--primary">Selengkapnya</button>

                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="relative bg-gray-thin6 w-full h-full overflow-hidden rounded-r24 md:rounded-r48 c-feature-background__card">
                                <div class="absolute top-0 left-0 w-full h-full">
                                    <div class="u-lazy">



                                        <picture>

                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/d9/82/d9822a8cbeb4f162573169c807ea0ece.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/18/5b/185be9baef4bcbf2a94df9839ba38599.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/0c/61/0c6106ede99edb7281ac73e4bc5e8f4e.webp 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 1280px)" type="image/webp" />


                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/56/70/5670b0ef832316b3671686884f90ac21.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/b1/8a/b18a5385b9634ad5f8313cc3e206af9f.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/8a/ec/8aec1824f54a9ba6bbb7cb5e9ac8372b.jpg 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 1280px)" type="image/jpeg" />





                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/d9/82/d9822a8cbeb4f162573169c807ea0ece.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/18/5b/185be9baef4bcbf2a94df9839ba38599.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/0c/61/0c6106ede99edb7281ac73e4bc5e8f4e.webp 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 640px)" type="image/webp" />


                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/56/70/5670b0ef832316b3671686884f90ac21.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/b1/8a/b18a5385b9634ad5f8313cc3e206af9f.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/8a/ec/8aec1824f54a9ba6bbb7cb5e9ac8372b.jpg 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 640px)" type="image/jpeg" />



                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/d9/82/d9822a8cbeb4f162573169c807ea0ece.webp 400w, https://lelogama.go-jek.com/prime/upload/cache/18/5b/185be9baef4bcbf2a94df9839ba38599.webp 800w, https://lelogama.go-jek.com/prime/upload/cache/0c/61/0c6106ede99edb7281ac73e4bc5e8f4e.webp 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 0px)" type="image/webp" />


                                            <source srcset="" data-srcset="https://lelogama.go-jek.com/prime/upload/cache/56/70/5670b0ef832316b3671686884f90ac21.jpg 400w, https://lelogama.go-jek.com/prime/upload/cache/b1/8a/b18a5385b9634ad5f8313cc3e206af9f.jpg 800w, https://lelogama.go-jek.com/prime/upload/cache/8a/ec/8aec1824f54a9ba6bbb7cb5e9ac8372b.jpg 3000w" class="lazy w-full h-full object-cover" alt="" media="(min-width: 0px)" type="image/jpeg" />


                                            <img src="" data-src="https://lelogama.go-jek.com/prime/upload/image/We_talk_about_mental_health.jpg" class="lazy w-full h-full object-cover" alt="" />
                                        </picture>


                                        <div class="u-lazy__placeholder"></div>
                                    </div>
                                </div>
                                <div class="h-full w-full absolute top-0 left-0 z-10 c-feature-background__image-overlay"></div>

                                <div class="relative w-full h-full z-20 p-8 xl:p-12 flex flex-col justify-end">
                                    <div class="xl:flex w-full">
                                        <div class="xl:w-3/4">

                                            <h3 class="font-maisonDemi md:font-maisonBold xl:font-maisonExtendedBold text-white font-medium md:font-bold text-size_9x md:text-size_12x xl:text-size_13x mb-1 md:mb-2 xl:mb-3 tracking-normal leading-height_27x md:leading-height_32x xl:leading-height_36x">Peduli kesehatan mental</h3>
                                            <p class="font-maisonBook font-light text-white text-size_7x md:text-size_8x tracking-normal xl:leading-height_24x mb-5 md:mb-6 xl:mb-0">Konseling gratis untukmu dan keluargamu. </p>
                                        </div>
                                        <div class="xl:w-1/4 xl:flex xl:items-end">

                                            <a href="./employee/#the-perks-of-being-in-good-company" class="xl:ml-auto">
                                                <button class="btn btn-solid btn-solid--primary">Selengkapnya</button>

                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <style>
            .es-paylater__logo {
                transform: scale(1.3);
                transform-origin: left;
            }
        </style>
        <section class="c-product-intro w-full relative bg-gray-primary pb-10 md:pb-16 lg:pb-24" data-module="sal" data-theme="dark" data-cy="c-product-intro">
            <div class="md:min-h-screen flex flex-col justify-center">



                <div class="text-center c-product-intro__heading u-sal__disabled--mobile" data-sal="slide-down" data-sal-duration="700" data-module="sal-related" data-sal-relation=".c-product-intro__heading,.c-product-intro__is,above-the-fold,in,sm">
                    <h2 class="font-maisonExtendedExtraBold
                font-extrabold
                tracking-normal xl:tracking-title
                text-size_13x md:text-size_18x lg:text-size_24x 
                leading-height_36x md:leading-height_52x lg:leading-height_64x
                text-white 
                mb-5 md:mb-7 xl:mb-8">
                        Kami membangun layanan <br>untuk membantumu melewati halangan
                    </h2>
                    <a href="./products" data-gtm="2021_homepage_products_viewall">
                        <button class="btn btn-solid btn-solid--primary mx-auto" data-gtm="2021_homepage_products_viewall">Lihat semua layanan</button>
                    </a>
                </div>



                <div class="md:min-h-screen_5/4x">
                    <div class="c-product-intro__is h-auto md:min-h-screen overflow-hidden md:sticky md:top-0 relative">


                        <div class="relative flex items-center justify-center c-product-intro__slider-container">


                            <div class="c-product-intro__slider-wrapper">
                                <div class="w-full" data-module="slider" data-slider-use="{ 'module' : 'setState,productIntro' }" data-slider="{ 'items' : 3, 'startIndex' : 2, 'speed' : 500, 'navContainer' : '.c-product-intro__thumbnail-wrapper', 'navAsThumbnails': true, 'center' : true, 'controls': false, 'nav' : false, 'swipeAngle' : false, 'lazyload' : true, 'lazyloadSelector' : '.tns-lazy', 'loop' : true }" data-slider-md="{ 'items' : 5, 'startIndex' : 2, 'speed' : 300, 'center' : true, 'controls': false, 'touch': false }">





                                    <div class="transform transition-transform duration-300 ease-out" data-card-title="Transportasi &amp; Logistik" data-card-description="Mitra Driver kami sudah melakukan lebih dari 13.000 kali perjalanan bolak-balik antara bumi dan bulan.">


                                        <div class="c-product-intro__item flex justify-center flex-col">


                                            <div class="c-product-intro__card c-product-intro__card--transport relative flex items-center">
                                                <div class="c-product-intro__card-body relative z-10 mx-auto overflow-hidden">

                                                    <div class="absolute left-0 bottom-0 w-full z-n1 c-product-intro__card-body-bg-illustration">
                                                        <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-intro-card-bg-transport.svg" alt="Gojek" class="tns-lazy w-full">
                                                    </div>




                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-goride.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-gocar.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-gobluebird.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-gosend.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-gobox.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">




                                                </div>
                                                <div class="c-product-intro__card-description mx-auto hidden md:flex">
                                                    <h3 class="font-maisonBold text-white md:text-size_12x tracking-normal md:leading-height_32x md:mb-4 lg:mb-2 xl:mb-4">Transportasi & Logistik</h3>
                                                    <p class="font-maisonBook text-white md:text-size_7x font-light tracking-normal md:leading-height_21x">Mitra Driver kami sudah melakukan lebih dari 13.000 kali perjalanan bolak-balik antara bumi dan bulan.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="transform transition-transform duration-300 ease-out" data-card-title="Pembayaran" data-card-description="Dari belanja sampai donasi, kami bikin transaksi jadi mudah dan aman.">


                                        <div class="c-product-intro__item flex justify-center flex-col">


                                            <div class="c-product-intro__card c-product-intro__card--payments relative flex items-center">
                                                <div class="c-product-intro__card-body relative z-10 mx-auto overflow-hidden">

                                                    <div class="absolute left-0 bottom-0 w-full z-n1 c-product-intro__card-body-bg-illustration">
                                                        <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-intro-card-bg-payments.svg" alt="Gojek" class="tns-lazy w-full">
                                                    </div>




                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-gopay.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-gotagihan.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/paylater_Horizontal_white_icons.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in es-paylater__logo">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-gosure.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">












                                                    <p class="c-product-intro__card-body-description font-maisonDemi font-medium text-white text-size_6x leading-height_18x md:text-size_7x xl:text-size_8x md:leading-height_21x xl:leading-height_20x">+2 produk lainnya</p>

                                                </div>
                                                <div class="c-product-intro__card-description mx-auto hidden md:flex">
                                                    <h3 class="font-maisonBold text-white md:text-size_12x tracking-normal md:leading-height_32x md:mb-4 lg:mb-2 xl:mb-4">Pembayaran</h3>
                                                    <p class="font-maisonBook text-white md:text-size_7x font-light tracking-normal md:leading-height_21x">Dari belanja sampai donasi, kami bikin transaksi jadi mudah dan aman.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="transform transition-transform duration-300 ease-out" data-card-title="Pesan makanan &amp; belanja" data-card-description="Mau jajan atau belanja di minimarket? Gampang, tinggal pesan dari aplikasi dan tidak perlu keluar rumah.">


                                        <div class="c-product-intro__item flex justify-center flex-col">


                                            <div class="c-product-intro__card c-product-intro__card--food relative flex items-center">
                                                <div class="c-product-intro__card-body relative z-10 mx-auto overflow-hidden">

                                                    <div class="absolute left-0 bottom-0 w-full z-n1 c-product-intro__card-body-bg-illustration">
                                                        <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-intro-card-bg-food.svg" alt="Gojek" class="tns-lazy w-full">
                                                    </div>




                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-gofood.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-gomed.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-gomart.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/Goshop_Horizontal_invert2x.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">




                                                </div>
                                                <div class="c-product-intro__card-description mx-auto hidden md:flex">
                                                    <h3 class="font-maisonBold text-white md:text-size_12x tracking-normal md:leading-height_32x md:mb-4 lg:mb-2 xl:mb-4">Pesan makanan & belanja</h3>
                                                    <p class="font-maisonBook text-white md:text-size_7x font-light tracking-normal md:leading-height_21x">Mau jajan atau belanja di minimarket? Gampang, tinggal pesan dari aplikasi dan tidak perlu keluar rumah.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="transform transition-transform duration-300 ease-out" data-card-title="Bisnis" data-card-description="Kelola restoranmu mulai dari operasional harian sampai pasang iklan.">


                                        <div class="c-product-intro__item flex justify-center flex-col">


                                            <div class="c-product-intro__card c-product-intro__card--business relative flex items-center">
                                                <div class="c-product-intro__card-body relative z-10 mx-auto overflow-hidden">

                                                    <div class="absolute left-0 bottom-0 w-full z-n1 c-product-intro__card-body-bg-illustration">
                                                        <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-intro-card-bg-business.svg" alt="Gojek" class="tns-lazy w-full">
                                                    </div>




                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-gobiz.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/Midtrans_Horizontal_white.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/Moka_Horizontal_inverse.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/GoStore_Horizontal_white.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/Selly_Horizontal_white.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">




                                                </div>
                                                <div class="c-product-intro__card-description mx-auto hidden md:flex">
                                                    <h3 class="font-maisonBold text-white md:text-size_12x tracking-normal md:leading-height_32x md:mb-4 lg:mb-2 xl:mb-4">Bisnis</h3>
                                                    <p class="font-maisonBook text-white md:text-size_7x font-light tracking-normal md:leading-height_21x">Kelola restoranmu mulai dari operasional harian sampai pasang iklan.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="transform transition-transform duration-300 ease-out" data-card-title="Hiburan" data-card-description="Tonton film favoritmu lewat streaming online, beli tiket nonton film atau konser, main games, dan lain-lain.">


                                        <div class="c-product-intro__item flex justify-center flex-col">


                                            <div class="c-product-intro__card c-product-intro__card--entertainment relative flex items-center">
                                                <div class="c-product-intro__card-body relative z-10 mx-auto overflow-hidden">

                                                    <div class="absolute left-0 bottom-0 w-full z-n1 c-product-intro__card-body-bg-illustration">
                                                        <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-intro-card-bg-entertainment.svg" alt="Gojek" class="tns-lazy w-full">
                                                    </div>




                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-goplay.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">





                                                    <img data-src="https://lelogama.go-jek.com/prime/upload/image/product-gotix.svg" alt="Gojek" class="tns-lazy c-product-intro__card-body-service-logo h-4 md:h-6 mb-6 md:mb-8 xl:mb-10 md:transition-height-margin md:duration-200 md:ease-in ">




                                                </div>
                                                <div class="c-product-intro__card-description mx-auto hidden md:flex">
                                                    <h3 class="font-maisonBold text-white md:text-size_12x tracking-normal md:leading-height_32x md:mb-4 lg:mb-2 xl:mb-4">Hiburan</h3>
                                                    <p class="font-maisonBook text-white md:text-size_7x font-light tracking-normal md:leading-height_21x">Tonton film favoritmu lewat streaming online, beli tiket nonton film atau konser, main games, dan lain-lain.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div class="mx-auto hidden md:block xl:flex w-fit c-product-intro__thumbnail">
                            <div class="relative text-center">
                                <ul class="flex justify-center mx-auto c-product-intro__thumbnail-wrapper">

                                    <li class="c-product-intro__thumbnail-item c-product-intro__thumbnail-item--transport">Transportasi &amp; Logistik</li>

                                    <li class="c-product-intro__thumbnail-item c-product-intro__thumbnail-item--payments">Pembayaran</li>

                                    <li class="c-product-intro__thumbnail-item c-product-intro__thumbnail-item--food">Pesan makanan &amp; belanja</li>

                                    <li class="c-product-intro__thumbnail-item c-product-intro__thumbnail-item--business">Bisnis</li>

                                    <li class="c-product-intro__thumbnail-item c-product-intro__thumbnail-item--entertainment">Hiburan</li>

                                </ul>

                                <div class="mx-auto c-product-intro__thumbnail-cta">
                                    <a href="./products" data-gtm="2021_homepage_products_viewall">
                                        <button class="btn btn-solid btn-solid--primary">Lihat semua layanan</button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="block md:hidden w-full mx-auto text-center c-product-intro__copy mb-12">
                    <div class="container mx-auto">
                        <h3 class="font-maisonDemi font-medium leading-height_27x text-white text-size_9x mb-3 c-product-intro__copy-title"></h3>
                        <p class="font-maisonBook text-white text-size_7x leading-height_21x tracking-normal c-product-intro__copy-description"></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-feature-general-impact-fold w-full onlyMobile:transition-height onlyMobile:duration-300 onlyMobile:delay-300 xl:min-h-screen relative bg-blue-thin4 rounded-t-r40 md:rounded-t-r64 lg:rounded-t-r96 -mt-10 md:-mt-16 lg:-mt-24" data-theme="">
            <div class="c-feature-general-impact-fold__heading text-center mx-auto mt-12 md:mt-20 onlyTabletLgPortrait:mt-40 xl:mt-30 md:mb-11 lg:mb-6 onlyTabletLgPortrait:mb-20 xl:mb-3" data-sal="slide-down" data-sal-duration="500" data-sal-delay="200" data-module="sal-related" data-sal-relation=".c-feature-general-impact-fold__heading,.c-feature-general-impact-fold__is,below-the-fold,out,none">
                <h2 class="font-maisonExtendedBold md:font-maisonExtendedExtraBold
            font-bold md:font-extrabold
            tracking-normal xl:tracking-title
            text-size_13x md:text-size_18x xl:text-size_24x
            leading-height_36x md:leading-height_54x xl:leading-height_64x
            text-gray-primary mb-4 md:mb-5">Ikuti perjalanan <br>kami dalam membuat <br>dampak sosial!</h2>

                <a href="https://newsroom.gojek.com/" data-gtm="2021_homepage_globe_newsroom"><button class="btn btn-solid btn-solid--primary" data-gtm="2021_homepage_globe_newsroom">Masuk Newsroom</button></a>
            </div>

            <div class="min-h-screen_3/2x xl:min-h-screen_5/4x xl:min-h-screen_3/2x relative onlyMobile:transition-height onlyMobile:duration-300 onlyMobile:delay-300">
                <div class="h-screen md:transform sticky top-0 overflow-hidden c-feature-general-impact-fold__is">


                    <div class="c-feature-general-impact-fold__slider js-general-impact-fold__slider relative mx-auto pt-16 md:pt-20 onlyTabletLgPortrait:pt-40 lg:pb-5 xl:pt-30 xl:pb-6">

                        <div data-module="slider" data-slider-use="{ 'module': 'setHeight,generalImpact' }" data-slider="{ 'nav' : true, 'controls': false, 'center' : true, 'speed' : 700, 'loop' : true }" data-slider-md="{ 'nav' : false, 'control': true, 'center' : true }" data-slider-lg="{ 'nav' : false, 'center' : true }" data-slider-xl="{ 'nav' : false, 'center' : true }">

                            <div data-rotation-next="90" data-rotation-prev="90" class="relative">
                                <div class="w-full h-full flex justify-center items-center">
                                    <div class="text-center px-5 md:px-18 lg:px-21">
                                        <h3 class="font-maisonBold md:font-maisonExtendedBold xl:font-maisonExtendedExtraBold text-gray-primary font-bold xl:font-extrabold text-size_12x md:text-size_13x xl:text-size_18x leading-height_32x md:leading-height_39x lg:leading-height_39x xl:leading-height_54x mb-2 xl:mb-3" data-sal="slide-left" data-sal-duration="500">Indonesia</h3>
                                        <p class="font-maisonBook text-gray-primary font-light text-size_8x xl:text-size_9x leading-height_24x xl:leading-height_27x" data-sal="slide-left" data-sal-duration="700">Pada 2019, Gojek berkontribusi hingga US$7,1 triliun bagi ekonomi Indonesia, membantu pembukaan lapangan kerja, peningkatan pendapatan dan kualitas hidup.</p>
                                    </div>
                                </div>

                            </div>

                            <div data-rotation-next="91" data-rotation-prev="90" class="relative">
                                <div class="w-full h-full flex justify-center items-center">
                                    <div class="text-center px-5 md:px-18 lg:px-21">
                                        <h3 class="font-maisonBold md:font-maisonExtendedBold xl:font-maisonExtendedExtraBold text-gray-primary font-bold xl:font-extrabold text-size_12x md:text-size_13x xl:text-size_18x leading-height_32x md:leading-height_39x lg:leading-height_39x xl:leading-height_54x mb-2 xl:mb-3" data-sal="slide-left" data-sal-duration="500">Singapura</h3>
                                        <p class="font-maisonBook text-gray-primary font-light text-size_8x xl:text-size_9x leading-height_24x xl:leading-height_27x" data-sal="slide-left" data-sal-duration="700">Perkembangan Gojek sangat pesat di Singapura, 30 juta order di tahun pertama kami hadir di sini.</p>
                                    </div>
                                </div>

                            </div>

                            <div data-rotation-next="89" data-rotation-prev="91" class="relative">
                                <div class="w-full h-full flex justify-center items-center">
                                    <div class="text-center px-5 md:px-18 lg:px-21">
                                        <h3 class="font-maisonBold md:font-maisonExtendedBold xl:font-maisonExtendedExtraBold text-gray-primary font-bold xl:font-extrabold text-size_12x md:text-size_13x xl:text-size_18x leading-height_32x md:leading-height_39x lg:leading-height_39x xl:leading-height_54x mb-2 xl:mb-3" data-sal="slide-left" data-sal-duration="500">Vietnam</h3>
                                        <p class="font-maisonBook text-gray-primary font-light text-size_8x xl:text-size_9x leading-height_24x xl:leading-height_27x" data-sal="slide-left" data-sal-duration="700">Saat ini, Gojek memiliki lebih dari 80.000 Mitra Usaha dan 150.000 Mitra Driver di Vietnam yang selalu siap membantu para pelanggan.</p>
                                    </div>
                                </div>

                            </div>

                            <div data-rotation-next="90" data-rotation-prev="89" class="relative">
                                <div class="w-full h-full flex justify-center items-center">
                                    <div class="text-center px-5 md:px-18 lg:px-21">
                                        <h3 class="font-maisonBold md:font-maisonExtendedBold xl:font-maisonExtendedExtraBold text-gray-primary font-bold xl:font-extrabold text-size_12x md:text-size_13x xl:text-size_18x leading-height_32x md:leading-height_39x lg:leading-height_39x xl:leading-height_54x mb-2 xl:mb-3" data-sal="slide-left" data-sal-duration="500">Thailand</h3>
                                        <p class="font-maisonBook text-gray-primary font-light text-size_8x xl:text-size_9x leading-height_24x xl:leading-height_27x" data-sal="slide-left" data-sal-duration="700">Dalam 1 tahun aja, kami menyelesaikan 20 juta order. Gojek melaju pesat di Thailand!</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <a href="https://newsroom.gojek.com/" class="block text-center mx-auto"><button class="btn btn-solid btn-solid--primary mx-auto mt-6 xl:mt-7">Masuk Newsroom</button></a>
                        <button type="button" aria-label="prev" class="c-feature-general-impact-fold__slider-arrow c-feature-general-impact-fold__slider-arrow--prev js-slider__nav-prev rounded-r48 overflow-hidden flex justify-center items-center z-20">
                            <i class="pi pi-back_ios align-middle"></i>
                        </button>
                        <button type="button" aria-label="next" class="c-feature-general-impact-fold__slider-arrow c-feature-general-impact-fold__slider-arrow--next js-slider__nav-next rounded-r48 overflow-hidden flex justify-center items-center z-20">
                            <i class="pi pi-next_ios align-middle"></i>
                        </button>
                    </div>
                    <div class="c-feature-general-impact-fold__illustration-placeholder js-general-impact-fold__illustration-placeholder relative">
                        <div class="absolute z-n1 left-0 right-0 top-50p transform -translate-y-1/2 c-feature-general-impact-fold__illustration-background">
                            <img data-src="https://lelogama.go-jek.com/prime/upload/image/general-impact-cloud.svg" alt="Kami melaju menembus batas" class="lazy w-full">
                        </div>

                        <div class="c-feature-general-impact-fold__animated-float w-full">
                            <img data-src="https://lelogama.go-jek.com/prime/upload/image/General_impact_-_Globe.svg" alt="Kami melaju menembus batas" class="lazy js-general-impact__illustration mx-auto transform transition-transform origin-center duration-700 ease-in-out rotate-0 w-full h-auto pointer-events-none" data-angle="" data-initial-angle="0">
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section class="c-feature-download-apps relative bg-dark200 min-h-screen sm:min-h-0 xl:min-h-screen" data-module="sal" data-theme="light">
            <!-- image cover-->
            <div class="c-feature-download-apps__cover relative sm:absolute xl:relative top-0 left-0 w-full h-full" data-sal="fade" data-sal-delay="300" data-sal-duration="1000" data-sal-once="true">
                <div class="u-lazy">
                    <picture>
                        <source data-srcset="https://lelogama.go-jek.com/prime/upload/image/download-desktop.png" media="(min-width: 1400px)" />
                        <source data-srcset="https://lelogama.go-jek.com/prime/upload/image/download-tablet_large.png" media="(min-width: 1024px)" />
                        <source data-srcset="https://lelogama.go-jek.com/prime/upload/image/download-tablet.png" media="(min-width: 640px)" />
                        <source data-srcset="https://lelogama.go-jek.com/prime/upload/image/download-mobile.png" media="(min-width: 0px)" />
                        <img data-src="https://lelogama.go-jek.com/prime/upload/image/download-desktop.png" alt="Gojek Indonesia" class="lazy w-full h-full object-cover min-h-screen sm:min-h-0 xl:min-h-screen" />
                    </picture>
                </div>
                <div class="u-lazy__placeholder"></div>
            </div> <!-- end of image cover-->
            <div class="container absolute top-0 left-0 right-0 mx-auto sm:h-full flex justify-center sm:justify-start items-center">
                <div class="c-feature-download-apps__content text-center sm:text-left">
                    <h2 class="font-maisonExtendedExtraBold
                font-extrabold
                tracking-normal xl:tracking-title
                text-size_13x md:text-size_18x xl:text-size_24x
                leading-height_36x md:leading-height_48x xl:leading-height_64x
                text-white mt-12 md:mt-0 mb-8 xl:mb-10">Belum punya<br> aplikasi Gojek?<br>Yuk, unduh <br>sekarang juga.</h2>
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start items-center">
                        <a href="https://gojek.onelink.me/2351932542?af_force_deeplink=true&amp;pid=Go-Jek_Web&amp;is_retargeting=false&amp;af_click_lookback=7d&amp;c=Website_Footer_Download_Button_Apple_App_Store&amp;af_adset=Apple_App_Store&amp;af_ad=Apple_App_Store&amp;af_channel=Button&amp;af_dp=gojek://home&amp;af_web_dp=https://apps.apple.com/id/app/gojek/id944875099&amp;utm_source=Go-Jek_Web&amp;utm_medium=Button&amp;utm_campaign=Website_Footer_Download_Button_Apple_App_Store&amp;utm_content=Apple_App_Store" rel="noreferrer" target="_blank" aria-label="Unduh Gojek dari App Store" class="btn btn-solid btn-solid--light flex items-center mb-6 sm:mb-0 sm:mr-6" data-gtm="2021_homepage_appstore"><i class="pi pi-appstore mr-2"></i> App store</a>
                        <a href="https://gojek.onelink.me/2351932542?af_force_deeplink=true&amp;pid=Go-Jek_Web&amp;is_retargeting=false&amp;af_click_lookback=7d&amp;c=Website_Footer_Download_Button_Google_Play_Store&amp;af_adset=Play_Store_Android&amp;af_ad=Play_Store_Android&amp;af_channel=Button&amp;af_dp=gojek://home&amp;af_web_dp=https://play.google.com/store/apps/details?id=com.gojek.app&amp;utm_source=Go-Jek_Web&amp;utm_medium=Button&amp;utm_campaign=Website_Footer_Download_Button_Google_Play_Store&amp;utm_content=Play_Store_Android" rel="noreferrer" target="_blank" aria-label="Unduh Gojek dari Play Store" class="btn btn-solid btn-solid--light flex items-center mb-0 sm:mb-0 sm:mr-0" data-gtm="2021_homepage_playstore"><i class="pi pi-playstore mr-2"></i> Play store</a>
                    </div>
                </div>
            </div>
        </section>

        <div id="install-app-mobile" class="c-flybanner xl:hidden fixed bottom-0 w-full bg-white pt-7 sm:pt-5 pb-3 sm:pb-5 z-40 transition-transform-opacity duration-300 delay-150 ease-in-out transform translate-y-full opacity-0" data-module="flybanner">
            <a href="#" aria-label="close flybanner" id="c-flybanner__close" class="c-flybanner__close absolute top-0 p-1"><i class="pi pi-cancel font-bold text-size_8x text-dark"></i></a>
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex">
                    <div class="c-flybanner__logo mr-2 sm:mr-6">
                        <img id="c-flybanner__iconapp" src="https://lelogama.go-jek.com/prime/upload/image/logo-gojek.svg" alt="Gojek Indonesia">
                    </div>
                    <div>
                        <div id="c-flybanner__title" class="font-maisonDemi font-medium text-size_8x leading-height_20x text-dark mb-1">Gojek App</div>
                        <p id="c-flybanner__description" class="font-maisonBook font-light text-size_7x leading-height_21x">Satu aplikasi dengan beragam solusi.</p>
                    </div>
                </div>
                <div>
                    <a target="_blank" rel="noopener" title="Gojek Indonesia" id="c-flybanner__link" href="https://gojek.onelink.me/2351932542?af_banner=true&amp;amp;pid=Go-Jek_Web&amp;amp;c=WebToAppBanner&amp;amp;af_adset=bottom-banner&amp;amp;af_ad=%2Fsg%2F&amp;amp;af_dp=gojek%3A%2F%2Fhome" class="btn btn-solid btn-solid--primary inline-block">Buka</a>
                </div>
            </div>
        </div>

    </main>




    <footer class="c-footer bg-gray-primary text-white py-10 md:py-16 lg:py-20">
        <div class="container mx-auto">
            <div class="c-footer__content c-footer__content--flex flex flex-wrap">


                <div class="c-footer__logo w-full mb-14">
                    <img data-src="https://lelogama.go-jek.com/prime/upload/gojek-logo-white.svg" alt="gojek logo white" width="134" height="32" class="lazy">
                </div>


                <div class="c-footer__top w-full xl:w-9/12 flex flex-wrap">


                    <div class="c-footer__company w-1/2 md:w-1/4">
                        <p class="c-footer__title mb-5 md:mb-8 lg:mb-6">Perusahaan</p>
                        <ul class="space-y-4 md:space-y-6 lg:space-y-4">

                            <li class="gtm-footer-about"><a class="c-footer__link" href="https://www.gojek.com/about/" aria-label="Tentang">Tentang</a></li>

                            <li class="gtm-footer-products"><a class="c-footer__link" href="/id-id/products/" aria-label="Produk">Produk</a></li>

                            <li class="gtm-footer-blog"><a class="c-footer__link" href="https://www.gojek.com/blog/" aria-label="Blog">Blog</a></li>

                        </ul>
                    </div>




                    <div class="c-footer__join w-1/2 md:w-1/4">
                        <p class="c-footer__title mb-5 md:mb-8 lg:mb-6">Gabung</p>
                        <ul class="space-y-4 md:space-y-6 lg:space-y-4">

                            <li class="gtm-footer-driver-partners"><a class="c-footer__link" href="/id-id/driver/" aria-label="Mitra Driver">Mitra Driver</a></li>

                            <li class="gtm-footer-merchant-partners"><a class="c-footer__link" href="/id-id/merchant/" aria-label="Mitra Usaha">Mitra Usaha</a></li>

                        </ul>
                    </div>




                    <div class="c-footer__careers w-1/2 md:w-1/4 mt-8 md:mt-0">
                        <p class="c-footer__title mb-5 md:mb-8 lg:mb-6">Karir</p>
                        <ul class="space-y-4 md:space-y-6 lg:space-y-4">

                            <li class="gtm-footer-student"><a class="c-footer__link" href="https://career.gojek.com/students-graduates/" aria-label="Pelajar">Pelajar</a></li>

                            <li class="gtm-footer-professional"><a class="c-footer__link" href="/id-id/employee/" aria-label="Profesional">Profesional</a></li>

                        </ul>
                    </div>




                    <div class="c-footer__support w-1/2 md:w-1/4 mt-8 md:mt-0">
                        <p class="c-footer__title mb-5 md:mb-8 lg:mb-6">Hubungi kami</p>
                        <ul class="space-y-4 md:space-y-6 lg:space-y-4">

                            <li class="gtm-footer-help"><a class="c-footer__link" href="https://www.gojek.com/help/" aria-label="Bantuan">Bantuan</a></li>

                            <li class="gtm-footer-contact"><a class="c-footer__link" href="https://www.gojek.com/contact/" aria-label="Kontak">Kontak</a></li>

                        </ul>
                    </div>

                </div>
                <hr class="xl:hidden" />
                <div class="c-footer__middle w-full xl:w-3/12 flex flex-wrap md:justify-between">


                    <div class="c-footer__social w-full md:w-auto xl:w-full">
                        <p class="font-maisonDemi text-size_8x leading-height_24x md:text-size_9x md:leading-height_27x mb-4 md:mb-6 lg:mb-4">Cari tau berita terbaru</p>
                        <ul class="flex flex-row space-x-8 lg:space-x-10">

                            <li><a class="c-footer__link c-footer__link--social" href="https://web.facebook.com/gojekindonesia" aria-label="Facebook"><i class="c-footer__icon p-6px pi pi-facebook"></i></a></li>

                            <li><a class="c-footer__link c-footer__link--social" href="https://twitter.com/gojekindonesia" aria-label="Twitter"><i class="c-footer__icon p-6px pi pi-twitter"></i></a></li>

                            <li><a class="c-footer__link c-footer__link--social" href="https://www.instagram.com/gojekindonesia/" aria-label="Instagram"><i class="c-footer__icon p-6px pi pi-instagram"></i></a></li>

                            <li><a class="c-footer__link c-footer__link--social" href="https://www.youtube.com/channel/UCmlKSK0OKn_B3oPwElW4n5w" aria-label="Youtube"><i class="c-footer__icon p-6px pi pi-youtube"></i></a></li>

                        </ul>
                    </div>




                    <div class="c-footer__download w-full md:w-auto xl:w-full mt-8 md:mt-0 xl:mt-12">
                        <p class="font-maisonDemi text-size_8x leading-height_24x md:text-size_9x md:leading-height_27x mb-4 md:mb-6 lg:mb-4">Unduh aplikasi</p>
                        <ul class="md:flex space-y-6 md:space-y-0 md:space-x-8 lg:space-x-10">

                            <li class="gtm-footer-download-playstore">
                                <a href="https://play.google.com/store/apps/details?id=com.gojek.app&amp;af_force_deeplink=true&amp;pid=Go-Jek_Web&amp;is_retargeting=false&amp;af_click_lookback=7d&amp;utm_content=Play_Store_Android&amp;utm_source=Go-Jek_Web&amp;utm_medium=Button&amp;af_adset=Play_Store_Android&amp;af_ad=Play_Store_Android&amp;utm_campaign=Website_Footer_Download_Button_Google_Play_Store&amp;af_channel=Button&amp;c=Website_Footer_Download_Button_Google_Play_Store" aria-label="Play store">
                                    <button class="w-full bg-inactive-system1 text-dark font-maisonDemi font-medium h-11 leading-height_44x rounded-r24 px-6
                                md:bg-transparent md:hover:bg-transparent md:rounded-none md:p-0" aria-label="Play store">
                                        <i class="c-footer__icon--download md:p-6px pi pi-playstore md:text-white hover:text-hover-system1"></i><span class="md:hidden ml-2">Play store</span>
                                    </button>
                                </a>
                            </li>

                            <li class="gtm-footer-download-appstore">
                                <a href="https://apps.apple.com/id/app/gojek/id944875099?af_force_deeplink=true&amp;pid=Go-Jek_Web&amp;is_retargeting=false&amp;af_click_lookback=7d&amp;utm_content=Apple_App_Store&amp;utm_source=Go-Jek_Web&amp;utm_medium=Button&amp;af_adset=Apple_App_Store&amp;af_ad=Apple_App_Store&amp;utm_campaign=Website_Footer_Download_Button_Apple_App_Store&amp;af_channel=Button&amp;c=Website_Footer_Download_Button_Apple_App_Store" aria-label="App store">
                                    <button class="w-full bg-inactive-system1 text-dark font-maisonDemi font-medium h-11 leading-height_44x rounded-r24 px-6
                                md:bg-transparent md:hover:bg-transparent md:rounded-none md:p-0" aria-label="App store">
                                        <i class="c-footer__icon--download md:p-6px pi pi-appstore md:text-white hover:text-hover-system1"></i><span class="md:hidden ml-2">App store</span>
                                    </button>
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>




                <hr class="xl:hidden" />
                <div class="c-footer__bottom w-full flex flex-wrap">
                    <div class="c-footer__country w-full xl:w-auto xl:order-2 xl:ml-auto
                space-y-5 md:space-y-0 md:space-x-8 xl:space-x-12">
                        <div class="c-footer__location relative" x-data="{ isOpen: false }">
                            <div class="flex items-center justify-center font-maisonDemi">
                                <i class="pi pi-location text-size_10x mr-4"></i>
                                <button class="c-footer__dropdown-btn dropdown__toggle dropdown__toggle--dark" @click="isOpen = !isOpen" :class="{'dropdown__toggle--active' : isOpen}" aria-label="Indonesia" :aria-expanded="isOpen">
                                    <span class="leading-height_24x">Indonesia</span>
                                    <i class="pi pi-expand_more relative xl:static transition-transform duration-200 ease-out" :class="{'transform rotate-180': isOpen}"></i>
                                </button>
                            </div>
                            <div class="dropdown__menu dropdown__menu--dark dropdown__menu--footer absolute py-5" @click.away="isOpen = false" :hidden="!isOpen" x-show.transition.opacity.duration.300ms="isOpen" x-cloak>

                                <div class="dropdown__item--footer">
                                    <a href="/id/" class="dropdown__link dropdown__link--dark active" aria-label="Indonesia">
                                        <span>Indonesia</span>
                                    </a>
                                </div>

                                <div class="dropdown__item--footer">
                                    <a href="/sg/" class="dropdown__link dropdown__link--dark " aria-label="Singapore">
                                        <span>Singapore</span>
                                    </a>
                                </div>

                                <div class="dropdown__item--footer">
                                    <a href="/vn/" class="dropdown__link dropdown__link--dark " aria-label="Vietnam">
                                        <span>Vietnam</span>
                                    </a>
                                </div>

                                <div class="dropdown__item--footer">
                                    <a href="/th/" class="dropdown__link dropdown__link--dark " aria-label="Thailand">
                                        <span>Thailand</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="c-footer__language relative" x-data="{ isOpen: false }">
                            <div class="flex items-center justify-center font-maisonDemi">
                                <i class="pi pi-language_letters text-size_10x mr-4"></i>
                                <button class="c-footer__dropdown-btn dropdown__toggle dropdown__toggle--dark" @click="isOpen = !isOpen" :class="{'dropdown__toggle--active' : isOpen}" aria-label="Bahasa Indonesia" :aria-expanded="isOpen">
                                    <span class="leading-height_24x">Bahasa Indonesia</span>
                                    <i class="pi pi-expand_more relative xl:static transition-transform duration-200 ease-out" :class="{'transform rotate-180': isOpen}"></i>
                                </button>
                            </div>
                            <div class="dropdown__menu dropdown__menu--dark dropdown__menu--footer absolute py-5" @click.away="isOpen = false" :hidden="!isOpen" x-show.transition.opacity.duration.300ms="isOpen" x-cloak>

                                <div class="dropdown__item--footer">
                                    <a href="/id-id/" class="dropdown__link dropdown__link--dark active" aria-label="Bahasa Indonesia"">
                                    <span>Bahasa Indonesia</span>
                                </a>
                            </div>
                            
                            <div class=" dropdown__item--footer">
                                        <a href="/en-id/" class="dropdown__link dropdown__link--dark " aria-label="English"">
                                    <span>English</span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <hr />
                
                <div class=" c-footer__info w-full xl:w-auto xl:order-1 md:flex md:justify-center xl:justify-start xl:items-center space-y-4 md:space-y-0 md:space-x-12">

                                            <div class="c-footer__privpol gtm-footer-privpol">
                                                <a class="font-maisonBook inline-block text-size_8x leading-height_24x underline" href="https://www.gojek.com/privacy-policies/" aria-label="Kebijakan privasi">Kebijakan privasi</a>
                                            </div>

                                            <div class="c-footer__tnc gtm-footer-tnc">
                                                <a class="font-maisonBook inline-block text-size_8x leading-height_24x underline" href="https://gojek.com/terms-and-condition/" aria-label="Syarat dan Ketentuan">Syarat dan Ketentuan</a>
                                            </div>

                                            <div class="gtm-footer-data-attribution">
                                                <a class="font-maisonBook inline-block text-size_8x leading-height_24x underline" href="https://www.gojek.com/data-provider-attribution/" aria-label="Atribusi Data">Atribusi Data</a>
                                            </div>

                                </div>


                                <div class="c-footer__copyright w-full xl:order-3 text-left md:text-center xl:text-left mt-8 md:mt-10">
                                    <p class="c-footer__description">
                                        © 2021 Gojek | Gojek adalah merek milik PT Aplikasi Karya Anak Bangsa. Terdaftar pada Direktorat Jendral Kekayaan Intelektual Republik Indonesia.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
    </footer>

    <!-- modern browsers -->
    <script type="module" src="https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/js/main.js" defer></script>
    <!-- old stuff -->
    <script nomodule src="https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/js/nomodule/main.js" defer></script>





    <!-- Deferred styles -->
    <noscript id="deferred-styles">
        <link rel="stylesheet" type="text/css" href="https://d1j87w3j7cc3a6.cloudfront.net/prime/static/web/css/styles.css" />
    </noscript>
    <script>
        const loadDeferredStyles = function() {
            let addStylesNode = document.getElementById('deferred-styles');
            let replacement = document.createElement('div');
            replacement.innerHTML = addStylesNode.textContent;
            document.body.appendChild(replacement);
            addStylesNode.parentElement.removeChild(addStylesNode);
        }

        let raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
        if (raf) {
            raf(function() {
                window.setTimeout(loadDeferredStyles, 0);
            });
        } else {
            window.addEventListener('load', loadDeferredStyles);
        }
    </script>
</body>

</html>