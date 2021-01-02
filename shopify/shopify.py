import requests
import json
import pandas
import csv

apikey = '379109aae4a2dca4e28bd12b5a63be78'
password = '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'
hostname = 'quockhai2110.myshopify.com'

response = requests.get('https://{}:{}@{}/admin/api/2020-10/customers.json'.format(apikey,password,hostname))

obj = open('customers.json','w+',encoding='utf8')

obj.write(response.text)

y = json.loads(response.text)

for i in range(len(y['customers'])):
    del y['customers'][i]['addresses']

pd = pandas.DataFrame(y['customers'])

pd.to_csv('customers.csv')









