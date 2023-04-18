#include <WiFi.h>

const char* ssid = "bssm_free";
const char* password = "bssm_free";

const char* host = "10.150.150.194";
const int port = 80;

WiFiClient client;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(115200);
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi...");
  }
  Serial.println("Connected to WiFi");
  //인터넷 공유기 연결 완료
  //1.서버와 tcp연결
  if(!client.connect(host, port)){
    Serial.println("connection failed");
    return;
  }
  //2.서버에 request를 전송
  int num = 100;
  String url = "/hello.php?num=" + String(num);
  client.print(String("GET ") + url +" HTTP/1.1\r\n" +
              "Host: " + host + "\r\n" +
              "Connection: close\r\n\r\n");
  //3.서버가 보낸 response를 수신
  unsigned long t = millis();//생존시간
  while(1){
    if(client.available()) break;
    if(millis() - t > 10000) break;
  }
  //서버가 보낸 데이터가 버퍼에서 없어질 떄까지~
  while(client.available()){
    Serial.write(client.read());
  }
  //4.연결을 해제한다
  Serial.println("연결이 해제되었습니다!");
  delay(500);
}

void loop() {
  // put your main code here, to run repeatedly:

}
