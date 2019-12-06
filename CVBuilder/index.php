<!DOCTYPE html>

<html>
	<head dir="rtl">
		<title>إعداد السيرة الذاتية</title>
		
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
			var flag;
			var project="project1";
			var achievement="achievement1";
			var skill="skill1";
			var interest="interest1";
			
			$(document).ready(function() {
				$("fieldset:not('#div1')").hide();
				$("#back").hide();
				flag="div1";
				//changeColor();
				document.getElementById('optional_12').style.display='none';
				document.getElementById('optional_diploma').style.display='none';
			});
			
			
			function show(division){
				$(document).ready(function(){
					flag=division;
					$("fieldset:not(#"+division+")").hide();
					$("#"+division).show();
					showButton();
					//changeColor();
				});
							
			}
			function showButton(){
				$(document).ready(function(){
					if(flag!='div1')
				{
					$("#back").show();
				}
				
				else
				{
					$("#back").hide();
				}
				
				if(flag=='div9')
				{
					$("#next").hide();
				}
				
				else
				{
					$("#next").show();
				}
				});
							
			}
		
		
		function nextPage()
		{
			
			var str=flag;
			var start=str.slice(0,3);
			var stop=str.slice(3);
			//console.log(start);
			//console.log(stop);
			var i=parseInt(stop);
			i++;
			flag=start+i;
			//console.log(flag);
			
			$(document).ready(function() {
				$("fieldset:not(#"+flag+")").hide();
					$("#"+flag).show();
				//console.log(div)
				showButton();
				//changeColor();
			});
		}
		
		function backPage()
		{
			
			var str=flag;
			var start=str.slice(0,3);
			var stop=str.slice(3);
			//console.log(start);
			//console.log(stop);
			var i=parseInt(stop);
			i--;
			flag=start+i;
			//console.log(flag);
			
			$(document).ready(function() {
				$("fieldset:not(#"+flag+")").hide();
					$("#"+flag).show();
				//console.log(div)
				showButton();
				//changeColor();
			});
		}
		
		/*function changeColor()
		{
			document.getElementById("#"+flag).style.backgroundColor="#D93600";
		}*/
		function generateTextbox(box) {
    var form = document.getElementById(flag);
    var input = document.createElement("input");
    input.type = "text";
					if(project.slice(0,7)==box)
					{
						input.id=project;
						input.name=project;
						var start=project.slice(0,7);
						var stop=project.slice(7);
						var i=parseInt(stop);
						i++;
						project=start+i;
					}
					else if(achievement.slice(0,11)==box)
					{
						input.id=achievement;
						input.name=achievement;
						var start=achievement.slice(0,11);
						var stop=achievement.slice(11);
						var i=parseInt(stop);
						i++;
						achievement=start+i;
					}
					else if(skill.slice(0,5)==box)
					{
						input.id=skill;
						input.name=skill;
						
						var start=skill.slice(0,5);
						var stop=skill.slice(5);
						var i=parseInt(stop);
						i++;
						skill=start+i;
					}
					else if(interest.slice(0,8)==box)
					{
						input.id=interest;
						input.name=interest;
						var start=interest.slice(0,8);
						var stop=achievement.slice(8);
						var i=parseInt(stop);
						i++;
						interest=start+i;
					}
    var br = document.createElement("br");
    form.appendChild(br);
    form.appendChild(input);
	
	}

	//$(document).ready(function() {	
	function showDiploma(course)
	{
		if(course==1)
		{
				document.getElementById('optional_12').style.display='none';
				document.getElementById('optional_diploma').style.display='block';
		}
		else if(course==0)
		{
				document.getElementById('optional_12').style.display='block';
				document.getElementById('optional_diploma').style.display='none';
		}
		//else
		//{
				
		//}
	}
	//});
		</script>
		
		
	</head>
	<body class="w3-light-grey" dir="rtl" >
		<div id="main" >

		<div id="select_option" class="w3-display-container w3-content" style="max-width:100%;">	
		<div id="select_toggle" class="w3-display-container w3-content" style="max-width:100%;">	

<div class="w3-bar w3-white w3-large" >
  <a href="http://samirjunaid.sa" class="w3-bar-item w3-button w3-black w3-mobile"><img src="http://samirjunaid.sa/images/samir1.png" width="30%;"></img></a>
  <a href="#" class="w3-bar-item w3-button w3-mobile"class="toggle1" onclick="show('div1')" style="font-size:80%">المعلومات الأساسية</a>
  <a href="#" class="w3-bar-item w3-button w3-mobile"class="toggle1" onclick="show('div2')" style="font-size:80%">المؤهل العلمي</a>
  <a href="#" class="w3-bar-item w3-button w3-mobile"class="toggle1" onclick="show('div3')" style="font-size:80%">دورات تدريبية</a>
  <a href="#" class="w3-bar-item w3-button w3-mobile"class="toggle1" onclick="show('div4')" style="font-size:80%">مهام ومسؤوليات</a>
  <a href="#" class="w3-bar-item w3-button w3-mobile"class="toggle1" onclick="show('div5')" style="font-size:80%">شهادات وجوائز</a>
  <a href="#" class="w3-bar-item w3-button w3-mobile"class="toggle1" onclick="show('div6')" style="font-size:80%">المهارات</a>
  <a href="#" class="w3-bar-item w3-button w3-mobile"class="toggle1" onclick="show('div7')" style="font-size:80%">الإهتمامات والهوايات</a>
  <a href="#" class="w3-bar-item w3-button w3-mobile"class="toggle1" onclick="show('div8')" style="font-size:80%">معلومات شخصية</a>
  <a href="#" class="w3-bar-item w3-button w3-mobile"class="toggle1" onclick="show('div9')" style="font-size:80%">تصدير المستند</a>
  <a href="http://samirjunaid.sa/cvbuilder" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">تحديث  الصفحة</a>
  <a  class="w3-bar-item  w3-right w3-light-grey w3-mobile">نسخة تجريبية رقم 1.2</a>
</div>

			
		</div>
		</div>
		<div id="content" class=" w3-padding ">
		<?php
			include 'form.html';
		?>
		</div>
		<div id="footer" class="w3-container w3-white w3-padding-16"><br>
			<input class="w3-button w3-dark-grey" type="button" value="السابق" id="back" onclick="backPage()">
			<input class="w3-button w3-dark-grey" type="button" value="التالي" id="next" onclick="nextPage()">
		</div>
		</div>
	</body>
</html>