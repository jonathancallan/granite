<?php
$metaTitle = "AON | Portfolio by Granite";
$metaDescription = "Website design and developemnt for AON.";
$ogUrl = "https://www.granite.ie/ccpc";
?>
<?php require 'inc/head.php'; ?>

<body class="portfolio standard">
  <div class="hero-background">
    <picture>
      <source media="(min-width: 768px)" srcset="./img/work-aon-ipad-desktop.jpg">
      <img src="./img/work-aon-ipad-mobile.jpg" alt="AON" style="width:auto;">
    </picture>
  </div>
  <?php require 'inc/header.php'; ?>
  <main>
    <!-- Hero banner -->
    <section class="hero">
      <div class="container-fluid">
        <div class="row">
          <div class="col offset-sm-3">
            <nav class="backlink">
              <a href="./portfolio.php"><img src="./img/arrow.svg" alt="Portfolio"></a>
            </nav>
            <h1>AON</h1>
            <p>Aon is one of Ireland’s leading professional services firms, providing a broad range of risk, retirement and health solutions.</p>
          </div>
        </div>
      </div>
    </section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="offset-sm-3 col-sm-7 col-xl-6">
        <h2>The Brief</h2>
        <p> With over 50,000 staff in 120 countries they use proprietary data and analytics to deliver insights that reduce volatility and improve performance. Aon asked us to develop a bespoke web portal that would bring their offering to life on the web. We rose to the challenge by creating a new backend system that was a quantum leap forward for both customers and staff in terms of clarity, stability and usability. Now customers and their Aon counterparts can view and review data dynamically in a far more relevant and engaging way, saving precious time and resources. The system has launched successfully, making real improvements in customer retention, interaction and furthering Aon’s ambitious business goals.</p>
      </div>
    </div>
  </div>
</section>
<?php require './inc/portfolio-examples.php'; ?>
  </main>
  <div class="footer-cta bg-white">
    <div class="box">
      <h2>Let us help your Digital Marketing</h2>
      <p>Contact us today <a href="tel:+35318512800">+ 353 (1) 6337979</a></p>
    </div>
  </div>
<footer class="bg-white">
<?php require 'inc/footer.php'; ?>
