#include <dht.h>
dht DHT;
const int pompa=7;
const int pompa2=8;
const int sensorSuhu=6;
const int kipas=9;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  pinMode(pompa,OUTPUT);
  pinMode(pompa2,OUTPUT);
  pinMode(kipas,OUTPUT);
}

void loop() {
  // put your main code here, to run repeatedly:
ReadSuhu();
ReadKelembabanTanah();
//KipasMenyala();

delay(1000);
}

void ReadSuhu(){
  //membaca sensor suhu
DHT.read11(sensorSuhu);
Serial.println("===============");
Serial.println("Kelembaban udara :");
Serial.print(DHT.humidity);
Serial.println("%");
Serial.println("SUHU :");
Serial.print(DHT.temperature);
Serial.println("*C");

//nyalain kipas otomatis
if (DHT.temperature >= 15){
  digitalWrite(kipas,HIGH);
  Serial.println("KIPAS MENYALA");
}
else if(DHT.temperature<=14){
  digitalWrite(kipas,LOW);
  Serial.println("Kipas Mati");
}
Serial.println("===============");
}

void ReadKelembabanTanah(){
int sensorValue= analogRead(A0);
Serial.println("Kelembaban Tanah : ");
Serial.println(sensorValue);
Serial.println("===============");
//seleksi indikator dan pompa
if(sensorValue>350){
  digitalWrite(pompa,HIGH);digitalWrite(pompa2,LOW);
  }
else if(sensorValue<300){
  digitalWrite(pompa2,HIGH);digitalWrite(pompa,LOW);
  }
}


//tidak otomatis
/*void KipasMenyala(){
//seleksi untuk kipas menyala
int nilai= Serial.parseInt();
if (nilai==1){
  digitalWrite(kipas,HIGH);
  Serial.println("KIPAS MENYALA");
}
Serial.println("===============");
}*/
