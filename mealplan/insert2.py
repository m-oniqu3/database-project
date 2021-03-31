from faker import Faker
from random import randint
from datetime import date

faker = Faker() 

#function to insert records into database
def generate():

    #opens file to be appended
    data= open ("recipe.sql", 'a')

    


    #For loop to insert into Account Table
    for _ in range(2):

        uname=faker.unique.first_name()
        passw=faker.first_name()
        last= faker.last_name()
        first= faker.first_name()
        data.write("insert into account(fname,lname,pass,uname) values (" '"' +first+'",' '"'+last+'",' '"'+passw+'",' '"'+uname+'"'");\n")

    data.write(" \n")

    #For loop to insert into Recipe Table
    for _ in range(2):

        recdate = str(date.today())
        recname= faker.text(10).strip('.')
        recinfo= faker.text(50)
        data.write("insert into recipe(recdate,recname,recinfo) values (" '"' +recdate+'",' '"'+recname+'"' ',"'+recinfo+'"'");\n")

    data.write(" \n")
    
    #For loop to insert into Measurement Table
    for _ in range(2):

        
        measure= faker.text(5).strip('.')
        data.write("insert into measurement(measure) values (" '"'+measure+'"'");\n")

    data.write(" \n")

    #For loop to insert into Ingredients Table
    for _ in range(2):

        
        ingredname= faker.text(10).strip('.')
        data.write("insert into ingredients(ingredname) values (" '"'+ingredname+'"'");\n")

    data.write(" \n")

    #For loop to insert into Instructions Table
    for _ in range(2):

        
        command= faker.text(5).strip('.')
        data.write("insert into instructions(command) values (" '"'+command+'"'");\n")

    data.write(" \n")

    #For loop to insert into Kitchen Table
    for _ in range(2):


        quantity= faker.text(5).strip('.')
        ingredName= faker.text(10).strip('.')
        data.write("insert into kitchen(quantity,ingredName) values (" '"' +quantity+'",' '"'+ingredName+'"'");\n")

    data.write(" \n")
    
    #For loop to insert into Supermarket Table
    for _ in range(2):

        quantity= faker.text(5).strip('.')
        groceryname= faker.text(5).strip('.')
        data.write("insert into supermarket(groceryname,quantity) values (" '"' +groceryname+'",' '"'+quantity+'"'");\n")



    data.close(); #closes file

#calls function 
generate();



