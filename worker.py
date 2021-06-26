import json

from datetime import datetime, timedelta, date, time

class Worker:

    @staticmethod
    def get_time_range(days, hours, minutes):
        day = datetime.today() + timedelta(days=days)
        if day.minute < 30:
            end = time(hour=day.hour, minute=00, second=00)
        else:
            end = time(hour=day.hour, minute=30, second=00)
        start = (datetime.combine(day, end) - timedelta(hours=hours, minutes=minutes)).time()
        # To operate with timedelta, you must use a datetime object, thats the reason of using datetime.combine() function
        #day = day.date() -> Should I store the day as a datetime object or as a date object? 🤔

        # I need to do this so I can properly have the start and end time if I try to 'checkin'
        if end < start:
            start, end = end, start

        return day, start, end

    @staticmethod
    def get_references(day, start, end, filename):
        file = open(filename, 'r')
        references = json.loads(file.read())
        file.close()

        # Firstly, we filter the references by date
        references = list(filter(lambda reference: datetime.strptime(reference['day'], '%Y-%m-%d').date() == day.date(), references.values()))

        # Secondly, we get the references with a start time between the time range we have calculated before
        references = list(filter(lambda reference: datetime.strptime(reference['start'], '%H:%M:%S').time() >= start, references))

        return references

    @staticmethod
    def write_reference(reference, day, start, end, filename):
        day = day.date().strftime('%Y-%m-%d')
        start = start.strftime('%H:%M:%S')
        end = end.strftime('%H:%M:%S')

        detail = {
            'id': reference,
            'day': day,
            'start': start,
            'end': end
        }

        file = open(filename, 'r')

        references = json.loads(file.read())

        file.close()

        references[reference] = detail

        file = open(filename, 'w')
        json.dump(references, file) # Use this if you don't want to store the references in a pretty mode
        #json.dump(references, file, indent='\t', separators=(',', ': '), ensure_ascii=False)

        file.close()
