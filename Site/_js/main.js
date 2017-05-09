$(document).ready(function(){

	$('a[href^="#"]').click(function(){  
          var the_id = $(this).attr("href");  
          $('html, body').animate({  
              scrollTop:$(the_id).offset().top-100
          }, 1000);  
          return false;  
      });



    pageUnits = '%';
	colUnits = '%';
	pagewidth = 98;
	columns = 22;
	columnwidth = 4;
	gutterwidth = 1;
	pagetopmargin = 15;
	pageleftmargin : 1;
	pagerightmargin :1;
	rowheight = 20;
	gridonload = 'off';
	makehugrid();
	setgridonload();





})