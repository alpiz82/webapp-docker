# webapp-docker
Simple WebApp
Docker Compose:

Define app's environment with a Dockerfile so it can be reproduced anywhere.

Define the services that make up an app in docker-compose.yml so they can be run together in an isolated environment.

Run docker-compose up and Compose will start and run the entire app.


How do we create a Docker compose with two containers ?

First we create a directory with the name of our project, I called webapp-docker, we go inside our project folder and create 2 more folders, 
observatory and website. Also create a docker-compose.yml file were we deffine the environment.

Go inside Observatory folder and create api.py, dockerfile and requirements.txt.

Install docker-compose in our server or PC https://docs.docker.com/compose/install/. and follow the steps
$ sudo curl -L "https://github.com/docker/compose/releases/download/1.11.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
make it executable : $ sudo chmod +x /usr/local/bin/docker-compose
We check our docker-compose version: $ docker-compose -v

Go to observatory folder and edit api.py, I found one about galaxies.. I try to add cat-facts API but i wasn't succed, 
I couldn,t figure it out the way to retrieve data from cat facts API ( Im not good with flask yet I chose it because Im learning and is a light weight framework ) 
I lock for another way, the only another one that came to me was sidecar container, but is more complex and I found out that my main issue is to add an 
API to a container and retrieve the data.

I edit the Dockerfile and ad the python library also COPY . /usr/src/app and CMD ["python". "api.py"], also edit the requirements.txt and add flas==0.12 and flask-restfull==0.3.5

Edit docker-compose.yml ... Ans then test it .. docker-compose up and check that is running two containers and test the webapp on localhost:5001

Go to website folder and write a php file index.php, to show the results of the API ( Didn't work because I couldn't retrieve data from the API.

When we have all ready on webapp-docker folder type docker-compose up or we can runnit in a detached mode with docker-compose up -d 

Two containers start Flask_observatory-service_1 and flask_website_1.

We check that the containers are running with docker ps.

Now we can acces to localhost:5000 and check that is running. 

I try several ways to have cat-fact API working in api.py but I was unable to make it, I found another code with a different API and the 
container didn't work, gave me an error "webappdocker_observatory-service with code 1 .

I'm running my own home test-ubuntu server, installing updating and implementing differents task. 

