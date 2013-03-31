<?php

echo "yay";
					var_dump('yeah00'); 	
		        	$search = '<li>'.$_GET['query']."<div class='hidden-input'></div></br><input class='edit' id='edit' type='submit' value='Edit'><input type='submit' class='done' id='done' value='Done'><input type='submit' class='delete' id='delete' name='delete' value='Delete'></li>";
			        $filecontent = file_get_contents("tasks.txt");

			        $filecontent = str_replace($search, '', $filecontent);
			        file_put_contents("tasks.txt", $filecontent);
			        echo "$search";
			        var_dump('bhbhvh');
				?>