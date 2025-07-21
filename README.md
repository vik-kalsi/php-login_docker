<h3>Accessing PHP Login Page</h3>



### Git clone this repo to your location
```
git clone https://github.com/vik-kalsi/docker_NexusTechneo.git
```


### Build Docker Image
```
docker build -t docker_nexustechneo .
```


### Run Docker Image in container
```
docker run -d -p 8080:80 docker_nexustechneo
```



### Access the static webpage
```
http://localhost:8080/
```