import re
from datetime import datetime
from calendar import monthrange

def analyze_log_ext(log_message, date, start, end):
    log_lines = [line for line in log_message.split('\n') if line.split()]
    try:
        log_lines.remove("===================================")
    except:
        pass

    status = log_lines[1]
    info = log_lines[2:]

    reference = re.search(r'[a-f,0-9]{22}$', info[0])

    start = datetime(date.year, date.month, date.day, start.hour, start.minute, start.second)
    end = datetime(date.year, date.month, date.day, end.hour, end.minute, end.second)

    date = datetime.strftime(date, '%d-%m-%Y')
    start = datetime.strftime(start, '%H:%M:%S')
    end = datetime.strftime(end, '%H:%M:%S')

    time = "{DATE}: {START} - {END}".format(DATE=date, START=start, END=end)

    try:
        reference = reference.group()
        text = ("🕛 {TIME}\nStatus: {STATUS} ✔️\nReference: {REFERENCE}".format(TIME=time, STATUS=status, REFERENCE=reference))
    except:
        text = ("🕛 {TIME}\nStatus: {STATUS} ❌\n{INFO}".format(TIME=time, STATUS=status, INFO=info[0] + " " + info[1]))

    return text

def analyze_log(log_message):
    log_lines = [line for line in log_message.split('\n') if line.split()]
    try:
        log_lines.remove("===================================")
    except:
        pass

    status = log_lines[1]
    info = log_lines[2:]

    time = re.search(r'\d{2}:\d{2}:\d{2}', log_message)
    time = datetime.strptime(time.group(), '%H:%M:%S').time()

    reference = re.search(r'[a-f,0-9]{22}$', info[0])

    try:
        reference = reference.group()
        text = ("🕛 {TIME}\nStatus: {STATUS} ✔️\nReference: {REFERENCE}".format(TIME=time, STATUS=status, REFERENCE=reference))
    except:
        text = ("🕛 {TIME}\nStatus: {STATUS} ❌\n{INFO}".format(TIME=time, STATUS=status, INFO=info[0] + " " + info[1]))

    return text

def analyze_date(timestamp):
    '2020-11-28 09:48:17+01:00'
    date = re.search(r'\d{4}-\d{2}-\d{2}', timestamp)
    date = datetime.strptime(date.group(), '%Y-%m-%d').date()
    time = re.search(r'\d{2}:\d{2}:\d{2}', timestamp)
    time = datetime.strptime(time.group(), '%H:%M:%S').time()
    return date, time

def filter_date(date, time):
    # Add n days to current date, check if we have to change the month or the year
    try:
        date = date.replace(day=date.day + 2)
    except:
        max_days = monthrange(date.year, date.month)[1]

        day = (date.day + 2) - max_days

        try:
            date = date.replace(day=day, month=date.month + 1)
        except:
            date = date.replace(day=day, month=1, year=date.year + 1)


    # Set the end time to 00 or 30 minutes, depending of which one is closer to the current time
    i = int(time.minute / 30)

    end = time.replace(minute=i*30, second=00)

    # Get the start time, substracting 30 minutes to the end time
    try:
        start = end.replace(minute=end.minute - 30)
    except:
        start = end.replace(hour=end.hour - 1, minute=(end.minute - 30)%60)

    return date, start, end

'''
command = "date --rfc-3339=s"

#command = "date -d @1577665080 --rfc-3339=s"

timestamp = delegator.run(command).out

date, time = analyze_date(timestamp)

print(date, time)

date, start, end = filter_date(date, time)

print(date, start, end)
'''