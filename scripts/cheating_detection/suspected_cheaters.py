from detect_utils import suspicious_employees
from fetch_score import score_data

def get_suspects():
    data = score_data()
    cheaters = suspicious_employees(data)
    return cheaters
#print get_suspects()
