#include <DHT.h>
#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>

#define DHTPIN 5 //GPIO5 = D1
#define DHTTYPE DHT11
DHT sensor_dht (DHTPIN, DHTTYPE);

const char* ssid ="LAZONE WAK ABU";
const char* password = "pesandulu";

const char* server = "cek-iot.000webhostapp.com";
void setup() {
  Serial.begin(9600);
  sensor_dht.begin();

  WiFi.hostname("NodeMCU");
  WiFi.begin(ssid, password);
  while(WiFi.status() !=WL_CONNECTED)
  {
    Serial.print(".");
    delay(500);
   }

   Serial.println("Berhasil konek ke WiFi");
}

void loop() {
  float suhu = sensor_dht.readTemperature();
  int kelembapan = sensor_dht.readHumidity();
  Serial.println("Suhu : " + String(suhu));
  Serial.println("Kelembapan : " + String(kelembapan));
  Serial.println();

  //kirim ke database
  WiFiClient client;
  const int httpPort = 80;
  if(!client.connect(server, httpPort)){
    Serial.println("Gagal terkoneksi ke server");  
    return;
  }

  HTTPClient http;
  String Link = "http://" + String(server) + "/kirimdata.php?suhu=" + String(suhu)+ "&kelembapan=" + String(kelembapan);
  http.begin(Link);
  http.GET();
  String respon = http.getString();
  Serial.println(respon);
  
  delay(1000);
}
