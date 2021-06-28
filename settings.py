import os

from dotenv import load_dotenv

load_dotenv()

EMAIL = os.getenv('EMAIL')
PASSWORD = os.getenv('PASSWORD')

PLACE = os.getenv('PLACE')
ZONE = os.getenv('ZONE')

PATH = os.getcwd()
REFERENCES = '{PATH}/{FILE}'.format(PATH=PATH, FILE=os.getenv('REFERENCES'))
LOG_FILE = '{PATH}/{FILE}'.format(PATH=PATH, FILE=os.getenv('LOG_FILE'))