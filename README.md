# GPIOoverPHP
How to control GPIO´s over PHP on a Raspberry

##install Webserver on Respberry PI


[![Use Raspberry Pi as Webserver](http://img.youtube.com/vi/2Hr6uK9968g/0.jpg)](http://www.youtube.com/watch?v=2Hr6uK9968g "Use Raspberry Pi as Webserver")



## Presetting Raspberry 

Add webser to GPIO permission group

```
sudo usermod -aG gpio www-data
```

restart apach server

```
sudo service apache2 restart
```
