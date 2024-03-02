#include <iostream>
#include <cstdlib>
#include <cstring>
#include <vector>

using namespace std;

int main(int argc, char* argv[]){
	system("start run.exe");
	system("venv\\Scripts\\activate & cd api & uvicorn main:app --reload");
	return 0;
}

