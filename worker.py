import datetime
import delegator
import re

from analyzer import Analyzer

class Worker:

    @staticmethod
    def get_date_range(reference_mode):
        today = datetime.date.today()

        if reference_mode:
            try:
                time = datetime.time(
                hour=datetime.datetime.now().time().hour,
                minute=datetime.datetime.now().time().minute + 15,
                second=datetime.datetime.now().time().second
            )
            except:
                time = datetime.time(
                    hour=datetime.datetime.now().time().hour + 1,
                    minute=(datetime.datetime.now().time().minute + 15) % 60,
                    second=datetime.datetime.now().time().second
                )

            date, start, end = Analyzer.filter_date(today, time, days=0, minutes=15)

        else:

            time = datetime.time(
                hour=datetime.datetime.now().time().hour,
                minute=datetime.datetime.now().time().minute,
                second=datetime.datetime.now().time().second
            )

            date, start, end = Analyzer.filter_date(today, time, days=2, minutes=30)

        return date, start, end

    @staticmethod
    def get_references(estupy):
        command = 'cat {REFERENCES_LOG}'.format(REFERENCES_LOG=estupy.references_log)
        log_references = delegator.run(command).out.rsplit()

        today, start, end = Worker.get_date_range(True)

        references = Analyzer.analyze_references(log_references, today, start, end)

        return references

    @staticmethod
    def get_details(response, estupy):
        created = response.find('div', {'id': 'created-message'})
        try:
            log_file = estupy.std_log
            date = datetime.date.today()
            time = datetime.time(
                hour=datetime.datetime.now().time().hour,
                minute=datetime.datetime.now().time().minute,
                second=00
            )

            #print(created.text)
            reference = response.find('div', {'id': 'reference-number'})
            #print(reference.text)

            Worker.write_to_logs(log_file=estupy.std_log, date=date, time=time, text=created.text + '\n' + reference.text)

            reference_number = re.search(r'[a-f,0-9]{22}$', reference.text).group()

            Worker.write_to_logs(log_file=estupy.references_log, date=date, time=time, text=reference_number)

        except:
            failed = response.find('div', {'id': 'failed-message'})
            error = response.find('div', {'class': 'error'})

            #print(failed.text, error.text, sep='')

            log_file = estupy.error_log
            date = datetime.date.today()
            time = datetime.time(
                hour=datetime.datetime.now().time().hour,
                minute=datetime.datetime.now().time().minute,
                second=00
            )

            Worker.write_to_logs(log_file, date, time, text=failed.text + '\n' + error.text)


    @staticmethod
    def write_to_logs(log_file, date, time, text):
        command = 'echo "===================================" >> {LOG_FILE}'.format(LOG_FILE=log_file)
        delegator.run(command)
        
        command = 'echo {DATE} {TIME} >> {LOG_FILE}'.format(DATE=date, TIME=time, LOG_FILE=log_file)
        delegator.run(command)

        command = 'echo "{TEXT}" >> {LOG_FILE}'.format(TEXT=text, LOG_FILE=log_file)
        delegator.run(command)

        command = 'awk "NF" {LOG_FILE}'.format(LOG_FILE=log_file)
        text = delegator.run(command).out

        command = 'echo "{TEXT}" > {LOG_FILE}'.format(TEXT=text, LOG_FILE=log_file)
        delegator.run(command)
