import requests
from bs4 import BeautifulSoup
import re
import MySQLdb as sql

__author__ = "Yicheng Gong"




""" This spider returns a list of tuples, each consist of 4 elements
    in the form of (PluID, Category, Name, Image Link) """

def PLUSpider():
        url = 'http://supermarketpage.com/prucodes.php'
        img_url = 'http://supermarketpage.com/'
        unavil_img = 'images/produce/notavail.jpg'
        images = []
        stats = []
        source_code = requests.get(url)
        plain_text = source_code.text
        soup = BeautifulSoup(plain_text, 'lxml')
        table = soup.find("table")
        for row in table.find_all('tr'):
            for cell in row.find_all('tr'):
                for img_link in cell.find_all('img'):
                    img = img_link.get('src')
                    images.append(img_url + img)
                    #if img != unavil_img:
                for span in cell.find_all('span'):
                    stats.append(split_string(str(span)))
        data = fill_data(stats, images)
        return data
def split_string(input):
    result = re.match(r"<.*>(\d*)<.*>(.*)<.*>(.*)<.*>", input)
    return (result.group(1), result.group(2), result.group(3))

def fill_data(stats , imgs):
    result = []
    for i in range(len(imgs)):
        result.append((stats[i][0], stats[i][1], stats[i][2], imgs[i]))
    return result

result = PLUSpider()
#print result[0]
