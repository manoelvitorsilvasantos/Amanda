
const int LED_RED = 9;
const int LED_GREEN = 8;
const int LED_BLUE = 7;
int dt = 0;

void setup()
{
  Serial.begin(9600);
  pinMode(LED_RED, OUTPUT);
  pinMode(LED_GREEN, OUTPUT);
  pinMode(LED_BLUE, OUTPUT);
  digitalWrite(LED_GREEN, LOW);
  digitalWrite(LED_RED, LOW);
  digitalWrite(LED_BLUE, LOW);
}

void loop()
{
  dt = Serial.parseInt();
  if(dt == 1){ //desliga o led vermelho e azul
  	digitalWrite(LED_GREEN, HIGH);
  	digitalWrite(LED_RED, LOW);
    digitalWrite(LED_BLUE, LOW);
    delay(1000);
  }
  else if(dt == 0){ //desliga o led verde e azul
  	digitalWrite(LED_GREEN,LOW);
  	digitalWrite(LED_RED, HIGH);
    digitalWrite(LED_BLUE, LOW);
  	delay(1000);
  }
  else{ //desliga o led verde e vermelho
    digitalWrite(LED_GREEN,LOW);
    digitalWrite(LED_RED, LOW);
    digitalWrite(LED_BLUE, HIGH);
    delay(1000);
  }
}