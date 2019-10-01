CREATE DATABASE tpRecettes;

CREATE USER 'adminRecette'@'%' identified BY 'r3ceTTes';
GRANT ALL PRIVILEGES ON tpRecettes.* TO 'adminRecette'@'%';