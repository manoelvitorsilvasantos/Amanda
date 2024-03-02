@echo off
title "Amanda v1.0"
echo "Iniciando Amanda"
echo "Criando um ambiente virtual"
python -m venv venv
venv\Scripts\activate & python -m pip install --upgrade pip & python -m pip install dlib-19.19.0-cp38-cp38-win_amd64.whl & python -m pip install -r requirements.txt
pause
exit