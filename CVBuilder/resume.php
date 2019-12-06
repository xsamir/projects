<?php

	/*header('Content Type: application/pdf');
	header('Content Disposition: attachment; filename="downloaded.pdf"');
	readfile('resume.php');
	*/
?>

<!DOCTYPE html>
<html >
	<head dir="rtl">
		<link rel="stylesheet" type="text/css" href="resume_<?php echo $_POST['TemplateList'];?>_stylesheet.css">
		<link rel="stylesheet" type="text/css" href="all.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				print();
			});
		</script>
	</head>
	<body dir="rtl" class="page" >
		<div id="main" >
		<h1 id="name"><?php echo $_POST['name'];?></h1>
		</div>
			
		<div id="header"><?php echo $_POST['name']." | ".$_POST['mail']." | ".$_POST['phone'];?></div>
			<br>
		<div class="table">
		<h2 id="heading">نبذة</h2>
			
				<p><?php echo $_POST['objective'];?></p>
		</div>
		</div>
		
		<div class="table" style="text-align: right;">
		<h2 id="heading">المؤهل العلمي</h2>	
				<table dir="rtl">
					<tr>
						<th style="text-align: right;">السنة</th>
						<th style="text-align: right;">جهة التخرج</th>
						<th style="text-align: right;"">المؤهل</th>
						<th style="text-align: right;">نسبة التخرج</th>
					</tr>
<?php if(!empty($_POST['school10']))
					 { ?>
					<tr>
						<td class="year"><?php echo $_POST['year10'];?></td>
						<td class="institute"><?php echo $_POST['school10'];?></td>
						<td class="course">دبلوم</td>
						<td class="percent"><?php echo $_POST['percentage10'];?></td>
					</tr>
<?php } ?>
					<?php if(!empty($_POST['collegepercentage']))
					 { ?><tr>
						<td class="year"><?php echo $_POST['collegeyear'];?></td>
						<td class="institute"><?php echo $_POST['college'];?></td>
						<td class="course"><?php echo $_POST['collegecourse'];?></td>
						<td class="percent"><?php echo $_POST['collegepercentage'];?></td>
					</tr>
<?php } ?>

				</table>
		</div>		

<?php if(!empty($_POST['stcomapnyname']))
					 { ?>
		<div class="table">
		<h2 id="heading">الدورات التدريبية</h2>
			
				<ul>
					<li>
						الجهة: <?php echo $_POST['stcomapnyname'];?>
					</li>
					<li>
						المدة: <?php echo $_POST['stduration'];?>
					</li>
					<li>
						المادة: <?php echo $_POST['stproject'];?>
					</li>
					<li>
						الأدوات المستخدمة: <?php echo $_POST['sttechnology'];?>
					</li>
				</ul>
		</div>

<?php } ?>


<?php if(!empty($_POST['project']))
					 { ?>
		<div class="table">
		<h2 id="heading">المهام والمسؤوليات</h2>
				<ul>
					<?php 
					echo "<li>".$_POST['projectfinalyear']."</li>";
				$i=1;
					while(isset($_POST['project'.$i]))
					{
						if(!empty($_POST['project'.$i]))
						{
							echo "<li>".$_POST['project'.$i]."</li>";
						}
					$i++;
					}
				?>
				</ul>
		</div>	

<?php } ?>

<?php if(!empty($_POST['achievement']))
					 { ?>
		<div class="table">
		<h2 id="heading">شهادات وجوائز</h2>
				<ul>
					<?php 
				$i=1;
					while(isset($_POST['achievement'.$i]))
					{
						if(!empty($_POST['achievement'.$i]))
						{
							echo "<li>".$_POST['achievement'.$i]."</li>";
						}
					$i++;
					}
				?>
				</ul>
		</div>	

<?php } ?>
<?php if(!empty($_POST['skill']))
					 { ?>
		<div class="table">
		<h2 id="heading">المهارات</h2>
				<ul>
					
				<?php 
				
					echo "<li>".$_POST['mandatoryskill']."</li>";
				$i=1;
					while(isset($_POST['skill'.$i]))
					{
						if(!empty($_POST['skill'.$i]))
						{
							echo "<li>".$_POST['skill'.$i]."</li>";
						}
					$i++;
					}
				?>
				
				</ul>
		</div>
<?php } ?>
		<div class="table">
		<h2 id="heading">بيانات شخصية</h2>
				<ul>
					<li>
						<span>الاسم الكامل: </span><?php echo $_POST['fathersname'];?>
					</li>
					<li>
						<span>تاريخ الميلاد: </span><?php echo $_POST['dob'];?>
					</li>
					<li>
						<span>رقم الجوال: </span><?php echo $_POST['landline'];?>
					</li>
					<li>
						<span>رقم جوال إضافي: </span> <?php echo $_POST['otherno'];?>
					</li>
				</ul>
		</div>	
		<div id="disclaimer">
			<h2 id="declaration" dir="rtl">إقرار</h2>
			<p class="data">
				بإرسالي هذه السيرة الذاتية لكم فإني أقر بصحة البيانات أعلاه حتى التاريخ والوقت المذكور بهذه السيرة الذاتية
			</p>
			<p>
				<span>التاريخ: </span><?php echo $_POST['date'];?>
			</p>
			<p>
				<span>الوقت: </span><?php echo $_POST['time'];?>
			</p>
			<p>
				<span>الموقع: </span><?php echo $_POST['place'];?>
			</p>
			<p>
				<span>التوقيع: </span>
			</p>
		</div>
			
			
	</body>

</html>	