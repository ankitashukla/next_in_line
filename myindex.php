<!DOCTYPE html>
<html>
<head>
	<title>To-Do App</title>                              <!--change the title of d page-->
	<link rel = "stylesheet" href = "stylesheet.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
	
</head>
<body>
	<div id="about">
		<!--about the page-->
		In this hectic schedule of your daily life, we bring to you THE Next-In-Line, a to-do app.<br/>
		List all your tasks to be done, here and never ever forget them again!!
	</div>

	<div id="wrapper">
		<form action="myindex.php" method="get" id="entry" name="entry">
		</form>
		<div id="todo">
			<ul>
				<?php
				$myfile = fopen("tasks.txt", "a") or die ("Can't open the file! Try again..");
				if ($_GET['taskname']!="")
				{
					$info = '<li>'.$_GET['taskname']."<div class='hidden-input'></div></br><input type='submit' class='done' id='done' value='Done'><input type='submit' class='delete' id='delete' name='delete' value='Delete'></li>";
					fwrite($myfile, $info."\n");
				}
				fclose($myfile);
				?>
				

				<?php
				echo file_get_contents("tasks.txt");
				?>
				<form> <!--name="input_task" id="input_task" action="myindex.php" method="get"-->
					<input type="text" name="taskname" id="taskname"/>
					<input type="submit" name="addtask" id="addtask" value="Add to do">
				</form>
			</ul>
		</div>
	</div>
	<script>
	$(".delete").click(function () {
		$(this).parent().remove();
		var query = ($(this).parent())[0].outerText;
		$.get('delete.php?query='+query);
	});
	</script>
	<script>
	$(".done").click(function(){
			if($(this).parent().hasClass("strike"))
			{
				$(this).attr('value',"Done");
				$(this).parent().removeClass("strike");
			}
			else
			{
				$(this).attr('value',"Not Done");
				$(this).parent().addClass("strike");
			}
		});
	</script>
	<script>
	$(".edit").click(function(){
		var query = ($(this).parent())[0].outerText;
		
	})
	</script>
</body>
</html>







