<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312">
<title>任务日历</title>
<script src="jquery/jquery-1.8.1.min.js"></script>
</head>
<body>
	<header></header>
	<section class="j_calendar">
		<!--<table border="1">
			<tr align="center">
				<td class="button"><a href="calendar_self.php?y=<?php echo $pre_y?>&m=<?php echo $pre_m?>" title="上一月"><<</a></td>
				<td class="button"><a href="calendar_self.php?y=<?php echo $currentYear?>&m=<?php echo $currentMonth?>">回到今天</a></td>
				<td class="button"><a href="calendar_self.php?y=<?php echo $next_y?>&m=<?php echo $next_m?>" title="下一月">>></a></td>
			</tr>
			
			<tr align="center">
				<td colspan="3">
					<?php
					echo "<select name='year' onchange='window.location=\"calendar_self.php?y=\"+this.value+\"&m=$m\"'>";
						
						for($i=1970;$i<2039;$i++){
							$select =  ( $i == $y ) ? "selected='selected'" : "";
							echo "<option value='".$i."' ".$select.">".$i."</option>";
						}
					echo "</select>";
					echo "<select name='month' onchange='window.location=\"calendar_self.php?m=\"+this.value+\"&y=$y\"'>"; 
						for($i=1;$i<13;$i++){
							$select =  ($i == $m)?"selected='selected'":"";
							echo "<option value='".$i."' ".$select.">".$i."</option>";
						}
					echo "</select>";
					?>
					<span id="clockId"></span>
				</td>
			</tr>
			
			<tr>
				<td colspan=5>
					<table class="inside_table">
						<tr class='center'>
							<td>一</td>
							<td>二</td>
							<td>三</td>
							<td>四</td>
							<td>五</td>
							<td>六</td>
							<td>日</td>
						</tr>
						<?php
						for($i=0;$i<$tr_num;$i++){
							echo "<tr class='center '>";
							
							$space = 0;
							$space_1 = $td_space_num;
							if( $i == 0 ){
									$space_1 = 0;
									$space = $td_space_num;
								
									for($a=0;$a<$td_space_num;$a++){
										echo "<td class='none_border'></td>";
									}
							}
							for($b=1;$b<8-$space;$b++){
								$day = $i*7+$b-$space_1;
								if( $day<=$month_day_num ){
								
									$currentDay = $y."-".$m."-".$day;
								
									if($currentDay == date('Y-m-j') ){
										$day = "<span style='color:red'>".$day."</span>";
										
									}
									echo "<td class='day_bgcolor inside_day button' date='".$currentDay."'>".$day."</td>";
								}
								
							}
							echo "</tr>";	
						}
						?>
						
					</table>
				</td>
			</tr>
		</table>-->
	</section>
</body>
</html> 