#include<WiFi.h>
#include<HTTPClient.h>
#include<ArduinoJson.h>
#include<NTPClient.h>
#include<WiFiUdp.h>
 
const char* ssid = "TIC_fiber-ram-lavan";
const char* password =  "krizz.ch*9541";
int l1 = 16;
int l2 = 17;
int l3 = 18;
int l4 = 19;
int f1 = 25;
int f2 = 26;

// Define NTP Client to get time
WiFiUDP ntpUDP;
NTPClient timeClient(ntpUDP, "pool.ntp.org");

String sL1 = "";
String sL2 = "";
String sL3 = "";
String sL4 = "";
String sF1 = "";
String sF2 = "";

void uploadTime(int i, String s, String e){
    HTTPClient http;
    http.begin("http://192.168.0.106/dp/iot_dashboard/controllers/Ulights.php");
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");
    String httpRequestData = "id=" + String(i) + "&sTime=" + s + "&eTime=" + e + "";
    int httpResponseCode = http.POST(httpRequestData);
    if (httpResponseCode>0) {
      Serial.print("httpRequestData: ");
      Serial.println(httpRequestData);
      
    }
    else {
      Serial.print("httpRequestData: ");
      Serial.println(httpRequestData);
      
    }

    http.end(); //Free the resources
    
}

String getTimeNtp(){
  timeClient.update();
  unsigned long epochTime = timeClient.getEpochTime();
  return String(epochTime);
  }
 
void setup() {
 
  Serial.begin(115200);
  delay(1000);
  pinMode(l1, OUTPUT);
  pinMode(l2, OUTPUT);
  pinMode(l3, OUTPUT);
  pinMode(l4, OUTPUT);
  pinMode(f1, OUTPUT);
  pinMode(f2, OUTPUT);
  WiFi.begin(ssid, password);
 
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi..");
  }
 
  Serial.println("Connected to the WiFi network");
  // Initialize a NTPClient to get time
  timeClient.begin();
  timeClient.setTimeOffset(19800);
}

void ledControl(int idL, String stat){
  if (stat == "on" && !digitalRead(idL)){
    switch(idL){
      case 16: sL1 = getTimeNtp();break;
      case 17: sL2 = getTimeNtp();break;
      case 18: sL3 = getTimeNtp();break;
      case 19: sL4 = getTimeNtp();break;
      case 25: sF1 = getTimeNtp();break;
      case 26: sF2 = getTimeNtp();break;
      }
     
     Serial.print("status");
     Serial.println(idL);
     digitalWrite(idL, HIGH);
    }
  else if(stat == "off" && digitalRead(idL)) {
    switch(idL){
      case 16: uploadTime(idL, sL1, getTimeNtp());break;
      case 17: uploadTime(idL, sL2, getTimeNtp());break;
      case 18: uploadTime(idL, sL3, getTimeNtp());break;
      case 19: uploadTime(idL, sL4, getTimeNtp());break;
      case 25: uploadTime(idL, sF1, getTimeNtp());break;
      case 26: uploadTime(idL, sF2, getTimeNtp());break;
      }
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
      String led3 = doc[2]["status"];
      String led4 = doc[3]["status"];
      String fan1 = doc[4]["status"];
      String fan2 = doc[5]["status"];
   
        ledControl(l1, led1);
        ledControl(l2, led2);
        ledControl(l3, led3);
        ledControl(l4, led4);
        ledControl(f1, fan1);
        ledControl(f2, fan2);
      }
 
    else {
      Serial.println("Error on HTTP request");
      Serial.println(httpCode);
    }
 
    http.end(); //Free the resources
    
  }
 
  delay(1000);
 
}
