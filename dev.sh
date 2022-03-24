
docker-compose -f docker-compose.dev.yml up -d;

# wait till website up
response=$(curl -m 2 http://localhost)
while [ "$response" == "curl: (28) Failed to connect to localhost port 80: Timed out" ]
do
    sleep 0.5;
    response=$(curl -m 2 http://localhost)
done
# and then open on browser
start http://localhost; # website
start http://localhost:8080; # phpmyadmin

