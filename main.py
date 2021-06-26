from datetime import datetime
from estupy import Estupy
from parser import Parser
from worker import Worker

import logging
import sys

# NOTE: You must have the 'references.json' file created and it must have an empty JSON on it. -> {}

# First, we set estupy
estupy = Estupy()

# We give the option to choose the place via the args
try:
    estupy.place = int(sys.argv[1])
    estupy.zona = int(sys.argv[2])
except:
    pass

# We give the option to choose the references file via the args
try:
    estupy.references = str(sys.argv[3])
except:
    pass

# We give the option to choose the log file via the args
try:
    logging.basicConfig(filename=str(sys.argv[4]), format='(%(asctime)s) %(levelname)s:%(message)s', datefmt='%Y-%m-%d %H:%M:%S', level=logging.INFO)
except:
    logging.basicConfig(filename='estupy.log', format='(%(asctime)s) %(levelname)s:%(message)s', datefmt='%Y-%m-%d %H:%M:%S', level=logging.INFO)

# Second, we get the time range inside we can update references and we get the references in that time range
estupy.day, estupy.start, estupy.end = Worker.get_time_range(days=2, hours=3, minutes=00)
references = Worker.get_references(day=estupy.day, start=estupy.start, end=estupy.end, filename=estupy.references)

# If we have references, we try to update them
if references:
    for reference in references:
        # We set the start time to the same start time as the reference and then, we update the reference
        estupy.start = datetime.strptime(reference['start'], '%H:%M:%S').time()
        estupy.update(reference)
    exit()

# If we don't have any reference to update, we try to book a place
estupy.day, estupy.start, estupy.end = Worker.get_time_range(days=2, hours=0, minutes=30)
estupy.book()

# I need to use '-' because inside the function I subsctract times, and the checkin is a time in the future, not in the "past" as I implemented the function
estupy.day, estupy.start, estupy.end = Worker.get_time_range(days=0, hours=0, minutes=-30)

'''
estupy.update()
estupy.book()
estupy.checkin() -> Add this as an option to execute via the Telegram bot
estupy.checkout() -> Add this as an option to execute via the Telegram bot -> Replace with estupy.delete()
estupy.delete() -> Add this as an option to execute via the Telegram bot -> Maybe I can replace estupy.checkout() with this one
'''
