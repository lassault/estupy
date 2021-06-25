from datetime import datetime, timedelta, time
from parser import Parser
from worker import Worker

import requests
import settings

class Estupy:
    def __init__(self):
        self.email = settings.EMAIL
        self.password = settings.PASSWORD
        self.place = settings.PLACE
        self.zone = settings.ZONE
        self.endpoints = {
            'login': 'https://servicioscampus.unavarra.es/resSalas/Web/index.php',
            'book': 'https://servicioscampus.unavarra.es/resSalas/Web/ajax/reservation_save.php',
            'update': 'https://servicioscampus.unavarra.es/resSalas/Web/ajax/reservation_update.php',
            'checkin': 'https://servicioscampus.unavarra.es/resSalas/Web/ajax/reservation_checkin.php?action={ACTION}'
        }
        self.std_log = settings.STD_LOG
        self.error_log = settings.ERROR_LOG
        self.references_log = settings.REFERENCES_LOG
        # Because we are going to reuse a lot the session and the date and time values, is better to set as a parameter to initialize in the setup
        self.session = requests.Session()
        self.day = None
        self.start = None
        self.end = None

    def book(self):
        # TODO: This function has to be tested
        payload = {
            'email': self.email,
            'password': self.password,
            'login': 'submit',
            'resume': '/resSalas/Web/reservation.php?rid={PLACE}&sid={ZONE}&rd={YEAR}-{MONTH}-{DAY}&sd={YEAR}-{MONTH}-{DAY} {START_HOUR}:{START_MIN}:{START_SECOND}&ed={YEAR}-{MONTH}-{DAY} {END_HOUR}:{END_MIN}:{END_SECOND}'.format(
                PLACE=self.place,
                ZONE=self.zone,
                YEAR=self.date.year,
                MONTH="{:02d}".format(self.date.month),
                DAY="{:02d}".format(self.date.day),
                START_HOUR="{:02d}".format(self.start.hour),
                START_MIN="{:02d}".format(self.start.minute),
                START_SECOND="{:02d}".format(self.start.second),
                END_HOUR="{:02d}".format(self.end.hour),
                END_MIN="{:02d}".format(self.end.minute),
                END_SECOND="{:02d}".format(self.end.second)
            )
        }

        try:
            petition = self.session.post(self.endpoints['login'], data=payload)
            reservation_params = Parser.get_reservation_params(petition)

            petition = self.session.post(self.endpoints['book'], data=reservation_params)

            reference = Parser.get_reference(petition)

            # If we are successful, we write the reference in the file
            Worker.write_reference(reference, self.day, self.start, self.end)
        except ValueError:
            return

    def update(self, reference):
        # TODO: This function has to be tested
        payload = {
            'email': self.email,
            'password': self.password,
            'login': 'submit',
            'resume': '/resSalas/Web/reservation.php?rn={REFERENCE}'.format(
                REFERENCE=reference['id']
            )
        }

        try:
            petition = self.session.post(self.endpoints['login'], data=payload)

            reservation_params = Parser.get_reservation_params(petition)
            # We need to update the end time, the new end value is stored as a time object in property of estupy
            reservation_params['endPeriod'] = self.end.strftime('%H:%M:%S')

            petition = self.session.post(self.endpoints['update'], data=reservation_params)

            reference = Parser.get_reference(petition)

            # If we are successful, we write the reference in the file
            Worker.write_reference(reference, self.day, self.start, self.end)
        except ValueError:
            return
            #raise ValueError('Invalid reference: {REFERENCE}'.format(REFERENCE=reference))

    def checkin(self, reference):
        # TODO: This function has to be fully tested
        payload = {
            'email': self.email,
            'password': self.password,
            'login': 'submit',
            'resume': '/resSalas/Web/reservation.php?rn={REFERENCE}'.format(
                REFERENCE=reference['id']
            )
        }

        try:
            petition = self.session.post(self.endpoints['login'], data=payload)

            reservation_params = Parser.get_reservation_params(petition)

            self.checkin.format(ACTION='checkin')

            petition = self.session.post(self.endpoints['checkin'], data=reservation_params)

            response = Parser.get_details(petition)
        except ValueError:
            return

    def checkout(self, reference):
        # TODO: This function has to be fully tested
        # I don't know if I need to implement this one, it forces to update the time range in an arbitrary ranges
        payload = {
            'email': self.email,
            'password': self.password,
            'login': 'submit',
            'resume': '/resSalas/Web/reservation.php?rn={REFERENCE}'.format(
                REFERENCE=reference['id']
            )
        }

        try:
            petition = self.session.post(self.endpoints['login'], data=payload)

            reservation_params = Parser.get_reservation_params(petition)

            self.checkin.format(ACTION='checkout')

            petition = self.session.post(
                self.endpoints['checkin'], data=reservation_params)

            response = Parser.get_details(petition)
        except ValueError:
            return

    #def delete(self):
    # Maybe I can try to implement a delete option also for the Telegram bot?