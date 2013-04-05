<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="apple-itunes-app" content="app-id=595047250">
	<title>Quick Conversions</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<style>
		
		/*******************
		 *	General styles *
		 *******************/
		.container
		{
			min-height: 500px;
		}
		
		
		
		/******************
		 *	Header styles *
		 ******************/
		#header
		{
			height: 75px;
			margin: 20px 0 0 0;
			padding: 25px;
			position: relative;
		}
		
		
		#header #title
		{
			font-size: 3em;
			font-weight: bold;
		}
		
		
		#header #subtitle
		{
			font-size: 1.5em;
			font-style: italic;
			margin: 10px 0 0 20px;
		}
		
		#itunesBadge
		{
			position: absolute;
				top: 20%;
				right: 10%;
		}
		
		
		
		
		
		
		/****************
		 *	Body styles *
		 ****************/
		#body
		{
			min-height: 400px;
			width: 100%;
		}
		
		
		
		
		/**********************
		 *	InfoWindow styles *
		 **********************/
		#infoWindow
		{
			float: left;
			margin: 10px 60px 0 0;
			width:300px;
		}
		
		#infoWindow h2
		{
			text-align: center;
		}
		
		
		
		
		/**********************
		 *	Calculator styles *
		 **********************/
		#calculator
		{
			float: left;
			width: 530px;
		}
		
		#conversionInputs input
		{
			font-size: 2em;
			height: 35px;
			text-align: center;
			width: 42.5%;
		}
		
		
		#conversionSelection
		{
			margin: 10px 0 0 0;	
		}
		
		
		#inputMeasurementType, #outputMeasurementType
		{
			border: 1px solid #ccc;
			float: left;
			width: 48%;
		}
		
		
		#inputMeasurementType
		{
			margin: 0 5px 0 0;
		}
		
		
		.measurementTypeSelector
		{
			padding: 5px 10px 5px 10px;
		}
		
		.selectedMeasurementTypeSelector
		{
			background-color: #336AC3;
			color: #fff
		}
		
	</style>
