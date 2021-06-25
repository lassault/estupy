import os

from dotenv import load_dotenv

load_dotenv()

EMAIL = os.getenv('EMAIL')
PASSWORD = os.getenv('PASSWORD')

PLACE = os.getenv('PLACE')
ZONE = os.getenv('ZONE')

STD_LOG = os.getenv('STD_LOG')
ERROR_LOG = os.getenv('ERROR_LOG')
REFERENCES_LOG = os.getenv('REFERENCES_LOG')
