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
             
           <th bgcolor="#FFFFFF" bordercolor="#000000" width="122">Sur Name</th>
				<th bgcolor="#FFFFFF" width="100">Given Name</th>
                <th bgcolor="#FFFFFF" width="78">Gender/Sex</th>
                <th bgcolor="#FFFFFF" width="101">Date Of Birth</th>
                <th bgcolor="#FFFFFF" width="119">Address</th>
                <th bgcolor="#FFFFFF" width="119">Telephone</th>
                <th bgcolor="#FFFFFF" width="132">Email Address</th>
                <th bgcolor="#FFFFFF" width="110">Marital Status</th>
                <th bgcolor="#FFFFFF" width="93">Date Of Registration</th>
                
				
			
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `feedback`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
			
                          <td bgcolor="#EFEFEF" height="46"><?php echo $row['sname']; ?></td>
							<td bgcolor="#EFEFEF"><?php echo $row['gname']; ?></td>
                            <td bgcolor="#EFEFEF"><?php echo $row['gender']; ?></td>
                            <td bgcolor="#EFEFEF"><?php echo $row['dob']; ?></td>
                            <td bgcolor="#EFEFEF"><?php echo $row['address']; ?></td>
                             <td bgcolor="#EFEFEF"><?php echo $row['contact']; ?></td>
                            <td bgcolor="#EFEFEF"><?php echo $row['email']; ?></td>
                            <td bgcolor="#EFEFEF"><?php echo $row['ms']; ?></td>
                            <td bgcolor="#EFEFEF"><?php echo $row['created']; ?></td>
							<td bgcolor="#EFEFEF"><br>
								<a href="edit.php?id=<?php echo $row['pid']; ?>">Edit</a>
                                <a href="delete.php?id=<?php echo $row['pid']; ?>">Delete</a>
                                <a href="print.php?id=<?php echo $row['pid']; ?>">Preview</a>
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