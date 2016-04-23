import MySQLdb as sql
import sys
sys.path.append('/root/CS411-VegeCheck/scripts/webcrawler/')

from password import *

def score_data():
    hostname = 'localhost'
    username = 'root'
    password = get_password()
    dbname = 'vegecheck'

    connection = sql.connect(host=hostname, user=username, passwd=password, db=dbname)
    cur = connection.cursor()
    cur.execute("SELECT * FROM score")
    data = cur.fetchall()

    """ each row is in this form score(quizID, storeID, employeeID, percentage, timeFinished, result)"""
    return data

#print score_data()
