import os

from dotenv import load_dotenv

load_dotenv()

EMAIL = os.getenv('EMAIL')
PASSWORD = os.getenv('PASSWORD')

SITIO = os.getenv('SITIO')
ZONA = os.getenv('ZONA')

STD_LOG = os.getenv('STD_LOG')
ERROR_LOG = os.getenv('ERROR_LOG')
REFERENCES_LOG = os.getenv('REFERENCES_LOG')