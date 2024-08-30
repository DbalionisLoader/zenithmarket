<?php
    function drawStars($starnum){
         for ($i = 1; $i <=5; $i++){
            echo $i <=  $starnum ? '<i class="bi bi-star-fill"></i>' : '<i class="bi bi-star-fill star-empty"></i>';
        }
    }
?>


<section class="cmm-testimonial-grid">
    <div class="cmm-testimonial-grid-wrap cmm-container">
        <div class="cmm-testimonial-title">
        <h2>What Our Happy Customers Say</h2>
        </div>
         <div class="cmm-testimonial-container">     
            <div class="cmm-testimonial-element">
                <div class="cmm-review-header">
                <div class="cmm-star-wrapper">
                    <?php drawStars(5)?>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Google__G__logo.svg" width="24px" height="24px" alt="">
                </div>
                <div class="cmm-review-age">3 days ago</div>
                <div class="cmm-review-content">
                    <p class="cmm-text-content" id="textContent">Brilliant! The person I was served by was incredibly helpful and went over and above to help me out.</p>
                    <a href="#" class="cmm-read-more" id="cmmReadMore">more</a>
                </div>
                <div class="cmm-review-author">Mike Vaux</div>
            </div>
            <div class="cmm-testimonial-element">
                <div class="cmm-review-header">
                <div class="cmm-star-wrapper">
                    <?php drawStars(5)?>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Google__G__logo.svg" width="24px" height="24px" alt="">
                </div>
                <div class="cmm-review-age">3 months ago</div>
                <div class="cmm-review-content">
                    <p class="cmm-text-content" id="textContent">Best service! Wide range of car paint brands, accessories and most important professional advising! Highly recommended!</p>
                    <a href="#" class="cmm-read-more" id="cmmReadMore">more</a>
                </div>
                <div class="cmm-review-author">Iaconi Vasile</div>
            </div>
            <div class="cmm-testimonial-element">
                <div class="cmm-review-header">
                <div class="cmm-star-wrapper">
                    <?php drawStars(5)?>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Google__G__logo.svg" width="24px" height="24px" alt="">
                </div>
                <div class="cmm-review-age">4 months ago</div>
                <div class="cmm-review-content">
                    <p class="cmm-text-content" id="textContent">What wonderful helpful people they are ! They managed to match my non standard paint on my van and advised me on the different stages of repair. Nothing was too much trouble.</p>
                    <a href="#" class="cmm-read-more" id="cmmReadMore">more</a>
                </div>
                <div class="cmm-review-author">Matt Appleyard</div>
            </div>
            
       
         </div>
    </div>  
</section>

<script>
    //Order of operations:
    //Add listerer function
    //Assign constant with query selectors
    //Assign maxChar length 
    //Check if text content is longer then maximum alloweed limit
        //If true, truncate text to create short version
        //Replace original text with short version and add collapsed css state
    //Add event listerner to check if "more" is clicked
        //Prevent defeault # action
        //If and if else to check which state text is in, and either expand or collapse the text
    
    document.addEventListener('DOMContentLoaded', function(){
    const reviewList = document.querySelectorAll('.cmm-testimonial-element');

    reviewList.forEach(review => {
        const textContainer = review.querySelector('.cmm-review-content');
        const textElement = review.querySelector('#textContent');
        const readMoreButton = review.querySelector('#cmmReadMore');
       
        //Check if all review element present before maniplating
        if (textContainer && textElement && readMoreButton){
            const maxLength = 100;

        if (textElement.textContent.length > maxLength){
            const originalText = textElement.textContent; //Store original text
            const truncatedText = originalText.substring(0,maxLength); //Store cut text from original text

            //Assign cut text to replace original text
            textElement.textContent = truncatedText;
            textContainer.classList.add('collapsed');

         
        readMoreButton.addEventListener('click', function(e){
            e.preventDefault();
            if(textContainer.classList.contains('collapsed')){
                  textElement.textContent = originalText;
                  textContainer.classList.remove('collapsed');
                  textContainer.classList.add('expanded');  
                  readMoreButton.textContent= 'less';
            } else if(textContainer.classList.contains('expanded')){
                textElement.textContent = truncatedText;
                textContainer.classList.remove('expanded'); 
                textContainer.classList.add('collapsed');
                readMoreButton.textContent= 'more';
            };

        });
        }
    }
    });
});   
</script>