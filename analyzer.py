import re
from datetime import datetime
from calendar import monthrange

class Analyzer:

    @staticmethod
    def filter_date(date, time, days, hours, minutes):
        # Add n days to current date, check if we have to change the month or the year
        try:
            date = date.replace(day=date.day + days)
        except:
            max_days = monthrange(date.year, date.month)[1]

            day = (date.day + days) - max_days

            try:
                date = date.replace(day=day, month=date.month + 1)
            except:
                date = date.replace(day=day, month=1, year=date.year + 1)

        # Set the end time to 00 or 30 minutes, depending of which one is closer to the current time
        try:
            i = int(time.minute / minutes)

            end = time.replace(minute=i*minutes, second=00)

            # Get the start time, substracting 30 minutes to the end time
            try:
                start = end.replace(hour=end.hour - hours, minute=end.minute - minutes)
            except:
                start = end.replace(hour=end.hour - hours - 1, minute=(end.minute - minutes) % 60)
                
        except:
            end = time.replace(minute=00, second=00)
            start = end.replace(hour=end.hour - hours)

        return date, start, end

    @staticmethod
    def analyze_log(message):
        message = message.rstrip().split('\n')
        try:
            message.remove('===================================')
        except:
            pass

        status = message[1]
        info = message[2:]

        date = re.search(r'\d{4}-\d{2}-\d{2}', message[0])
        date = datetime.strptime(date.group(), '%Y-%m-%d').date()
        time = re.search(r'\d{2}:\d{2}:\d{2}', message[0])
        time = datetime.strptime(time.group(), '%H:%M:%S').time()

        date, start, end = Analyzer.filter_date(date, time, days=2, minutes=30)

        reference = re.search(r'[a-f,0-9]{22}$', info[0])

        time = '{DATE}: {START} - {END}'.format(DATE=date, START=start, END=end)

        try:
            reference = reference.group()
            text = ('🕛 {TIME}\nStatus: {STATUS} ✔️\nReference: {REFERENCE}'.format(TIME=time, STATUS=status, REFERENCE=reference))
        except:
            text = ('🕛 {TIME}\nStatus: {STATUS} ❌\n{INFO}'.format(TIME=time, STATUS=status, INFO=info[0] + " " + info[1]))

        return text

    @staticmethod
    def analyze_references(log_references, today, start, end):
        log_references = list(filter(('===================================').__ne__, log_references))

        references = []

        for index in range(0, len(log_references), 3):
            date = datetime.strptime(log_references[index], '%Y-%m-%d').date()
            time = datetime.strptime(log_references[index + 1], '%H:%M:%S').time()

            if date == today:
                if start <= time <= end:
                    references.append(log_references[index + 2])

        return references

