import logging
import os
from aiogram.types import message
from aiogram.types import user
import requests
import delegator
import analyzer

from dotenv import load_dotenv
from aiogram import Bot, Dispatcher, executor, types

load_dotenv()

API_TOKEN = os.getenv("BOT_TOKEN")
USER_ID = os.getenv("USER_ID")

# Configure logging
logging.basicConfig(level=logging.INFO)

# Initialize bot and dispatcher
bot = Bot(token=API_TOKEN)
dp = Dispatcher(bot)


@dp.message_handler(commands=['start', 'help'])
async def send_welcome(message: types.Message):
    '''
    This handler will be called when user sends `/start` or `/help` command
    '''
    await message.reply("Hi!\nI'm EchoBot! 🤖\nPowered by aiogram and made by @lassa97")


@dp.message_handler(commands=['drink'])
async def send_drink(message: types.Message):
    cocktail = requests.get("https://www.thecocktaildb.com/api/json/v1/1/random.php").json()
    drink = cocktail['drinks'][0]['strDrink']
    drink_photo = cocktail['drinks'][0]['strDrinkThumb']
    await message.reply_photo(drink_photo, caption=drink)

@dp.message_handler(commands=['reservar'])
async def reservar(message: types.Message):

    user_id = message.from_user.id

    if str(user_id) not in USER_ID:
        await message.answer_animation("https://media.giphy.com/media/xT5LMNO5vF6dBrxY3e/giphy.gif")
    else:
        reservar = "./estupy_forced"
        log = delegator.run(reservar).out

        #print(log)

        text = analyzer.analyze_log(log)

        await message.reply(text)

@dp.message_handler(commands=['log'])
async def github(message: types.Message):

    user_id = message.from_user.id
    if str(user_id) not in USER_ID:
        await message.answer_animation("https://media.giphy.com/media/QRB6F0x3ptYHu/giphy.gif")
    else:
        last_cron = "tac estupy.log | grep -F -m1 -B 1000 '===================================' | head -n 4 | tac"
        log = delegator.run(last_cron).out

        #print(log)

        text = analyzer.analyze_log(log)

        await message.reply(text)

@dp.message_handler()
async def echo(message: types.Message):
    # old style:
    # await bot.send_message(message.chat.id, message.text)

    await message.answer(message.text)

if __name__ == '__main__':
    executor.start_polling(dp, skip_updates=True)