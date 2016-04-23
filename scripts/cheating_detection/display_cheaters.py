import sys
from suspected_cheaters import get_suspects

def display(suspects):
    for suspect in suspects.keys():
        sys.stdout.write('EMPLOYEE' + str(suspect) + ': ')
        for partners in suspects[suspect]:
            sys.stdout.write('EMPLOYEE' + str(partners) + ' ')
        sys.stdout.write("<br>")
        sys.stdout.flush()

display(dict(get_suspects()))
