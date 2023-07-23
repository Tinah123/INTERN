
<!DOCTYPE html>

<html>
    <head>


        <title>feedback</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="js/js/bootstrap.min.js"></script>
        
        
    </head>    
    <body>
     <div class="container mt-5" >
        
     <div class="container bg-primary">  
        <div class="container"> 
            <div class="text-center">
              <h2 class= "custom-heading text-warning"><b> 
                <img src="https://i1.wp.com/www.utl.co.ug/wp-content/uploads/2022/11/utcl-logo.png?ssl=1" class="img-fluid" width="50" height="30" alt="UTCL" ></b></h2>
            </div>
            
        </div>
        </br>
      <form action = "intern.php" method ="post" class ="form">
        <table>
            <tr>
                <td>
            <div class ="form-group">
                       <label class ="font-weight-bold">NAME</label>
                       <input type ="text" class ="form-control" id ="name" name ="name" placeholder="enter your name"></br></br>
            </div>
                </td>
                 
                <td>
            <div class="form-group">
                       <label class ="font-weight-bold">CONTACT</label>
                       <input type = "text" class="form-control" id ="contact" name ="contact" placeholder="+256 710000000"></br></br>
             
            </div>
                </td>
                
                <td>
            
           
            <div class="form-group">
                            <label class ="font-weight-bold">LOCATION</label>
                            <input type = "text" class="form-control" id ="location" name ="location" placeholder="Kampala"></br></br>
            </div>

                </td>
                

                
            
           
            
            

                 
            </tr>

            <tr>
                
                <td>
        
        
        
        
    

    

                
                <!-- <input type = "radio" name ="feedback" value ="poor">poor
                <input type = "radio" name ="feedback" value ="moderate">moderate
                <input type = "radio" name ="feedback" value ="good">good
                <input type = "radio" name ="feedback" value ="verygood">very good
                <input type = "radio" name ="feedback" value ="excellent">excellent
                </br> </br> </br> </br> -->
                <!-- <div class="rating-container">
                    <span class="rating-button" onclick="updateRating(1)">1 </span>
                    <span class="rating-button" onclick="updateRating(2)">2 </span>
                    <span class="rating-button" onclick="updateRating(3)">3 </span>
                    <span class="rating-button" onclick="updateRating(4)">4 </span>
                    <span class="rating-button" onclick="updateRating(5)">5 </span>
                </div>
                
            </br>
            
            
                <div class="progress-bar">
                    <div class="progress" id="progress" style="width: 0;"></div>
                </div>
                <script src ="internee.js"> </script>
                </br>
                </br>
                </br> -->
                <div class="form-group">
                            <label class ="font-weight-bold">select option</label>
                            <select class="form-control" name="rating" id=""> 
                                <option value="poor">Poor</option>
                                <option value="fair">Fair</option>
                                <option value="good">Good</option>
                                <option value="excellent">Excellent</option>
                            </select> 
                </div> 
                </td>          
            </tr>    
        </table>
            
                <label class="font-weight-bold" for="comment">Additional comment:</label></br>
                <textarea class="form-control" id="comment" name="comment" rows="5" cols="50" placeholder="enter your comment"></textarea>
                </br></br>
     
                <input type="submit" class="btn btn-warning"value="SUBMIT">
      </form>
     </div>
     </div>            
    </body>           



        

        
   
    
</html>
