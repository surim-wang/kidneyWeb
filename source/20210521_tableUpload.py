# -*- coding: utf-8 -*-
"""
Created on Fri May 21 20:44:17 2021

@author: SURIMWANG
"""

#%%
import pandas as pd
import numpy as np
data = pd.read_excel('../data/example.xlsx')
row = list(data.iloc[44,:])
print(row)
row[0]
len(data)
#%% DATA INSERT IN TO TABLE (db)
import pymysql.cursors
conn = pymysql.connect(host = 'localhost', user = 'root', password = '123456', db = 'opentutorials', charset = 'utf8')
curs = conn.cursor()

for i in range(len(data)):
    row = data.iloc[i, :]
    
    sql = '''insert into medicalrecords(No, InspectName, Result, State, MinRefValue, MaxRefValue, Unit) \
    values(NULL,'%s','%s','%s','%s','%s','%s');''' % (row[1], row[2], row[3], row[4],row[5], row[6])
    
    curs.execute(sql)
    conn.commit()
    print('rowcount: ', curs.rowcount)
conn.close() 

#%% 
 
