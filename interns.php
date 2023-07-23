
<!DOCTYPE html>

<html>
    <head>
        <title>feedback</title>
        <link rel="stylesheet" href="style.css">
        
    
        <h2 text-align:centre> UTCL FEEDBACK</h2>
        
     <form action = "intern.php" method ="post">
        <table>
            <tr>
                <td>
            <div>
            NAME:      <input type = "text" id ="name" name ="name"></br></br>
            </div>
                </td>
                </br>
                <td> 

                </td>
                
                </br>
                <td>


                </td> 
                <td>
            <div>
            CONTACT:   <input type = "text" id ="contact" name ="contact"></br></br>
             
            </div>
                </td>
                </br>
                <td>


                </td>
                <td>
           
            <div>
                LOCATION:   <input type = "text" id ="location" name ="location"></br></br>
            </div>

                </td>
            </tr>
        
        
        </table>
    </br> </br> </br>
    </head>

    <body>

                <label>CHOOSE NUMBER TO RATE</label> </br></br>
                <!-- <input type = "radio" name ="feedback" value ="poor">poor
                <input type = "radio" name ="feedback" value ="moderate">moderate
                <input type = "radio" name ="feedback" value ="good">good
                <input type = "radio" name ="feedback" value ="verygood">very good
                <input type = "radio" name ="feedback" value ="excellent">excellent
                </br> </br> </br> </br> -->
                <div class="rating-container">
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
                <script src ="intern.js"> </script>
                </br>
                </br>
                </br>
            
            
                <label for="comment">Additional comment:</label> </br> </br>
                <textarea id="comment" name="comment" rows="5" cols="50"></textarea>
                </br></br>
                <input type="submit" value="SUBMIT">
    </body>           



        

        
   </form>
    
</html>
