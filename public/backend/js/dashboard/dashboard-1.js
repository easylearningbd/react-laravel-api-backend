(function($) {
    "use strict"


 var dzChartlist = function(){
	
	var screenWidth = $(window).width();
	var marketChart = function(){
		 var options = {
          series: [{
          name: 'series1',
          data: [200, 400, 400, 300, 500, 200, 200,400, 300, 300]
        }, {
          name: 'series2',
          data: [500, 300, 200, 400, 600, 400, 400, 300, 500, 200]
        }],
          chart: {
          height: 350,
          type: 'area',
		  toolbar:{
			  show:false
		  }
        },
		colors:["#FFAB2D","#00ADA3"],
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth',
        },
		legend:{
			show:false
		},
		grid:{
			borderColor: '#EEEEEE',
		},
		yaxis: {
		  labels: {
			style: {
				colors: '#787878',
				fontSize: '13px',
				fontFamily: 'Poppins',
				fontWeight: 400
				
			},
			formatter: function (value) {
			  return value + "k";
			}
		  },
		},
        xaxis: {
          categories: ["Week 01","Week 02","Week 03","Week 04","Week 05","Week 06","Week 07","Week 08","Week 09","Week 10"],
		  labels:{
			  style: {
				colors: '#787878',
				fontSize: '13px',
				fontFamily: 'Poppins',
				fontWeight: 400
				
			},
		  }
        },
        tooltip: {
          x: {
            format: 'dd/MM/yy HH:mm'
          },
        },
        };

        var chart = new ApexCharts(document.querySelector("#marketChart"), options);
        chart.render();
	}
	var currentChart = function(){
		 var options = {
          series: [85, 60, 67, 50],
          chart: {
          height: 350,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
				startAngle:-90,
			   endAngle: 90,
            dataLabels: {
              name: {
                fontSize: '22px',
              },
              value: {
                fontSize: '16px',
              },
            }
          },
        },
		stroke:{
			 lineCap: 'round',
		},
        labels: ['Income', 'Income', 'Imcome', 'Income'],
		 colors:['#ec8153', '#70b944','#498bd9','#6647bf'],
        };

        var chart = new ApexCharts(document.querySelector("#currentChart"), options);
        chart.render();
	}
	
	var recentContact = function(){
		jQuery('.testimonial-one').owlCarousel({
			loop:true,
			autoplay:true,
			margin:20,
			nav:false,
			rtl:true,
			dots: false,
			navText: ['', ''],
			responsive:{
				0:{
					items:3
				},
				450:{
					items:4
				},
				600:{
					items:5
				},	
				991:{
					items:5
				},			
				
				1200:{
					items:7
				},
				1601:{
					items:5
				}
			}
		})
	}
	
	
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
					marketChart();
					currentChart();
					recentContact();
					
			},
			
			resize:function(){
			}
		}
	
	}();

	
		
	jQuery(window).on('load',function(){
		setTimeout(function(){
			dzChartlist.load();
		}, 1000); 
		
	});

	jQuery(window).on('resize',function(){
		
		
	});     

})(jQuery);