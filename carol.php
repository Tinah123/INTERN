<!DOCTYPE html>
<html>
<head>
<title>result</title>

<style type="text/css">
body {
	background-color: #00FF66;
}
body,td,th {
	color: #000;
}
</style>
<meta charset="utf-8">
</head>
<body>
<div>
		
		<div class="page-content">
		  <h1 align="center">Table Of Feeedback</h1>
		  
		</div>
</div>

  
	<div>
     
		<table width="1010" border="1" style="border:solid" bordercolor="#999999" margin="0"
        >
        
			<thead>
             
           <th bgcolor="#FFFFFF" bordercolor="#000000" width="10">Feedback Id</th>
				<th bgcolor="#FFFFFF" width="10">rating</th>
                <th bgcolor="#FFFFFF" width="78">message</th>
               
			
			<tbody>
				<?php
					include('adam.php');
					$query=mysqli_query($bd,"select * from `feedback`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
			
                          <td bgcolor="#EFEFEF" height="46"><?php echo $row['fid']; ?></td>
							<td bgcolor="#EFEFEF"><?php echo $row['rating']; ?></td>
                            <td bgcolor="#EFEFEF"><?php echo $row['message']; ?></td>
                           
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
    </div>
    
  
</div>





</body>
</html>
