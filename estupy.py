import requests
import os
from dotenv import load_dotenv
from bs4 import BeautifulSoup
import argparse

load_dotenv()

USERNAME = os.getenv("USERNAME")
PASSWORD = os.getenv("PASSWORD")

SITIO = os.getenv("SITIO")
ZONA = os.getenv("ZONA")

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

# ALUM-B2: sid=18
# ALUM-C2: sid=19

payload = {
    'email': USERNAME,
    'password': PASSWORD,
    'login': 'submit',
    'resume': '/resSalas/Web/reservation.php?rid={SITIO}&sid={ZONA}&rd={AÑO}-{MES}-{DIA}&sd={AÑO}-{MES}-{DIA} {HORA_INICIO}:{MIN_INICIO}:{SEC_INICIO}&ed={AÑO}-{MES}-{DIA} {HORA_FIN}:{MIN_FIN}:{SEC_FIN}'.format(
        SITIO=SITIO,
        ZONA=ZONA,
        AÑO=AÑO,
        MES=MES,
        DIA=DIA,
        HORA_INICIO=HORA_INICIO,
        MIN_INICIO=MIN_INICIO,
        SEC_INICIO=SEC_INICIO,
        HORA_FIN=HORA_FIN,
        MIN_FIN=MIN_FIN,
        SEC_FIN=SEC_FIN
    )
}

with requests.Session() as session:
    petition = session.post(login_url, data=payload)

    #print(petition.cookies, petition.text)

    #print(petition.cookies)

    soup = BeautifulSoup(petition.text, 'lxml')

    #print(soup)

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

    #print(petition.cookies, petition.text)
    #print(petition.cookies)

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

    #print(res_data)

    petition = session.post(reservation_url, data=res_data)

    done = BeautifulSoup(petition.text, 'lxml')

    created = done.find('div', {'id': 'created-message'})
    try:
        print(created.text)
        reference = done.find('div', {'id': 'reference-number'})
        print(reference.text)
    except:
        failed = done.find('div', {'id': 'failed-message'})
        print(failed.text)
        errors = done.find_all('div', {'class': 'error'})

        for error in errors:
            print(error.text)

    #print(petition.text, petition)

checkin_url = "https://servicioscampus.unavarra.es/resSalas/Web/ajax/reservation_checkin.php?action=checkin"

params = {
    "Same as": "reservation",
    "but we know": "the reference number",
    "and action is": "update"
}

"""(Chekin)
POST: https://servicioscampus.unavarra.es/resSalas/Web/ajax/reservation_checkin.php?action=checkin
---------------------------------------------------------------------------------------------
Host: servicioscampus.unavarra.es

User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:83.0) Gecko/20100101 Firefox/83.0

Accept: */*

Accept-Language: en-GB,en;q=0.5

Accept-Encoding: gzip, deflate, br

Content-Type: application/x-www-form-urlencoded; charset=UTF-8

X-Requested-With: XMLHttpRequest

Content-Length: 348

Origin: https://servicioscampus.unavarra.es

DNT: 1

Connection: keep-alive

Referer: https://servicioscampus.unavarra.es/resSalas/Web/reservation.php?rn=5fbf862dda391077636423

Cookie: PHPSESSID=dghehcrofqlrpp409v3ars4rrc; resource_filter2=%7B%22ScheduleId%22%3A%222%22%2C%22ResourceIds%22%3A%5B%229%22%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; schedule_calendar_toggle=false; language=en_gb; resource_filter9=%7B%22ScheduleId%22%3A%229%22%2C%22ResourceIds%22%3A%5B%229%22%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; resource_filter8=%7B%22ScheduleId%22%3A%228%22%2C%22ResourceIds%22%3A%5B%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; resource_filter7=%7B%22ScheduleId%22%3A%227%22%2C%22ResourceIds%22%3A%5B%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; resource_filter10=%7B%22ScheduleId%22%3A%2210%22%2C%22ResourceIds%22%3A%5B%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; resource_filter12=%7B%22ScheduleId%22%3A%2212%22%2C%22ResourceIds%22%3A%5B%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; UPNANODE=balancer.fagus1; tree2={"open_nodes":["1","2"],"selected_node":""}
------------------------------------------------------------------------------------------------

userId=6909&beginDate=2020-11-26&beginPeriod=12:00:00&endDate=2020-11-26&endPeriod=12:30:00&scheduleId=7&resourceId=60&reservationTitle=&reservationDescription=&reservationId=64381&referenceNumber=5fbf862dda391077636423&reservationAction=update&DELETE_REASON=&seriesUpdateScope=full&CSRF_TOKEN=ZmMwMjEzMzgxOGFkOTAwZmQwZDhkNzM5OGJmMDQ5MDQ=
"""

