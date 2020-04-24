  
 _____                  ____  _   _ ___ ____  _       _____ _______  __
| ____|__ _ ___ _   _  |  _ \| | | |_ _/ ___|| |__   | ____|  ___\ \/ /
|  _| / _` / __| | | | | |_) | |_| || |\___ \| '_ \  |  _| | |_   \  /
| |__| (_| \__ \ |_| | |  __/|  _  || | ___) | | | | | |___|  _|  /  \
|_____\__,_|___/\__, | |_|   |_| |_|___|____/|_| |_| |_____|_|   /_/\_\
best and easy fishing tool for beginners
By:
 _____ _______  __  _____
| ____|  ___\ \/ / |_   _|_   __
|  _| | |_   \  /    | | \ \ / /
| |___|  _|  /  \    | |  \ V /
|_____|_|   /_/\_\   |_|   \_/
EasyPhish EFX EasyPhish_EFX is an alternative to BlackEye, Social Phish, and more git-based
phishing applications. No link error fixed with 2 simple commands to use the application over the internet.

#Please subscribe us and share this tool with others.

Hello, thanks for showing your interest in this video. I hope you find this easy and helpful. I've used some of the applications to make this bash file. Coding work has been done by EFX TV. We have taken files from multiple resources like BlackEye, Social Phish, and more Github Repositories, I don't own them. Most of them don't have a working Facebook and Gmail website. We have fixed them to look like realistic pages. EasyPhish_EFX is an alternative to BlackEye, Social Phish, and more git-based phishing applications. 

We work hard to make this tutorial up. Your likes motivate us to make more amazing and easy Linux and Termux related tutorials.

Welcome back once again to EFX Tv.

We've used many of the applications like BlackEye, Social Phish, and more Github Repositories, and found that most of the beginners are facing issues with these applications at the time of the link generation. So I decided to make it simple and clear for beginners and advanced users as well.

Believe me, you will learn something which will be advanced and easy to use.

Declaration:-

This is to declare that, whatever you are going to learn today is for educational purposes we will not be responsible if you misuse the given information on this channel. We do not support hacking and tracking things. This tutorial is only for self-awareness. Education freedom and knowledge is our priority.

In this video, you are going to use multiple realistic phishing sites not on the LAN over the LAN as well. Similarly, we do on this channel. I'm going to provide you a source file and simple one-line command. Just download the EasyPhish_EFX from Github, created by EFX tv.

There is no rocket science behind this. Let us start our day.

(NOTE: IF YOU DONT WANT TO TYPE COMMANDS YOU CAN DOWNLOAD EasyPhish_EFX and follow along.

What are the things you require?

01. PHP Should be installed in your Termux or system

apt install php

02. Apache2 Should be there in your Linux or Termux (use sudo if you are on a desktop or laptop-based terminal). Termux users

apt install apache2

03. Update your System, do not use sudo if you are working with Termux.

sudo apt update

sudo apt upgrade

04. Install Nano Html editor

apt install nano 

These are the same commands I've used in the bash file you are going to download, to begin with, the main steps.

05. Install Ngrok in your system folder.

Steps to download the Ngrok are written below, you can watch the video to get a better understanding of Ngrok.

1. Go to Ngrok.com

2. If you have an account go for login or create an account.

3. After logging in, click on download for Linux Ngrok-stable-linux-amd64.zip

4. Now unzip the file unzip filename_downloaded.zip

5. After that run command ./ngrok auth token <your auth token>

Ngrok has been set up properly. If you face any kind of issue do comment in the comment box. 

You are ready to go.

Download the EasyPhish_EFX from the git hub.

You will be able to see some files 

WEB_PAGES

EasyPhish_EFX

README.txt

If you have read the Readme.txt and followed the command and instructions there is no need to run EasyPhish_EFX.sh Directly go to the WEB_PAGES.

All the 33 folders contain 33 web pages ready to use.

Get into any folder inside WEB_PAGES right click and open the new terminal and run the command below. (go to the folder in Termux and run the command) 

php -S localhost:3468

Now go to any web browser on the same device and open this link http://localhost:3468 you will see the hosted website means everything is fine. This trick works in the local area network. What to do if we want to make it over the network? Go to the folder where you have installed the Ngrok right click and type a command.

./ngrok http 1354

All okay. Once the server gets online you will get a link. Copy the link followed by .io and share it with your friends. It is working 100%.

Now if you need to change the hosted site, from yahoo to something else.

Simply go to the terminal where you have started the PHP server and press Ctrl+c it will stop the server, now close that terminal (For Termux users us cd .. to go one step back and choose another folder to host in PHP server). If you have any kind of problem please watch the video once. Still, you face any kind of problem let me know. Now go another website write folder inside WEB_PAGES, right-click, and open a new terminal in the folder. Run the same command php -S localhost:3468 Refresh the link you will see the updated website. 

Youtube https://bit.ly/2VMGOc1

My blogger link https://bit.ly/3auRbX4

Download EasyPhish_EFX.git https://bit.ly/3auRbX4


We work had to make this tutorial. Your likes motivate us to make more amazing and easy Linux and Termux related tutorials.


This was it for the day. Thank you for visiting EFX TV. Stay home Stay Safe.
