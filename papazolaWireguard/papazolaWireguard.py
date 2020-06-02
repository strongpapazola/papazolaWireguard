import mysql.connector
from os import system

def main():
    db = mysql.connector.connect(
	host='localhost',
	user="root",
	passwd="",
	database="papazolaWireguard"
    )
#cursor = db.cursor()
    cursor = db.cursor(buffered=True)

    def search_datatable(table, col, search):
        sql = 'SELECT * FROM '+table+' WHERE '+col+"='"+search+"'"
        cursor.execute(sql)
        result = cursor.fetchone()
        return result

    create = search_datatable('wireguard','action','1')
    deleteakun = search_datatable('wireguard','action','2')

    if create:
        sql = 'UPDATE `wireguard` SET action="3" WHERE name="'+str(create[1])+'"'
        print(sql)
        cursor.execute(sql)
        db.commit()
        system('/opt/papazolaApps/papazolaWireguard/user.sh '+str(create[1]))
    elif deleteakun:
        sql = 'DELETE FROM `wireguard` WHERE name="'+str(deleteakun[1])+'"'
        print(sql)
        cursor.execute(sql)
        db.commit()

import time

while True:
    main()
    print('lol')
    time.sleep(10)
