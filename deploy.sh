#/bin/bash

cd /home/ubuntu/filmlist

sudo docker-compose down

cd /home/ubuntu

rm -rf /home/ubuntu/filmlist

git clone https://github.com/KataFurius/filmlist.git

cd /home/ubuntu/filmlist

sudo docker-compose up -d