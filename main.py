import csv

def write(row,filename='file.csv'):
    with open(filename, 'a', newline='') as file:
        writer = csv.writer(file)
        writer.writerow([row])
        file.close()

def turn_on():
    write('Turn on')

def turn_off():
    write('Turn off')

if __name__ == '__main__':
    write('Hello World')