import requests
import os
from dotenv import load_dotenv
from bs4 import BeautifulSoup
import delegator
import argparse
import analyzer

# Obtener los parametros a mano

load_dotenv()

EMAIL = os.getenv("EMAIL")
PASSWORD = os.getenv("PASSWORD")

SITIO = os.getenv("SITIO")
ZONA = os.getenv("ZONA")

'''
AÑO = os.getenv("AÑO")
MES = os.getenv("MES")
DIA = os.getenv("DIA")

HORA_INICIO = os.getenv("HORA_INICIO")
MIN_INICIO = os.getenv("MIN_INICIO")
SEC_INICIO = os.getenv("SEC_INICIO")

HORA_FIN = os.getenv("HORA_FIN")
MIN_FIN = os.getenv("MIN_FIN")
SEC_FIN = os.getenv("SEC_FIN")
'''



'''
parser = argparse.ArgumentParser(description="Un bot estupidamente sexy")
parser.add_argument("-a", "--año", help="Año")
parser.add_argument("-m", "--mes", help="Mes")
parser.add_argument("-d", "--dia", help="Dia")
parser.add_argument("-hi", "--hora_inicio", help="Hora inicio")
parser.add_argument("-mi" "--minuto_inicio", help="Minuto inicio")
parser.add_argument("-hf", "--hora_fin", help="Hora fin")
parser.add_argument("-mf", "--minuto_final", help="Minuto final")
parser.add_argument("-id", "--id", help="Sitio ID")
'''


login_url = "https://servicioscampus.unavarra.es/resSalas/Web/index.php"

dashboard_url = "https://servicioscampus.unavarra.es/resSalas/Web/dashboard.php"

reservation_url = "https://servicioscampus.unavarra.es/resSalas/Web/ajax/reservation_save.php"

# ALUM-B1: sid=8
# ALUM-B2: sid=18
# ALUM-C1: sid=9
# ALUM-C2: sid=19

command = "date --rfc-3339=s"
timestamp = delegator.run(command).out

date, time = analyzer.analyze_date(timestamp)

date, start_time, end_time = analyzer.filter_date(date, time)

payload = {
    'email': EMAIL,
    'password': PASSWORD,
    'login': 'submit',
    'resume': '/resSalas/Web/reservation.php?rid={SITIO}&sid={ZONA}&rd={AÑO}-{MES}-{DIA}&sd={AÑO}-{MES}-{DIA} {HORA_INICIO}:{MIN_INICIO}:{SEC_INICIO}&ed={AÑO}-{MES}-{DIA} {HORA_FIN}:{MIN_FIN}:{SEC_FIN}'.format(
        SITIO=SITIO,
        ZONA=ZONA,
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
    petition = session.post(login_url, data=payload)

    soup = BeautifulSoup(petition.text, 'lxml')

    begin, end = soup.find_all('option', {'selected': 'selected'})

    begin = begin.get('value')
    end = end.get('value')

    if begin > end:
        end, begin = begin, end

    userId = soup.find('input', {'id': 'userId'}).get('value')
    beginDate = soup.find('input', {'id': 'formattedBeginDate'}).get('value')
    beginPeriod = begin
    endDate = soup.find('input', {'id': 'formattedEndDate'}).get('value')
    endPeriod = end
    scheduleId = soup.find('input', {'id': 'scheduleId'}).get('value')
    resourceId = soup.find('input', {'id': 'primaryResourceId'}).get('value')
    reservationTitle = soup.find('input', {'id': 'reservationTitle'}).get('value')
    reservationId = soup.find('input', {'name': 'reservationId'}).get('value')
    referenceNumber = soup.find('input', {'id': 'referenceNumber'}).get('value')
    reservationAction = soup.find('input', {'name': 'reservationAction'}).get('value')
    hdnDeleteReason = soup.find('input', {'id': 'hdnDeleteReason'}).get('value')
    hdnSeriesUpdateScope = soup.find('input', {'id': 'hdnSeriesUpdateScope'}).get('value')
    csrf_token = soup.find('input', {'id': 'csrf_token'}).get('value')

    petition = session.get(dashboard_url, data=payload)

    res_data = {
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

    petition = session.post(reservation_url, data=res_data)

    done = BeautifulSoup(petition.text, 'lxml')

    created = done.find('div', {'id': 'created-message'})
    try:
        print(created.text)
        reference = done.find('div', {'id': 'reference-number'})
        print(reference.text)
    except:
        failed = done.find('div', {'id': 'failed-message'})
        error = done.find('div', {'class': 'error'})
        print(failed.text, error.text, sep='')

        #for error in errors:
            #print(error.text)

    #print(petition.text, petition)
