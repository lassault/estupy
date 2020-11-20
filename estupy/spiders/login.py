import scrapy
from scrapy.http.request.form import FormRequest
import os
from dotenv import load_dotenv

load_dotenv()

USERNAME = os.getenv("USERNAME")
PASSWORD = os.getenv("PASSWORD")


class LoginSpider(scrapy.Spider):
    name = "login"
    start_urls = ["https://servicioscampus.unavarra.es/resSalas/Web/index.php"]

    def parse(self, response):

        if "Sign Out" in str(response.body):
            print("Logged")
            return
        else:
            return [FormRequest.from_response(response,
                        formdata={'email': USERNAME, 'password': PASSWORD},
                        callback=self.after_login)]

    def after_login(self, response):
        # check login succeed before going on
        if "No se ha encontrado una correspondencia para tu Nombre de Usuario" in str(response.body):
            print("Failed!!!!")
            return
        else:
            #print(str(response.body))
            print("Success!!!")
            return
            #return Request(url="https://servicioscampus.unavarra.es/resSalas/Web/calendar.php", callback=self.calendar)
        # continue scraping with authenticated session...

    def calendar(self, response):

        print(str(response.body))

        if "Sign Out" in str(response.body):
            print("Real success!!!")
            return
        else:
            print("Fake success :(")
            return
