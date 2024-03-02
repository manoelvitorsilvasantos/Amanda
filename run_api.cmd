@echo off
title "API - RUNNING"
echo "Running"
venv\Scripts\activate & cd api & uvicorn main:app --reload
pause