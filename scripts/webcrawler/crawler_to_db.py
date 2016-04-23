import MySQLdb
from FullCrawler import PLUSpider
from password import get_password

__author__ = "Yicheng Gong"

#
hostname = 'localhost'
username = 'root'
password = get_password()
dbname = 'vegecheck'
#tablename = 'plu'

db = MySQLdb.connect(host=hostname, user=username, passwd=password, db=dbname)

spider = PLUSpider()
cur = db.cursor()
for data in spider:
    values = (data[0], data[2], 0, data[1], data[3])
    try:
        cur.execute("INSERT INTO plu (pluID, title, managerID, category, image_url) VALUES (%s, %s, %s, %s, %s)", values)
    #    print "Insertion succeeded"
        db.commit()
    #    print "committed"

    except:
        db.rollback()
    #    print "Insertion failed"
db.close()

