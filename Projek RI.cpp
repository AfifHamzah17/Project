#include <iostream>  
#include <conio.h>  
#include <stdlib.h>  
#include <windows.h>  
#include <string.h>
#define n 10
using namespace std;
char password [20];
char username [20];
char pil;  
int jml;  

struct mahasiswa{
    string nama;
    int nim;
}Mhs[n];

struct queue{
    int awal, akhir;
}Queue;

void delay();  
  
struct node  
{  
   char kar;  
   node *next;  
};  
   node *tail;   
   node *now;  
   node *head;  
  
void clrscr()   
{   
system("cls");   
}  

void deQueue();
void menu();
void inQueue();
void tampil();

void init(){
    Queue.awal = -1;
    Queue.akhir = -1;
    cout << "Data berhasil di reset" << endl << endl;
    menu();
}

bool isFull(){
    if(Queue.akhir == n - 1){
        return true;
    } else {
        return false;
    }
}

bool isEmpty(){
    if(Queue.akhir == -1){
        return true;
    }else {
        return false;
    }
}

void inQueue(){
    if(!isFull()){
        string nama;
        int nim;
        cout << "Masukkan nama mahasiswa:";
        cin >> nama;
        cout << "Masukkan NIM mahasiswa:";
        cin >> nim;
        Mhs[Queue.akhir].nama = nama;
        Mhs[Queue.akhir].nim = nim;
        ++Queue.akhir;
        cout << endl;
        menu();
    }else {
        cout << "Data penuh";
        menu();
    }
}

void menu(){
    int pilih;
    cout << "1. masukkan data\n";
    cout << "2. Hapus satu data\n";
    cout << "3. Reset data\n";
    cout << "4. tampil data\n";
    cout << "Masukkan pilihan anda:";
    cin >> pilih;
    cout << endl;
    if(pilih == 1){
        inQueue();
    }else if(pilih == 2){
        deQueue();
    } else if(pilih == 3){
        init();
    }else if(pilih == 4){
        tampil();
    }else {
        menu();
    }
}

void deQueue(){
    if(!isEmpty()){
        for(int i = Queue.awal; i < Queue.akhir; i++){
            Mhs[i].nama = Mhs[i+1].nama;
            Mhs[i].nim = Mhs[i+1].nim;
        }Queue.akhir--;
        cout << "Data berhasil dihapus" << endl;
        cout << endl;
        menu();
    }else{
        cout << "antrian kosong" << endl;
    }
}

void tampil(){
    if(!isEmpty()){
        for(int i = 0; i < Queue.akhir; i++){
        cout << "Nama Mahasiswa: " << Mhs[i].nama << endl;
        cout << "NIM : " << Mhs[i].nim << endl; 
        cout << endl;
        }
    }else {
        cout << "data kosong";
        cout << endl << endl;
    }
    menu();
}
	
int main(){
	printf("\t\t\t\t Tugas Rutin Queuee \n");
	printf("Nama : Afif Hamzah\n");
	printf("Pertemuan : 10\n");
	printf("Tanggal : 21 April 2022\n");
  
 char ulang;
char y;
    buatnodebaru();  
  jml=0;  
  clrscr(); 
    
        do{	
            mulai();
            awal();
	cout<<"\t\t\tLOGIN"<<endl;
	cout<<"username\t";cin>>username;
	awal();
	cout<<"password\t";cin>>password;
cout<<endl<<endl;
	if((strcmp(username,"Afif")==0)&&(strcmp(password,"Hamzah")==0))
do{
    
  clrscr(); 
  {
    mulai();
    cout<<endl;
    gotoxy(1,8);cout<<"\t\t\t   selamat anda berhasil masuk\n";
    }
input();
  getch();  
  cout<<"untuk mengulang program ini tekan (k)"<
cout<<" jika tidak masukkan sembarang:";cin>>y;
cout<<endl<<endl;
}while(y=='k');
else 
  {
       cout<<"username atau password yang anda masukkan salah\n";
       cout<<"silahkan masukkan kembali\n";
       }
       
cout<<"tekan y:";cin>>ulang;
clrscr();
}while(ulang=='y');
 
       return 0;

}  

void delay()  
{  
 for(int y=1;y<100;y++)  
 for(int x=1;x<100;x++)  
 for(int p=1;p<100;p++)  
 cout<<"";  
}
