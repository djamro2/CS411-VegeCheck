import urlparse 
from urllib import quote_plus
import json
import requests
import pprint

def bing_search(query):
    # Your base API URL; change "Image" to "Web" for web results.
    url = "https://api.datamarket.azure.com/Bing/Search/v1/Image"

    # Query parameters. Don't try using urlencode here.
    # Don't ask why, but Bing needs the "$" in front of its parameters.
    # The '$top' parameter limits the number of search results.
    url += "?$format=json&$top=10&Query=%27{}%27".format(quote_plus(query))

    # You can get your primary account key at https://datamarket.azure.com/account
    r = requests.get(url, auth=("","od5LE4Ot+dV+OLSGBal4BliD6fqdjn2Agv6/gu7y9M8"))
    resp = json.loads(r.text)
    #print resp
    replacement_url = "https://upload.wikimedia.org/wikipedia/commons/8/88/Bright_red_tomato_and_cross_section02.jpg"
    img = None;
    if len(resp["d"]["results"]) == 0:
        img = replacement_url
    else:
        img = resp["d"]["results"][0]["MediaUrl"]
    return img

#print(bing_search("Cocktail / Intermediate Red / Plum / Italian / Saladette / Roma, on the vine [Truss] Tomato"))

