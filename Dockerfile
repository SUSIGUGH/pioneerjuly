FROM nginx
MAINTAINER susigugh@gmail.com
RUN mkdir /usr/share/nginx/html -p
ADD html /usr/share/nginx/html/

