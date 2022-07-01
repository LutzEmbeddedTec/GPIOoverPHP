# GPIOoverPHP
How to control GPIO´s over PHP on a Raspberry


## Presetting Raspberry 

Add webser to GPIO permission group

```
sudo usermod -aG gpio www-data
```

restart apach server

```
sudo service apache2 restart
```
