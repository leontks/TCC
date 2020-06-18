#include <SPI.h>
#include <Ethernet.h>
String readString;
char c;
String acao;
int numLedInt = 0;
int porta_rele1 = 1;
int porta_rele2 = 2;
int porta_rele3 = 3;
int porta_rele4 = 4;
int porta_rele5 = 5;
int porta_rele6 = 6;
int porta_rele7 = 7;
int porta_rele8 = 8;
int porta_rele9 = 9;
int porta_rele10 = 10;
int porta_rele11 = 11;
int porta_rele12 = 12;
int porta_rele13 = 13;
int porta_rele14 = 14;
int porta_rele15 = 15;
int porta_rele16 = 16;
EthernetServer server(80);
void ligaDesliga(String acao, int rele){
  if(acao == "ligar"){
    digitalWrite(rele, HIGH);  
  }
  if(acao == "desligar"){
    digitalWrite(rele, LOW); 
  }  
}

void escolheRele(int led, String acao){

  switch(led){
    case 1:
       ligaDesliga(acao, porta_rele1);
       //break;
    case 2:
       ligaDesliga(acao, porta_rele2);
       break;
    case 3:
       ligaDesliga(acao, porta_rele3);
       break;
    case 4:
       ligaDesliga(acao, porta_rele4);
       break;
    case 5:
       ligaDesliga(acao, porta_rele5);
       break;
    case 6:
       ligaDesliga(acao, porta_rele6);
       break;
    case 7:
       ligaDesliga(acao, porta_rele7);
       break;
    case 8:
       ligaDesliga(acao, porta_rele8);
       break;
    case 9:
       ligaDesliga(acao, porta_rele9);
       break;
    case 10:
       ligaDesliga(acao, porta_rele10);
       break;
    case 11:
       ligaDesliga(acao, porta_rele11);
       break;
    case 12:
       ligaDesliga(acao, porta_rele12);
       break;
    case 13:
       ligaDesliga(acao, porta_rele13);
       break;                          
    case 14:
       ligaDesliga(acao, porta_rele14);
       break;
    case 15:
       ligaDesliga(acao, porta_rele15);
       break;                          
    case 16:
       ligaDesliga(acao, porta_rele16);
       break;             
  }
  
}

void setup() {
  Serial.begin(9600);
  Serial.println("INICIALIZACAO");
  
  byte mac[] = { 0xDE, 0xAD, 0xBE, 0xDA, 0xFE, 0xEE };
  byte ip[] = { 192, 168, 0, 116 };
  byte gateway[] = { 192, 168, 0, 1 };
  byte subnet[] = {255, 255, 255, 0};
  pinMode(porta_rele1, OUTPUT);
  pinMode(porta_rele2, OUTPUT);
  pinMode(porta_rele3, OUTPUT);
  pinMode(porta_rele4, OUTPUT);
  pinMode(porta_rele5, OUTPUT);
  pinMode(porta_rele6, OUTPUT);
  pinMode(porta_rele7, OUTPUT);
  pinMode(porta_rele8, OUTPUT);
  pinMode(porta_rele9, OUTPUT);
  pinMode(porta_rele10, OUTPUT);
  pinMode(porta_rele11, OUTPUT);
  pinMode(porta_rele12, OUTPUT);
  pinMode(porta_rele13, OUTPUT);
  pinMode(porta_rele14, OUTPUT);
  pinMode(porta_rele15, OUTPUT);
  pinMode(porta_rele16, OUTPUT);
  Ethernet.begin(mac, ip, gateway, subnet);
  server.begin();
  SPI.begin();
}

void loop(){
  EthernetClient client = server.available();
  if (client) {
    boolean currentLineIsBlank = true;
      while (client.connected()) {
      if (client.available()) {
      char c = client.read();
      if (readString.length() < 100) {
        readString += c;
      }
      if (c == '\n') {
        if(readString.indexOf("?") > 0){
          int acaoI = readString.indexOf("?a=") + 3;
          int acaoF = readString.indexOf("&numLed=");
          acao = readString.substring(acaoI,acaoF);
          Serial.print("ACAO: ");
          Serial.println(acao);
          int numLedI = readString.indexOf("&numLed=") + 8;
          int numLedF = readString.indexOf("FIM");
          String numLed = readString.substring(numLedI,numLedF);
          numLedInt = numLed.toInt();
          porta_rele1 = numLedInt;
          Serial.print("NÚMERO LED: ");
          Serial.println(numLedInt);
          escolheRele(numLedInt, acao);
        }
        client.println(F("HTTP/1.1 200 OK"));
        client.println("GET 192.168.0.116/Controle/teste.php?q=arduino HTTP/1.1 200 OK");
        client.println(F("Content-Type: text/html"));
        client.println();
        client.println(F("<HTML>"));
        client.println(F("<HEAD>"));
        client.println(F("</head>"));
        client.println(F("<body>"));
        client.println(F("<br><br><font face='arial' size='2'><strong>Ação: </strong>"));
        client.println(String(acao));
        client.println(F("<br><br><font face='arial' size='2'><strong>RELE LIGADO: </strong>"));
        client.println(String(numLedInt));
        client.println(F("</font><br><br>"));
        client.println(F("<font face='arial' size='2'><strong>Número relê: </strong>"));
        client.println(numLedInt);
        client.println(F("</font><br>"));
        client.println(F("</body>"));
        client.println(F("</html>"));
        client.flush();
        client.stop();
        readString="";
        }
      }
    }
  }
}
