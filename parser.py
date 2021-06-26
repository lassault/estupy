from bs4 import BeautifulSoup

import re
import logging

class Parser:

    @staticmethod
    def get_reservation_params(petition):
        parser = BeautifulSoup(petition.text, 'lxml')

        try:
            begin, end = parser.find_all('option', {'selected': 'selected'})

            begin = begin.get('value')
            end = end.get('value')

            if begin > end:
                end, begin = begin, end

            userId = parser.find('input', {'id': 'userId'}).get('value')
            beginDate = parser.find('input', {'id': 'formattedBeginDate'}).get('value')
            beginPeriod = begin
            endDate = parser.find('input', {'id': 'formattedEndDate'}).get('value')
            endPeriod = end
            scheduleId = parser.find('input', {'id': 'scheduleId'}).get('value')
            resourceId = parser.find('input', {'id': 'primaryResourceId'}).get('value')
            reservationTitle = parser.find('input', {'id': 'reservationTitle'}).get('value')
            reservationId = parser.find('input', {'name': 'reservationId'}).get('value')
            referenceNumber = parser.find('input', {'id': 'referenceNumber'}).get('value')
            reservationAction = parser.find('input', {'name': 'reservationAction'}).get('value')
            hdnDeleteReason = parser.find('input', {'id': 'hdnDeleteReason'}).get('value')
            hdnSeriesUpdateScope = parser.find('input', {'id': 'hdnSeriesUpdateScope'}).get('value')
            csrf_token = parser.find('input', {'id': 'csrf_token'}).get('value')

            reservation_data = {
                'userId': userId,
                'beginDate': beginDate,
                'beginPeriod': beginPeriod,
                'endDate': endDate,
                'endPeriod': endPeriod,
                'scheduleId': scheduleId,
                'resourceId': resourceId,
                'reservationTitle': reservationTitle,
                'reservationDescription': '',
                'reservationId': reservationId,
                'referenceNumber': referenceNumber,
                'reservationAction': reservationAction,
                'DELETE_REASON': hdnDeleteReason,
                'seriesUpdateScope': hdnSeriesUpdateScope,
                'CSRF_TOKEN': csrf_token
            }

            return reservation_data

        except ValueError:
            error = parser.find('div', {'class': 'error'})
            error = error.text.split('\n')[1]
            raise ValueError(error.replace('\n', ''))

    @staticmethod
    def get_reference(petition):
        response = BeautifulSoup(petition.text, 'lxml')

        try:
            reference = re.search(r'[a-f,0-9]{22}$', response.find('div', {'id': 'reference-number'}).text).group()
            return reference
        except AttributeError:
            error = response.find('div', {'class': 'error'})
            raise ValueError(error.text.replace('\n', ''))

    @staticmethod
    def get_details(petition):
        # TODO: This function has to be tested
        # It's used when executing the 'checkin' option
        response = BeautifulSoup(petition.text, 'lxml')

        try:
            created = response.find('div', {'id': 'created-message'})

            reference = response.find('div', {'id': 'reference-number'})

            reference = re.search(r'[a-f,0-9]{22}$', reference.text).group()
        except AttributeError:
            error = response.find('div', {'class': 'error'})
            raise ValueError(error.text.replace('\n', ''))