"""(Checkout)
POST: https://servicioscampus.unavarra.es/resSalas/Web/ajax/reservation_checkin.php?action=checkout
---------------------------------------------------------------------------------------------
Host: servicioscampus.unavarra.es

User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:83.0) Gecko/20100101 Firefox/83.0

Accept: */*

Accept-Language: en-GB,en;q=0.5

Accept-Encoding: gzip, deflate, br

Content-Type: application/x-www-form-urlencoded; charset=UTF-8

X-Requested-With: XMLHttpRequest

Content-Length: 348

Origin: https://servicioscampus.unavarra.es

DNT: 1

Connection: keep-alive

Referer: https://servicioscampus.unavarra.es/resSalas/Web/reservation.php?rn=5fbf862dda391077636423

Cookie: PHPSESSID=dghehcrofqlrpp409v3ars4rrc; resource_filter2=%7B%22ScheduleId%22%3A%222%22%2C%22ResourceIds%22%3A%5B%229%22%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; schedule_calendar_toggle=false; language=en_gb; resource_filter9=%7B%22ScheduleId%22%3A%229%22%2C%22ResourceIds%22%3A%5B%229%22%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; resource_filter8=%7B%22ScheduleId%22%3A%228%22%2C%22ResourceIds%22%3A%5B%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; resource_filter7=%7B%22ScheduleId%22%3A%227%22%2C%22ResourceIds%22%3A%5B%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; resource_filter10=%7B%22ScheduleId%22%3A%2210%22%2C%22ResourceIds%22%3A%5B%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; resource_filter12=%7B%22ScheduleId%22%3A%2212%22%2C%22ResourceIds%22%3A%5B%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; UPNANODE=balancer.fagus1; tree2={"open_nodes":["1","2"],"selected_node":""}
---------------------------------------------------------------------------------------------

userId=6909&beginDate=2020-11-26&beginPeriod=12:00:00&endDate=2020-11-26&endPeriod=13:00:00&scheduleId=7&resourceId=60&reservationTitle=&reservationDescription=&reservationId=64381&referenceNumber=5fbf862dda391077636423&reservationAction=update&DELETE_REASON=&seriesUpdateScope=full&CSRF_TOKEN=ZmMwMjEzMzgxOGFkOTAwZmQwZDhkNzM5OGJmMDQ5MDQ=
"""

"""(Update)
POST: https://servicioscampus.unavarra.es/resSalas/Web/ajax/reservation_update.php
---------------------------------------------------------------------------------------------
Host: servicioscampus.unavarra.es

User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:83.0) Gecko/20100101 Firefox/83.0

Accept: */*

Accept-Language: en-GB,en;q=0.5

Accept-Encoding: gzip, deflate, br

X-Requested-With: XMLHttpRequest

Content-Type: multipart/form-data; boundary=---------------------------324595901814777109141057376799

Content-Length: 1962

Origin: https://servicioscampus.unavarra.es

DNT: 1

Connection: keep-alive

Referer: https://servicioscampus.unavarra.es/resSalas/Web/reservation.php?rn=5fbf862dda391077636423

Cookie: PHPSESSID=dghehcrofqlrpp409v3ars4rrc; resource_filter2=%7B%22ScheduleId%22%3A%222%22%2C%22ResourceIds%22%3A%5B%229%22%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; schedule_calendar_toggle=false; language=en_gb; resource_filter9=%7B%22ScheduleId%22%3A%229%22%2C%22ResourceIds%22%3A%5B%229%22%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; resource_filter8=%7B%22ScheduleId%22%3A%228%22%2C%22ResourceIds%22%3A%5B%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; resource_filter7=%7B%22ScheduleId%22%3A%227%22%2C%22ResourceIds%22%3A%5B%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; resource_filter10=%7B%22ScheduleId%22%3A%2210%22%2C%22ResourceIds%22%3A%5B%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; resource_filter12=%7B%22ScheduleId%22%3A%2212%22%2C%22ResourceIds%22%3A%5B%5D%2C%22ResourceTypeId%22%3Anull%2C%22MinCapacity%22%3Anull%2C%22ResourceAttributes%22%3A%5B%5D%2C%22ResourceTypeAttributes%22%3A%5B%5D%7D; UPNANODE=balancer.fagus1; tree2={"open_nodes":["1","2"],"selected_node":""}
------------------------------------------------------------------------------------------------

userId=6909&beginDate=2020-11-26&beginPeriod=12:00:00&endDate=2020-11-26&endPeriod=13:00:00&scheduleId=7&resourceId=60&reservationTitle=&reservationDescription=&reservationId=64381&referenceNumber=5fbf862dda391077636423&reservationAction=update&DELETE_REASON=&seriesUpdateScope=full&CSRF_TOKEN=ZmMwMjEzMzgxOGFkOTAwZmQwZDhkNzM5OGJmMDQ5MDQ=
"""