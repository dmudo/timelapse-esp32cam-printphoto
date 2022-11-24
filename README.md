# Time Lapse com ESP32 Camera + Sensores 
Usando a placa de desenvolvimento ESP32-CAM, a aplicação consiste em tirar uma foto em determinado período e enviar para o servidor.
## 

### ✔ Itens utilizados no projeto:
 - ESP32-CAM (ESP8266).
 - Mini Antena Pigtail.
 - Mini Protoboard PCB perfurada.

 ### ✔ Itens para montar o projeto:
 - Modulo conector FTDI (FT232RL 5V).
 - 5 Jumpers Femea.
 - Cabo USB.


###  ✔ Dados BD 

CREATE TABLE SensorData (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    sensor VARCHAR(30) NOT NULL,
    location VARCHAR(30) NOT NULL,
    value1 VARCHAR(10),
    value2 VARCHAR(10),
    value3 VARCHAR(10),
    reading_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
 
