import pandas
import mysql.connector


data =  pandas.read_csv('customer.csv')

df = pandas.DataFrame(data, columns=['customerid','firstname','lastname','companyname','billingaddress1',
                                     'billingaddress2','city','state','postalcode','country','phonenumber',
                                     'emailaddress','createddate'])

df = df.where((pandas.notnull(df)),None)

mydb = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
    database = 'database',
)

mycusor = mydb.cursor()
mycusor.execute("CREATE TABLE customers (customerid VARCHAR(255), firstname VARCHAR(255), "
                "lastname VARCHAR(255), companyname VARCHAR(255), billingaddress1 VARCHAR(255), "
                "billingaddress2 VARCHAR(255), city VARCHAR(255), state VARCHAR(255), postalcode VARCHAR(255), "
                "country VARCHAR(255), phonenumber VARCHAR(255), emailaddress VARCHAR(255), "
                "createddate VARCHAR(255))")

for row in df.itertuples():
    sql = 'INSERT INTO customers (customerid, firstname, lastname, companyname, billingaddress1,' \
          'billingaddress2, city, state, postalcode, country, phonenumber, emailaddress, createddate) ' \
          'VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)'
    val = (row.customerid,row.firstname,row.lastname,row.companyname,row.billingaddress1,row.billingaddress2,
           row.city,row.state,row.postalcode,row.country,row.phonenumber,row.emailaddress,row.createddate,)
    mycusor.execute(sql,val)
    mydb.commit()
mydb.close()
