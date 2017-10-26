{extends file="include/layout.tpl"}
{block name=body}
    <div class="row smallMarginTop" id="sliderHome">
        {include file='slider.tpl'}
    </div>
    
    <div id="featuredItems">
        <div class="row">
            <div class="col s3">
                <img class="z-depth-4" src="img/narwhal-275-164.png" alt="home featured items"> <!-- random image -->
            </div>
            <div class="col s3">
                <img class="z-depth-4" src="img/narwhal-manga-275-164.png" alt="home featured items"> <!-- random image -->
            </div>
            <div class="col s6">
                <img class="z-depth-4" src="img/unicorn-545-164.png" alt="home featured items"> <!-- random image -->
            </div>
        </div>
        
        <div class="row">
            <div class="col s6">
                <img class="z-depth-4" src="img/unicorn-narwhal-545-164.png" alt="home featured items"> <!-- random image -->
            </div>
            <div class="col s3">
                <img class="z-depth-4" src="img/fat-unicorn-275-164.png" alt="home featured items"> <!-- random image -->
            </div>
            <div class="col s3">
                <img class="z-depth-4" src="img/unicorn-pin-275-164.png" alt="home featured items"> <!-- random image -->
            </div>
        </div>
    
    </div>
    
    <div class="row" id="perks">
        <div class="col s4 center">
        	<img
		    src="img/nekoIconKawai.png" 
		    alt="Kawai neko picture" />
		    <h3>Free shipping</h3>
		    <p>Shipping is absolutely free for all products and all orders to anywhere in our Kawai Relay !.</p>
        </div>
        <div class="col s4 center">
            <img
		    src="img/nekoIconKawaiHeart.png" 
		    alt="Kawai neko picture" />
		    <h3>100% Satisfaction Guarantee</h3>
		    <p>If you are not satisfied with your purchases, you can return and exchange them for free. No questions asked!</p>
        </div>
        <div class="col s4 center">
            <img
		    src="img/nekoIconKawaiShiny.png" 
		    alt="Kawai neko picture" />
		    <h3>Join our community !</h3>
		    <p>We love our community, so we improve our shop each day to give opportunity to our follower to sell their creations with us ! Join now our community</p>
        </div>
    </div>
{/block}