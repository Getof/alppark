$(window).ready(function(){

var urlVar = window.location.search; // получаем параметры из урла
var arrayVar = []; // массив для хранения переменных
arrayVar = (urlVar.substr(1)).split('&'); // разбираем урл на параметры
building=arrayVar[0].split('=');
var path = $(location).attr('pathname');
var path=location.pathname.split('/');

$('.fancybox').fancybox();

    switch (path[2])
    { 
        case 'saleall':

              $.ajax({
                    url: "/php/getTable.php?key="+building[1],
                    success: function (data) {
                        data = jQuery.parseJSON(data);
                                var cellFloor = 1;
                                var cellRoom = 2;
                                var cellCost = 6;

                                var Floor = new Array();
                                var Cost = new Array();
                                var Area = new Array();

var table = `<table class="flats__choose-table" id="final-table">
                        <thead style='display: none'>
                            <tr>								
                                <th >Этаж</th>
                                <th>Комнаты</th>
                                <th>Номер</th>
                                <th>Площадь, м<sup>2</sup></th>
                                <th>Стоимость за м<sup>2</sup></th>
                                <th>Общая стоимость, руб</th>
                            </tr>
                        </thead><tbody>`;

                        $.each(data, function (key, val) {
                            var summ = (Math.ceil(val['cost_m'] * val['area'])).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ').split('.')[0];

                            
                        if (val['status'] == 1) {
                            table += '<tr onClick="document.location=\'/assets/selected/?build='+val['pid']+'&id='+val['id']+'\';">' +
                                "<td class='flats__choose-table-cell'>" + val['floor'] + "</td>" +
                                "<td class='flats__choose-table-cell'>" + val['rooms'] + "</td>" +
                                "<td class='flats__choose-table-cell'>" + val['flat'] + "</td>" +
                                "<td class='flats__choose-table-cell'>" + val['area'] + "</td>" +
                                "<td class='flats__choose-table-cell'  data-data='" + val['cost_m'] + "'>" + val['cost_m'].toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ').split('.')[0] + "</td>" +
                                "<td class='flats__choose-table-cell' data-data='" + val['cost_m'] * val['area'] + "'>" + (val['cost_m'] * val['area']).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ').split('.')[0] + "</td>";


                            if (Area.indexOf(val['area']) == -1) Area.push(val['area']);
                            Cost.push(val['cost_m'] * val['area']);

                            if (Floor.indexOf(val['floor']) == -1) Floor.push(val['floor']);
                        } else {
                            table += '<tr>' +
                                "<td class='flats__choose-table-cell' style='color: lightgray'>" + val['floor'] + "</td>" +
                                "<td class='flats__choose-table-cell' style='color: lightgray'>" + val['rooms'] + "</td>" +
                                "<td class='flats__choose-table-cell' style='color: lightgray'>" + val['flat'] + "</td>" +
                                "<td class='flats__choose-table-cell' style='color: lightgray'>" + val['area'] + "</td>" +
                                "<td class='flats__choose-table-cell' style='color: lightgray' data-data='" + val['cost_m'] + "'>" + val['cost_m'].toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ').split('.')[0] + "</td>" +
                                "<td class='flats__choose-table-cell' style='color: lightgray' data-data='" + val['cost_m'] * val['area'] + "'>" + (val['cost_m'] * val['area']).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ').split('.')[0] + "</td>";


                            if (Area.indexOf(val['area']) == -1) Area.push(val['area']);
                            Cost.push(val['cost_m'] * val['area']);

                            if (Floor.indexOf(val['floor']) == -1) Floor.push(val['floor']);
                        };


                        });
                        table += "</tbody></table>";


                        Floor.sort();
                        Area.sort();
                        Cost.sort();

                        maxFloor =  Math.max.apply(Math, Floor);
                        minFloor =  Math.min.apply(Math, Floor);

                        maxArea =  Math.max.apply(Math, Area);
                        minArea =  Math.min.apply(Math, Area);

                        maxCost = Math.max.apply(Math, Cost);
                        minCost = Math.min.apply(Math, Cost);


                        area_val=[1,maxArea];
                        cost_val=[minCost,maxCost];

                        maxCost=maxCost/1000000;
                        maxCost=Math.ceil(maxCost);
                        minCost=minCost/1000000;
                        minCost=0.9;

                        area_val = [minArea,maxArea];
                        cost_val = [minCost,maxCost];

                        $('.flats__table-scroll-wrapper').html(table);           
        }
    });
    break;

        case "selected":

    //
	//(function() {
	//var init = function() {
	//RamblerShare.init('.rambler-share', {
	//	"style": {
	//		"buttonHeight": 50,
	//		"iconSize": 25,
	//		"borderRadius": 0,
	//		"buttonBackground": "#fff",
	//		"iconColor": "#b39559",
	//		"buttonBackgroundHover": "#b39559"
	//	},
	//	"utm": "utm_source=social",
	//	"counters": false,
	//	"buttons": [
	//		"vkontakte",
	//		"facebook",
	//		"odnoklassniki",
	//		"twitter"
	//	]
	//});
	//};
	//var script = document.createElement('script');
	//script.onload = init;
	//script.async = true;
	//script.src = 'https://developers.rambler.ru/likes/widget.js';
	//document.head.appendChild(script);
	//})();


        $(document).ready(function(){

        var urlVar = window.location.search;
        var arrayVar = [];
        arrayVar = (urlVar.substr(1)).split('&');
        url=arrayVar[1].split('=');
        if (arrayVar[0]=='comm') {
        		$('.ipo').remove();
        		$('h1').text('информация о помещении');
        		$('.rooms').remove();
        		}
        //Удаляем заголовки таблицы
        $("#realize_table tr:first-child").remove();

        //Парсим таблицу
        var myArr = $("#realize_table tr td").map(function() {
        //Добавляем данные в массив
        return [ $(this).text() ];
        }).get();

        //Корпус
        var korp=myArr[0];
        $("#korp").text(korp);
        //Секция
        var sekt=myArr[1];
        $("#sekt").text(sekt);

        //Этаж
        var etazh=myArr[2];
        $("#etazh").text(etazh);

        //Условный номер квартиры
        var numkv=myArr[4];
        $("#numkv").text(numkv);

        //Кол-во комнат
        var numkomn=myArr[3];
        $("#numkomn").text(numkomn);

        //Площадь, кв.м.
        var ploshad=myArr[5];
        $("#ploshad").text(ploshad);

        //Ст-ть за м2, руб.
        var pricem2=myArr[6];
        $("#pricem2").text(pricem2.split('.')[0]);


        //Cт-ть с ипотекой руб.
        var totalprice=myArr[8].replace(/\s*/g,'');
            totalprice=Number(totalprice)+120000;
        $("#ipoprice").prepend(totalprice);


        //Общая ст-ть, руб.
        var totalprice=myArr[7];
        var summ = Number(totalprice);

        $("#totalprice").prepend(totalprice.split('.')[0]);


        //Изображение планировки
        var imgSrc=$(".pic2d").attr("src");
        $(".pic").attr("src", imgSrc);
        $(".pica").attr("href", imgSrc);
		
		

        //$('.one-flat__floor-image img').attr("src", imgSrc.replace(/png/,'png')).css('max-width', '100px').css('margin-left','30px');
        //$('.one-flat__floor-image a').attr("href", imgSrc.replace(/png/,'png'));


            $('.news-soc-vk').click(function(){
                $('.b-share-icon_vkontakte').click();
            });
            $('.news-soc-ok').click(function(){
                $('.b-share-icon_odnoklassniki').click();
            });

            $('.news-soc-twit').click(function(){
                $('.b-share-icon_twitter').click();
            });
            $('.news-soc-fb').click(function(){
                $('.b-share-icon_facebook').click();
            });


        //Ссылка "Распечатать"
         var printHref='/php/pdf/pdf.php?'+arrayVar.join('&')+'&print';
        $('.print').attr('href', printHref);

        //Ссылка "PDF"
         var pdfHref='/php/pdf/pdf.php?'+arrayVar.join('&');
        $('.download-pdf').attr('href', pdfHref);

        		//Ссылка "email"
        var pdfHref='/php/pdf/pdf.php?'+arrayVar.join('&');
        $('.load-pdf').attr('href', pdfHref);

        $(".emailsend").keyup(function (e) {
        									if (e.keyCode == 13) {

        											if($(this).val() != '') {
        												var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
        												if(pattern.test($(this).val())){
        													$(this).css({'border' : '2px solid #569b44'});
        													$.ajax({
        													  url: '/flib/pdf/pdf.php?email='+$(this).val(),
        													  success: function(data){
        														  setTimeout(function()
        														  {
        															$('.emailsend').val('');
        															$('.hid').toggle('hid');
        															$(this).css({'border' : '0'});
        														  }, 1000)
        														alert(data);
        													  }
        													});
        												} else {
        													$(this).css({'border' : '2px solid #ff0000'});

        												}
        											} else {
        												$(this).css({'border' : '2px solid #ff0000'});
        											}
        									}
        								});

        								$(".emailsbmt").click(function(){
        											if($('.emailsend').val() != '') {
        												var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
        												if(pattern.test($('.emailsend').val())){
        													$('.emailsend').css({'border' : '2px solid #569b44'});
        													$.ajax({
        													  url: '/flib/pdf/pdf.php?email='+$('.emailsend').val(),
        													  success: function(data){
        														setTimeout(function()
        														  {
        															$('.emailsend').val('');
        															$('.hid').toggle('hid');
        															$('.emailsend').css({'border' : '0'});
        														  }, 1000)
        														alert(data);
        													  }
        													});
        												} else {
        													$('.emailsend').css({'border' : '2px solid #ff0000'});
        												}
        											} else {
        												$('.emailsend').css({'border' : '2px solid #ff0000'});
        											}
        								});
        });
        break;
    }
});


