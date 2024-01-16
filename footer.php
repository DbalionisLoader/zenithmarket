<?php 
/**
 * The template for soll.uk footer sections
 * 
 * Closing body and html tag are found here
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package zenithMarket
 */
?>

<div class="footer-wrap border-top pt-3 pb-3">
 <div class="container">
  <!-- FOOTER USEFUL LINKS SECTION -->
   <footer class="row  my-2 my-md-5">
    <div class="col-12 col-md-2  mb-3">
     <h5 class="mb-3 mt-md-0">Quick Links</h5>
      <ul class="nav flex-column">
        <li class="foot-item pe-2"><a href="/" class=" p-0">Shop</a></li>
        <li class="foot-item pe-2"><a href="#" class=" p-0">Delivery Options</a></li>
        <li class="foot-item pe-2"><a href="#" class=" p-0">Payment & pricing</a></li>
        <li class="foot-item pe-2"><a href="#" class=" p-0">How to find us</a></li>
      </ul>
    </div>
     <!-- CUSTOMER SERVICES  --> 
    <div class="col-12 col-md-3 mb-3">
      <h5 class="mb-3 mt-4 mt-md-0">Customer Services</h5>
      <ul class="nav flex-column">
        <li class="foot-item pe-2"><a href="/" class=" p-0">Shop</a></li>
        <li class="foot-item pe-2"><a href="#" class=" p-0">Delivery Options</a></li>
        <li class="foot-item pe-2"><a href="#" class=" p-0">Payment & pricing</a></li>
        <li class="foot-item pe-2"><a href="#" class=" p-0">How to find us</a></li>
      </ul>
    </div>  
     <!-- FOOTER CONTACT DETAILS AND ICONS --> 
    <div class="col-12 col-md-4 mb-3">
     <h5 class="mb-3 mt-4 mt-md-0">Contact Us</h5>
      <ul class="nav flex-column">
        <li class="foot-item pe-2 mb-3"><a href="/" class="nav-link p-0 ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/> </svg>    
        088888888</a></li>
        <li class="foot-item pe-2"><a href="#" class="nav-link p-0 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
        soll@shop.com</a></li>
      </ul>
    </div>
   <!-- FOOTER SOCIAL ICON -->
    
      <!-- FOOTER SITE LOGO AND COPY SECTION -->
    <div class="col-12 col-md-3  order-md-first mb-3 mt-4 mt-md-0 ps-lg-0">
      <a class="site-logo" href="/">
         <img src="<?php echo get_template_directory_uri(); ?>/images/soll-logo-white-500x90-wp.webp" alt="Soll Automotive Paint and Car Paint consumables logo" class="header-logo">
          </a>
    </div>
  </footer>
 </div>
</div> 
<div class="copy-notice">
    <div class="container d-flex align-items-center p-0">
    <p class="mb-0">© 2022 SOLL Automotive Paints Limited No.129114993. All Right Reserved.</p>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>    