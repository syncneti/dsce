cd sites/default/
if [ ! -f "services.yml" ]; then
    sudo cp default.services.yml services.yml    
fi
if [ ! -f "settings.php" ]; then
    sudo cp default.settings.php settings.php    
fi
if [ ! -d "files" ]; then
    sudo mkdir files    
fi
sudo chmod 777 settings.php services.yml 
sudo chmod 777 files
