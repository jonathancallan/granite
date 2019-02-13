<?php
$metaTitle = "University College Cork | Portfolio by Granite";
$metaDescription = "Website design and developemnt for UCC.";
$ogUrl = "https://www.granite.ie/ucc";
?>
<?php require 'inc/head.php'; ?>

<body class="portfolio standard">
  <div class="hero-background">
    <picture>
      <source media="(min-width: 768px)" srcset="./img/work-ucc-medical-desktop.jpg">
      <img src="./img/work-ucc-medical-mobile.jpg" alt="UCC" style="width:auto;">
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
            <h1>UCC</h1>
            <p>University College Cork approached us with the task of researching, planning and executing a programme to deliver a World Class website for the university.</p>
          </div>
        </div>
      </div>
    </section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="offset-sm-3 col-sm-7 col-xl-6">
        <h2>Project Overview</h2>
        <p>UCC is an award-winning institution with a history of independent thinking stretching back over 170 years, proudly ranked in the top 2% of universities in the world.</p>
            <p>Our first task was to conduct quantitative analysis of key sections of the website, holding interviews with key internal stakeholders / units to understand their particular requirements, type of content and importantly, who were their target audience/s. We also undertook a comprehensive review of competitor/peer websites coupled with a range of user focus groups and surveys with the target audiences to define the needs of potential students, current students, researchers and industry users. The strategy for the new website was built on 3 key pillars: ease of use, search and content. Secondary pillars were ensuring we developed a world-class design, simplified the ease of administration and moderation via the CMS, created a real showcase for UCC and featured components that were pecific to the distinct sections / stakeholders.</p>
          <ul>
          <li>Intelligent and dynamic search function.</li>
          <li>Concise &amp; Clear Navigation.</li>
          <li>Intuitive Information Architecture.</li>
          <li>User centric, world class design.</li>
          <li>Consistent &amp; World Class UX/UI.</li>
          <li>Rich Media Integration.</li>
          <li>Content governance policy &amp; Content consistency.</li>
          <li>Flexible templates.</li>
          </ul>
          <p><a href="https://www.ucc.ie/" class="icon forward" target="_blank">Visit the site</a></p>
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
