<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chris_Gregory
 */

?>
  </main><!-- /#main -->
  <footer class="page-footer footer--sticky" id="colophon" role="contentinfo">
    <div class="container-fluid page-container">
      <div class="row">
        <div class="col-sm-6 col-md-6">
          <p>All work © Chris Gregory 2017</p>
        </div>
        <div class="col-sm-6 col-md-6 page-footer-nav">
          <ul class="list-inline">
            <li><a href="mailto:chris@chrisgregoryphoto.com">chris@chrisgregoryphoto.com</a></li>
            <li><span>|</span></li>
            <li><a href="tel:7872429215">787-242-9215</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

<script language="javascript">
    (function(){
      var ua = navigator.userAgent,
        isMobileWebkit = /WebKit/.test(ua) && /Mobile/.test(ua);
        
      $(function(){

        if (isMobileWebkit) {
          $(function(){
            $('#main').stellar({
              horizontalScrolling: false,
              scrollProperty: 'transform',
              positionProperty: 'transform',
              verticalOffset: -100,
              hideDistantElements: false
            });
            
            //Prevent text selection
            $(document).mousedown(function(e){
              e.preventDefault();
            });
          });

        } else {
          $(window).load(function(){
            $(window).stellar({
              parallaxBackgrounds: false,
              horizontalScrolling: false,
              positionProperty: 'transform',
              responsive: false,
              hideDistantElements: false
            });
          });

          $(function(){
  
              var $window = $(window);
          
              var scrollTime = 1;
              var scrollDistance = 320;
              $window.on("mousewheel DOMMouseScroll", function(event){
          
                  event.preventDefault(); 
          
                  var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
                  var scrollTop = $window.scrollTop();
                  var finalScroll = scrollTop - parseInt(delta*scrollDistance);
          
                  TweenMax.to($window, scrollTime, {
                      scrollTo : { y: finalScroll, autoKill:true },
                          ease: Power1.easeOut,   //For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
                          autoKill: true,
                          overwrite: 5                            
                      });
          
              });
          
          });

        }
      });

    })();
 </script>

</body>
</html>
