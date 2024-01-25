echo 'making a photo...'
libcamera-jpeg -e $1 -o $2.$1
echo 'photo is made!'
echo $2.$1
echo 'send photo via php'
php /home/oleg/Desktop/thesis_raspberry_pi/sendPhoto.php $2.$1 $2
rm $2.$1
echo 'photo is removed!'
echo 'done!'
