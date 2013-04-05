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
			"info" : "length Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus blanditiis quas impedit fugit perspiciatis numquam eveniet molestiae nostrum ipsam minus maiores iste sed voluptates consequuntur temporibus illum expedita molestias animi ea vitae fugiat ullam ad neque harum nemo? Optio animi molestiae impedit blanditiis dignissimos dolores exercitationem. Libero nemo excepturi repudiandae vel animi alias quos mollitia cupiditate totam consequatur ut velit sit harum nulla odit eligendi placeat voluptates odio. Nihil aliquid deleniti error officia officiis velit rem quas temporibus magnam sit repellat architecto fugiat ex id provident nobis praesentium ipsa incidunt dolore illo dolorum qui modi consectetur animi vero fugit autem!"
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
			"info" : "weight Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos eveniet a amet voluptatem eaque quam nemo non quo rem nam perferendis nisi porro architecto modi ex quasi vitae est odit sint dolor ipsam ut commodi consequuntur quod dicta corporis placeat asperiores excepturi inventore error! Nulla placeat odit architecto veritatis enim iusto cum hic sit dicta suscipit. Dignissimos rem atque soluta corporis quae facere enim porro provident asperiores expedita ducimus aspernatur maiores rerum libero impedit accusantium quam vero iure earum tempore sint beatae mollitia error optio quis veritatis itaque. Recusandae accusantium neque suscipit quo perferendis explicabo dolor est illum reprehenderit illo."
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
			"info" : "volume Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus dolore harum velit ipsam ullam atque ipsum laudantium modi molestias beatae quibusdam ex repellendus rerum cupiditate voluptate sed provident. Iste accusamus provident impedit labore iure magni et quia dignissimos temporibus officia enim eum recusandae fugiat. Voluptate nam pariatur molestiae distinctio nemo ad error aperiam porro magnam necessitatibus dolore et cum totam sunt illum fugiat suscipit neque autem iusto fuga? Fugit repudiandae dolore est quidem iusto atque dicta omnis veritatis voluptatibus facere sint exercitationem nostrum velit. Dignissimos officia fugit dolorum nostrum at tempore soluta officiis odit corrupti saepe possimus et consectetur tenetur."
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
			"info" : "time Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error voluptatibus consequatur voluptatum at magni quae similique illo labore ut mollitia animi quis sequi. Inventore aperiam dolorem hic non at aliquid natus qui fugit temporibus ratione aliquam eveniet rerum cupiditate recusandae quibusdam perspiciatis animi ut commodi distinctio doloremque quam esse dolores saepe veritatis officia eum atque. Iste quae ex deleniti rerum tempore accusamus quisquam eaque praesentium veritatis recusandae suscipit nemo itaque vitae totam at nam reprehenderit aliquid repudiandae eius voluptatibus dicta consectetur asperiores ipsam consequatur nesciunt impedit quis sequi magnam sunt et! Iste magnam est non inventore reiciendis ex quasi rerum?"
		},
		"speed" : {
			"standardUnits" : "Meters/Second",
			"measurementTypes" : {
				"Feet/Second"      : (0.3048),
                "Kilometer/hour"   : (1/3.6),
                "Meters/Second"    : 1.0,   
                "Mile/Hour"        : 0.44704
			},
			"info" : "speed Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nulla quia dolorum amet recusandae perferendis dolorem sapiente saepe repellendus esse delectus consequatur suscipit accusantium repellat laborum officia quisquam fugit a earum optio enim dolor ipsum ipsam mollitia omnis laudantium reiciendis modi molestias non eius provident sed quibusdam porro. Dolorum mollitia voluptatum nemo beatae numquam quod fugiat rem dolore itaque excepturi. Molestias excepturi laboriosam ut voluptas similique nemo nam vitae quasi tempora atque necessitatibus error eum? Fugit officia nemo repellendus architecto voluptate ex voluptas necessitatibus sit consequuntur odio perspiciatis deserunt sequi vero sint suscipit voluptatum similique id recusandae possimus enim cupiditate."
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
</body>
</html>