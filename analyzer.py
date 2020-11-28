import re
from datetime import datetime

def analyze_log(log_message):
    log_lines = [line for line in log_message.split('\n') if line.split()]

    status = log_lines[1]
    info = log_lines[2]

    time = re.search(r'\d{2}:\d{2}:\d{2}', log_message)
    time = datetime.strptime(time.group(), '%H:%M:%S').time()

    reference = re.search(r'[a-f,0-9]{22}$', info)

    try:
        reference = reference.group()
        text = ("🕛 {TIME}\nStatus: {STATUS} ✔️\nReference: {REFERENCE}".format(TIME=time, STATUS=status, REFERENCE=reference))
    except:
        text = ("🕛 {TIME}\nStatus: {STATUS} ❌\nError: {INFO}".format(TIME=time, STATUS=status, INFO=info))

    return text
