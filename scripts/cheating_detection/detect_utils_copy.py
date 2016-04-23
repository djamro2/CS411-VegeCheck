from fetch_score import score_data
import re
from collections import defaultdict


def split_answers(input):
    groups = re.match(r"(\d*):[\d],(\d*):[\d],(\d*):[\d],(\d*):[\d],(\d*):[\d],", input)
    return (groups.group(1), groups.group(2), groups.group(3), groups.group(4), groups.group(5))

""" a and b should both be percentages of type (float or decimal)"""
def percentage_trigger(a, b, threshhold):
    if (abs(a - b) <= 20):
        return True
    else:
        return False

""" a and b should both be storeIDs of type (int)"""
def storeID_trigger(a, b):
    if a == b:
        return True
    else:
        return False

""" a and b should both be timeFinished of type (datetime)"""
def date_trigger(a, b):
    if a.date() == b.date():
        return True
    else:
        return False

"""a and b should both be a list of answers of type (list)"""
def compare_answers(answer1, answer2, threshhold):
    count = 0
    for i in answer1:
        for j in answer2:
            if i == j:
                count = count + 1
    if count >= threshhold:
        return True
    else:
        return False

def is_suspicious(person1, person2, percent_threshhold, answer_threshhold):
    storeID1 = int(person1[1])
    employeeID1 = int(person1[2])
    percentage1 = float(person1[3])
    timeFinished1 = person1[4]
    answers1 = split_answers(person1[5])
    
    storeID2 = int(person2[1])
    employeeID2 = int(person2[2])
    percentage2 = float(person2[3])
    timeFinished2 = person2[4]
    answers2 = split_answers(person2[5])

    test1 = percentage_trigger(percentage1, percentage2, percent_threshhold)
    test2 = storeID_trigger(storeID1, storeID2)
    test3 = date_trigger(timeFinished1, timeFinished2)
    test4 = compare_answers(answers1, answers2, answer_threshhold)
    if (test1 and test2 and test3 and test4):
        return True
    else: 
        return False
#    print type(storeID1), type(employeeID1), type(percentage1), type(timeFinished1), type(answers1)

def exists(input, a, b):
    for i in input[a]:
        if i == b:
            return True
    return False
def suspicious_employees(data):
    suspect_dict = defaultdict(list)
    percentage_threshhold = .2
    answer_threshhold = 3
    for i in range(len(data)):
        person_of_interest = data[i]
        for j in range(len(data)):
            person_to_compare = data[j]
            employeeID1 = int(person_of_interest[2])
            employeeID2 = int(person_to_compare[2])
            if ((employeeID1 != employeeID2) and is_suspicious(person_of_interest, person_to_compare, percentage_threshhold, answer_threshhold) and not exists(suspect_dict, employeeID1, employeeID2)):
                suspect_dict[employeeID1].append(employeeID2)
    return suspect_dict


       
