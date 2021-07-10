<style>
.gCdMUP {
opacity: 1;
display: none;
position: absolute;
bottom: -1.6em;
left: -0.5em;
text-align: center;
white-space: nowrap;
text-decoration: none;
font-family: Roboto, "Helvetica Neue", sans-serif;
font-size: 11px;
line-height: 11px;
width: 60px;
border: 0px;
max-width: inherit;
color: rgb(175, 175, 175) !important;
}
</style>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    .fn.liScroll = function (settings) {
      settings = .extend({
        travelocity: 0.03
      }, settings);
      return this.each(function () {
        var $strip = (this);
        $strip.addClass("newsticker")
        var stripHeight = 1;
        $strip.find("li").each(function (i) {
          stripHeight += (this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
        });
        var $mask = $strip.wrap("<div class='mask'></div>");
        var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");
        var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
        $strip.height(stripHeight);
        var totalTravel = stripHeight;
        var defTiming = totalTravel / settings.travelocity;	// thanks to Scott Waye		
        function scrollnews(spazio, tempo) {
          $strip.animate({ top: '-=' + spazio }, tempo, "linear", function () { $strip.css("top", containerHeight); scrollnews(totalTravel, defTiming); });
        }
        scrollnews(totalTravel, defTiming);
        $strip.hover(function () {
          (this).stop();
        },
          function () {
            var offset = (this).offset();
            var residualSpace = offset.top + stripHeight;
            var residualTime = residualSpace / settings.travelocity;
            scrollnews(residualSpace, residualTime);
          });
      });
    };

    $("ul#news-ticker").liScroll();

  </script>

<script>
      /* pagination plugin */
$.fn.pageMe = function(opts){
    var $this = this,
        defaults = {
            perPage: 7,
            showPrevNext: false,
            numbersPerPage: 1,
            hidePageNumbers: false
        },
        settings = $.extend(defaults, opts);
    
    var listElement = $this;
    var perPage = settings.perPage; 
    var children = listElement.children();
    var pager = $('.pagination');
    
    if (typeof settings.childSelector!="undefined") {
        children = listElement.find(settings.childSelector);
    }
    
    if (typeof settings.pagerSelector!="undefined") {
        pager = $(settings.pagerSelector);
    }
    
    var numItems = children.length;
    var numPages = Math.ceil(numItems/perPage);

    var curr = 0;
    pager.data("curr",curr);
    
    if (settings.showPrevNext){
        $('<li class="page-item"><a href="#" class="page-link prev-link">«</a></li>').appendTo(pager);
    }
    
    while(numPages > curr && (settings.hidePageNumbers==false)){
        $('<li class="page-item"><a href="#" class="page-link">'+(curr+1)+'</a></li>').appendTo(pager);
        curr++;
    }
  
    if (settings.numbersPerPage>1) {
       $('.page-link').hide();
       $('.page-link').slice(pager.data("curr"), settings.numbersPerPage).show();
    }
    
    if (settings.showPrevNext){
        $('<li class="page-item"><a href="#" class="page-link next-link">»</a></li>').appendTo(pager);
    }
    
    pager.find('.page-link:first').addClass('active');
    pager.find('.prev-link').hide();
    if (numPages<=1) {
        pager.find('.next-link').hide();
    }
  	pager.children().eq(1).addClass("active");
    
    children.hide();
    children.slice(0, perPage).show();
    
    pager.find('li .page-link').click(function(){
        var clickedPage = $(this).html().valueOf()-1;
        goTo(clickedPage,perPage);
        return false;
    });
    pager.find('li .prev-link').click(function(){
        previous();
        return false;
    });
    pager.find('li .next-link').click(function(){
        next();
        return false;
    });
    
    function previous(){
        var goToPage = parseInt(pager.data("curr")) - 1;
        goTo(goToPage);
    }
     
    function next(){
        goToPage = parseInt(pager.data("curr")) + 1;
        goTo(goToPage);
    }
    
    function goTo(page){
        var startAt = page * perPage,
            endOn = startAt + perPage;
        
        children.css('display','none').slice(startAt, endOn).show();
        
        if (page>=1) {
            pager.find('.prev-link').show();
        }
        else {
            pager.find('.prev-link').hide();
        }
        
        if (page<(numPages-1)) {
            pager.find('.next-link').show();
        }
        else {
            pager.find('.next-link').hide();
        }
        
        pager.data("curr",page);
       
        if (settings.numbersPerPage>1) {
       		$('.page-link').hide();
       		$('.page-link').slice(page, settings.numbersPerPage+page).show();
    	}
      
      	pager.children().removeClass("active");
        pager.children().eq(page+1).addClass("active");
    
    }
};
/* end plugin */

$(document).ready(function(){
    
  $('#faqlist1').pageMe({pagerSelector:'#myPager',childSelector:'.accordion-item',showPrevNext:true,hidePageNumbers:false,perPage:4});
    
});</script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
    <script type="text/javascript">
(function () {
    var options = {
        whatsapp: "+917276035350", // WhatsApp number
        call_to_action: "Message us", // Call to action
        position: "left", // Position may be 'right' or 'left'
        pre_filled_message: "Hello", // WhatsApp pre-filled message
    };
    var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60e28842649e0a0a5cca87eb/1f9qe8hca';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->