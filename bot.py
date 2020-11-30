import logging
import os
from aiogram.dispatcher.filters.builtin import Command
from aiogram.types import user
import requests
import delegator
import analyzer

from dotenv import load_dotenv
from aiogram import Bot, Dispatcher, executor, types

from analyzer import analyze_log, analyze_log_ext

load_dotenv()

API_TOKEN = os.getenv("BOT_TOKEN")
USER_ID = os.getenv("USER_ID")

# Configure logging
logging.basicConfig(level=logging.INFO)

# Initialize bot and dispatcher
bot = Bot(token=API_TOKEN)
dp = Dispatcher(bot)


@dp.message_handler(commands=['start'])
async def send_welcome(message: types.Message):
    '''
    This handler will be called when user sends `/start` or `/help` command
    '''
    await message.answer("Hi! I'm estupy! 🤖\nA stupidly sexy bot made by @lassa97")


@dp.message_handler(commands=['help'])
async def send_help(message: types.Message):
    text = [
        "Ask me anything I can do:",
        "{command} - Start a conversation".format(command="/start"),
        "{command} - Give me alcohol".format(command="/drink"),
        "{command} - Show me the available commands".format(command="/help"),
        "{command} - Show me the last attempt".format(command="/log"),
        "{command} - Try to make a new reservation".format(command="/reservation"),
        ""
    ]
    await message.answer("\n".join(text))


@dp.message_handler(commands=['drink'])
async def send_drink(message: types.Message):
    cocktail = requests.get("https://www.thecocktaildb.com/api/json/v1/1/random.php").json()
    drink = cocktail['drinks'][0]['strDrink']
    drink_photo = cocktail['drinks'][0]['strDrinkThumb']
    await message.reply_photo(drink_photo, caption=drink)

@dp.message_handler(commands=['reservation'])
async def make_reservation(message: types.Message):

    user_id = message.from_user.id

    if str(user_id) not in USER_ID:
        await message.answer_animation("https://media.giphy.com/media/xT5LMNO5vF6dBrxY3e/giphy.gif")
    else:
        reservar = "./estupy_forced >> estupy.log"
        log = delegator.run(reservar)

        last_log = "tac estupy.log | grep -F -m1 -B 1000 '===================================' | head -n 4 | tac | awk 'NR==1,NR==$NR'"
        log = delegator.run(last_log).out

        command = "date --rfc-3339=s"
        timestamp = delegator.run(command).out

        date, time = analyzer.analyze_date(timestamp)

        date, start, end = analyzer.filter_date(date, time)

        text = analyzer.analyze_log_ext(log, date, start, end)

        #text = "{NAME} {SURNAME} {STATUS}".format(NAME=message.from_user.first_name, SURNAME=message.from_user.last_name, STATUS=analyzer.analyze_log_ext(log, date, start, end))

        await message.reply(text)

@dp.message_handler(commands=['log'])
async def send_log(message: types.Message):

    user_id = message.from_user.id
    if str(user_id) not in USER_ID:
        await message.answer_animation("https://media.giphy.com/media/QRB6F0x3ptYHu/giphy.gif")
    else:
        last_cron = "tac estupy.log | grep -F -m1 -B 1000 '===================================' | head -n 4 | tac | awk 'NR==1,NR==$NR'"
        log = delegator.run(last_cron).out
        
        try:
            text = analyze_log(log)
            #text = "{NAME} {SURNAME} {STATUS}".format(NAME=message.from_user.first_name, SURNAME=message.from_user.last_name, STATUS=analyze_log(log))
        except:
            text = "No has realizado ninguna reserva\nPuedes hacer una escribiendo /reservar"
            #status = "No has realizado ninguna reserva\nPuedes hacer una escribiendo /reservar"
            #text = "{NAME} {SURNAME} {STATUS}".format(NAME=message.from_user.first_name, SURNAME=message.from_user.last_name, STATUS=status)


        await message.reply(text)

@dp.message_handler()
async def send_echo(message: types.Message):
    # old style:
    # await bot.send_message(message.chat.id, message.text)

    await message.answer(message.text)

if __name__ == '__main__':
    executor.start_polling(dp, skip_updates=True)