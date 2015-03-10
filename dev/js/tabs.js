 // tabbed content
 // http://www.entheosweb.com/tutorials/css/tabs.asp
 $(".tab_content").hide();
 $(".tab_content:first").show();

 /* if in tab mode */
 $("ul.tabs li").click(function() {

   $(".tab_content").hide();
   var activeTab = $(this).attr("rel");
   $("#" + activeTab).fadeIn();

   $("ul.tabs li").removeClass("active");
   $(this).addClass("active");

   $(".tab_drawer_heading").removeClass("d_active");
   $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

 });
 /* if in drawer mode */
 $(".tab_drawer_heading").click(function() {

   $(".tab_content").hide();
   var d_activeTab = $(this).attr("rel");
   $("#" + d_activeTab).fadeIn();

   $(".tab_drawer_heading").removeClass("d_active");
   $(this).addClass("d_active");

   $("ul.tabs li").removeClass("active");
   $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
 });


 /* Extra class "tab_last" 
    to add border to right side
    of last tab */
 $('ul.tabs li').last().addClass("tab_last");


 //Accordion voor portfolio pagina//

 $(document).ready(function() {

   // ----------------------------
   // Accordion
   // ----------------------------
   $('.accordion').click(function() {
     $('.accContent').slideUp('slow');

     if ($(this).next().is(':hidden') == true) {
       $(this).next().slideDown('slow');
     }
   });
   $('.accContent').hide(); // Hide Content
   $('.home').show(); // Show the "Home" content by Default

 });


 // ----------------------------
 // button tab voor portfolio
 // ----------------------------

 $(".tab_content").hide();
 $(".tab_content:first").show();

 /* if in tab mode */
 $("ul.tabs button").click(function() {

   $(".tab_content").hide();
   var activeTab = $(this).attr("rel");
   $("#" + activeTab).fadeIn();

   $("ul.tabs button").removeClass("active");
   $(this).addClass("active");

   $(".tab_drawer_heading").removeClass("d_active");
   $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

 });
 /* if in drawer mode */
 $(".tab_drawer_heading").click(function() {

   $(".tab_content").hide();
   var d_activeTab = $(this).attr("rel");
   $("#" + d_activeTab).fadeIn();

   $(".tab_drawer_heading").removeClass("d_active");
   $(this).addClass("d_active");

   $("ul.tabs button").removeClass("active");
   $("ul.tabs button[rel^='" + d_activeTab + "']").addClass("active");
 });

 $("ul").click(function() {
   $('html,body').animate({
       scrollTop: $(".second").offset().top
     },
     'slow');
 });
