import sys

from estupy import Estupy

estupy = Estupy()

try:
    SITIO = sys.argv[2]
    ZONA = sys.argv[3]
    estupy.update(SITIO, ZONA)
except:
    pass

try:
    action = int(sys.argv[1])

    if action == 1:
        estupy.make_reservation()
    elif action == 2:
        estupy.make_checkin()
    elif action == 3:
        estupy.make_update()
    else:
        estupy.make_reservation()

except:
    estupy.make_reservation()
