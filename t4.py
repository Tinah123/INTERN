import time
import datetime
 
#current_time = datetime.datetime.now()
#current_time2 = datetime.datetime.now()


# Timer starts
starttime = time.time()
lasttime = starttime
lapnum = 1
value = ""
 

#task end date
current_time2 = datetime.datetime.now()


print("Press ENTER for each lap.\nType Q and press ENTER to stop.")
 
while value.lower() != "q":
             
    # Input for the ENTER key press
    value = input()
 
    #time of start
    current_time = datetime.datetime.now()
    
    # The current lap-time
    laptime = round((time.time() - lasttime), 2)
 
    # Total time elapsed since the timer started
    totaltime = round((time.time() - starttime), 2)
 
    # Printing the lap number, lap-time, and total time
    print("Task. "+str(lapnum))

    print("Task started at ",current_time)

    print("Task Ended at ",current_time2)

    print("Total Time: "+str(totaltime))
    print("Task Time: "+str(laptime))
           
    print("*"*20)
 
    # Updating the previous total time and lap number
    lasttime = time.time()
    lapnum += 1
 
print("work day complete!")
