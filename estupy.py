import settings
import requests

from worker import Worker
from bs4 import BeautifulSoup

class Estupy:
    def __init__(self):
        self.email = settings.EMAIL
        self.password = settings.PASSWORD
        self.sitio = settings.SITIO
        self.zona = settings.ZONA
        self.login = 'https://servicioscampus.unavarra.es/resSalas/Web/index.php'
        self.reservation = 'https://servicioscampus.unavarra.es/resSalas/Web/ajax/reservation_save.php'
        self.checkin = 'https://servicioscampus.unavarra.es/resSalas/Web/ajax/reservation_checkin.php?action={ACTION}'
        self.std_log = settings.STD_LOG
        self.error_log = settings.ERROR_LOG
        self.references_log = settings.REFERENCES_LOG

    def update(self, sitio, zona):
        self.sitio = sitio
        self.zona = zona

    def make_reservation(self):
        date, start_time, end_time = Worker.get_date_range(False)

        payload = {
            'email': self.email,
            'password': self.password,
            'login': 'submit',
            'resume': '/resSalas/Web/reservation.php?rid={SITIO}&sid={ZONA}&rd={AÑO}-{MES}-{DIA}&sd={AÑO}-{MES}-{DIA} {HORA_INICIO}:{MIN_INICIO}:{SEC_INICIO}&ed={AÑO}-{MES}-{DIA} {HORA_FIN}:{MIN_FIN}:{SEC_FIN}'.format(
                SITIO=self.sitio,
                ZONA=self.zona,
                AÑO=date.year,
                MES="{:02d}".format(date.month),
                DIA="{:02d}".format(date.day),
                HORA_INICIO="{:02d}".format(start_time.hour),
                MIN_INICIO="{:02d}".format(start_time.minute),
                SEC_INICIO="{:02d}".format(start_time.second),
                HORA_FIN="{:02d}".format(end_time.hour),
                MIN_FIN="{:02d}".format(end_time.minute),
                SEC_FIN="{:02d}".format(end_time.second)
            )
        }

        with requests.Session() as session:
            petition = session.post(self.login, data=payload)

            reservation = BeautifulSoup(petition.text, 'lxml')

            try:
                begin, end = reservation.find_all('option', {'selected': 'selected'})

                begin = begin.get('value')
                end = end.get('value')

                if begin > end:
                    end, begin = begin, end

                userId = reservation.find('input', {'id': 'userId'}).get('value')
                beginDate = reservation.find('input', {'id': 'formattedBeginDate'}).get('value')
                beginPeriod = begin
                endDate = reservation.find('input', {'id': 'formattedEndDate'}).get('value')
                endPeriod = end
                scheduleId = reservation.find('input', {'id': 'scheduleId'}).get('value')
                resourceId = reservation.find('input', {'id': 'primaryResourceId'}).get('value')
                reservationTitle = reservation.find('input', {'id': 'reservationTitle'}).get('value')
                reservationId = reservation.find('input', {'name': 'reservationId'}).get('value')
                referenceNumber = reservation.find('input', {'id': 'referenceNumber'}).get('value')
                reservationAction = reservation.find('input', {'name': 'reservationAction'}).get('value')
                hdnDeleteReason = reservation.find('input', {'id': 'hdnDeleteReason'}).get('value')
                hdnSeriesUpdateScope = reservation.find('input', {'id': 'hdnSeriesUpdateScope'}).get('value')
                csrf_token = reservation.find('input', {'id': 'csrf_token'}).get('value')

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

                petition = session.post(self.reservation, data=reservation_data)

                response = BeautifulSoup(petition.text, 'lxml')

                Worker.get_details(response, self)
                

            except ValueError:
                print('Wrong login or endpoint')

    def make_checkin(self):
        references = Worker.get_references(self)

        try:
            if not references:
                raise EmptyReferences

            for reference in references:
                payload = {
                    'email': self.email,
                    'password': self.password,
                    'login': 'submit',
                    'resume': '/resSalas/Web/reservation.php?rn={REFERENCE}'.format(
                        REFERENCE=reference
                    )
                }

                with requests.Session() as session:
                    petition = session.post(self.login, data=payload)

                    checkin = BeautifulSoup(petition.text, 'lxml')

                    try:
                        begin, end = checkin.find_all('option', {'selected': 'selected'})

                        begin = begin.get('value')
                        end = end.get('value')

                        if begin > end:
                            end, begin = begin, end

                        userId = checkin.find('input', {'id': 'userId'}).get('value')
                        beginDate = checkin.find('input', {'id': 'formattedBeginDate'}).get('value')
                        beginPeriod = begin
                        endDate = checkin.find('input', {'id': 'formattedEndDate'}).get('value')
                        endPeriod = end
                        scheduleId = checkin.find('input', {'id': 'scheduleId'}).get('value')
                        resourceId = checkin.find('input', {'id': 'primaryResourceId'}).get('value')
                        reservationTitle = checkin.find('input', {'id': 'reservationTitle'}).get('value')
                        reservationId = checkin.find('input', {'name': 'reservationId'}).get('value')
                        referenceNumber = checkin.find('input', {'id': 'referenceNumber'}).get('value')
                        reservationAction = checkin.find('input', {'name': 'reservationAction'}).get('value')
                        hdnDeleteReason = checkin.find('input', {'id': 'hdnDeleteReason'}).get('value')
                        hdnSeriesUpdateScope = checkin.find('input', {'id': 'hdnSeriesUpdateScope'}).get('value')
                        csrf_token = checkin.find('input', {'id': 'csrf_token'}).get('value')

                        checkin_data = {
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
        
                        checkin_button = checkin.select_one('.btn.btn-warning.btnCheckin')
                        checkout_button = checkin.select_one('.btn.btn-warning.btnCheckout')

                        action = None

                        if checkin_button is not None:
                            action = 'checkin'

                        if checkout_button is not None:
                            action = 'checkout'

                        if action is None:
                            raise InvalidReference

                        """
                        url = 'https://servicioscampus.unavarra.es/resSalas/Web/ajax/reservation_checkin.php?action={ACTION}'.format(
                            ACTION=action
                        )
                        """

                        self.checkin.format(ACTION=action)

                        petition = session.post(self.checkin, checkin_data)

                        response = BeautifulSoup(petition.text, 'lxml')

                        print(petition.text)

                    except InvalidReference:
                        print('Invalid reference')
                    except ValueError:
                        print('Wrong login or endpoint')
        except EmptyReferences:
            print('Empty references')


    def make_update(self):
        print('Updating last reservation...')

#class WrongEndpoit(Exception):
    #pass

class EmptyReferences(Exception):
    pass

class InvalidReference(Exception):
    pass