function getDataTable() {

    var defFloor=0, defRooms = 1, defCost =5, defArea=3;

    var floor_chk = 0;
    var rooms_chk = 0;
    var cost_chk = 0;
    var area_chk = 0;
    var floor_val=0;

    $('.flats__choose-table > tbody> tr ').each(function (c) {
        //if(c==0) return true;
        $(this).find('td').each(function (n) {

            if (n == defRooms)  //Комнаты
            {
                rooms_val = 0;
                $('.flats__rooms-controls-wrapper  input').each(function () {

                    if ($(this).prop("checked")) rooms_val = $(this).val();
                });
                var roomsInt = parseInt($(this).text());
				var roomsStr = $(this).text();
				if (roomsStr == "студия") roomsInt = 1;
                if (rooms_val == roomsInt) {
                    rooms_chk = 1;
                } else rooms_chk = 0;				

                if (rooms_val == 0) rooms_chk = 1;
            }


            if (n == defFloor) //Этаж
            {
                var floorInt = parseInt($(this).text());
                    floor_val0 = parseInt($('.js-irs-0 .irs-from ').text());
                    floor_val1 = parseInt($('.js-irs-0 .irs-to').text());

                    if (floor_val0 <= floorInt && floorInt <= floor_val1) {
                        floor_chk = 1;
                    } else floor_chk = 0;

            }

            if (n == defArea) //Площадь
            {
                var areaInt = $(this).text().replace(/\s+/g, '');
                //areaInt = areaInt.split(".");
                //areaInt = parseInt(areaInt[0]);

                area_val0 = $('.js-irs-1 .irs-from ').text();
                area_val1 = $('.js-irs-1 .irs-to ').text();

                if (area_val0 <= areaInt && areaInt <= area_val1) {
                    area_chk = 1;
                } else area_chk = 0;

            }


            if (n == defCost) //Стоимость
            {
                var costInt = $(this).text().replace(/\s+/g, '');
                costInt = costInt.split(".");
                costInt = parseInt(costInt[0])/1000000;
                cost_val0 = $('.js-irs-2 .irs-from ').text();
                cost_val1 = $('.js-irs-2 .irs-to').text();
                if (cost_val0 <= costInt && costInt <= cost_val1) {
                    cost_chk = 1;
                } else cost_chk = 0;

            }

        });

        if ( floor_chk==1 && rooms_chk == 1 && cost_chk == 1 && area_chk == 1 && !$(this).hasClass("hide")) {
                $(this).show();
                var tdSize = $('.fix-table__th');
                for (var i = 0; i < tdSize.length; i++) {
                $(this).find('td').eq(i).css('width', tdSize[i].offsetWidth);
                }
        } else
         {
            $(this).hide();
            tableHeaderSize('.flats__choose-table tbody tr td');
         }

    });

}
function url2data() // из URL открываем нужный этаж
{
	var urlVar = window.location.search; // получаем параметры из урла
	var arrayVar = []; // массив для хранения переменных
	arrayVar = (urlVar.substr(1)).split('&'); // разбираем урл на параметры
	url=arrayVar[0].split('=');

	if(url[0]=='id')
			{
				$('g').each(function () {
					if ($(this).attr('id')==url[1]) {
						plans_obj(url[1]);
						return false;
					}
				})
			}

};