</head>
<body>
<div class="container">
	<div id="header">
		<div id="title">Quick Conversions</div>
		<div id="subtitle">by Joe Cortopassi</div>
		<a id="itunesBadge" href="https://itunes.apple.com/us/app/quick-conversions/id595047250?mt=8&uo=4&partnerId=30&siteID=TnL5HPStwNw-M516beaeyO6pPh1ZmGTsKQ" target="itunes_store"><img src="http://r.mzstatic.com/images/web/linkmaker/badge_appstore-lrg.gif" alt="Quick Conversions - Joe Cortopassi" style="border: 0;"/></a>
	</div>
	<div id="body">
		<div id="infoWindow" class="well">
			<h2 id="infoWindowHeading">Information</h2>
			<hr>
			<div id="infoWindowText">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis nulla recusandae ducimus minus officia eveniet quis iste necessitatibus cum unde amet voluptatibus aut incidunt fuga doloribus dignissimos laboriosam. Iste amet minima laborum natus porro dolorem iure molestias id reiciendis libero eum qui esse repellendus soluta est consequatur nihil accusantium maxime dignissimos quos. Accusantium tempora delectus odio eligendi fugit sed est laborum. In laborum saepe nesciunt quis deleniti inventore dolor asperiores incidunt beatae aspernatur modi ipsam consequatur fugit officiis quas corporis rerum mollitia cum dolore voluptatum nobis debitis nostrum dolores vero facere quisquam recusandae placeat! Eveniet laboriosam rem error molestiae hic!</p>
			</div>
		</div>
		<div id="calculator">
			<div id="measurementType">
				<div class="btn-toolbar">
					<div class="btn-group">
						<button class="btn" data-category="length">Length</button>
						<button class="btn" data-category="weight">Weight</button>
						<button class="btn" data-category="volume">Volume</button>
						<button class="btn" data-category="time">Time</button>
						<button class="btn" data-category="speed">Speed</button>
						<button class="btn" data-category="temperature">Temperature</button>
						<button class="btn" data-category="area">Area</button>
					</div>
				</div>
			</div>
			<div id="conversionInputs">
				<input id="inputText" type="text" class="input-medium search-query" placeholder="0.0" value="">
				<input id="outputText" type="text" class="input-medium search-query" placeholder="0.0" value="">
			</div>
			<div id="conversionSelection">
				<div id="inputMeasurementType">
					
				</div>
				<div id="outputMeasurementType">
					
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var CategoryInfo = {
		"length" : {
			"standardUnits" : "Meters",
			"measurementTypes" : {
				"Inches" 		: 0.0254,
				"Feet" 			: 0.3048,
				"Yards" 		: 0.9144,
				"Miles" 		: 1609.344,
				"Centimeters"	: 0.01,
				"Meters" 		: 1.0,
				"Kilometers"	: 1000.0
			},
			"info" : "<p>Length is the unit of measure used to determine the distance between two points. While these two points may exist on a non-flat surface (e.g spere, ellipsoid), length can still be expressed in linear units (e.g. feet, meters, miles). Even though there are many different ways to measure length, there are some common types that people often refer to when converting measurements:</p><ul><li>Inches in a Foot</li><li>Feet in a Mile</li><li>Miles to Kilometers</li><li>Centimeters to inches</li><li>Yards in a Mile</li></ul>"
		},
		"weight" : {
			"standardUnits" : "Kilograms",
			"measurementTypes" : {
				"Milligrams" 	: 0.000001,
				"Grams" 		: 0.001,
				"Ounces"		: 0.028349523125,
				"Pounds"		: 0.45359237,
				"Kilograms"		: 1.0,
				"Tons"			: 907.18474,
				"Metric Tons"	: 1000.0
			},
			"info" : "<p>Weight is the measure of how strongly a gravitational field pulls on an object. While these measurements can vary wildly, depending on the gravitational field, for the purpose of clarity most measurements are in reference to the gravitational field on Earth's surface. Some common weight measurements to convert, are:</p><ul><li>Grams to Ounces</li><li>Pounds to Ounces</li><li>Kilograms to Pounds</li><li>Tons to Metric Tons</li><li>Tons to Pounds</li></ul>"
		},
		"volume" : {
			"standardUnits" : "Liters",
			"measurementTypes" : {
				"Teaspoons"    : 0.00000492892,
                "Tablespoons"  : 0.00001478676,
                "Cups"         : 0.00023658823,
                "Pints"        : 0.00047317647,
                "Quarts"       : 0.00094635294,
                "Liters"       : 0.001, 
                "Gallons (US)" : 0.00378541178
			},
			"info" : "<p>Volume is the unit of measure describing the amount of space an object takes up. In it's simplest form, volume can be described as multiplying the height, by the width, by the objects depth. In conjunction with the weight of an object, volume can be used to find it's mass. Some examples of common units of volume to convert between are:</p><ul><li>Teaspoons in a Tablespoon</li><li>Cups in a Pint</li><li>Quarts to Gallons</li><li>Gallons to Liters</li><li>Quarts to Cups</li></ul>"
		},
		"time" : {
			"standardUnits" : "Hours",
			"measurementTypes" : {
				"Seconds"  : (1/3600.0),
                "Minutes"  : (1/60.0),
                "Hours"    : 1.0,  
                "Days"     : 24.0,
                "Weeks"    : (24.0*7),
                "Months"   : (24.0*30.5),
                "Years"    : (24.0*365.25)
			},
			"info" : "<p>Time is the measurement of an interval between two events. In it's earliest form, time was measured by events that were immensely obvious, such as the setting of the sun every day. As technology grows, and the need for increased accuracy rises, more subtle events become units of measure, like the oscillations of a Cesium atom. Some common units of time, that are converted between, are:</p><ul><li>Hours in a Second</li><li>Seconds in a Minute</li><li>Days in a Month</li><li>Weeks in a Year</li></ul>"
		},
		"speed" : {
			"standardUnits" : "Meters/Second",
			"measurementTypes" : {
				"Feet/Second"      : (0.3048),
                "Kilometer/hour"   : (1/3.6),
                "Meters/Second"    : 1.0,   
                "Mile/Hour"        : 0.44704
			},
			"info" : "<p>Speed, like density, is actually the measurement of the relationship between two other types of measurements. Specifically, speed is the measure of distance an object travels, in a given time frame. While speed does have an absolute limit, in how fast light travels in a vacuum, most of the speeds we deal with on a day-to-day basis are but a fraction of that 'speed limit'. Some common units of speed, are:<ul><li>Feet a Second to Miles per Hour</li><li>Miles per Hour to Feet per Second</li></ul>"
		},
		"temperature" : {
			"standardUnits" : "Kelvin",
			"measurementTypes" : {
				"Celsius" 		: 1.0,
				"Fahrenheit" 	: 1.0,
				"Kelvin"		: 1.0
			},
			"info" : "temperature Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero necessitatibus voluptas animi quia provident aut architecto explicabo commodi facilis modi sapiente ut accusantium nobis distinctio beatae voluptatum repellat dolorem a iusto consectetur eius natus eum rerum est expedita delectus sequi ea consequuntur at numquam veritatis quasi similique ab corporis culpa soluta fuga sunt consequatur cum eos ullam rem aliquam voluptatem error incidunt voluptatibus! Quis officia quo dolorum incidunt vitae explicabo facilis quam quibusdam aliquam iste numquam cumque deserunt doloremque consequuntur porro veniam culpa accusamus sint iure vel. Nam excepturi eos libero fuga sint numquam temporibus perspiciatis officia cum non? Deserunt?"
		},
		"area" : {
			"standardUnits" : "Square Meter",
			"measurementTypes" : {
				"Square Feet"      : 0.09290304,
                "Square Inches"    : 0.00064516,
                "Square Meter"     : 1.0, 
                "Square Yards"     : 0.83612736,
                "Square Kilometers": 1000000,
                "Square Miles"     : 2589988.110336,
                "Acre"             : 4046.8564224
			},
			"info" : "area Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit doloribus eaque aliquid ducimus assumenda nostrum illum. Illo aliquid quibusdam molestias numquam consectetur exercitationem doloremque vitae quae veritatis perspiciatis repudiandae alias iusto quis eveniet architecto enim odit corrupti officia facilis doloribus! Ducimus laudantium hic beatae necessitatibus eveniet optio mollitia ipsa ex cum eum expedita illum voluptas vel numquam quod dignissimos commodi a eaque dicta quibusdam repudiandae accusamus ipsam cumque possimus quam incidunt asperiores. Mollitia delectus porro maxime et aut amet laudantium rerum corporis beatae voluptatem vitae iure tempore suscipit unde odit possimus praesentium atque aliquid dolorum eligendi labore. Natus inventore quisquam."
		}
	};
		
		
							
	var Converter = function() {
		this.__category = "";
		
		this.__construct = function(){
			var input = parseFloat($('#inputText').val());
			var inputMeasurementType = $("#inputMeasurementType .selectedMeasurementTypeSelector").attr('data-mtype');
			var outputMeasurementType = $("#outputMeasurementType .selectedMeasurementTypeSelector").attr('data-mtype');
			this.__category = $("#measurementType button.disabled").attr('data-category');
			
			var outputText = this.convertInputNumberFromMeasurementTypeToMeasurementType(input, inputMeasurementType, outputMeasurementType);
			$("#outputText").val(outputText);
		}
		
		
		
		
		/**********************
		 * Calculator Methods
		 **********************/
		this.convertInputNumberFromMeasurementTypeToMeasurementType = function( input, inputMeasurementType, outputMeasurementType ){
			var returnValue = 0;
    
			if (this.__category === "temperature")
			{
				returnValue = this.convertTemperatureInputNumberFromMeasurementTypeToMeasurementType(input, inputMeasurementType, outputMeasurementType);
			}
			else
			{
				var convertedInput = this.convertFromMeaurementTypeToStandard(input, inputMeasurementType);
				returnValue = this.convertFromStandardToMeasurementType(convertedInput, outputMeasurementType);
			}
			
			
			return (!isNaN(returnValue))? returnValue: 0;
		}
		
		
		this.convertTemperatureInputNumberFromMeasurementTypeToMeasurementType = function( input, inputMeasurementType, outputMeasurementType ){
			var convertedInput;
			var convertedOutput;
			var returnValue;
			
			
			if (inputMeasurementType.toLowerCase() === "celsius")
			{
				convertedInput = input + 273.15;
			}
			else if (inputMeasurementType.toLowerCase() === "fahrenheit")
			{
				convertedInput = (input + 459.67) * (5.0/9.0);
			}
			else
			{
				convertedInput = input;
			}
			
			
			
			if (outputMeasurementType.toLowerCase() === "celsius")
			{
				convertedOutput = convertedInput - 273.15;
			}
			else if (outputMeasurementType.toLowerCase() === "fahrenheit")
			{
				convertedOutput = ((convertedInput - 273.15) * 1.8) + 32.0;
			}
			else
			{
				convertedOutput = convertedInput;
			}
			
			
			returnValue = Math.round(convertedOutput * 10000)/10000;
			
			
			return returnValue;	
		}
		
		
		this.convertFromMeaurementTypeToStandard = function(input, measurementType){
			var standardUnits = CategoryInfo[this.__category].measurementTypes[measurementType];
console.log(this.__category, input, measurementType);
			return (input * standardUnits);
		}
		
		
		this.convertFromStandardToMeasurementType = function(input, measurementType){
			var standardUnits = CategoryInfo[this.__category].measurementTypes[measurementType];
			var returnValue = (input / standardUnits);
			
			return ( Math.round(returnValue * 100000) / 100000 );
		}
		
		
		this.__construct();
	}
	
	
	
	
	
	
	
	var CalculatorSetup = function(){
		this.__category = "length";
		
		this.__construct = function(){
			var category = this.getCategoryFromURL();
			
			if (category.length > 0)
			{
				this.__category = category;
			}
			
			this.setupSelectorMeausrementType();
			this.setupCategoryToolbarEvents();
			
			this.setCategory();
			this.setInfoWindow();
		}
		
		
		this.getCategoryFromURL = function() {
			return "";
		}
		
		
		this.setupSelectorMeausrementType = function() {
			var measurementTypesForCategory = CategoryInfo[this.__category].measurementTypes;
			var count = 0;
			
			$("#inputMeasurementType").html("");
			$("#outputMeasurementType").html("");	
			
			for (var type in measurementTypesForCategory)
			{
				$("#inputMeasurementType").append('<div class="measurementTypeSelector" data-selector="input" data-mtype="'+type+'">'+type+'</div>');
				$("#outputMeasurementType").append('<div class="measurementTypeSelector" data-selector="output" data-mtype="'+type+'">'+type+'</div>');
				count++;
			}
			
			$("#inputMeasurementType .measurementTypeSelector:eq("+(Math.round(count/2)-1)+")").addClass("selectedMeasurementTypeSelector");
			$("#outputMeasurementType .measurementTypeSelector:eq("+(Math.round(count/2)-1)+")").addClass("selectedMeasurementTypeSelector");
			
			$(".measurementTypeSelector").on('click', function(){
				$(this).parent().children().removeClass('selectedMeasurementTypeSelector');
				$(this).addClass('selectedMeasurementTypeSelector');
				Converter();
			});
		}
		
		
		this.setupCategoryToolbarEvents = function() {
			var that = this;
			
			$("#measurementType button").on("click", function(){
				that.__category = $(this).attr('data-category');
				
				$("#inputText").val("");
				$("#outputText").val("");
			
				that.setCategory();
				that.setInfoWindow();
				that.setupSelectorMeausrementType();
			});
		}
		
		
		this.setCategory = function() {
			$("#measurementType button").removeClass('disabled');
			$("#measurementType button[data-category='"+this.__category+"']").addClass('disabled');
		}
		
		
		this.setInfoWindow = function() {
			$("#infoWindowHeading").html(this.__category.toUpperCase());
			$("#infoWindowText").html(CategoryInfo[this.__category].info);
		}
		
		
		
		
		return this.__construct();
	};
	
	
	function removeAllButFirstOccurenceOfCharacterInString(char, string)
	{
		var arrayOfParts = string.split(char);
		var numParts = arrayOfParts.length;
		var wholeNum = arrayOfParts.shift();
		var fractional = arrayOfParts.join('');
		
		return wholeNum + ((numParts > 1)? char: "") + fractional;
	}
	
	
	
	CalculatorSetup();
	
	$("#inputText, #outputText").on('keyup', function(){
		var cleanValue = $(this).val().replace(/[^\d\.]/g, '');
		cleanValue = removeAllButFirstOccurenceOfCharacterInString('.', cleanValue);
		
		$(this).val(cleanValue);
		Converter();	
	});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15830475-7']);
  _gaq.push(['_setDomainName', 'joecortopassi.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>