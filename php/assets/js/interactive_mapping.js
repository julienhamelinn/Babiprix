// MAP CONFIG  ///////////////////////////////////////////////////////////////////////

var mapcolor = "#70ABF3";			// couleur de fond de carte
var mapcolor_hover = "#FF0000";		// couleur de survol de la souris
var maplines = "#FFFFFF";			// couleur des traits de séparation des régions

//


// MAP LINKS  ///////////////////////////////////////////////////////////////////////

var paths = {
			R0: {
			title: "Treicheville",
			url: "#",
			path: "296,254,284,258,270,262,259,267,250,275,248,282,253,282,261,286,267,291,274,295,284,304,292,308,300,314,305,323,297,330,287,331,288,339,280,347,278,359,276,375,283,377,289,378,292,388,292,399,298,403,305,399,310,393,321,390,330,383,336,378,341,371,351,369,360,367,356,358,353,348,349,342,360,338,370,338,364,295,355,271,340,264,334,256,333,247,328,239,317,243,308,244,300,248"
			},
			R1: {
			title: "Marcory",
			url: "#",
			path: "354,268,362,292,366,317,368,335,382,337,388,344,397,359,400,371,404,381,408,391,417,397,429,401,439,402,448,398,454,395,460,391,465,385,465,377,464,368,460,356,457,337,453,320,436,312,429,307,422,300,428,292,429,284,432,274,440,266,444,259,449,254,465,252,466,241,456,235,450,228,441,235,432,243,425,247,412,253,399,251,384,246,372,241,375,231,373,223,367,223,358,227,352,231,347,239,348,247,351,252"
			},
			R2: {
			title: "Koumassi",
			url: "#",
			path: "468,249,462,254,452,254,444,259,439,269,432,279,430,286,427,296,428,302,438,308,443,311,448,314,454,319,457,332,460,342,461,352,464,359,465,367,478,371,492,363,497,363,503,363,513,353,519,361,529,364,541,362,548,355,551,347,540,335,547,327,551,316,548,302,555,290,564,280,580,272,581,261,576,253,560,259,560,252,562,244,552,237,533,238,520,239,506,245,508,255,501,248,492,244,482,239"
			},
			R3: {
			title: "Yopougon",
			url: "#",
			path: "2,263,35,291,60,294,75,295,86,292,98,290,94,279,92,270,87,262,76,258,71,251,75,245,84,239,91,247,99,253,108,258,118,261,128,261,138,265,152,271,168,274,183,277,197,277,228,248,233,234,222,223,215,207,206,185,199,167,188,154,179,143,178,121,178,100,176,85,168,80,140,79,120,68,120,58,114,44,101,41,89,38,88,31,80,28,73,22,74,12,76,3,1,2"
			},
			R4: {
			title: "Plateau",
			url: "#",
			path: "279,243,266,241,252,231,246,215,241,195,236,179,231,164,216,148,213,139,228,130,242,129,255,127,266,128,274,134,277,155,280,173,285,195,292,210,300,216,306,223,296,231"
			},
			R5: {
			title: "Adjame",
			url: "#",
			path: "194,79,188,100,193,115,198,127,207,139,216,134,232,127,247,124,255,124,265,124,270,131,274,139,277,147,286,135,296,118,296,110,298,97,294,81,288,67,281,53,278,41,279,25,279,9,273,-1,236,2,225,11,225,24,226,35,227,49,227,59"
			},
			R6: {
			title: "Cocody",
			url: "#",
			path: "278,3,280,21,280,32,280,49,288,64,294,79,298,91,298,111,294,129,287,138,285,150,295,158,295,172,299,179,303,187,311,190,316,205,325,213,341,216,356,209,372,203,380,193,388,183,393,189,407,196,421,195,453,191,468,190,478,194,494,207,512,219,515,187,514,143,513,111,512,89,514,70,516,48,512,35,508,19,505,8,504,-1"
			},
			

}
function francefree(){
var cmap = '';
cmap += '<link rel="stylesheet" href="C:\Users\Hamel\OneDrive\3ème\Bureau\travail\Apprentissage web\Babiprix\Visuel_HTML\Nouveau dossier\assets\css\style.css" type="text/css" media="screen" />';
cmap += '<script src="cmap/jquery-1.11.1.min.js"></script>';
cmap += '<script src="interactive_mapping.js"></script>';
cmap += '<div id="legende"></div><map  name="map"><div id="areas"></div> </map><img id="canvasMap" id="image" src=""C:\Users\Hamel\OneDrive\3ème\Bureau\travail\Apprentissage web\Babiprix\Visuel_HTML\Nouveau dossier\images\carte_abidjan.jpg"" usemap="#map"/><canvas id="canvas">Mettez à jour votre navigateur Internet !</canvas>';
document.write(""+cmap+"");
}
$(function(){
        var map = $("#map");
        var areas = $("#areas");
        var canvas = $("#canvas")[0]; 
		    canvas.width = 500;                 //refaire la carte avec les bonnes dimensions attention, il faut aussi modifier les dimensions de la fenêtre de selection. Ils se trouvent dans style.css dans #canvasMap
        canvas.height = 500;
        var c = canvas.getContext("2d");
        $.fn.render = function(){ 
          this.data.apply(this, arguments);
          render();
        }
        function clear(){    
          c.fillStyle = "#FFFFFF";
          c.fillRect(0, 0, canvas.width, canvas.height);
        }
	arr = new Array();
    for (var country in paths) {
        var obj = paths[country].path;
		var lnk = paths[country].url;
		var txt = paths[country].title;
        $('<area />', {
          shape : "poly",
          coords : ""+obj+"",
          href :  ""+lnk+"",
          alt : ""+txt+""
        }).data({
          fillStyle: mapcolor,
          strokeStyle : maplines,
          lineWidth : 1.2,
		  alt : ""+txt+""
        }).mouseenter(function(){
          $(this).render({strokeStyle: maplines,
                          fillStyle : mapcolor_hover});
         $("div#legende").html(""+this.alt+"");
		 render();
        }).mouseleave(function(){
          $(this).render({strokeStyle: maplines,
                          fillStyle : mapcolor});
		$("div#legende").html("");
        }).click(function(){
          //location.href=href;
		  window.location.href;
        }).appendTo(areas);
        render();
}
        function fillStroke(fillStyle, strokeStyle){
          if (fillStyle) c.fill();
          if (strokeStyle) c.stroke();
        }
        function render(noClear){
          if (!noClear){
            clear();
          }
          areas.children().each(function(i){
            var area = $(this);
            var shape = area.attr("shape");
            var coords = area.attr("coords").split(",");
            var fillStyle = area.data("fillStyle");
            var strokeStyle = area.data("strokeStyle");
            var lineWidth = area.data("lineWidth");
              if (fillStyle){
                c.fillStyle = fillStyle; 
              }
              if (strokeStyle){
                if (lineWidth){
                  c.lineWidth = lineWidth; 
                }
                c.strokeStyle = strokeStyle;   
              }
              c.beginPath();
              var leng = coords.length;
              c.moveTo(coords[0], coords[1]);
              for (var i = 2; i < leng; i+=2){
                c.lineTo(coords[i], coords[i+1]); 
              }
              c.closePath();
              fillStroke(fillStyle, strokeStyle);
            c.lineWidth = 1;
          });
        }
      });