clear
echo "========================================================"
echo "Collection of tools in one Sound_fiEFX.sh., created by  "
echo " _____         _     _____ _______  __  _______     __"
echo "|_   _|__  ___| |__ | ____|  ___\ \/ / |_   _\ \   / /"
echo "  | |/ _ \/ __| '_ \|  _| | |_   \  /    | |  \ \ / / "
echo "  | |  __/ (__| | | | |___|  _|  /  \    | |   \ V /  "
echo "  |_|\___|\___|_| |_|_____|_|   /_/\_\   |_|    \_/   "
echo "Stay tuned for more Awesome tips and tricks and EFXaps  "
echo "Subscribe us "
echo "https://www.youtube.com/channel/UCIWHXkNEHsedIz62jUJwAew"
echo "========================================================"

function Update_and_Upgrade_Termux {
echo "Upgrading termux......................................."
apt update && apt upgrade
echo "==========================="
echo " "
echo " "
echo " "
echo " "
}

function Update_Others {
echo Updating......................................."
sudo apt-get install alsa-base pulseaudio
echo "==========================="
echo " "
echo " "
echo " "
echo " "
}

function Upgrade_Others {
echo Upgrading......................................."
sudo apt upgrade
echo "==========================="
echo " "
echo " "
echo " "
echo " "
}

function Install_PHP_Both {
e
cho "Installing PHP for you...................."
apt install php
echo "==========================="
echo " "
echo " "
echo " "
echo " "
}

function Clear_screen {
echo "Clear Screen"
clear
echo "========================================================"
echo "Collection of tools in one Sound_fiEFX.sh., created by  "
echo " _____         _     _____ _______  __  _______     __"
echo "|_   _|__  ___| |__ | ____|  ___\ \/ / |_   _\ \   / /"
echo "  | |/ _ \/ __| '_ \|  _| | |_   \  /    | |  \ \ / / "
echo "  | |  __/ (__| | | | |___|  _|  /  \    | |   \ V /  "
echo "  |_|\___|\___|_| |_|_____|_|   /_/\_\   |_|    \_/   "
echo "Stay tuned for more Awesome tips and tricks and EFXaps  "
echo "Subscribe us "
echo "https://www.youtube.com/channel/UCIWHXkNEHsedIz62jUJwAew"
echo "========================================================"
echo " "
}

function Install_Apache2_Termux {
echo "Installing Apache2............................"
apt install apache2
echo "==========================="
echo " "
echo " "
echo " "
echo " "
}

function Install_Apache2_Others {
echo "Installing Apache2............................"
echo "Please wait..............................."
echo "...........Ready to install..............."
echo "Installing the module....................."
apt install apache2
echo "==========================="
echo " "
echo " "
echo " "
echo " "
}

function Install_Nano_Both {
echo "Installing Nano html editor......................................."
apt install nano
echo "==========================="
}

function exit {
echo "EXIT"
}


all_done=0
while (( !all_done )); do
options=("Update and Upgrade Termux" "Update Others" "Upgrade Others" "Install PHP Both" "Install Apache2 Termux" "Clear Screen" "Install Apache2 Others" "Install Nano Both" "EXIT")
echo "==========================="
echo " "
echo "Please select the options according to your device. If you are using an Android-based Termux Linux Emulator select the Termux steps else select others. "
echo "==========================="
echo " "
select opt in "${options[@]}"; do
case $REPLY in
1) Update_and_Upgrade_Termux; break ;;
2) Update_Others; break ;;
3) Upgrade_Others; break ;;
4) Install_PHP_Both; break ;;
5) Install_Apache2_Termux; break ;;
6) Clear_screen; break ;;
7) Install_Apache2_Others; break ;;
8) Install_Nano_Both; break ;;
9) all_done=1; break ;;
*) echo "INVALID OPTION" ;;
esac
done
done

echo "Exiting PLEASE SUBSCRIVE EFX Tv :)"
sleep 2
