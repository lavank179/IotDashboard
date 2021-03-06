#include <WiFi.h>
#include <HTTPClient.h>
#include <ArduinoJson.h>
 
const char* ssid = "TIC_fiber-ram-lavan";
const char* password =  "krizz.ch*9541";
int l1 = 18;
int l2 = 19;
 
void setup() {
 
  Serial.begin(115200);
  delay(1000);
  pinMode(l1, OUTPUT);
  pinMode(l2, OUTPUT);
  WiFi.begin(ssid, password);
 
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi..");
  }
 
  Serial.println("Connected to the WiFi network");
 
}

void ledControl(int idL, String stat){
  if (stat == "on"){
     Serial.print("status");
     Serial.println(idL);
     digitalWrite(idL, HIGH);
    }
  else{
    Serial.print("status");
    Serial.println(idL);
    digitalWrite(idL, LOW);
    }
  
}
 
void loop() {
 
  if ((WiFi.status() == WL_CONNECTED)) { //Check the current connection status
 
    HTTPClient http;
 
    http.begin("http://192.168.0.106/dp/iot_dashboard/data.json"); //Specify the URL
    int httpCode = http.GET();                                        //Make the request
 
    if (httpCode > 0) { //Check for the returning code
      String payload = http.getString();
      Serial.println(httpCode);
      Serial.println(payload);
      char json[500];
      payload.toCharArray(json, 500);
      StaticJsonDocument<1024> doc;
      deserializeJson(doc, json);
      String led1 = doc[0]["status"];
      String led2 = doc[1]["status"];
   
        ledControl(l1, led1);
        ledControl(l2, led2);
      }
 
    else {
      Serial.println("Error on HTTP request");
      Serial.println(httpCode);
    }
 
    http.end(); //Free the resources
  }
 
  delay(1000);
 
}
