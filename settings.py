import os

from dotenv import load_dotenv

load_dotenv()

EMAIL = os.getenv('EMAIL')
PASSWORD = os.getenv('PASSWORD')

PLACE = os.getenv('PLACE')
ZONE = os.getenv('ZONE')

REFERENCES = os.getenv('REFERENCES')