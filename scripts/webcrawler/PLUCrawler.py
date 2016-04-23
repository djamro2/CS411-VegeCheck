import requests
from bs4 import BeautifulSoup

"""DOES NOT WORK """

def PLU_spider(max_pages):
    categories = {}
    descriptions = []
    index_array = []
    page = 1
    while page <= max_pages:
        url = 'http://www.innvista.com/health/foods/plu-codes-alphabetical-order/'
        source_code = requests.get(url)
        plain_text = source_code.text
        soup = BeautifulSoup(plain_text, 'lxml')
        count = 0
        main_content = soup.find('div', attrs={'id': 'content'})
        for category in main_content.findAll('b'):
            if category.parent.name == 'span':
                categories[category.string] = []
                index_array.append(category.string)
            print(category)
            #ount = count + 1
        index = 0
        for ul in main_content.findAll('ul'):
            #key = index_array[index]
            for li in ul.findAll('li'):
                description = li.string
                if description is not None:
                    continue
                    #categories[key].append(description)
                index = index + 1
            #print(ul)
        page = page + 1
        print(index)
        print(count)



#def get_main_name:


#def get_real_name:

#def get_PLU_code:

PLU_spider(1)
