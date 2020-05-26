<?php  
												include_once("mentorshipdata.php");
												 $query="select * from student";
												$result = $conn->query($query);
		
												{
													
												?> 
												
												<image type="text" name="imagec" height="100" width="100"src="<?php echo $row["image"]; ?>"> </image></td>
												<?php
												
												}
												
												?>