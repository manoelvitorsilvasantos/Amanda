#include <iostream>
#include <cstdlib>
#include <cstring>
#include <vector>

using namespace std;

int main(int argc, char* argv[]){
	cout << "Iniciando Amanda" << endl;
	system("python -m venv venv & venv\\Scripts\\activate & python -m pip install --upgrade pip & python -m pip install dlib-19.19.0-cp38-cp38-win_amd64.whl & python -m pip install -r requirements.txt");
	return 0;
}