function plans_obj(id)
{
			var path=location.pathname.split('/');

			var obj = jQuery.parseJSON($('#'+id).children(' path,  polygon, polyline').attr('api-data'));

				var string = "housing_id=" + obj.h_id + "&floor_id=" + obj.f_fl+'&g_id='+id;
				string = encodeURI(string);

            $.ajax({
                url: "/select-apart/assets/getfloor.php",
                data: string,
                statusCode: {
                    500: function () {
                        alert("Ошибка! Планировка этажа не найдена!");
                    }
                },
                success: function (data) {

					window.history.pushState(obj.h_id, "Title", '/'+path[1]+"?id="+id );// записываем в историю браузера
                    $('.floor__image-container').html(data);
// заполняем в форму этажа нужные поля
					$('.select-apart-page .h_shn').text(obj.h_shn);
                    $('.choose__single-floor--corp').removeClass('choose__single-floor--corp-active');
                    $('.choose__single-floor--corp-'+obj.f_se).addClass('choose__single-floor--corp-active');
					$('.select-apart-page .f_se').text(obj.f_se);
// записываем в атрибуты кнопок навигации в форме строку данных по этажу
					$('.etazh .up').data("etazh",string);
					$('.etazh .down').data("etazh",string);

				var maxFloor = $('#'+$('#'+id).parent().attr('id')).children().length;

                $('.floor__container').show();

					$('.floor__image-container path').each(function (i) { // красим по цветам в зависимости от статуса
						var obj = jQuery.parseJSON($(this).attr('api-data'));

						$('.floor__floor-count-number').text(obj.f_fl);

						switch (obj.f_s) {

							case '0': // занята
							  $(this).remove();
							break
							case '1': // свободна
								$(this).attr('fill','rgba(208,94,89, .5)');
							break
							case '2':  // фиксация
								$(this).remove();
							break
						}
					});
                	$(".floor__image-container path").mousemove( // наведение курсора на поэтажной планеровки
						function (pos) {

							if ($(this).attr('api-data') != undefined && $(this).attr('api-data')) {

							var obj2 = jQuery.parseJSON($(this).attr('api-data'));

							if(obj2.f_s == 1)
							{

							$('.one-flat__description-container').show();
	                        var summ = Math.round(obj2.f_pr * obj2.f_sq);
							$('#sekt').text(obj2.f_se);
							$('#numkomn').text(obj2.f_r);
							$('#numkv').text(obj2.f_n);
							$('#ploshad').text(obj2.f_sq);
							$('#pricem2').html(obj2.f_pr.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ').split('.')[0]+' ');
							$('#totalprice').html(summ.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
                            if (obj2.f_dscp !=0)
                             {
                                $('#totalprice').html(obj2.f_dscp.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ').split('.')[0]);
                                   $('.sa__flat-info-title--mini').text('Стоимость по акции');
                             }
						}
					}
						}).mouseleave(function () {
							$('.one-flat__description-container').hide();

						});

                        $('.floor__image-container path').click(function(){
                            var obj = jQuery.parseJSON($(this).attr('api-data'));
                            window.location.href = "selected/?id="+obj.f_id+"&build=2430";
                        });

                }
            });
}

$(document).ready(function() {
    //Custom scroll 4 documents page
    $('.documents__scroll-wrapper').perfectScrollbar();
});