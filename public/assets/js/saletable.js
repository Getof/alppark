/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Table header size 
function tableHeaderSize(elem) {

  var tdSize = $('.fix-table__th');

  for (var i = 0; i < tdSize.length; i++) {
    $(elem).eq(i).css('width', tdSize[i].offsetWidth);
  }
}

$(document).ready(function() {
	//Custom scroll 4 all news page
	$('.flats__table-scroll-wrapper').perfectScrollbar();
});

$(window).resize(function() {
	var windowWidth = $(window).width();
	if (windowWidth < 991) {
		$('.flats__table-scroll-wrapper').perfectScrollbar('destroy');
	} else {
		$('.flats__table-scroll-wrapper').perfectScrollbar('enable');
	}
	tableHeaderSize('.flats__choose-table tbody tr td');    

});

setTimeout(function() {
	tableHeaderSize('.flats__choose-table tbody tr td');
  tableHeaderSize('.mortgage-table tbody tr td');
}, 600);