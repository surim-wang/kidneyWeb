# -*- coding: utf-8 -*-
"""
Created on Fri May 21 20:44:17 2021

@author: SURIMWANG
"""
#%%


#%% data read
import pandas as pd
import numpy as np
from glob import glob

data = pd.read_excel('D:/05.Kidney/data/개별데이터/2013-03-11.xlsx')
column_name = list(data.columns)
df = pd.DataFrame(columns= column_name)

data_lst = glob('D:/05.Kidney/data/개별데이터/*.xlsx')

for i in data_lst:
    print(i)
    dat = pd.read_excel(i)
    df = pd.concat([df, dat])

df.columns
df = df[['번호', '검사명', '결과', '상태', '최저참고치', '최고참고치', '단위', '접수일']]
df.iloc[834]
df.iloc[1406]
df.iloc[1407]
#%% DATA INSERT IN TO TABLE (db)
import pymysql.cursors
conn = pymysql.connect(host = 'localhost', user = 'root', password = '123456', db = 'opentutorials', charset = 'utf8')
curs = conn.cursor()

for i in range(len(df)):
    row = df.iloc[i, :]
    
    sql = '''insert into medicalrecords(No, InspectName, Result, State, MinRefValue, MaxRefValue, Unit, Date) \
    values(NULL,'%s','%s','%s','%s','%s','%s','%s');''' % (row[1], row[2], row[3], row[4],row[5], row[6], row[7])
    
    curs.execute(sql)
    conn.commit()
    print('rowcount: ', curs.rowcount)
conn.close() 

#%% 
 
