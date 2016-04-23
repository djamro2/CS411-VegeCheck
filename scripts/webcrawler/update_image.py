import MySQLdb
from FullCrawler import PLUSpider
from password import get_password
from bing_image import bing_search
__author__ = "Yicheng Gong"

#
hostname = 'localhost'
username = 'root'
password = get_password()
dbname = 'vegecheck'
#tablename = 'plu'

db = MySQLdb.connect(host=hostname, user=username, passwd=password, db=dbname)

#spider = PLUSpider()
cur = db.cursor()
cur.execute("SELECT * FROM plu")
rows = cur.fetchall()
for row in rows:
    if row[4] == 'http://supermarketpage.com/images/produce/notavail.jpg':
        img = bing_search(row[1] + row[3])
        try: 
            cur.execute("UPDATE plu SET image_url=%s WHERE pluID=%s", (img, row[0])) 
            db.commit()
            print "UPDATE succeed on", row
        except:
            db.rollback()
            print "UPDATE failed"


"""for data in spider:
    values = (data[0], data[2], 0, data[1], data[3])
    if values[4] == 'http://supermarketpage.com/images/produce/notavail.jpg':
        img = bing_search(values[1] + values[3])
        #values[4] = img
        #print values
        #print img
        try:
            cur.execute("UPDATE plu SET image_url=%s WHERE pluID=%s" , (img, values[0]))
            print "UPDATE succeeded on", values
            db.commit()
           # print "committed"

        except:
            db.rollback()
            #print "Insertion failed"""
db.close()
