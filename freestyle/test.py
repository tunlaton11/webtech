

def check_variable(i):
    for j in i: 
        if j in ['@', '#', '$', '%', '^', '&', '+', '=', '*', '(', ')', '.']: #case1
            return False
    if " " in i[1: len(i) -1] or i[0] in ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9']: #case 2, 3
        return False
    elif i in ['if', 'else', 'elif', 'while', 'for', 'True', 'False', 'continue', 'break', 'return', 'is', 'in', 'and', 'or', 'from', 'as', 'pass', 'not', 'def', 'None']: #case4
        return False
    return True




def main():
    count = int(input())
    var = []
    for _ in range(count):
        var.append(input())
    for i in var:
        if check_variable(i) == True:
            print("Valid")
        else:
            print("Invalid")

main()
