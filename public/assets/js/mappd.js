
var markers = [];


function init(ymaps) {
    gmarkers = [];
    amarker = [];
    markNums = [];
    var bodyWidth = $(document).width();
    if (bodyWidth > 990) {
        var zm = 16;
    } else {
         var zm = 15;
    } 
    
	var myMap = new ymaps.Map("map", {
        center:[55.707403, 84.924074],
        zoom: zm,
        controls: []
    }, {searchControlProvider: 'yandex#search',
        suppressMapOpenBlock: true,
        yandexMapDisablePoiInteractivity: true
    });
    
    /*var adrMap = new ymaps.Map("map-adr", {
        center:[55.716090, 84.923837],
        zoom: zm,
        controls: []
    }, {searchControlProvider: 'yandex#search',
        suppressMapOpenBlock: true,
        yandexMapDisablePoiInteractivity: true
    });*/

	var icons = {
        bavary: {
            icon: '/img/markers/m-bavary.png'
        },
        shop: {
            icon: '/img/markers/m-market.png'
        },
        child: {
            icon: '/img/markers/m-child.png'
        },
        school: {
            icon: '/img/markers/m-school.png'
        },
        garden: {
            icon: ''
        },
        hospital: {
            icon: '/img/markers/m-hospital.png'
        },
        bus: {
            icon: ''
        },
        sport: {
            icon: '/img/markers/m-sport.png'
        }
    };
	
	var features = [
        //0
        {
            position: [55.707403, 84.924074],
            type: 'bavary',
            descr: "ЖК Альпийский парк",
        },
        //1
        {
            position: [55.709444, 84.933985],
            type: 'child',
            descr: "Детский сад комбинированного вида № 26 Кристаллик",
        },
        //2
        {
            position: [55.709728, 84.933090],
            type: 'child',
            descr: "МБДОУ детский сад №24",
        },
        //3
        {
            position: [55.704326, 84.916342],
            type: 'child',
            descr: "МБДОУ ДСКВ №42 Огонек",
        },
        //4
        {
            position: [55.708870, 84.913102],
            type: 'child',
            descr: "МБДОУ ДСОВ №32 Пчелка",
        },
        //5
        {
            position: [55.707161, 84.914282],
            type: 'child',
            descr: "МБДОУ ДСКВ №35 Звездочка",
        },
        //6
        {
            position: [55.709572, 84.915440],
            type: 'shop',
            descr: "ТЦ Спутник",
        },
        //7
        {
            position: [55.709621, 84.917329],
            type: 'shop',
            descr: "ТЦ Витязь",
        },
        //8
        {
            position: [55.709754, 84.921170],
            type: 'shop',
            descr: "Супермаркет Холди",
        },
        //9
        {
            position: [55.708797, 84.931426],
            type: 'shop',
            descr: "Супермаркет Монетка",
        },
        //10
        {
            position: [55.705235, 84.914196],
            type: 'shop',
            descr: "Супермаркет Пятерочка",
        },
        //11
        {
            position: [55.708312, 84.929860],
            type: 'sport',
            descr: "СК Олимп",
        },
        //12
        {
            position: [55.705611, 84.915591],
            type: 'sport',
            descr: "Фитнес-клуб Атом",
        },
        //13
        {
            position: [55.710728, 84.923815],
            type: 'school',
            descr: "СОШ № 14 имени К.С.Федоровского",
        },
        //14
        {
            position: [55.710305, 84.915809],
            type: 'hospital',
            descr: "Поликлиника №2",
        },
        //15
        {
            position: [55.705293, 84.934255],
            type: 'hospital',
            descr: "МЦ Здоровье и красота",
        },
        //16
        {
            position: [55.701827, 84.922128],
            type: 'hospital',
            descr: "Детская поликлиника",
        },
        
	];
	// Create markers.
    features.forEach(function (feature) {
        var type = feature.type;

        if (type == 'bavary') {
            var marker = new ymaps.Placemark(feature.position,{
					balloonContentBody: feature.descr,
                    },{
                    iconLayout: 'default#image',
                    iconImageHref: icons[feature.type].icon, 
                    iconImageSize: [80, 80],
                    iconImageOffset: [-80, -80]				
            });
			gmarkers.push(marker);
            return;
        }

        var marker = new ymaps.Placemark(feature.position,{
					balloonContentBody: feature.descr,
                    },{
                    iconLayout: 'default#image',
                    iconImageHref: icons[feature.type].icon, 
                    iconImageSize: [60, 60],
                    iconImageOffset: [-60, -60]				
            });

		gmarkers.push(marker);
    });
	
	var clusterer = new ymaps.Clusterer({
        clusterDisableClickZoom: false,
        clusterOpenBalloonOnClick: false,
    });
	
	clusterer.add(gmarkers);
    myMap.geoObjects.add(clusterer);
    myMap.behaviors.disable('scrollZoom');
    
    /*amarker = new ymaps.Placemark([55.716090, 84.923837],{
       balloonContentBody: 'Офис продаж',
       },{
       iconLayout: 'default#image',
       iconImageHref: '/img/markers/m-bavary.png', 
       iconImageSize: [80, 80],
       iconImageOffset: [-80, -80]
    });
    
    var clustererAdr = new ymaps.Clusterer({
        clusterDisableClickZoom: false,
        clusterOpenBalloonOnClick: false,
    });
    
    clustererAdr.add(amarker);
    adrMap.geoObjects.add(clustererAdr);
    adrMap.behaviors.disable('scrollZoom');*/

}





/*ymaps.ready(init);

function init () {
	var bodyWidth = $(document).width();
    if (bodyWidth < 768) {        
        var zm = 15;
    } else if (bodyWidth < 480) {         
         var zm = 13;
    } else {        
        var zm = 16;
    }
    
    var myMap = new ymaps.Map("map", {
        center:[55.707403, 84.924074],
        zoom: zm,
        controls: []
    });
    
    var myGeoObjects = [];
    
    // Метка Логотип
    myGeoObjects[0] = new ymaps.Placemark([55.707403, 84.924074],{
                    balloonContentBody: 'ЖК БАВАРИЯ',
                    },{
                    iconLayout: 'default#image',
                    iconImageHref: '/img/markers/m-bavary.png', 
                    iconImageSize: [80, 80],
                    iconImageOffset: [-80, -80]
    });
    // Метка Детсад 1
    myGeoObjects[1] = new ymaps.Placemark([55.709436, 84.933975],{
                    balloonContentBody: 'Детский сад комбинированного вида № 26 Кристаллик',
                    },{
                    iconLayout: 'default#image',
                    iconImageHref: '/img/markers/m-child.png', 
                    iconImageSize: [60, 60],
                    iconImageOffset: [-60, -60]
    });
    
    var clusterer = new ymaps.Clusterer({
        clusterDisableClickZoom: false,
        clusterOpenBalloonOnClick: false,
    });
    
    clusterer.add(myGeoObjects);
    myMap.geoObjects.add(clusterer);
    myMap.behaviors.disable('scrollZoom');
    
}*/