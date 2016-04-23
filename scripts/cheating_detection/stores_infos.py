from fetch_score import score_data
from collections import defaultdict

""" returns a dictionary of each store with a list of its scores"""

class StoreInfo:
    store_avgs = {}

    def __init__(self, data):
        self._data = data
        #self._store_avgs = {}
    def parse_store_info(self, data):
        store_info = defaultdict(list)
        for row in data:
            storeID = row[1]
            percentage = row[3]
            store_info[storeID].append(percentage)
        return store_info

    def store_avg(self, storeID):
        #store_info = parse_store_info(self._data)
        return store_avgs[storeID]

    def total_store_avg(self):
        #store_avgs = {}
        store_info = self.parse_store_info(self._data)
        for store in store_info.keys():
            sum = 0
            for i in store_info[store]:
                sum = sum + i
            self.store_avgs[store] = (float)(sum / len(store_info[store]))
        return self.store_avgs
    #print parse_store_info(score_data())

#store_info = StoreInfo(score_data())
#print store_info.total_store_avg()
