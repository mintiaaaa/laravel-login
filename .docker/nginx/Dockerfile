FROM nginx:1.24.0

ADD default.conf /etc/nginx/conf.d/default.conf
# ADD server.crt /etc/nginx/server.crt
# ADD server.key /etc/nginx/server.key

# RUN chmod 400 /etc/nginx/server.key

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
