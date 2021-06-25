from datetime import datetime
from estupy import Estupy
from parser import Parser
from worker import Worker

# First, we set estupy
estupy = Estupy()
# Second, we get the time range inside we can update references
estupy.day, estupy.start, estupy.end = Worker.get_time_range(days=2, hours=2, minutes=30)
# Third, we get the references in that time range
references = Worker.get_references(day=estupy.day, start=estupy.start, end=estupy.end)
# If we have references, we try to update them
if references:
    for reference in references:
        # We set the start time to the same start time as the reference
        estupy.start = datetime.strptime(reference['start'], '%H:%M:%S').time()
        # Then, we update the reference
        #estupy.update(reference)

# After updating the references, we try to book a place
# TODO: I must fix this logic with the exceptions
estupy.day, estupy.start, estupy.end = Worker.get_time_range(days=2, hours=0, minutes=30)
#estupy.book()

# I need to use - because inside the function I subsctract times, and the checkin is a time in the future, not in the "past" as I implemented the function
estupy.day, estupy.start, estupy.end = Worker.get_time_range(days=0, hours=0, minutes=-30)
print(estupy.day.date(), estupy.start, estupy.end)
'''
estupy.update()
estupy.book()
estupy.checkin() -> Add this as an option to execute via the Telegram bot
estupy.checkout() -> Add this as an option to execute via the Telegram bot -> Replace with estupy.delete()
estupy.delete() -> Add this as an option to execute via the Telegram bot -> Maybe I can replace estupy.checkout() with this one

exit() to close the script
'''
