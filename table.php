<!DOCTYPE html>
<html>

<style>
	.pp {
		margin-left: auto;
		margin-right: auto;
		width: 1010px;
		border-collapse: collapse;
		/*argin: 25px 0; */
		font-size: 0.9cm;
		min-width: 400px;
		border-radius: 5px 5px 0 0;
		overflow: hidden;
		box-shadow: 0 0 20px gba(0, 0, 0, 0)
	}
.pp thead th{
	background-color: #fbb700;
	color: #ffffff:
	
}

.pp th,
.pp td{
	padding: 12px 15px;

}


.pp tbody tr{
	border-bottom: 1px solid #dddddd;
}

.pp tbody tr:nth-of-type(even) {
	background-color: #0447cf;
	color: #fbb700;
} 

.pp tbody tr:last-of-type{
	border-bottom: 2px solid #fbb700;	
}


</style>


<head>
<title>result</title>
<meta charset="utf-8">
</head>

<body>
<div>
		
		<div class="page-content">
		  <h1 align="center">Table Of Feeedback</h1>
		  
		</div>
</div>

  
	<div>
     
		<table class="pp">
        
			<thead>
             
           <th align="left" bgcolor="#FFFFFF" bordercolor="#000000" width="10">Feedback Id</th>
		   <th align="left" bgcolor="#FFFFFF" width="78">Customer Id</th>
				<th align="left" bgcolor="#FFFFFF" width="10">rating</th>
                <th align="left" bgcolor="#FFFFFF" width="78">message</th>
				
               
			
			<tbody>
				<?php
					include('con1.php');
					$query=mysqli_query($bd,"select * from `feedback`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
			
                          <td ><?php echo $row['fid']; ?></td>
						  <td ><?php echo $row['cid']; ?></td>
							<td ><?php echo $row['rating']; ?></td>
                            <td ><?php echo $row['message']; ?></td>
							
                           
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
