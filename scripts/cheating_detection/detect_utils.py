from fetch_score import score_data
import re
from collections import defaultdict

def split_answers(input):
    groups = re.match(r"(\d*):[\d],(\d*):[\d],(\d*):[\d],(\d*):[\d],(\d*):[\d],", input)
    return (groups.group(1), groups.group(2), groups.group(3), groups.group(4), groups.group(5))

""" a and b should both be percentages of type (float or decimal), max:20%"""
def score_trigger(a, b, threshhold):
    return (1 - abs(a-b)) * threshhold

""" a and b should both be storeIDs of type (int), max:15%"""
def storeID_trigger(a, b):
    if a == b:
        return .15
    else:
        return 0

""" a and b should both be timeFinished of type (datetime), max:15%"""
def date_trigger(a, b):
    if a.date() == b.date():
        return .15
    else:
        return 0

"""a and b should both be a list of answers of type (list), max:50%"""
def compare_answers(answer1, answer2):
    count = 0
    for i in answer1:
        for j in answer2:
            if i == j:
                count = count + 1
    return count * .1

def is_suspicious(person1, person2, score_weight, percent_threshhold):
    storeID1 = int(person1[2])
    employeeID1 = int(person1[3])
    percentage1 = float(person1[4])
    timeFinished1 = person1[5]
    answers1 = split_answers(person1[6])
#    print(answer1)    
    storeID2 = int(person2[2])
    employeeID2 = int(person2[3])
    percentage2 = float(person2[4])
    timeFinished2 = person2[5]
    answers2 = split_answers(person2[6])

    test1 = score_trigger(percentage1, percentage2, score_weight)
    test2 = storeID_trigger(storeID1, storeID2)
    test3 = date_trigger(timeFinished1, timeFinished2)
    test4 = compare_answers(answers1, answers2)

    total_sum = test1 + test2 +test3 + test4
    if (total_sum >= percent_threshhold):
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
    percentage_threshhold = .7
    score_weight = .2

    for i in range(len(data)):
        person_of_interest = data[i]
        for j in range(len(data)):
            person_to_compare = data[j]
            employeeID1 = int(person_of_interest[3])
            employeeID2 = int(person_to_compare[3])
            if ((employeeID1 != employeeID2) and is_suspicious(person_of_interest, person_to_compare, score_weight, percentage_threshhold) and not exists(suspect_dict, employeeID1, employeeID2)):
                suspect_dict[employeeID1].append(employeeID2)
    return suspect_dict

#print split_answers("1:0,2:0,3:0,4:0,5:0,")
#print(score_data()[0][)
#print dict(suspicious_employees(score_data()))
       
