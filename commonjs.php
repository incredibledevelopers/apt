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
  <script type="text/javascript" src="assets/js/jquery.easy-ticker.min.js"></script>
  <script src="assets/js/jquery-ui.min.js"></script>
  
<script type="text/javascript">
$(document).ready(function(){

    var myET = $('.myTicker').easyTicker({
        direction: 'up',
        easing: 'swing',
        speed: 'slow',
        interval: 2000,
        height: 'auto',
        visible: 5,
        mousePause: true,
        controls: {
            up: '.up',
            down: '.down',
            toggle: '.toggle',
            stopText: 'Stop !!!'
        },
        callbacks: {
            before: function(ul, li){
                console.log(this, ul, li);
                $(li).css('color', 'red');
            },
            after: function(ul, li){
                console.log(this, ul, li);
            }
        }
    }).data('easyTicker');

    cc = 1;
    $('.add').click(function(){
        $('.myTicker ul').append('<li>' + cc + ' Triangles can be made easily using CSS also without any images. This trick requires only div tags and some</li>');
        cc++;
    });

    $('.visible-3').click(function(){
        myET.options['visible'] = 3;

    });

    $('.visible-all').click(function(){
        myET.stop();
        myET.options['visible'] = 0 ;
        myET.start();
    });

    $('.myTicker3').easyTicker();

});
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
<script>
  /*jshint esversion: 6 */
/*globals $:true, */

var faqAccordian;
var faqSubAccordian;

var faqNextButton;
var faqSearchInput;

$(document).ready(function() {
  faqNextButton = $("#faq_btn_next");
  faqSearchInput = $('#faq_search');
  var faqAccordionInput = $("#faq_accordion");
  var faqSubAccordionInput = $(".faq_subaccordion");

  faqAccordian = faqAccordionInput.accordion({
    heightStyle: "content",
    collapsible: true,
    active: false,
    create: function(event, ui) {
      $('#faq_loading').hide();
      faqAccordionInput.show();
    }
  });

  faqSubAccordian = faqSubAccordionInput.accordion({
    heightStyle: "content",
    collapsible: true,
    active: false
  });

  faqSearchInput.on('change keyup paste click', function() {
    faqSearch();
  });

  faqNextButton.on('click', function() {
    var new_skip_index = parseInt(faqNextButton.attr('data')) + 1;
    faqNextButton.attr('data', new_skip_index);
    faqSearch();
  });

});

function faqSearch() {
  $('.faq_highlight').contents().unwrap();

  var faq_term = faqSearchInput.val().toLowerCase();
  var accord_num = 0;
  var match_found = false;
  var top_accord_id = 0;
  var last_top_accord_id = 0;
  var title = '';
  var content = '';
  var skip_count = 0;
  var skip_index = parseInt(faqNextButton.attr('data'));
  const faq_term_length = faq_term.length >= 3;

  if (faq_term_length) {

    $('.faq_subaccordion h3').each(function() {

      var h3 = $(this);
      // strip the icon tag
      title = h3.html().replace(/<[^>]+>/gim, '').toLowerCase();
      const title_includes_term = title.indexOf(faq_term) != -1;

      if (title_includes_term) {

        top_accord_id = parseInt(h3.parent().attr('id').split("_")[1]);
        const not_top_accordion = last_top_accord_id != top_accord_id;

        if (not_top_accordion) {
          last_top_accord_id = top_accord_id;
          accord_num = 0;
        }

        const not_skippable = skip_index != skip_count;

        if (not_skippable) {
          skip_count++;
        } else {
          var regex = new RegExp('(' + faq_term + ')', 'ig');
          h3.html(h3.html().replace(regex, '<span class="faq_highlight">$1</span>'));

          var params = [{
              elem: faqAccordian,
              option: "active",
              optionValue: top_accord_id

            },
            {
              elem: h3.parent(),
              option: "active",
              optionValue: accord_num
            }
          ];

          updateAccordion(params);

          match_found = true;
          return false;
        }
      } else {
        top_accord_id = parseInt(h3.parent().attr('id').split("_")[1]);

        const not_top_accordion = last_top_accord_id != top_accord_id;

        if (not_top_accordion) {
          last_top_accord_id = top_accord_id;
          accord_num = 0;
        }

        content = h3.parent().find('>div').html().replace(/<[^>]+>/gim, '').toLowerCase();
        const content_includes_term = content.indexOf(faq_term) != -1;

        if (content_includes_term) {
          const not_skippable = skip_index != skip_count;

          if (not_skippable) {
            skip_count++;
          } else {
            var regex = new RegExp('(' + faq_term + ')', 'ig');
            h3.parent().find('>div').html(content.replace(regex, '<span class="faq_highlight">$1</span>'));
            var params = [{
              elem: faqAccordian,
              option: "active",
              optionValue: top_accord_id
            }, {
              elem: h3.parent(),
              option: "active",
              optionValue: accord_num
            }];

            updateAccordion(params);

            match_found = true;
            return false;
          }
        }
      }

      accord_num = accord_num + 1;
    });
  }

  // No match close both accordions
  if (match_found == false) {

    var params = [{
      elem: faqAccordian,
      option: "active",
      optionValue: false
    }, {
      elem: faqSubAccordian,
      option: "active",
      optionValue: false
    }];

    updateAccordion(params);

    faqNextButton.attr('data', 0);
    faqNextButton.hide();
  } else {
    faqNextButton.show();
  }
}

function updateAccordion(params) {

  for (var i = 0; i < params.length; i++) {
    var elem = params[i].elem;
    var option = params[i].option;
    var optionValue = params[i].optionValue;

    elem.accordion("option", option, optionValue);
  }

}
</script>

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

<script src="toast.script.js"></script>