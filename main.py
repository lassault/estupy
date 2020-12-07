import errors
import sys

from estupy import Estupy

estupy = Estupy()

'''
try:
    SITIO = int(sys.argv[2])
    ZONA = int(sys.argv[3])
    estupy.update(SITIO, ZONA)
except:
    pass
'''

try:
    print('Trying to checkin...')
    estupy.make_checkin()
except errors.UnableToCheckin as e:
    print('Failed to checkin {REASON}'.format(REASON=e))
    print('Trying to update...')
    try:
        estupy.make_update()
    except errors.UnableToUpdate as e:
        print('Failed to update {REASON}'.format(REASON=e))
        print('Trying to reservate...')
        try:
            estupy.make_reservation()
        except errors.FailedToExecute as e:
            print('Failed to reservate: {REASON}'.format(REASON=e))
except errors.InvalidReference as e:
    print('Invalid references: {REASON}'.format(REASON=e))
except errors.EmptyReferences as e:
    try:
        print('Failed to checkin: {REASON}'.format(REASON=e))
        print('Trying to update...')
        estupy.make_update()
    except errors.EmptyReferences as e:
        print('Failed to update: {REASON}'.format(REASON=e))
        print('Trying to reservate...')
        try:
            estupy.make_reservation()
        except errors.UnableToReservate as e:
            print('Failed to reservate {REASON}'.format(REASON=e))
        else:
            print('Reservation made!')
    except errors.UnableToUpdate as e:
        print('Failed to update: {REASON}'.format(REASON=e))
        print('Trying to reservate...')
        try:
            estupy.make_reservation()
        except errors.UnableToReservate as e:
            print('Failed to reservate {REASON}'.format(REASON=e))
    else:
        print('Update done!')
else:
    print('Checkin done!')