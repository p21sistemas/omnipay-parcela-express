FROM php:7.4-cli
RUN apt update && apt -y install unzip
WORKDIR /usr/src/omnipay-parcela-express
CMD [ "php" ]